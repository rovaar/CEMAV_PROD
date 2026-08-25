# Pendent

Estat de la branca `dev`. Revisar abans de mergear a `main` (= producció).

Última revisió: 24/08/2026

Auditoria SEO completa del web: [seo-auditoria.md](seo-auditoria.md).
Els punts d'aquest fitxer que hi surten porten l'identificador entre parèntesis.

---

## Estat del desplegament

Res del que hi ha aquí és a producció encara. La web pública continua a
`origin/main` = `b94596f`.

- `dev` porta el redisseny complet + les pàgines legals + les correccions d'aquesta
  revisió.
- `main` local va **5 commits per davant** de `origin/main`, sense fer push.
- El deploy només s'activa amb **push a `main`**. Fer commits a `dev`, o fins i tot
  push de `dev`, no desplega res.

Quan toqui publicar: mergear `dev` → `main`, push, i seguir
[docs/deploy-cdmon.md](deploy-cdmon.md).

---

## Resolt en aquesta revisió

- **`/osteopatia`** — la ruta retornava una vista que no ha existit mai (l'error surt
  a `storage/logs/laravel.log` des del 2021). Eliminada la ruta, la targeta de la
  graella, les llistes del breadcrumb i l'entrada del sitemap.
- **Pàgines legals** — avís legal, política de privacitat i termes d'ús ja són al
  repositori, amb rutes i enllaços al footer. Els quatre documents legals comparteixen
  ara `web/css/legal.css` en comptes de duplicar un `<style>` inline cadascun.
- **Sitemap** — hi faltava `/especialitats` i hi sobrava `/politicadecookies`, que és
  `noindex`. Després de despublicar digestologia i ortodòncia queda amb 21 URLs,
  exactament les rutes indexables.
- **Pàgina de proves** — `/proves` era pública, sense `noindex` i sense cap enllaç que
  hi apuntés. Eliminada amb la seva vista i `web/css/proves.css`, que no feia servir
  ningú.
- **Fitxers morts** — fora `welcome.blade.php` (i el bloc comentat que la referenciava),
  `web/img/Osteopatia.webp`, `errors.log`, `php_errors.log` (ara al `.gitignore`),
  `index.blade copy.php` i els directoris buits `backup_db/` i `tmp/`.
- **Formulari de contacte** — descartat. El `mailto:` de la pàgina de contacte ja
  compleix, i un formulari amb motiu de consulta implicaria tractar dades de salut
  (categoria especial del RGPD).
- **Digestologia i ortodòncia** — el centre no ofereix aquests serveis ara mateix.
  Les vistes es mantenen, però amb `noindex, follow` i fora del sitemap.
- **README** — substituït el genèric de Laravel per un del projecte.
- **Imatges de la graella** — Nutrició, Digestologia i Dermatologia ja fan servir
  la seva imatge.

---

## Pendent

### Les tres llistes d'especialitats no coincideixen

Hi ha tres llocs que llisten especialitats i cap dels tres diu el mateix:

| On | Quantes | Què hi falta |
|---|---|---|
| Menú (`includes/nav.blade.php`) | 11 | digestologia, ortodòncia |
| Graella (`especialitats/index.blade.php`) | 13 | — (les té totes) |
| Home (`inici/index.blade.php`) | 11 + 1 servei | dermatologia, digestologia |

La home enllaça ortodòncia però no dermatologia; el menú, al revés. La targeta
número 12 de la home no és una especialitat: és Revisions Mèdiques, que porta a
`/serveis`.

Cal decidir quina és la llista bona i aplicar-la als tres llocs. Lligat amb això:
**digestologia i ortodòncia ja són `noindex`, però continuen enllaçades** des de la
graella, i ortodòncia també des de la home. Si el centre no ofereix aquests serveis,
un pacient hi pot arribar igualment navegant.

### Imatges que falten

`img/Odontologia.webp` es fa servir a dues targetes: Odontologia i Ortodòncia.
Només falta imatge pròpia per a **ortodòncia**, i només si el centre torna a oferir
el servei. Oftalmologia fa servir la genèrica `PersonesTractantPersones.webp` i
Infermeria `Medicina Amable.webp`.

Les imatges de la graella són icones: creu blava amb un dibuix blanc a sobre, en
webp de 568x568 i menys de 10 KB. Si n'afegeixes una de nova en un altre format o
mida, convertir-la abans: es mostren a 120x120 i un PNG gran penalitza la càrrega.

### Idioma de la documentació

`README.md`, `CLAUDE.md` i `docs/deploy-cdmon.md` són en castellà; aquest fitxer és
en català. Decidir si val la pena unificar-ho.

### Pendent de l'auditoria SEO

Les 49 troballes viuen a [seo-auditoria.md](seo-auditoria.md), amb el pla d'acció per tandes.
El 25/08/2026 se n'han tancat 9 (SEO-01, 02, 04, 05, 06, 22, 23, 24 i 35).

**Queda un sol P0:** **SEO-03** — `/especialitats` carrega jQuery, Popper i Bootstrap amb
hashes d'integritat diferents dels de la resta del web. Algun ha de ser incorrecte, i llavors
el navegador bloqueja l'script i el menú desplegable no funciona en aquesta pàgina. Cal
comprovar-ho amb la consola oberta abans de mergear.

Els següents amb més impacte: **SEO-07** (cap especialitat enllaça cap enfora),
**SEO-13** (catorze entitats de schema duplicades en comptes d'una) i **SEO-40**
(`sameAs`: el web no està connectat amb la fitxa de Google Business).

### Les subpàgines de serveis s'han retirat

`/analitiques`, `/analitiquesCovid`, `/depilacio` i `/revisions` ja no existeixen: tenien ~50
paraules, un «N.Coleg xxxx» publicat i cap enllaç intern que hi apuntés.

**Compte en desplegar:** eren URLs indexades a producció, així que les rutes s'han mantingut
com a `Route::permanentRedirect()` 301 cap a `/serveis`. No les esborris del tot pensant que
són codi mort — si desapareixen, són quatre 404. Convé revisar la cobertura a Search Console
un parell de setmanes després del desplegament.

També ha caigut, per arrossegament: la regla `#portada` i la classe `.foto` d'`especialitats.css`,
i les entrades del `breadcrumb`. La imatge `web/img/cemavFora.webp` (288 KB) queda òrfena.
