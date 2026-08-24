# Pendent

Estat de la branca `dev`. Revisar abans de mergear a `main` (= producció).

Última revisió: 24/08/2026

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
