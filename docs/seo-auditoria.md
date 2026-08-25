# Auditoria SEO — cemavvic.cat

Revisió profunda del codi de la branca `dev`. Substitueix les revisions parcials anteriors.

- **Data:** 25/08/2026
- **Abast:** les 27 rutes de `routes/web.php`, les 30 vistes Blade, `web/css/`, `web/img/`,
  `web/sitemap.xml`, `web/robots.txt`, `web/.htaccess` i `.github/workflows/deploy.yml`.
- **Mètode:** anàlisi estàtica del repositori. **No** inclou crawl de producció, dades de
  Search Console, Analytics, ni mesures reals de Core Web Vitals. Els punts que necessiten
  comprovar-se contra el servidor viu són al [bloc J](#j-verificacions-a-producció).
- **Estat del codi auditat:** `dev`, commit `934b557`. Recorda que això **encara no és a
  producció** (vegeu [pendent.md](pendent.md)).
- **Última execució:** 25/08/2026 — 9 troballes tancades. Vegeu
  [Registre d'execució](#registre-dexecució).

Cada troballa té un identificador estable (`SEO-01`…) per poder-la citar als commits i al
seguiment. Prioritats:

| | Significat |
|---|---|
| **P0** | Trenca alguna cosa ara mateix. Arreglar abans del pròxim desplegament. |
| **P1** | Impacte directe en posicionament o en Core Web Vitals. |
| **P2** | Millora real però no urgent. |
| **P3** | Higiene, consistència, deute tècnic. |

---

## Resum executiu

El SEO tècnic **de base està bé**: hi ha canonical a totes les pàgines, meta descriptions
escrites a mà i úniques, `hreflang`, Open Graph, sitemap coherent amb les rutes,
`robots.txt` correcte, breadcrumbs amb JSON-LD, `MedicalBusiness` a totes les especialitats,
imatges en `.webp` amb `loading="lazy"` i preload del hero amb `fetchpriority="high"`. Això
ja és bastant més del que sol tenir un centre mèdic local.

El que falla és tot el que hi ha **al voltant**:

1. ~~**Quatre pàgines són al sitemap però no s'hi pot arribar navegant.**~~ **Resolt:**
   retirades i redirigides 301 cap a `/serveis`.
2. ~~**`/serveis` imprimeix text brossa** al final de la pàgina.~~ **Resolt.**
3. **Cap de les 13 pàgines d'especialitat enllaça cap enfora.** Zero enllaços al cos del
   contingut: tot el pes es queda a la portada i no es reparteix. **Obert** — vegeu
   [SEO-07](#seo-07--cap-especialitat-enllaça-cap-enfora--p1).
4. ~~**~150 KB (gzip) de CSS de tercers que no s'utilitza gens.**~~ **Resolt:** fora
   MDBootstrap, Font Awesome, Titillium Web i Roboto.
5. ~~**La imatge d'Open Graph fa 250×250 px.**~~ **Resolt:** ara és de 1200×630.

El que queda per fer amb més impacte: **SEO-03** (l'últim P0), **SEO-07** (enllaçat intern),
**SEO-13** (una sola entitat de schema) i **SEO-40** (`sameAs`).

| Bloc | Troballes | Tancades | Obertes | P0 | P1 | P2 | P3 |
|---|---|---|---|---|---|---|---|
| A. Errors actius | 4 | 3 | 1 | 1 | — | — | — |
| B. Indexació i arquitectura | 6 | 2 | 4 | — | 1 | 3 | — |
| C. Dades estructurades | 6 | — | 6 | — | 4 | 2 | — |
| D. Contingut | 5 | — | 5 | — | 2 | 3 | — |
| E. Rendiment | 7 | 3 | 4 | — | 3 | 1 | — |
| F. Imatges | 5 | — | 5 | — | 2 | 2 | 1 |
| G. Metadades | 6 | 1 | 5 | — | 1 | 2 | 2 |
| H. Local SEO / E-E-A-T | 5 | — | 5 | — | 2 | 3 | — |
| I. Higiene tècnica | 5 | — | 5 | — | — | 1 | 4 |
| **Total** | **49** | **9** | **40** | **1** | **15** | **17** | **7** |

### Registre d'execució

**25/08/2026** — tancades 9 troballes:

| ID | Què s'ha fet |
|---|---|
| SEO-01 | Esborrades les tres línies de `<script>` trencades de `serveis.blade.php`. |
| SEO-02 | Els «N.Coleg xxxx» desapareixen amb les pàgines que els contenien. |
| SEO-04 | Nova `web/img/og-cemav.webp` de 1200×630 (82 KB), retallada de `facana4.webp`. |
| SEO-05 | Les 4 subpàgines de serveis retirades. Com que eren URLs **indexades a producció**, les rutes es mantenen com a `Route::permanentRedirect()` 301 cap a `/serveis` en comptes de deixar-les en 404. |
| SEO-06 | Resolt per la mateixa via. `/mutues`, que sortia a la taula, continua obert a [SEO-18](#seo-18--mutues-són-47-paraules-i-21-logos--p1). |
| SEO-22 | Fora el CSS de MDBootstrap de `head.blade.php` **i** el `mdb.min.js` que encara quedava a `/especialitats`. |
| SEO-23 | Fora Font Awesome. Amb ell desapareix l'origen `use.fontawesome.com`. |
| SEO-24 | Fora Titillium Web i Roboto. Queden només Fraunces + Mulish, en una sola petició. |
| SEO-35 | Afegits `og:locale`, `og:image:width`, `og:image:height` i `og:image:alt`. |

Efectes col·laterals mesurats: el sitemap passa de 21 a **17 URLs**; els orígens de tercers
que serveixen actius baixen de 8 a **6**; les imatges òrfenes pugen a 26 perquè
`cemavFora.webp` (288 KB) ja no el fa servir ningú.

**Verificat:** les 23 pàgines restants retornen 200, les 4 retirades retornen 301 cap a
`/serveis`, i el codi servit no conté cap referència a MDBootstrap, Font Awesome, Titillium
ni Roboto.

---

## A. Errors actius (P0)

### SEO-01 · `/serveis` imprimeix text brossa a la pàgina — P0

> ✅ **Resolt el 25/08/2026.** Esborrades les tres línies sobreres. `/serveis` ja no imprimeix res al final.

`resources/views/serveis/serveis.blade.php`, últimes línies abans de `</body>`:

```html
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
pt src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
ipt src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
```

Les dues últimes línies han perdut el `<scr` / `<scri` inicial. El navegador les tracta com
a **text pla** i les pinta al final de la pàgina, visibles per a l'usuari i indexables per
Google. A sobre, `bootstrap.bundle.min.js` es carrega quatre vegades.

**Arreglar:** deixar una sola càrrega de cada script i esborrar les tres línies sobreres.

### SEO-02 · Placeholder «N.Coleg xxxx» publicat — P0

> ✅ **Resolt el 25/08/2026.** Les quatre vistes que el contenien s'han retirat (vegeu SEO-05).

A les quatre subpàgines de serveis:

- `serveis/analitiques.blade.php:35` — «MONTSERRAT CONTRERAS / N.Coleg xxxx»
- `serveis/analitiquesCovid.blade.php:35` — «MARC SERRALLACH OREJAS / N.Coleg xxxx»
- `serveis/depilacio.blade.php:35` — «SILVIA MARTORELL SALLERAS / N.Coleg xxxx»
- `serveis/revisions.blade.php:36-41` — dues fitxes **amb el nom buit** i «N.Coleg xxxx»

En un web sanitari això és el pitjor senyal d'E-E-A-T possible: número de col·legiat fals i
professionals sense nom. Google avalua els llocs de salut com a YMYL («Your Money or Your
Life») amb criteris més estrictes que la resta.

**Arreglar:** posar-hi els números reals, o treure la línia sencera. Mai deixar-hi `xxxx`.

### SEO-03 · Hashes SRI incoherents a `/especialitats` — P0

`especialitats/index.blade.php:139-142` carrega els mateixos fitxers que la resta del web
però amb hashes d'integritat **diferents**:

| Fitxer | A `/especialitats` | A la resta de pàgines |
|---|---|---|
| jquery-3.2.1.slim.min.js | `…/GasSVhelCC7BvE` | `…/GpGFF93hXpG5KkN` |
| popper.js | versió **1.11.0** | versió 1.12.9 |
| bootstrap 4.0.0 | `sha384-tsQFqpER…` | `sha384-JZR6Spejh…` |

Per a una URL donada només hi pot haver un hash correcte. El que no ho sigui fa que el
navegador **bloquegi l'script**, i llavors el desplegable i el botó hamburguesa no funcionen
en aquesta pàgina. `/especialitats` és la segona pàgina més important del web.

**Arreglar:** unificar amb el bloc que fa servir la resta del web (o millor, aplicar
directament SEO-27). **Verificar:** obrir `/especialitats` amb la consola i buscar errors
d'integritat.

### SEO-04 · La imatge d'Open Graph fa 250×250 — P0

> ✅ **Resolt el 25/08/2026.** Nova `web/img/og-cemav.webp` de 1200×630 i 82 KB, retallada de `facana4.webp`. Sense espais al nom. `og:image` i `twitter:image` hi apunten.

`includes/head.blade.php:29` i `:34`:

```html
<meta property="og:image" content="https://www.cemavvic.cat/img/Medicina%20Amable.webp">
<meta name="twitter:card" content="summary_large_image">
```

`web/img/Medicina Amable.webp` fa **250×250 px i 1,2 KB**: és una icona de la graella
d'especialitats, no una imatge de portada. Amb `summary_large_image`, X/Twitter demana un
mínim de 300×157 i recomana 1200×628; Facebook, WhatsApp i LinkedIn recomanen 1200×630.
Resultat: cada cop que algú comparteix un enllaç del centre per WhatsApp, la previsualització
surt trencada o sense imatge.

A sobre, el nom del fitxer té un espai (`%20` a la URL), cosa que dona problemes amb alguns
scrapers.

**Arreglar:** generar `web/img/og-cemav.webp` de 1200×630 (façana del centre o logo sobre
fons de marca), sense espais al nom, i actualitzar les dues meta. Afegir-hi també
`og:image:width`, `og:image:height` i `og:image:alt`.

---

## B. Indexació i arquitectura del web

### SEO-05 · Quatre pàgines òrfenes al sitemap — P1

> ✅ **Resolt el 25/08/2026.** Les quatre vistes esborrades i fora del sitemap. **Les rutes es conserven com a `Route::permanentRedirect()` 301 cap a `/serveis`**: eren URLs indexades a producció i esborrar-les sense més hauria deixat quatre 404.

Cap fitxer del web enllaça `/analitiques`, `/analitiquesCovid`, `/depilacio` ni
`/revisions`. Comprovat contra les 30 vistes:

```
analitiques        enllaçada des de: CAP
analitiquesCovid   enllaçada des de: CAP
depilacio          enllaçada des de: CAP
revisions          enllaçada des de: CAP
```

Però hi són al sitemap amb `priority` 0.8. Una pàgina òrfena rep zero autoritat interna; el
sitemap només serveix perquè es descobreixi, no per donar-li pes.

El més absurd és que `serveis/serveis.blade.php:60-120` té targetes titulades «Revisions
mèdiques i laborals», «Analítiques» i «Rehabilitació»… que **no enllacen enlloc**. Són
`<div>` sense `<a>`.

**Arreglar:** convertir les targetes de `/serveis` en enllaços a les subpàgines
corresponents. La targeta «Revisions carnet de cotxe» ja enllaça bé cap a emedicalboxvic.com.

### SEO-06 · Les subpàgines de serveis són contingut prim — P1

> ✅ **Resolt el 25/08/2026.** Resolt per supressió, no per reescriptura. `/mutues` continua obert a SEO-18.

Recompte de paraules visibles (sense scripts ni etiquetes):

| Pàgina | Paraules | Enllaços interns al cos |
|---|---|---|
| `/analitiques` | 47 | 0 |
| `/analitiquesCovid` | 51 | 0 |
| `/depilacio` | 55 | 0 |
| `/revisions` | 52 | 0 |
| `/mutues` | 47 | 0 |

Cinquanta paraules, un títol i una foto genèrica és exactament el patró que Google
classifica com a *thin content*. Al sitemap amb priority 0.8 pot arrossegar la valoració del
domini sencer.

**Decisió a prendre** (cal triar una de tres):

- **A** — Escriure-les de veritat: 300-400 paraules cadascuna, seguint el patró que ja
  funciona a les especialitats (hero + 3 targetes de servei + equip). És l'opció que captura
  tràfic: «analítiques Vic», «depilació làser Vic», «revisió mèdica laboral Osona».
- **B** — Fusionar-les dins de `/serveis` com a seccions amb àncora i redirigir 301 les
  quatre URLs. Menys feina, concentra el poc contingut en una sola pàgina.
- **C** — `noindex, follow` + fora del sitemap, com s'ha fet amb digestologia i ortodòncia.
  Deixa el tràfic sobre la taula.

Recomanació: **A** per a `/analitiques`, `/depilacio` i `/revisions` (tenen demanda de cerca
real a la zona) i **B** per a `/analitiquesCovid` (la demanda de tests COVID ha caigut i la
pàgina ja no aporta res sola).

### SEO-07 · Cap especialitat enllaça cap enfora — P1

**Precisió, perquè es pot llegir malament:** això no va dels enllaços que porten *cap a* una
especialitat. Aquests funcionen perfectament — des del menú, des de la graella de
`/especialitats` i des de la portada s'hi arriba bé, i han de continuar així.

Va dels enllaços que surten *des de dins* de la pàgina. Comptat sobre els fitxers de vista,
sense els includes:

```
dermatologia.blade.php    etiquetes <a> al fitxer: 0
odontologia.blade.php     etiquetes <a> al fitxer: 0
… i les 11 restants       etiquetes <a> al fitxer: 0
```

Els únics enllaços que apareixen en una pàgina d'especialitat vénen dels includes compartits
— `nav` (18), `footer` (11) i `breadcrumb` (3) — i són idèntics a totes les pàgines del web.
El contingut propi de la pàgina no enllaça enlloc.

Té dos costos. Google reparteix autoritat a través dels enllaços del contingut, i uns menús
idèntics a tot arreu no li diuen quines pàgines es relacionen entre si. I l'usuari que acaba
de llegir sobre traumatologia no troba fisioteràpia, que és exactament el que li interessarà
després: ha de tornar al menú i buscar-la.

**Arreglar:** afegir al final de cada especialitat un bloc «Altres especialitats
relacionades» amb 3-4 enllaços rellevants (traumatologia ↔ fisioteràpia ↔ podologia;
odontologia ↔ ortodòncia; oftalmologia ↔ optometria; nutrició ↔ psicologia) i un CTA cap a
`/contacte`. Es pot fer amb un include nou, `includes/especialitats-relacionades.blade.php`,
cridat amb la llista com a paràmetre.

### SEO-08 · URLs en camelCase — P2

> Parcialment resolt: `/analitiquesCovid` ja no existeix. Queda `/sobreCemav`.

`/sobreCemav`. Google tracta les URLs com a sensibles a majúscules, i
la convenció establerta és minúscules amb guions. `/sobreCemav` a més surt al sitemap i és
una de les pàgines del menú principal.

**Arreglar** (quan es toqui alguna cosa més d'aquestes pàgines, no cal fer-ho aïlladament):
`/sobre-cemav` i `/analitiques-covid`, amb `Route::redirect()` 301 des de les antigues, i
actualitzar sitemap + nav + footer + breadcrumb. Compte: el breadcrumb té els noms de ruta
escrits a mà a `includes/breadcrumb.blade.php:18` i `:26`.

### SEO-09 · `/especialitats` posa el breadcrumb abans del hero — P2

`especialitats/index.blade.php:32-42` inclou el breadcrumb **abans** de
`#portada_especialitats`; la resta del web el posa després del hero. No és un error de SEO,
però trenca el patró i confon qui hi treballi després.

### SEO-10 · El footer no enllaça `/especialitats` — P2

`includes/footer.blade.php:12-19` llista «Sobre CEMAV, Serveis, Mútues, Contacte». Falta la
pàgina d'especialitats, que és el hub de 13 URLs. Els enllaços de footer són sitewide: és el
lloc més barat per reforçar-lo.

---

## C. Dades estructurades (Schema.org)

### SEO-11 · Vuit pàgines sense cap JSON-LD — P1

Tenen schema: la portada (`MedicalClinic`), `/especialitats` i les 13 especialitats
(`MedicalBusiness`). El breadcrumb hi afegeix un `BreadcrumbList`.

**No en tenen cap:** `/contacte`, `/sobreCemav`, `/mutues`, `/serveis`, `/analitiques`,
`/analitiquesCovid`, `/depilacio`, `/revisions`.

Que `/contacte` no en tingui és el més greu: és la pàgina on Google espera trobar el NAP
(nom, adreça, telèfon) estructurat, els horaris i les coordenades.

**Arreglar:** `MedicalClinic` complet a `/contacte`, `AboutPage` + `Organization` a
`/sobreCemav`, `Service` a `/serveis` i a cada subpàgina.

### SEO-12 · El `MedicalClinic` de la portada està incomplet — P1

`inici/index.blade.php:11-27`. Hi ha nom, adreça, telèfon, URL i `medicalSpecialty`. Hi
**falta**, i tot això compta per al panell de coneixement i per al paquet local:

- `"@id"` — sense identitat estable, cada pàgina declara una entitat diferent (SEO-13)
- `image` i `logo` — Google no pot triar imatge per al panell
- `geo` amb `latitude` / `longitude` — les coordenades ja les tens a l'iframe de
  `/contacte`: **41.92327, 2.24910**
- `openingHoursSpecification` — la portada no en té cap (les especialitats sí)
- `sameAs` — perfils de Google Business, Instagram, Facebook. És **el senyal d'entitat més
  important que falta a tot el web**
- `hasMap`, `priceRange`, `email`, `areaServed`

### SEO-13 · Catorze entitats `MedicalBusiness` duplicades sense `@id` — P1

Cada especialitat declara el seu propi `MedicalBusiness` amb la **mateixa** adreça, el
**mateix** telèfon i els **mateixos** horaris que la portada, sense `@id` i sense apuntar a
una entitat comuna. Per a un rastrejador això són catorze negocis diferents al mateix carrer.

**Arreglar:** un sol `MedicalClinic` amb `"@id": "https://www.cemavvic.cat/#clinica"` a la
portada, i a cada especialitat un `Service` que hi apunti:

```json
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Dermatologia",
  "serviceType": "Dermatologia",
  "provider": { "@id": "https://www.cemavvic.cat/#clinica" },
  "areaServed": { "@type": "City", "name": "Vic" }
}
```

Així es reforça una sola entitat en comptes de dividir-la en catorze.

### SEO-14 · `medicalSpecialty` amb valors no vàlids i serveis que no s'ofereixen — P1

A la portada, `medicalSpecialty` és una llista de text en català: `["Fisioteràpia",
"Oftalmologia", …]`. Schema.org espera valors de l'enumeració `MedicalSpecialty`
(`Dermatology`, `Physiotherapy`, `Ophthalmologic`…). Les pàgines filles ho fan bé
(`"https://schema.org/Dermatology"`); la portada no.

A més, la llista inclou **«Ortodòncia» i «Digestologia»**, que el centre no ofereix ara i que
ja estan a `noindex` (vegeu [pendent.md](pendent.md)). El schema contradiu la decisió presa.

### SEO-15 · El `BreadcrumbList` no coincideix amb el breadcrumb visible — P2

`includes/breadcrumb.blade.php:64-120`. El `$breadcrumbItems` només s'omple per a
especialitats i serveis. A `/mutues`, `/sobreCemav` i `/contacte` el JSON-LD emet **un sol
element** («Inici») mentre que el breadcrumb visible en mostra dos («Inici / Mútues»).

Google demana explícitament que les dades estructurades reflecteixin el contingut visible.
Una llista d'un sol element, a més, no serveix de res.

**Arreglar:** afegir el cas `else` que empenyi `$pageTitle` amb `URL::to('/'.$currentRoute)`.

### SEO-16 · Sense `FAQPage` ni cap contingut de preguntes — P2

No hi ha cap secció de preguntes freqüents al web. En cerca sanitària local és el format que
més fàcilment guanya *rich results* i que millor respon a la cerca per veu («cal demanar hora
al dentista de Vic?», «quines mútues accepta CEMAV?»).

**Oportunitat:** 4-6 preguntes a `/contacte` i 3 a cada especialitat, amb `FAQPage`.

---

## D. Contingut i estratègia de paraules clau

### SEO-17 · Les especialitats es queden curtes — P1

Paraules visibles per especialitat: entre **215** (infermeria) i **293** (odontologia),
mitjana ~240. Per a una pàgina de servei local en un sector competitiu, el rang útil és de
600-900. Les tres targetes de servei estan ben escrites, però no hi ha res més: ni patologies
concretes, ni com és la visita, ni preus orientatius, ni preparació prèvia.

**Prioritzar** per volum de cerca a Osona: odontologia, fisioteràpia, psicologia, podologia i
dermatologia. La resta poden quedar-se com estan de moment.

### SEO-18 · `/mutues` són 47 paraules i 21 logos — P1

`mutues/mutues.blade.php`: un `<h1>`, una frase i una graella d'imatges. Cap `<h2>`, cap text.
«CEMAV mútua Adeslas», «centre concertat Sanitas Vic» i variants són cerques d'intenció
altíssima, i la pàgina no les pot capturar perquè els noms de mútua només existeixen dins
d'atributs `alt`.

**Arreglar:** posar el nom de cada mútua com a text visible sota el logo, agrupar-les, i
afegir un paràgraf explicant com funciona la visita per mútua i què ha de portar el pacient.

### SEO-19 · El web només existeix en català — P2

Tot el contingut és en català i `hreflang` declara `ca` + `x-default`. Vic és territori
catalanoparlant, però una part gens menyspreable de les cerques de salut es fan en castellà
(«dentista en Vic», «fisioterapeuta Vic», «clínica oftalmológica Vic»), sobretot entre
població nouvinguda, que és justament qui busca centre mèdic per primer cop.

No és un defecte: és una decisió de negoci, però convé prendre-la conscientment. Duplicar el
web a `/es/` amb `hreflang` recíproc és molta feina de manteniment; una alternativa barata és
introduir el terme castellà dins del text natural d'algunes pàgines.

### SEO-20 · Els títols de les especialitats desaprofiten espai — P2

Longituds mesurades:

| Títol | Caràcters |
|---|---|
| `Urologia a Vic \| CEMAV` | 22 |
| `Podologia a Vic \| CEMAV` | 23 |
| `Optometria a Vic \| CEMAV` | 24 |
| `Psicologia a Vic \| CEMAV` | 24 |
| `Fisioteràpia a Vic \| Centre de Rehabilitació CEMAV` | 50 |

Google mostra fins a ~60 caràcters. Vuit títols en gasten menys de 30. Els dos que estan ben
treballats (fisioteràpia, oftalmologia) demostren el patró correcte: afegir-hi el terme que la
gent busca de veritat.

**Proposta:** `Podologia a Vic | Podòleg a Osona · CEMAV` (43), `Urologia a Vic | Uròleg
privat i mútues · CEMAV` (48), etc.

### SEO-21 · Inconsistències de marca als títols — P2

- `/mutues`: **«Mutues»** sense accent. Ha de ser «Mútues».
- `/especialitats`: `Especialitats - CEMAV` amb guió, quan tota la resta del web fa servir `|`.
- Portada: `CEMAV | Centre de medicina amable de Vic`, amb «medicina amable» en minúscula,
  mentre que a la resta del web és «Centre de Medicina Amable de Vic».

---

## E. Rendiment i Core Web Vitals

Aquest bloc és el que més marge de millora té, i el més fàcil d'executar: gairebé tot és
esborrar coses.

### SEO-22 · MDBootstrap 4.19 es carrega a totes les pàgines i no s'utilitza gens — P1

> ✅ **Resolt el 25/08/2026.** Fora el CSS de `head.blade.php` i també el `mdb.min.js` que encara carregava `/especialitats`, que no havia detectat a la primera passada.

`includes/head.blade.php:52`:

```html
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
```

He buscat totes les classes característiques de MDB a les 30 vistes (`md-form`,
`btn-floating`, `z-depth-*`, `waves-effect`, `card-cascade`, `view overlay`, `chip`,
`stepper`, `wow`, `fadeIn`): **cap coincidència**. Ni una.

Són uns 590 KB sense comprimir (~90 KB gzip, xifra aproximada) de CSS **bloquejant el
renderitzat**, a la ruta crítica de cada pàgina del web, per no fer absolutament res.

**Arreglar:** esborrar la línia. És la millora de LCP més gran i més barata de tot el projecte.

### SEO-23 · Font Awesome es carrega a totes les pàgines i no s'utilitza gens — P1

> ✅ **Resolt el 25/08/2026.** Esborrat. Amb ell desapareix l'origen `use.fontawesome.com`.

`includes/head.blade.php:76`. Cerca de classes `fa-*` a tot el projecte: **0 coincidències**.
Totes les icones del web són Ionicons (53 usos de `<ion-icon>`).

Va amb `preload as=style` + `onload`, o sigui que no bloqueja el renderitzat, però continua
sent una connexió a un vuitè domini (`use.fontawesome.com`), un full d'estil i les fonts
d'icones que arrossega.

**Arreglar:** esborrar les dues línies (`preload` i `noscript`) i el `preconnect` associat.

### SEO-24 · Dues famílies de Google Fonts que no fa servir ningú — P1

> ✅ **Resolt el 25/08/2026.** Queden només Fraunces + Mulish, en una sola petició a `fonts.googleapis.com`.

`includes/head.blade.php:56-57` precarrega **Titillium Web** i **Roboto**. L'única referència
a Titillium a tot el repositori és `web/css/home copy.css`, que està gitignorat i no es
desplega mai. Roboto no apareix enlloc.

`base.css` estableix Mulish per al text i Fraunces per als títols, i prou.

**Arreglar:** deixar només la crida de Fraunces + Mulish, tant al `preload` com al
`<noscript>`. Passem de tres peticions a `fonts.googleapis.com` a una.

### SEO-25 · Vuit orígens de tercers, `preconnect` només per a tres — P1

Dominis a la ruta de càrrega: `cdnjs.cloudflare.com`, `fonts.googleapis.com`,
`fonts.gstatic.com`, `use.fontawesome.com`, `unpkg.com`, `code.jquery.com`,
`maxcdn.bootstrapcdn.com` i `cdn.jsdelivr.net` (aquest últim només a `/serveis`).

Hi ha `preconnect` per a tres. Cada origen nou són DNS + TCP + TLS: entre 100 i 300 ms en
mòbil 4G abans que comenci a arribar cap byte.

> Parcialment resolt el 25/08/2026: amb SEO-22, SEO-23 i SEO-24 fets, els orígens que
> serveixen actius han baixat de 8 a **6**. `use.fontawesome.com` ha desaparegut. Queden
> `cdnjs` (Bootstrap CSS), `code.jquery.com` i `maxcdn.bootstrapcdn.com` (els tres scripts),
> `fonts.googleapis.com`, `fonts.gstatic.com` i `unpkg.com` (Ionicons).

Aplicant també SEO-27 en quedarien **tres**: cdnjs, Google Fonts i unpkg.

### SEO-26 · Bootstrap: la versió del CSS i la del JS no coincideixen — P1

CSS: Bootstrap **4.5.0** des de cdnjs. JS: Bootstrap **4.0.0** des de maxcdn (i **4.5.2** des
de jsdelivr a `/serveis`, i **4.0.0** amb un altre hash a `/especialitats`). Barrejar versions
de Bootstrap és una font clàssica d'errors silenciosos al desplegable del menú.

### SEO-27 · jQuery + Popper + Bootstrap JS per a un sol botó — P1

Tres fitxers (~120 KB en total) a totes les pàgines. L'única cosa que en depèn és
`includes/nav.blade.php:5`:

```html
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
```

Un únic `data-toggle` a tot el web. El desplegable d'escriptori ja funciona amb CSS pur
(`.nav-item.dropdown:hover`, definit inline a `head.blade.php`).

**Arreglar:** substituir-ho per JavaScript natiu:

```js
document.querySelector('.navbar-toggler').addEventListener('click', function () {
  var menu = document.getElementById('navbarSupportedContent');
  menu.classList.toggle('show');
  this.setAttribute('aria-expanded', menu.classList.contains('show'));
});
```

I esborrar els tres `<script>` de totes les vistes. De passada desapareixen SEO-03 i SEO-26.

### SEO-28 · Sense capçaleres de cache ni compressió al `.htaccess` — P2

`web/.htaccess` només té les regles de rewrite de Laravel. No hi ha `mod_expires` ni
`mod_deflate`. Els CSS propis (`base.css`, `home.css`, `especialitats.css`…) i les imatges es
tornen a demanar a cada visita si cdmon no ho aplica per defecte al servidor.

**Arreglar** (verificar abans que els mòduls estiguin actius a cdmon):

```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/x-icon "access plus 1 year"
</IfModule>
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css application/javascript image/svg+xml
</IfModule>
```

Amb cache d'un any cal versionar els CSS quan canviïn (`base.css?v=2`), o baixar-ho a un mes.

---

## F. Imatges

### SEO-29 · Imatges molt més grans del que es mostren — P1

| Fitxer | Dimensions reals | Mida mostrada | Pes |
|---|---|---|---|
| `Fotos Treballadors/nuria.webp` | 2721×2721 | ~200 px | 184 KB |
| `Mutues/adeslas.webp` | 2133×930 | 200×150 | 19 KB |
| `img/cemavFora.webp` | — | fons de hero | 295 KB |

El cas de `nuria.webp` és el pitjor: 2721 px per pintar-ne 200. Les fotos de l'equip
apareixen a odontologia i ortodòncia.

**Arreglar:** redimensionar les fotos d'equip a 600×600 màxim i els logos de mútua a 400 px
d'ample. Estalvi estimat: 300-400 KB a `/odontologia`.

### SEO-30 · Falta el preload del hero a dues pàgines — P1

> Parcialment resolt: les quatre subpàgines de serveis que feien servir `cemavFora.webp`
> (288 KB) com a hero s'han retirat, i amb elles la regla `#portada` d'`especialitats.css`.
> Aquella part del problema ja no existeix.

Falta el preload a **`/oftalmologia`** (única especialitat sense la línia; hauria de
precarregar `hero3.webp`) i a **`/especialitats`** (fa servir `hero1.webp`).

### SEO-31 · Atributs `alt` sense contingut — P2

- `includes/nav.blade.php:4`: `alt="logo"` → hauria de ser
  `alt="CEMAV · Centre de Medicina Amable de Vic"`. És sitewide.
- ~~Cinc imatges amb `alt="foto"` a les subpàgines de serveis.~~ Resolt: aquestes pàgines
  ja no existeixen.
- `especialitats/index.blade.php:66`:
  `<img src="img/PersonesTractantPersones.webp" alt="Oftalmologia">` — l'`alt` diu una cosa i
  la imatge n'és una altra (icona genèrica). Mateix cas a la línia 117 (infermeria amb
  `Medicina Amable.webp`) i a la 132 (ortodòncia amb `Odontologia.webp`). Ja consta a
  [pendent.md](pendent.md).
- Els `alt` de la graella (`alt="Odontologia"`) són més pobres que els de la portada
  (`alt="Odontologia a CEMAV Vic"`). Unificar amb el format llarg.

### SEO-32 · 77 imatges sense `width` / `height` — P2

> ⚠️ **Correcció del 25/08/2026.** La primera versió d'aquest document deia «30». Era un
> recompte per línies i no comptava bé les etiquetes `<img>` repartides en diverses línies.
> Parsejant les etiquetes senceres, el nombre correcte és **77 de 110**.

| On | Sense dimensions |
|---|---|
| Portada — carrusel de mútues (21 logos × 2) | 42 |
| Graella de `/especialitats` | 13 |
| Fotos d'equip de les especialitats | 20 |
| `nav.blade.php` (logo) i `/sobreCemav` | 2 |

Sense dimensions declarades el navegador no pot reservar l'espai i es produeix CLS quan
carreguen. La graella de la **portada** sí que ho fa bé (`width="120" height="120"`), i és el
model a copiar. `/mutues` també les té totes.

### SEO-33 · ~5 MB d'imatges òrfenes que es despleguen igualment — P3

Vint-i-sis fitxers de `web/img/` (5,5 MB) no els referencia ni cap vista ni cap CSS. Ha
pujat de 24 a 26 en retirar les subpàgines de serveis: `cemavFora.webp` (288 KB) ja no
el fa servir ningú. Els més grossos:

```
facana1.webp                            1,8 MB
Portada2.jpeg                           444 KB
Portada3.jpeg                           404 KB
cemavFora2.webp                         332 KB
facana5.webp                            320 KB
facana2.webp                            280 KB
Fotos Treballadors/Portada3 (2).webp    244 KB
```

**Excepció:** `facana4.webp` surt com a òrfena però **no s'ha d'esborrar**: és l'original
del qual s'ha retallat `og-cemav.webp`.

També hi ha `logoPrincipal.jpg` (la versió antiga del logo), `logo.webp`,
`logoPrincipal2.webp`, `analitiques.webp`, `DepilacioLaser.webp`, `Especialitats.webp`,
`CategoriaF.webp`, `categoriaFN.webp`, `cookie.webp` i set fotos de treballadors que ja no
surten enlloc.

No afecta el posicionament (ningú les descarrega), però són 5 MB que es pugen per FTP a cada
desplegament. Val la pena netejar-ho.

---

## G. Metadades i etiquetes

### SEO-34 · Jerarquia de `<h1>` incorrecta a 3 pàgines — P1

> Parcialment resolt: les quatre subpàgines de serveis que duplicaven el `h1` s'han
> retirat. En queden tres.

| Pàgina | Ordre de capçaleres | Problema |
|---|---|---|
| Portada | `h2 h1 h2 … h1 …` | Un `h2` **abans** del `h1`, i dos `h1` |
| `/especialitats` | `h1 h2 h1` | Dos `h1` («LES NOSTRES ESPECIALITATS» i «Especialitats») |
| `/contacte` | `h1 h3 h3 h3 h3 h2` | Salta de `h1` a `h3` |

Les 13 especialitats tenen una jerarquia impecable (`h1 h2 h2 h3 h3 h3 h2 h3`). Serveix de
model.

**Arreglar:** un sol `h1` per pàgina, i que sigui el que descriu la pàgina. A la portada,
moure «Acompanyant-te en el teu benestar…» a un `<p class="hero-slug">` i baixar
«Especialitats» a `h2`. A les subpàgines de serveis, «Professionals» → `h2`.

### SEO-35 · Falten meta d'Open Graph secundàries — P2

> ✅ **Resolt el 25/08/2026.** Afegits `og:locale`, `og:image:width`, `og:image:height`, `og:image:alt` i `twitter:image:alt`.

A `includes/head.blade.php` hi ha `og:title`, `og:description`, `og:type`, `og:url`,
`og:image` i `og:site_name`. Hi falta:

```html
<meta property="og:locale" content="ca_ES">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Façana de CEMAV, centre mèdic a Vic">
```

### SEO-36 · Tot el bloc social depèn de `@isset($description)` — P2

Les meta d'Open Graph i Twitter estan dins d'un `@isset($description)`. Ara mateix totes les
vistes passen `description`, però si algú n'afegeix una sense, la pàgina perd totes les meta
socials en silenci. Val més separar-ho: `og:title`, `og:url`, `og:image` i `og:site_name` no
depenen de la descripció.

### SEO-37 · Sense verificació de Search Console al codi — P2

No hi ha cap `<meta name="google-site-verification">` ni equivalent de Bing. Pot estar
verificat per DNS o per fitxer HTML al servidor (vegeu [bloc J](#j-verificacions-a-producció)),
però si no ho està, no hi ha manera de veure les impressions, les consultes reals ni els
errors de cobertura. **Sense això, cap d'aquestes millores és mesurable.**

### SEO-38 · Sense `theme-color` ni manifest — P3

Detall menor de presentació en mòbil:
`<meta name="theme-color" content="#1E84C6">` (el `--blue` de `base.css`).

### SEO-39 · BOM UTF-8 en sis vistes — P3

`inici/index.blade.php`, `especialitats/oftalmologia.blade.php` i les quatre subpàgines de
serveis comencen amb els bytes `EF BB BF` abans del `<!doctype html>`. Els navegadors moderns
ho toleren, però són bytes emesos abans del doctype i poden trencar qualsevol `header()` que
s'hi afegeixi en el futur. `.editorconfig` ja demana UTF-8 sense BOM.

---

## H. SEO local i E-E-A-T

Per a un centre mèdic de barri, això pesa més que qualsevol optimització tècnica.

### SEO-40 · Sense `sameAs`: el web no està connectat amb cap perfil — P1

No hi ha cap enllaç ni cap referència de schema a Google Business Profile, Instagram,
Facebook o Doctoralia. `sameAs` és com Google confirma que el web i la fitxa de Maps són la
mateixa entitat. És el senyal que falta amb més impacte per al paquet local.

**Arreglar:** afegir `sameAs` al `MedicalClinic` i les icones socials al footer.

### SEO-41 · Sense ressenyes ni cap senyal de confiança — P1

El web no mostra ressenyes, valoracions, anys d'experiència en xifres, acreditacions ni el
número de registre sanitari del centre. `/sobreCemav` explica la història des del 2002, cosa
que ajuda, però no hi ha res verificable.

**Nota important:** `aggregateRating` amb dades inventades és una violació de les directrius
de Google i pot comportar una acció manual. Si es posen ressenyes, han de ser reals i han de
ser visibles a la pàgina.

### SEO-42 · Els professionals no tenen ni fitxa ni schema — P2

Les pàgines d'especialitat llisten noms («Carles Janés — Dermatòleg») però no hi ha `Physician`
schema, ni número de col·legiat, ni formació, ni foto real (la majoria fan servir
`iconaMen.webp` / `iconaDona.webp`). En YMYL sanitari, l'autoria identificable i verificable
és el factor d'E-E-A-T amb més pes.

**Arreglar:** afegir `Physician` per a cada professional amb `name`, `medicalSpecialty`,
`worksFor` apuntant a l'`@id` de la clínica i, quan es tingui, `identifier` amb el número de
col·legiat.

### SEO-43 · Correu de contacte a Gmail — P2

`noucemav@gmail.com` al footer, a `/contacte` i al CTA de la portada. Un centre mèdic amb
domini propi que dona un Gmail com a contacte oficial és un senyal de professionalitat feble,
tant per a l'usuari com per als avaluadors de qualitat.

**Arreglar:** `info@cemavvic.cat` o `hola@cemavvic.cat` (cdmon inclou bústies amb
l'allotjament).

### SEO-44 · Els horaris estan escrits a tres llocs diferents — P2

- Footer: «8.00 h – 14.00 h / 15.00 h – 20.00 h», dilluns a divendres
- Schema de les especialitats: `["Mo-Fr 08:00-14:00", "Mo-Fr 15:00-20:00"]`
- Meta description de `/contacte`: «de 8h a 20h»

Coincideixen, però estan duplicats a 15 fitxers. Qualsevol canvi d'horari els deixarà
desincronitzats, i les incoherències de NAP entre el web i la fitxa de Google són un problema
clàssic de SEO local.

**Arreglar:** centralitzar-ho a `config/cemav.php` o en un include, i llegir-ho des d'allà.

---

## I. Higiene tècnica

### SEO-45 · `CLAUDE.md` documenta un patró que no fa servir cap vista — P2

`CLAUDE.md` descriu l'esquelet de les pàgines amb `@push('head-css')` i `@push('head-schema')`,
i `head.blade.php` declara els dos `@stack`. **Cap de les 30 vistes fa servir cap `@push`**:
totes posen el `<link>` i l'`<script type="application/ld+json">` directament després de
l'`@include`.

Funciona igual, però la documentació menteix. Cal decidir: o s'adopta el patró de debò, o es
documenta el que es fa realment.

### SEO-46 · `web/web.config` és per a IIS i cdmon és Apache — P3

Fitxer mort que es puja a la carpeta pública a cada desplegament.

### SEO-47 · `web/js/app.js` (611 KB) i `web/css/app.css` són al disc — P3

Estan gitignorats i per tant no arriben al servidor pel desplegament, però ocupen espai local i
poden confondre. Laravel Mix no s'utilitza (`CLAUDE.md` ja ho diu).

### SEO-48 · `web/css/home copy.css` referencia una imatge inexistent — P3

`url('../img/wallpapers/hero-home.webp')` — el fitxer no existeix. El CSS està gitignorat i no
es desplega, o sigui que no afecta producció. Es pot esborrar.

### SEO-49 · Sense pàgina 404 personalitzada — P3

No hi ha `resources/views/errors/404.blade.php`. Laravel serveix la seva pantalla genèrica. El
codi d'estat és correcte (404), que és el que compta per al SEO, però una 404 amb el menú i
enllaços a les especialitats recupera visites que ara es perden.

---

## J. Verificacions a producció

Això no es pot comprovar des del repositori. Cal fer-ho contra `https://www.cemavvic.cat` un
cop desplegat.

| # | Comprovació | Com | Per què importa |
|---|---|---|---|
| J1 | `APP_DEBUG=false` i `APP_ENV=production` al `.env` del servidor | FTP / panell cdmon | Amb `debug=true` qualsevol error mostra la traça completa de Laravel, indexable. El `.env` local té `APP_DEBUG=true` i `APP_URL=http://localhost` |
| J2 | `APP_URL=https://www.cemavvic.cat` | ídem | `asset()` genera les URLs dels CSS i les imatges a partir d'aquí |
| J3 | Redirecció 301 de `http://` a `https://` | `curl -I http://cemavvic.cat` | Sense això hi ha fins a quatre versions indexables del mateix web |
| J4 | Redirecció 301 de `cemavvic.cat` a `www.cemavvic.cat` | `curl -I https://cemavvic.cat` | El canonical fa servir `url()->current()`: si s'hi arriba sense www, el canonical apunta a la versió sense www i es contradiu amb el sitemap |
| J5 | El domini està verificat a Search Console | search.google.com/search-console | Sense això no hi ha dades de res |
| J6 | La fitxa de Google Business Profile existeix, està verificada i el NAP coincideix exactament amb el web | business.google.com | És el factor número u del paquet local |
| J7 | Quantes de les 17 URLs estan indexades | Search Console → Pàgines | Estat real de cobertura |
| J13 | Que les 4 URLs retirades responguin 301 i que Search Console les vagi treient de l'índex | `curl -I …/analitiques` | Confirma que la supressió de SEO-05 no ha deixat 404 |
| J8 | Passar la portada, `/odontologia` i `/contacte` per PageSpeed Insights | pagespeed.web.dev | Xifres reals de LCP/CLS/INP per validar el bloc E |
| J9 | Validar el JSON-LD | search.google.com/test/rich-results | Confirma SEO-12, SEO-13, SEO-14, SEO-15 |
| J10 | Que la consola de `/especialitats` no doni errors d'integritat | DevTools | SEO-03 |
| J11 | Què retorna una URL inexistent | `curl -I https://www.cemavvic.cat/xyz` | Ha de ser 404, no 200 ni 500 |
| J12 | Si mod_expires i mod_deflate estan actius | Capçaleres d'un `.css` | SEO-28 |

---

## Pla d'acció

### Tanda 1 — abans del pròxim desplegament

Arreglades petites i sense risc. **Feta el 25/08/2026 excepte tres punts.**

- [x] **SEO-01** Esborrades les tres línies de script trencades de `serveis.blade.php`
- [x] **SEO-02** Resolt en retirar les quatre subpàgines
- [ ] **SEO-03** Unificar els scripts de `/especialitats` amb els de la resta del web
- [x] **SEO-22** Fora MDBootstrap: el CSS de `head.blade.php` i el JS de `/especialitats`
- [x] **SEO-23** Fora Font Awesome
- [x] **SEO-24** Només Fraunces + Mulish a les Google Fonts
- [ ] **SEO-21** `Mútues` amb accent, separador `|` a `/especialitats`
- [x] **SEO-31** Els cinc `alt="foto"` (queda l'`alt` del logo del menú)
- [ ] **SEO-30** Preload del hero a `/oftalmologia` i `/especialitats`
- [x] **SEO-04** i **SEO-05**, que eren de tandes posteriors, també fets
- [ ] **J1, J2** Comprovar el `.env` de producció

### Tanda 2 — arquitectura (~1 dia)

- [x] ~~**SEO-05** Enllaçar les targetes de `/serveis` amb les subpàgines~~ — resolt d'una
      altra manera: les subpàgines s'han retirat i el contingut es queda a `/serveis`
- [ ] **SEO-07** Include d'especialitats relacionades + CTA a `/contacte`
- [ ] **SEO-34** Un sol `h1` per pàgina a les 3 pàgines que queden
- [ ] **SEO-10** `/especialitats` al footer
- [ ] **SEO-15** Completar el `BreadcrumbList` a mútues, sobre i contacte
- [ ] **SEO-27** Substituir jQuery/Popper/Bootstrap JS per JS natiu (tanca SEO-26)
- [x] ~~**SEO-04** Generar l'`og:image` de 1200×630 (tanca SEO-35)~~ — fet

### Tanda 3 — entitat i dades estructurades (~1 dia)

- [ ] **SEO-13** `MedicalClinic` amb `@id` a la portada; `Service` a les filles
- [ ] **SEO-12** Completar-lo amb `geo`, `image`, `logo`, `openingHoursSpecification`
- [ ] **SEO-40** `sameAs` amb Google Business, Instagram i Facebook
- [ ] **SEO-14** `medicalSpecialty` amb valors de l'enumeració, sense els serveis retirats
- [ ] **SEO-11** JSON-LD a les 8 pàgines que no en tenen
- [ ] **J5, J6** Search Console i Google Business Profile
- [ ] **SEO-44** Centralitzar el NAP i els horaris

### Tanda 4 — contingut (esforç continuat)

- [x] ~~**SEO-06** Decidir el destí de les 4 subpàgines de serveis i executar-ho~~ — fet:
      retirades i redirigides 301
- [ ] **SEO-18** Reescriure `/mutues` amb els noms com a text
- [ ] **SEO-17** Ampliar les 5 especialitats prioritàries a 600-900 paraules
- [ ] **SEO-16** FAQ a `/contacte` i a les especialitats prioritàries
- [ ] **SEO-42** Fitxes de professionals amb `Physician`
- [ ] **SEO-20** Reescriure els 8 títols curts
- [ ] **SEO-43** Correu al domini propi
- [ ] **SEO-19** Decidir què es fa amb el castellà

### Tanda 5 — neteja (sense pressa)

- [ ] **SEO-33** Esborrar les 26 imatges òrfenes (**no** `facana4.webp`: és l'original de l'og:image)
- [ ] **SEO-29** Redimensionar les fotos d'equip i els logos de mútua
- [ ] **SEO-32** `width`/`height` a les 77 imatges que no en tenen
- [ ] **SEO-28** Cache i compressió al `.htaccess` (després de J12)
- [ ] **SEO-49** Pàgina 404 personalitzada
- [ ] **SEO-45** Alinear `CLAUDE.md` amb el que fan les vistes de debò
- [ ] **SEO-08** URLs en minúscula amb redireccions 301
- [ ] **SEO-39** Treure el BOM de les sis vistes
- [ ] **SEO-46, SEO-47, SEO-48** Esborrar `web.config`, `app.js`, `app.css`, `home copy.css`

---

## El que ja està bé i no s'ha de tocar

Perquè no es «corregeixi» per error en una revisió futura:

- **Canonical i hreflang** generats a `head.blade.php` per a totes les pàgines.
- **Meta descriptions** escrites a mà, úniques, totes entre 99 i 150 caràcters, en català i
  amb el telèfon o la crida a l'acció. Cap de duplicada.
- **Sitemap** amb exactament les URLs indexables, verificat ruta a ruta: no hi ha ni
  sobrants ni faltants. Eren 21; des del 25/08/2026 en són **17**, en retirar les quatre
  subpàgines de serveis.
- **`robots.txt`** correcte, amb la referència al sitemap i sense bloquejar res que importi.
- **Gate de cookies**: GA4 no es carrega fins que l'usuari accepta, botons simètrics,
  `anonymize_ip`. Compleix RGPD/LSSI i a més evita cookies a la primera visita.
- **Pàgines legals** a `noindex, follow` i fora del sitemap. És exactament el correcte.
- **Preload dels heros** amb `fetchpriority="high"`, coincidint amb el grup de CSS de cada
  especialitat. Comprovat un per un: els 12 que hi són estan bé (només falta oftalmologia).
- **Estructura de capçaleres de les 13 especialitats**: `h1 h2 h2 h3 h3 h3 h2 h3`. És el model
  a seguir per a la resta del web.
- **`MedicalBusiness` amb `medicalSpecialty` de schema.org** a les pàgines filles: els valors
  són correctes (`https://schema.org/Dermatology`). El problema és l'estructura d'entitats
  (SEO-13), no els valors.
- **Imatges en `.webp` amb `loading="lazy"`** com a norma general.
- **`especialitats.css` amb `background-image` i `background-color` de reserva** en comptes de
  la drecera `background`. El comentari del fitxer explica per què. És correcte.

---

## Historial

| Data | Canvi |
|---|---|
| 25/08/2026 | Primera versió. 49 troballes sobre `dev` @ `934b557`. |
| 25/08/2026 | Executades 9 troballes (SEO-01, 02, 04, 05, 06, 22, 23, 24, 35). Corregit el recompte de SEO-32 (30 → 77). Reescrit SEO-07 per evitar que s'entengui com si els enllaços cap a les especialitats no funcionessin. Actualitzats els parcials SEO-08, 25, 30, 31, 33, 34. |
