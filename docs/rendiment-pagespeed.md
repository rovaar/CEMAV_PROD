# Auditoria de rendiment (PageSpeed / Lighthouse) — cemavvic.cat

Mesura feta el **03/10/2026** contra producció (`https://www.cemavvic.cat`), just després
del primer desplegament de la versió 2. Objectiu: **≥ 95 a les quatre categories**
(Rendiment, Accessibilitat, Pràctiques recomanades, SEO), en mòbil i en escriptori.

Cada troballa té un identificador estable (`PSI-01`…`PSI-16`). Quan n'arreglis una,
cita'l al missatge de commit i marca la casella del [pla d'acció](#pla-dacció).
Diverses troballes es solapen amb la [auditoria SEO](seo-auditoria.md) (secció E i F);
quan és així s'indica.

## Com s'ha mesurat

- **Lighthouse 13.5** en local (Chrome headless), que és el mateix motor que fa servir
  PageSpeed Insights. L'API pública de PSI tornava `429 Quota exceeded` (clau anònima
  compartida), així que no s'ha pogut fer servir.
- Mòbil: configuració per defecte (Moto G simulat, 4G lent amb throttling simulat).
  Escriptori: `--preset=desktop`.
- Una passada per pàgina i format. **Lighthouse varia ±3-5 punts entre passades**, i PSI
  executa des dels servidors de Google, no des de Catalunya: el TTFB i la latència als CDN
  hi seran una mica diferents. Les tendències i les causes sí que són les mateixes.
- No s'han pogut consultar les dades de camp (CrUX). Amb el trànsit d'un centre mèdic local
  és probable que PSI digui "no hi ha prou dades" i només mostri la part de laboratori.
- Les quatre pàgines legals (`noindex`) no s'han mesurat: comparteixen `head`, nav i footer
  amb la resta, així que hereten els mateixos problemes.

## Puntuacions actuals

| Pàgina | Format | Rend. | Access. | Pràct. | SEO | FCP | LCP | TBT | CLS | Pes |
|---|---|---:|---:|---:|---:|---:|---:|---:|---:|---:|
| `/` | mòbil | **94** | 95 | 96 | 100 | 2,3 s | 2,7 s | 0 ms | 0,009 | 553 KB |
| `/` | escriptori | **83** | 95 | 96 | 100 | 1,8 s | 1,8 s | 0 ms | 0,004 | 557 KB |
| `/especialitats` | mòbil | **85** | 95 | 96 | 100 | 2,7 s | 3,6 s | 0 ms | 0,003 | 291 KB |
| `/especialitats` | escriptori | 98 | 95 | 96 | 100 | 0,9 s | 0,9 s | 0 ms | 0,011 | 291 KB |
| `/odontologia` | mòbil | **76** | 95 | 96 | 100 | 4,0 s | 4,0 s | 0 ms | 0,029 | 585 KB |
| `/odontologia` | escriptori | 98 | 95 | 96 | 100 | 0,9 s | 0,9 s | 0 ms | 0,012 | 763 KB |
| `/serveis` | mòbil | **81** | **93** | 96 | 100 | 3,4 s | 3,4 s | 0 ms | 0,004 | 223 KB |
| `/serveis` | escriptori | **90** | **93** | 96 | 100 | 1,3 s | 1,3 s | 0 ms | 0,006 | 223 KB |
| `/sobreCemav` | mòbil | **82** | 96 | 96 | 100 | 3,4 s | 3,4 s | 0 ms | 0 | 227 KB |
| `/sobreCemav` | escriptori | **76** | 96 | 96 | 100 | 1,9 s | 2,7 s | 0 ms | 0,015 | 227 KB |
| `/mutues` | mòbil | **92** | 95 | 96 | 100 | 2,6 s | 2,6 s | 0 ms | 0,009 | 470 KB |
| `/mutues` | escriptori | **87** | 95 | 96 | 100 | 1,6 s | 1,6 s | 0 ms | 0,021 | 470 KB |
| `/contacte` | mòbil | 95 | 95 | 96 | 100 | 2,4 s | 2,4 s | 0 ms | 0,001 | 657 KB |
| `/contacte` | escriptori | **86** | 95 | 96 | 100 | 1,5 s | 1,7 s | 0 ms | 0,001 | 924 KB |

En **negreta**, el que queda per sota de 95.

### Lectura ràpida

- **SEO: 100 a tot arreu.** No cal tocar res.
- **Pràctiques recomanades: 96 a tot arreu**, per una sola auditoria: el logo del menú
  es mostra deformat (`PSI-08`). Arreglant-la, 100.
- **Accessibilitat: 93-96.** Gairebé tot és contrast de color, i molt ve de dos
  components que surten a totes les pàgines: el footer i el banner de cookies.
  Lighthouse **sempre** veu el banner, perquè entra sense `localStorage`.
- **Rendiment: 76-98.** TBT = 0 ms i CLS ≈ 0 a tot arreu: el JavaScript i l'estabilitat
  visual ja estan bé. **Tot el que falta és FCP i LCP**, és a dir, el que triga la
  pàgina a pintar-se per primera vegada. Les causes són poques i les mateixes a totes
  les pàgines: CSS i fonts que es demanen a tercers abans de poder pintar.
- **Per què l'escriptori puntua pitjor que el mòbil a la portada:** els llindars
  d'escriptori són molt més estrictes (FCP "bo" < 0,9 s, contra < 1,8 s en mòbil). Un
  FCP d'1,8 s val 75 punts en mòbil i 37 en escriptori.

### Què passa amb el LCP

El desglossament del LCP diu on se'n va el temps:

| Pàgina (mòbil) | Element LCP | TTFB | Retard de càrrega | Descàrrega | **Retard de render** |
|---|---|---:|---:|---:|---:|
| `/sobreCemav` | `<p>` (text) | 373 ms | — | — | **2.175 ms** |
| `/serveis` | `#hero-serveis` (fons CSS) | 365 ms | 296 ms | 86 ms | **1.784 ms** |
| `/odontologia` | `#portada-odontologia` | 341 ms | 10 ms | 464 ms | **1.696 ms** |
| `/mutues` | `<p>` (text) | 692 ms | — | — | **1.012 ms** |
| `/especialitats` | `#portada_especialitats` | 966 ms | **626 ms** | 301 ms | 19 ms |
| `/` | `#portada` | 409 ms | 15 ms | 215 ms | 224 ms |

El **retard de render** vol dir que el recurs ja hi és però el navegador encara no pot
pintar. Passa per dues coses que s'encadenen:

1. `bootstrap.min.css` des de cdnjs **bloqueja el render**. Cal obrir connexió
   (DNS + TLS) a un altre domini, i a mòbil triga 1,2-1,4 s (`PSI-01`).
2. Les fonts arriben tard des de dos dominis més (`fonts.googleapis.com` →
   `fonts.gstatic.com`). El text es pinta primer amb la font de reserva i es torna a
   pintar quan arriba Fraunces/Mulish. Com que canvia de mida, aquell segon pintat és
   el que compta com a LCP (`PSI-02`).

---

## A. Camí crític: CSS i fonts

### PSI-01 · Bootstrap CSS des de cdnjs bloqueja el render — P0

**Impacte:** 450-650 ms en escriptori i 1.150-1.360 ms en mòbil, **a totes les pàgines**.
És la primera causa del FCP alt.

`includes/head.blade.php` carrega `cdnjs.cloudflare.com/.../bootstrap/4.5.0/css/bootstrap.min.css`
(158 KB sense comprimir, 18 KB en gzip) en mode síncron. Lighthouse calcula que en sobren
**14-17 KB** (en gzip), és a dir, gairebé tot: el web només fa servir el grid i unes
quantes utilitats.

El problema no és tant el pes com **l'origen**. Abans de baixar-lo cal resoldre DNS, obrir
TCP i negociar TLS amb un altre domini, i mentrestant la pàgina queda en blanc.

**Arreglar.** El CSS de Bootstrap es manté, tal com demana `CLAUDE.md`, però es serveix
des del nostre domini:

1. **Mínim:** copiar-lo a `web/css/vendor/bootstrap-4.5.0.min.css` i enllaçar-lo amb
   `asset()`. Fora una connexió i fora el `preconnect` a cdnjs.
2. **Recomanat:** generar-ne una versió retallada només amb les classes que fan servir
   les vistes (grid, `d-*`, `m*-*`, `p*-*`, `text-*`, `justify-content-*`,
   `align-items-*`, `collapse`, `navbar*`, `breadcrumb*`…). Es fa amb PurgeCSS sobre
   `resources/views/**/*.blade.php`, una sola vegada, i el resultat es commiteja. Ha de
   quedar en uns **4-6 KB en gzip**.
3. **Opcional, després:** amb un fitxer tan petit, posar-lo *inline* a `<style>` al
   `head` i estalviar-se la petició.

**Risc:** si PurgeCSS es deixa alguna classe que s'afegeix des de JS, el menú es
trencaria. Només n'hi ha dues, `show` i `collapse`, i cal posar-les a la *safelist*.
Cal revisar visualment totes les pàgines en mòbil i en escriptori.

### PSI-02 · Google Fonts: dos orígens externs i un repintat tardà — P0

**Impacte:** és la causa principal dels 1-2,2 s de retard de render a `/sobreCemav`,
`/serveis`, `/odontologia` i `/mutues`.

Ara es fa `preload as=style` del CSS de Google Fonts amb el truc de l'`onload`. No
bloqueja, però la cadena és llarga:

```
HTML → fonts.googleapis.com/css2 (DNS+TLS) → fonts.gstatic.com/*.woff2 (DNS+TLS)
     → swap: el text es torna a maquetar amb una altra mida → nou candidat LCP
```

Fraunces amb l'eix `opsz` pesa **66 KB** i Mulish **30 KB**.

**Arreglar.** Allotjar les fonts al nostre domini:

1. Baixar els `.woff2` *variables* només amb el subconjunt `latin` (els accents catalans
   hi són tots: `à è é í ï ò ó ú ü ç l·l`) a `web/fonts/`.
   - Mulish: un sol fitxer variable que cobreix de 400 a 800.
   - Fraunces: provar de fixar l'eix `opsz` o retallar-lo, per baixar dels 66 KB.
     Si no es fa servir el 500, treure'l.
2. `@font-face` a `base.css` amb `font-display: swap`.
3. **Fonts de reserva ajustades** (`size-adjust`, `ascent-override`,
   `descent-override`) sobre Arial (per a Mulish) i Georgia (per a Fraunces), perquè el
   canvi de font no mogui res. És el que elimina el segon candidat LCP.
4. `<link rel="preload" as="font" type="font/woff2" crossorigin>` **només** de la
   Mulish (text de cos). Precarregar-ne més competeix amb la imatge del hero.
5. Treure del `head` els tres `preconnect` (googleapis, gstatic, cdnjs) i el bloc
   `<noscript>` de Google Fonts.

**Avantatge afegit per RGPD:** carregar Google Fonts des dels servidors de Google envia
la IP del visitant a Google. Allotjant-les nosaltres, això desapareix.

### PSI-03 · Els fitxers estàtics no tenen capçaleres de cache — P1

**Impacte:** cada visita torna a validar CSS, imatges i fonts. Lighthouse en compta
46-598 KB per pàgina. La primera visita no es nota gaire, però les següents i la
navegació entre pàgines sí.

Comprovat amb `curl -I`. La **compressió gzip sí que està activa**, en contra del que deia
`SEO-28`. El que falta és la cache: no hi ha `Cache-Control` ni `Expires` a
`/css/*.css`, `/img/*.webp` ni `/favicon.ico`. Només hi ha `ETag` i `Last-Modified`.

**Arreglar** a `web/.htaccess`:

```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/webp            "access plus 1 year"
    ExpiresByType image/jpeg            "access plus 1 year"
    ExpiresByType image/png             "access plus 1 year"
    ExpiresByType image/svg+xml         "access plus 1 year"
    ExpiresByType image/x-icon          "access plus 1 year"
    ExpiresByType font/woff2            "access plus 1 year"
    ExpiresByType text/css              "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
</IfModule>
```

Amb un any de cache, **cal versionar els CSS**. Si no, un canvi a `home.css` no arribaria
als visitants que ja hi han entrat. Fes-ho amb `filemtime` (vegeu `PSI-04`), no amb un
número a mà. Substitueix `SEO-28`.

### PSI-04 · `especialitats.css?v={{ time() }}` desactiva la cache — P1

`resources/views/especialitats/index.blade.php:8` afegeix `?v=` amb **el segon actual**.
A les dues passades de Lighthouse la URL va ser diferent (`?v=1791027571` i
`?v=1791027590`): cada visita baixa el CSS de nou. Es veu que es va posar per saltar-se la
cache en desenvolupament.

**Arreglar:** un helper que faci servir la data de modificació del fitxer, i aplicar-lo a
tots els CSS a la vegada que `PSI-03`:

```blade
<link rel="stylesheet" href="{{ asset('css/especialitats.css') }}?v={{ filemtime(public_path('css/especialitats.css')) }}">
```

---

## B. Imatges

### PSI-05 · Logos de mútues de fins a 4.280 px d'ample — P1

**Impacte:** és la partida més gran de pes a `/` i a `/mutues`. Lighthouse estima que
s'hi poden estalviar **260-300 KB**.

| Fitxer | Mida real | Pes |
|---|---|---:|
| `Mutues/caser.webp` | 4152 × 1802 | 75 KB |
| `Mutues/mapfre.webp` | 4280 × 2400 | 41 KB |
| `Mutues/dkv.webp` | 2020 × 789 | 24 KB |
| `Mutues/Mutuacat.webp` | — | 19 KB |
| `Mutues/adeslas.webp` | — | 19 KB |

Es mostren a uns 150 px d'ample. A la portada, a més:

- no porten `width`/`height` (`unsized-images`);
- no porten `loading="lazy"`, tot i que són molt per sota del plec;
- el carrusel les repeteix dues vegades (`aria-hidden`). El navegador només les baixa
  una vegada, però sense `lazy` totes 21 entren a la primera càrrega.

**Arreglar:** redimensionar els 21 logos a **300 px d'ample** (2× per a pantalles retina),
WebP de qualitat 80. Tots plegats haurien de pesar uns 40 KB en lloc de 320 KB. Afegir-hi
`width`, `height` i `loading="lazy"`. És la part de logos de `SEO-29` i `SEO-32`.

### PSI-06 · Fotos de l'equip a 2.700 px per mostrar-les a 250 px — P1

**Impacte:** `/odontologia` en mòbil pesa 585 KB, i n'hi ha **344 KB** que són dues fotos.
Passa el mateix a cada especialitat amb fotos de professionals.

| Fitxer | Mida real | Pes |
|---|---|---:|
| `Fotos Treballadors/nuria.webp` | 2721 × 2721 | 184 KB |
| `Fotos Treballadors/jordiarn.webp` | 2479 × 2479 | 159 KB |
| `Fotos Treballadors/mariana.webp` | 2580 × 2580 | 141 KB |
| `Fotos Treballadors/MontseContreras.webp` | 2551 × 2551 | 136 KB |
| `Fotos Treballadors/eva.webp` | 2721 × 2721 | 120 KB |

`.doctor-img` les mostra a 250 × 250 px.

**Arreglar:** redimensionar-les totes a **500 × 500** (2×), WebP de qualitat 80: unes
15-25 KB cadascuna. Ja tenen `loading="lazy"`. És la part de fotos de `SEO-29`.

### PSI-07 · El hero de `/especialitats` i `/serveis` no es descobreix fins al CSS — P1

**Impacte:** `/especialitats` en mòbil perd 626 ms només esperant a descobrir la imatge
del LCP.

El hero és un `background-image` dins del CSS. El navegador no sap que l'ha de baixar fins
que ha baixat i processat el CSS. Lighthouse marca `lcp-discovery` com a fallat en totes
dues pàgines: *"la sol·licitud no és visible al document inicial"* i *"cal
fetchpriority=high"*. La portada i `/odontologia` sí que ja tenen el preload i no tenen
aquest problema.

**Arreglar:** posar el mateix `preload` a cada vista que tingui hero de fons:

```blade
<link rel="preload" as="image" href="{{ asset('img/wallpapers/hero3.webp') }}" fetchpriority="high">
```

`/especialitats` fa servir `hero1.webp`, segons `especialitats.css:492`, i `/serveis`
`hero2.webp`. Repassar totes les especialitats, que fan servir hero2/3/4. Amplia `SEO-30`.

### PSI-08 · Logo del menú: 1468×368 forçat a 250×60, i 29 KB — P1

**És l'única auditoria que treu punts a Pràctiques recomanades** (`image-aspect-ratio`,
96 → 100). A més, surt a totes les pàgines.

`includes/nav.blade.php:4` posa `style="height: 60px; width: 250px;"`. La proporció real
és 3,99:1 i la forçada 4,17:1, així que el logo es veu una mica aixafat. A més, el fitxer
és 6 vegades més gran del que cal.

**Arreglar:**
- Redimensionar `logoPrincipal.webp` a **500 × 125** (2×): unes 6 KB.
- Treure l'`style` inline i posar `width="240" height="60"` (la proporció real), o bé
  `height: 60px; width: auto` a `.logo`.
- `alt="CEMAV, Centre de Medicina Amable de Vic"` en lloc de `alt="logo"` (vegeu `SEO-31`).

### PSI-09 · `favicon.ico` de 32 KB — P3

Conté sis mides, una d'elles de 250×250. Cada pàgina el baixa, i ara mateix sense cache.

**Arreglar:** regenerar-lo amb només 16, 32 i 48 px (≤ 5 KB). Opcionalment, afegir un
`favicon.svg` i un `apple-touch-icon.png` de 180 px.

### PSI-16 · Ionicons des d'unpkg: cinc peticions encadenades a un altre domini — P0

*Afegit el 05/10/2026: no va sortir a la primera auditoria i es va trobar en mesurar
després de les tandes 1-4.*

Amb Bootstrap i les fonts ja servits des del domini, totes les pàgines es quedaven en
**93-96 en mòbil**, amb un LCP de ~3 s. L'únic que quedava fora era Ionicons:
`ionicons.esm.js` → `p-d15ec307.js` → `p-1c0b2c47.entry.js` → `p-40ae2aa7.js` → un SVG
per icona. Són cinc nivells de peticions a `unpkg.com`, i la simulació de Lighthouse les
compta totes abans del LCP. Traient-lo de la mateixa còpia de la pàgina, totes passaven a
**99** i l'FCP baixava d'1,8 s a 0,9 s.

**Fet:** les 34 icones que fa servir el web són a `resources/icons/` (SVG d'Ionicons
7.1.0, llicència MIT), i la directiva `@icon('nom')` (`App\Support\Icon`) les escriu
inline dins d'un `<ion-icon>`. Així els selectors CSS que ja hi havia segueixen valent.
Els estils que Ionicons posava dins del seu shadow DOM ara són a `base.css`. Les 24
captures de comparació són idèntiques píxel a píxel. A més, desapareix l'últim domini
de tercers que es carregava a totes les pàgines.

---

## C. Pàgines concretes i servidor

### PSI-10 · El mapa de `/contacte` carrega ~450 KB de JavaScript de Google — P2

**Impacte:** `/contacte` en escriptori pesa 924 KB. Més de la meitat és Google Maps:
`places.js` 92 KB, `main.js` 84 KB, `init_embed.js` 75 KB, `util.js` 71 KB, `common.js`,
tiles i una còpia de Roboto i Google Sans. L'iframe ja porta `loading="lazy"`, però en
escriptori queda dins de la primera pantalla i es carrega igualment.

En mòbil, en canvi, queda sota el plec i no es baixa (657 KB i 95 punts).

**Arreglar amb una *façana*:** una imatge estàtica del mapa, una captura en WebP de 30 KB
servida des del nostre domini, amb un botó "Veure el mapa interactiu". En clicar-lo
s'injecta l'iframe. El botó "Obre a Maps" que ja hi ha continua sent l'opció principal.

**A comprovar també per RGPD:** l'iframe de Google Maps es carrega **sense passar pel
consentiment de cookies**, i Google hi pot deixar cookies. `CLAUDE.md` diu explícitament
que no hi pot haver scripts de tercers amb cookies fora del gate. Amb la façana, l'iframe
només es carrega quan l'usuari ho demana, i això també resol aquest punt.

### PSI-11 · TTFB de 340-970 ms — P2

El HTML el genera Laravel a cada petició, en hosting compartit, i el servidor només
parla **HTTP/1.1**: no hi ha HTTP/2, i per tant cada recurs del mateix domini va per una
connexió limitada. El TTFB varia molt d'una passada a l'altra (966 ms a
`/especialitats`, 340 ms a `/odontologia`).

No és la causa principal del problema i no ho controlem del tot, però:

- `php artisan config:cache` i `php artisan view:cache` com a pas del deploy, o
  executats un cop a cdmon. **`route:cache` no:** les rutes són closures i Laravel 8 no
  les pot posar en cache.
- Comprovar al panell de cdmon que **OPcache** està activat per a PHP 8.2.
- Preguntar a cdmon si el pla permet HTTP/2. Amb `PSI-01` i `PSI-02` fets, totes les
  peticions crítiques serien al nostre domini, i HTTP/2 hi marcaria la diferència.

---

## D. Accessibilitat

### PSI-12 · Contrast de color insuficient — P1

**Impacte:** és l'auditoria `color-contrast` (pes 7), la que treu punts a **totes** les
pàgines. Arreglant-la, Accessibilitat passa a 98-100.

Mínim WCAG AA: **4,5:1** per a text normal.

| Color actual | On | Contrast | Proposta | Contrast nou |
|---|---|---:|---|---:|
| `#3090C7` sobre blanc | `.hero-btn`, `.title-dep`, `.rel-totes`, enllaç del banner, enllaç a eMedicalBox | 3,54 | `var(--blue-deep)` `#13639C` | ≈ 6,3 |
| Blanc sobre `#3090C7` | Breadcrumb, `.rel-cita`, botó *Acceptar* del banner | 3,54 | fons `var(--blue-deep)` | ≈ 6,3 |
| `#074169` sobre `#3090C7` | Breadcrumb, element actiu | 3,02 | blanc sobre `--blue-deep`, en negreta | ≈ 6,3 |
| Blanc sobre `#1E84C6` (`--blue`) | Botó "Obre a Maps" del footer | 4,06 | fons `--blue-deep` | ≈ 6,3 |
| `#7E98A8` sobre `#11324A` | Línia del copyright del footer | 4,40 | `#94ABBA` | 5,57 |
| `#999999` sobre blanc | `<p>` de la portada (`home.css:196`) | 2,84 | `var(--ink-soft)` `#4A6072` | ≈ 6,6 |
| `#888888` sobre blanc | `.filosofia-sub` de `/sobreCemav` | 3,54 | `var(--ink-soft)` | ≈ 6,6 |
| `#777777` sobre blanc | `<p>` de les especialitats | 4,47 | `var(--ink-soft)` | ≈ 6,6 |
| `#007BFF` sobre blanc | `.title-dep` de la portada (blau per defecte de Bootstrap) | 3,97 | `var(--blue-deep)` | ≈ 6,3 |

**Observació de disseny:** `#3090C7` no és cap token de `base.css`; és un valor literal
que ve de la versió 1 i que surt a molts fulls d'estil. El token `--blue` (`#1E84C6`)
tampoc arriba a 4,5:1 com a color de text sobre blanc. El més net és fer servir
`--blue-deep` sempre que el blau sigui **text o fons de text**, i deixar `--blue` i
`#3090C7` per a elements decoratius (icones, vores, ombres).

Es nota visualment: els botons i els enllaços quedaran d'un blau més fosc. **Cal validar-ho
abans de fer-ho.**

### PSI-13 · Ordre d'encapçalaments: `<h4>` sense `<h3>` al davant — P2

`heading-order` falla a totes les pàgines per dos components compartits:

- **Footer** (`includes/footer.blade.php:11, 21, 30`): *Links útils*, *Horari* i
  *Contacte* són `<h4>`, i el que ve abans a la pàgina és un `<h2>`.
- **Banner de cookies** (`includes/head.blade.php`): *Aquest web utilitza cookies* és
  un `<h4>`.
- A `/contacte` també hi ha un `<h3>` que salta nivell.

**Arreglar:** els títols del footer, com a `<h2 class="foot-title">` amb la mateixa mida
d'ara. El del banner, com a `<p class="cc-title">` (és un diàleg i no forma part de
l'esquema del document). L'aspecte no canvia gens. Coordina-ho amb `SEO-34`.

### PSI-14 · Enllaç de `/serveis` que només es distingeix pel color — P3

L'enllaç a `emedicalboxvic.com` dins d'un paràgraf no té subratllat, i el blau només té
1,62:1 de contrast amb el text del voltant (`link-in-text-block`, pes 7, només a
`/serveis`). Per això `/serveis` puntua 93 en lloc de 95.

**Arreglar:** `text-decoration: underline` als enllaços dins de paràgrafs.

---

## E. Pràctiques recomanades i SEO

### PSI-15 · Res més que el logo

Pràctiques recomanades queda a **96** només per `image-aspect-ratio` del logo. Es resol
amb `PSI-08`. No hi ha errors de consola, ni APIs obsoletes, ni biblioteques vulnerables
(jQuery ja no hi és), ni problemes d'HTTPS.

SEO puntua **100** a les 7 pàgines. Les feines pendents de la [auditoria SEO](seo-auditoria.md)
no són coses que Lighthouse mesuri: contingut, schema i enllaçat.

---

## Previsió

Si tot va bé, després de cada tanda (± la variació de Lighthouse):

| | Rendiment mòbil | Rendiment escriptori | Access. | Pràct. | SEO |
|---|---:|---:|---:|---:|---:|
| Ara | 76-95 | 76-98 | 93-96 | 96 | 100 |
| + Tanda 1 (imatges, cache, logo) | 82-96 | 85-98 | 93-96 | **100** | 100 |
| + Tanda 2 (Bootstrap i fonts locals) | **93-99** | **95-100** | 93-96 | 100 | 100 |
| + Tanda 3 (contrast, encapçalaments) | 93-99 | 95-100 | **98-100** | 100 | 100 |
| + Tanda 4 (mapa, servidor) | 95-99 | 97-100 | 98-100 | 100 | 100 |

Siguem realistes. En mòbil, el TTFB d'un hosting compartit (300-900 ms) es menja una part
del pressupost de 1,8 s d'FCP. Arribar a 95 a totes les pàgines en mòbil és factible un cop
fetes les tandes 1 i 2, però en alguna passada pot sortir un 92-94 per pura variació.

---

## Pla d'acció

### Tanda 1 — imatges i cache (sense canvis visuals)

- [x] **PSI-05** Logos de mútues dins de 400×300 (320 KB → 70 KB) + `width`/`height`/`lazy` al carrusel
- [x] **PSI-06** Fotos de l'equip a 500 × 500 com a màxim (1,8 MB → 270 KB)
- [x] **PSI-08** Logo a 500 × 125 (29 → 15 KB), `width=240 height=60`, una sola regla `.logo` a `base.css`, `alt` descriptiu
- [x] **PSI-09** Favicon només amb 16, 32 i 48 px (32 → 4 KB)
- [x] **PSI-07** `preload` del hero a `/especialitats` (hero1), `/serveis` (hero2) i `/oftalmologia` (hero3). La resta ja en tenien
- [x] **PSI-04** Directiva `@assetv()` (`App\Support\Asset`) a tots els CSS; fora el `time()`
- [x] **PSI-03** `mod_expires` al `.htaccess`: 1 any CSS/JS/fonts, 1 mes imatges. **Verificar amb `curl -I` després del deploy**

### Tanda 2 — camí crític (cal revisar visualment totes les pàgines)

- [x] **PSI-02** Mulish (400-800, 27 KB) i Fraunces (400-600, 57 KB) a `web/fonts/` + `Mulish Fallback` / `Fraunces Fallback`
- [x] **PSI-01** `web/css/vendor/bootstrap-4.5.0.purged.min.css`: 160 KB → 10 KB (3 KB en gzip). Comanda per regenerar-lo a `CLAUDE.md`
- [x] Treure els `preconnect` a googleapis, gstatic i cdnjs

### Tanda 3 — accessibilitat (canvia el to del blau: validar-ho abans)

- [x] **PSI-12** Contrast: `--blue-deep` per a text i botons, grisos a `--ink-soft`, breadcrumb sobre `--blue-deep`
- [x] **PSI-13** Títols del footer a `<h2 class="foot-title">`, títol del banner a `<p>`, targetes de `/contacte` de `h3` a `h2`
- [x] **PSI-14** Subratllar els enllaços dins de paràgrafs (`.servei-card a`)

### Tanda 4 — pàgines concretes i servidor

- [x] **PSI-10** Façana per al mapa de `/contacte`: cap petició a Google fins al clic
- [x] **PSI-16** Ionicons com a SVG inline amb `@icon()`: fora unpkg
- [x] Contrast i subratllat també a les quatre pàgines legals (`legal.css`, botó `.cc-revoke`)
- [ ] **PSI-11** Pendent, fora del codi: OPcache i HTTP/2 al panell de cdmon. `config:cache` només si hi ha SSH

### Registre de mesures

Torna a passar Lighthouse després de cada tanda i apunta-ho aquí.

| Data | Després de | `/` m / e | `/especialitats` m / e | `/odontologia` m / e | `/serveis` m / e | `/sobreCemav` m / e | `/mutues` m / e | `/contacte` m / e |
|---|---|---|---|---|---|---|---|---|
| 03/10/2026 | Línia base | 94 / 83 | 85 / 98 | 76 / 98 | 81 / 90 | 82 / 76 | 92 / 87 | 95 / 86 |
| 05/10/2026 | Tandes 1-4 + PSI-16, **en local** (*) | 99 / 100 | 99 / 100 | 99 / 100 | 99 / 100 | 99 / 100 | 99 / 100 | 100 / 100 |

(*) Mesurat sobre una còpia estàtica de les pàgines renderitzades, servida amb gzip
des de la màquina local. Accessibilitat, Pràctiques recomanades i SEO surten a 100 a
les 7 pàgines; les quatre legals donen 100 / 100 / 100 i SEO 69, que és el `noindex`
volgut. La mateixa mesura feta a la versió d'abans donava 80-95 en mòbil, així que la
millora és real. **Però en local el TTFB és pràcticament zero**: la xifra de producció
serà més baixa. Cal repetir-la contra `https://www.cemavvic.cat` després del deploy.

Comanda per repetir-la (Chrome instal·lat; Git Bash):

```bash
for p in "" especialitats odontologia serveis sobreCemav mutues contacte; do
  n=${p:-home}
  npx lighthouse "https://www.cemavvic.cat/$p" --output=json --output-path=lh/$n-mobile.json \
      --chrome-flags="--headless=new" --quiet
  npx lighthouse "https://www.cemavvic.cat/$p" --preset=desktop --output=json \
      --output-path=lh/$n-desktop.json --chrome-flags="--headless=new" --quiet
done
```
