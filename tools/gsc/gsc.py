"""
Search Console de cemavvic.cat des de la línia de comandes.

Connecta amb l'API de Google Search Console amb una compte de servei (permís
"Complet" a la propietat sc-domain:cemavvic.cat). Totes les comandes són de
lectura excepte sitemap-submit i sitemap-delete, les úniques que demanen el
permís d'escriptura. Demanar la indexació d'una URL no es pot fer per API:
només des de la interfície de GSC.

    python tools/gsc/gsc.py sites                     propietats accessibles
    python tools/gsc/gsc.py sitemaps                  sitemaps enviats i el seu estat
    python tools/gsc/gsc.py query --days 90 --dims query --rows 30
    python tools/gsc/gsc.py query --dims page --filter query:contains:dentista
    python tools/gsc/gsc.py inspect                   estat d'indexació de les URLs del sitemap
    python tools/gsc/gsc.py inspect https://www.cemavvic.cat/odontologia
    python tools/gsc/gsc.py export                    tot el rendiment a CSV, fora del repo
    python tools/gsc/gsc.py sitemap-submit https://www.cemavvic.cat/sitemap.xml
    python tools/gsc/gsc.py sitemap-delete https://cemavvic.cat/sitemap.xml

Clau: la variable d'entorn CEMAV_GSC_KEY, o si no hi és, el primer
../.secrets/cemav-gsc-*.json al costat del repositori. La clau no ha d'entrar
mai al repo, i les exportacions tampoc: el repositori és públic.

Dependències: pip install --user google-auth requests
"""

import argparse
import csv
import datetime as dt
import glob
import os
import re
import sys
import urllib.parse

try:
    from google.auth.transport.requests import AuthorizedSession
    from google.oauth2 import service_account
except ImportError:
    sys.exit("Falta google-auth: pip install --user google-auth requests")

REPO = os.path.abspath(os.path.join(os.path.dirname(__file__), "..", ".."))
SITE = "sc-domain:cemavvic.cat"
SCOPES = ["https://www.googleapis.com/auth/webmasters.readonly"]
SCOPES_WRITE = ["https://www.googleapis.com/auth/webmasters"]
API = "https://www.googleapis.com/webmasters/v3"
DATA_DIR = os.path.join(os.path.dirname(REPO), "cemav-gsc-data")
DIMENSIONS = ("query", "page", "date", "device", "country", "searchAppearance")


def session(write=False):
    key = os.environ.get("CEMAV_GSC_KEY")
    if not key:
        found = sorted(glob.glob(os.path.join(os.path.dirname(REPO), ".secrets", "cemav-gsc-*.json")))
        key = found[0] if found else None
    if not key or not os.path.isfile(key):
        sys.exit("No trobo la clau. Defineix CEMAV_GSC_KEY o posa-la a ../.secrets/cemav-gsc-*.json")
    creds = service_account.Credentials.from_service_account_file(key, scopes=SCOPES_WRITE if write else SCOPES)
    return AuthorizedSession(creds)


def check(r):
    if r.status_code != 200:
        sys.exit(f"Error {r.status_code}: {r.text[:500]}")
    return r.json()


def site_path(site):
    return urllib.parse.quote(site, safe="")


def date_range(args):
    # Les dades de GSC arriben amb 2-3 dies de retard: per defecte s'acaba fa 3 dies.
    end = dt.date.fromisoformat(args.end) if args.end else dt.date.today() - dt.timedelta(days=3)
    start = dt.date.fromisoformat(args.start) if args.start else end - dt.timedelta(days=args.days - 1)
    return start, end


def parse_filter(text):
    """dim:operador:expressió, p. ex. query:contains:dentista o page:equals:https://..."""
    m = re.match(r"^(\w+):(contains|equals|notContains|notEquals|includingRegex|excludingRegex):(.+)$", text)
    if not m:
        sys.exit(f"Filtre no vàlid: {text}  (format dim:operador:expressió)")
    return {"dimension": m.group(1), "operator": m.group(2), "expression": m.group(3)}


def search_analytics(s, site, start, end, dims, filters=(), rows=None, search_type="web", fresh=False):
    """Totes les files, paginant de 25.000 en 25.000 si cal."""
    url = f"{API}/sites/{site_path(site)}/searchAnalytics/query"
    out, start_row = [], 0
    while True:
        limit = min(25000, rows - len(out)) if rows else 25000
        body = {
            "startDate": str(start), "endDate": str(end), "dimensions": list(dims),
            "type": search_type, "rowLimit": limit, "startRow": start_row,
            "dataState": "all" if fresh else "final",
        }
        if filters:
            body["dimensionFilterGroups"] = [{"groupType": "and", "filters": list(filters)}]
        chunk = check(s.post(url, json=body)).get("rows", [])
        out.extend(chunk)
        start_row += len(chunk)
        if len(chunk) < limit or (rows and len(out) >= rows):
            return out


def flatten(rows, dims):
    for r in rows:
        rec = dict(zip(dims, r.get("keys", [])))
        rec.update(clicks=int(r["clicks"]), impressions=int(r["impressions"]),
                   ctr=round(r["ctr"] * 100, 2), position=round(r["position"], 1))
        yield rec


def print_table(recs, dims):
    cols = list(dims) + ["clicks", "impressions", "ctr", "position"]
    head = {"clicks": "clics", "impressions": "impr.", "ctr": "CTR %", "position": "posició"}
    widths = {c: min(70, max([len(head.get(c, c))] + [len(str(r[c])) for r in recs])) for c in cols}
    print("  ".join(head.get(c, c).ljust(widths[c]) if c in dims else head[c].rjust(widths[c]) for c in cols))
    for r in recs:
        print("  ".join(str(r[c])[:70].ljust(widths[c]) if c in dims else str(r[c]).rjust(widths[c]) for c in cols))


def write_csv(path, recs, dims):
    os.makedirs(os.path.dirname(os.path.abspath(path)), exist_ok=True)
    with open(path, "w", newline="", encoding="utf-8-sig") as f:
        w = csv.DictWriter(f, fieldnames=list(dims) + ["clicks", "impressions", "ctr", "position"])
        w.writeheader()
        w.writerows(recs)


def cmd_sites(s, args):
    for e in check(s.get(f"{API}/sites")).get("siteEntry", []):
        print(f"{e['siteUrl']}  ({e['permissionLevel']})")


def cmd_sitemaps(s, args):
    for sm in check(s.get(f"{API}/sites/{site_path(args.site)}/sitemaps")).get("sitemap", []):
        cont = ", ".join(f"{c['type']}: {c.get('submitted')} enviades" for c in sm.get("contents", []))
        print(f"{sm['path']}\n  enviat {sm.get('lastSubmitted', '-')[:10]}  ·  llegit {sm.get('lastDownloaded', '-')[:10]}"
              f"  ·  errors {sm.get('errors')}  ·  avisos {sm.get('warnings')}  ·  {cont}")


def cmd_query(s, args):
    dims = [d.strip() for d in args.dims.split(",") if d.strip()]
    bad = [d for d in dims if d not in DIMENSIONS]
    if bad:
        sys.exit(f"Dimensions no vàlides: {bad}. Possibles: {', '.join(DIMENSIONS)}")
    start, end = date_range(args)
    filters = [parse_filter(f) for f in args.filter]
    rows = search_analytics(s, args.site, start, end, dims, filters, args.rows, args.type, args.fresh)
    recs = list(flatten(rows, dims))
    if args.sort:
        recs.sort(key=lambda r: r[args.sort], reverse=args.sort != "position")
    print(f"# {args.site}  {start} → {end}  ·  {len(recs)} files", file=sys.stderr)
    if args.csv:
        write_csv(args.csv, recs, dims)
        print(f"# desat a {args.csv}", file=sys.stderr)
    else:
        print_table(recs, dims)


def sitemap_urls():
    with open(os.path.join(REPO, "web", "sitemap.xml"), encoding="utf-8") as f:
        return re.findall(r"<loc>\s*([^<\s]+)\s*</loc>", f.read())


def cmd_inspect(s, args):
    urls = args.urls or sitemap_urls()
    keys = ["coverageState", "lastCrawlTime", "googleCanonical", "pageFetchState"]
    for u in urls:
        r = s.post("https://searchconsole.googleapis.com/v1/urlInspection/index:inspect",
                   json={"inspectionUrl": u, "siteUrl": args.site, "languageCode": "es"})
        if r.status_code != 200:
            print(f"{u}\n  error {r.status_code}: {r.text[:200]}")
            continue
        ir = r.json()["inspectionResult"].get("indexStatusResult", {})
        canon = ir.get("googleCanonical")
        aviso = "" if not canon or canon.rstrip("/") == u.rstrip("/") else "   ⚠ Google tria un altre canonical"
        print(f"{u}\n  {ir.get('verdict', '?'):7s} {ir.get('coverageState', '-')}  ·  "
              f"rastrejada {str(ir.get('lastCrawlTime', '-'))[:10]}  ·  canonical Google: {canon or '-'}{aviso}")


def cmd_sitemap_submit(s, args):
    r = s.put(f"{API}/sites/{site_path(args.site)}/sitemaps/{site_path(args.url)}")
    if r.status_code not in (200, 204):
        sys.exit(f"Error {r.status_code}: {r.text[:300]}")
    print(f"Enviat: {args.url}")


def cmd_sitemap_delete(s, args):
    r = s.delete(f"{API}/sites/{site_path(args.site)}/sitemaps/{site_path(args.url)}")
    if r.status_code not in (200, 204):
        sys.exit(f"Error {r.status_code}: {r.text[:300]}")
    print(f"Esborrat de GSC (el fitxer del web no es toca): {args.url}")


def cmd_export(s, args):
    start, end = date_range(args)
    out = args.out or os.path.join(DATA_DIR, str(dt.date.today()))
    sets = {"consultes": ["query"], "pagines": ["page"], "consulta_pagina": ["query", "page"],
            "dies": ["date"], "dispositius": ["device"], "paisos": ["country"],
            "pagina_dia": ["page", "date"], "consulta_dispositiu": ["query", "device"]}
    for name, dims in sets.items():
        recs = list(flatten(search_analytics(s, args.site, start, end, dims, fresh=args.fresh), dims))
        write_csv(os.path.join(out, f"{name}.csv"), recs, dims)
        print(f"{name:22s} {len(recs):6d} files")
    print(f"# {start} → {end}, desat a {out}")


def main():
    p = argparse.ArgumentParser(description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter)
    p.add_argument("--site", default=SITE)
    sub = p.add_subparsers(dest="cmd", required=True)
    sub.add_parser("sites")
    sub.add_parser("sitemaps")

    def add_dates(sp, days):
        sp.add_argument("--days", type=int, default=days, help=f"dies enrere (per defecte {days})")
        sp.add_argument("--start", help="AAAA-MM-DD")
        sp.add_argument("--end", help="AAAA-MM-DD (per defecte, fa 3 dies)")
        sp.add_argument("--fresh", action="store_true", help="inclou els últims dies, encara provisionals")

    q = sub.add_parser("query")
    add_dates(q, 28)
    q.add_argument("--dims", default="query", help="separades per comes: " + ", ".join(DIMENSIONS))
    q.add_argument("--filter", action="append", default=[], help="dim:operador:expressió (repetible)")
    q.add_argument("--rows", type=int, default=50)
    q.add_argument("--sort", choices=["clicks", "impressions", "ctr", "position"])
    q.add_argument("--type", default="web", choices=["web", "image", "video", "news", "discover", "googleNews"])
    q.add_argument("--csv", help="desa a CSV en lloc d'imprimir")

    i = sub.add_parser("inspect")
    i.add_argument("urls", nargs="*", help="per defecte, totes les URLs de web/sitemap.xml")

    e = sub.add_parser("export")
    add_dates(e, 480)
    e.add_argument("--out", help=f"carpeta (per defecte {DATA_DIR}/<avui>)")

    for name in ("sitemap-submit", "sitemap-delete"):
        sub.add_parser(name).add_argument("url", help="URL completa del sitemap")

    args = p.parse_args()
    s = session(write=args.cmd.startswith("sitemap-"))
    {"sites": cmd_sites, "sitemaps": cmd_sitemaps, "query": cmd_query,
     "inspect": cmd_inspect, "export": cmd_export,
     "sitemap-submit": cmd_sitemap_submit, "sitemap-delete": cmd_sitemap_delete}[args.cmd](s, args)


if __name__ == "__main__":
    main()
