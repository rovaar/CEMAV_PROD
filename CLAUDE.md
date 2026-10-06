# CEMAV — Centre de Medicina Amable de Vic

Web corporativa (solo informativa, sin backend de negocio) del centro médico CEMAV.
Dominio de producción: **https://www.cemavvic.cat**

## Stack

| Pieza | Versión / detalle |
|---|---|
| Laravel | 8.x (`composer.json` pide `php ^8.2`) |
| PHP | **8.2**, mínimo real — lo exigen 16 paquetes del `composer.lock`. Techo: 8.5 (`nette/utils`) |
| Frontend | Blade + CSS escrito a mano en `web/css/`. **Solo el CSS** de Bootstrap 4.5, recortado con PurgeCSS y servido desde `web/css/vendor/` |
| JavaScript | Vanilla. **No hay jQuery, ni Popper, ni Bootstrap JS** — retirados el 26/08/2026 |
| Iconos | Ionicons 7.1 como **SVG inline** desde `resources/icons/`, con `@icon('nombre')` (ya no por CDN) |
| Tipografías | Fraunces (títulos) + Mulish (texto), **autoalojadas** en `web/fonts/` (ya no Google Fonts) |
| Hosting | cdmon, hosting compartido, deploy por FTP |

**Laravel Mix está prácticamente sin usar.** `webpack.mix.js` apunta a
`resources/js/app.js` y `resources/css/app.css`, que no forman parte del sitio real.
El CSS de producción se escribe a mano directamente en `web/css/`. No hace falta
`npm run prod` para desplegar.

## Estructura peculiar de este repo

- **El directorio público es `web/`, no `public/`.** `public` es un symlink a `web/`.
  Es así porque cdmon sirve `web/` como raíz del dominio. No lo cambies.
- Todo el CSS de producción vive en `web/css/*.css`, un fichero por página
  (`home.css`, `especialitats.css`, `contacte.css`…) más `base.css` compartido.
- `web/img/` contiene las imágenes; se sirven en `.webp` con `loading="lazy"`.

## Idioma

**Todo el contenido de cara al usuario está en catalán.** Títulos, meta descriptions,
textos legales, breadcrumbs. Los mensajes de commit también van en catalán.
Los comentarios de código mezclan catalán y castellano.

## Convenciones de las vistas

Todas las páginas siguen el mismo esqueleto:

```blade
@include('includes.head', [
    'title'       => 'Títol de la pàgina | Centre de Medicina Amable de Vic',
    'description' => "Meta description en català.",
])
@include('includes.nav')
@include('includes.breadcrumb', ['pageTitle' => 'Nom de la pàgina'])

@push('head-css')  <link rel="stylesheet" href="@assetv('css/lapagina.css')">  @endpush
@push('head-schema')  {{-- JSON-LD Schema.org --}}  @endpush

{{-- contingut --}}

@include('includes.footer')
```

- `includes.head` acepta `$title`, `$description`, `$robots` y expone los stacks
  `head-css` y `head-schema`. Genera canonical, hreflang, Open Graph y Twitter Card
  automáticamente a partir de `$title`/`$description`.
- Los enlaces internos se escriben siempre `{{URL::to('/ruta')}}`.
- Los CSS propios se enlazan con `@assetv('css/lapagina.css')`, no con `asset()`: añade
  `?v=<filemtime>` y el `.htaccess` los sirve con un año de caché. Con `asset()` a secas, un
  cambio de CSS tardaría un año en llegar a quien ya ha visitado el web. La directiva vive en
  `AppServiceProvider` y nunca da error: si el fichero no existe, devuelve la URL sin versión.
- El sistema de diseño (colores, sombras, escalas tipográficas) está en
  `web/css/base.css` como custom properties. Úsalas en lugar de valores literales.

## Rutas

`routes/web.php` son closures que devuelven vistas, sin controladores.
Al añadir una página nueva hay que tocar **cuatro** sitios:

1. `routes/web.php` — la ruta
2. `resources/views/…` — la vista
3. `web/sitemap.xml` — la URL (se mantiene a mano)
4. `resources/views/includes/nav.blade.php` y/o `especialitats/index.blade.php` — el enlace

Olvidar el paso 3 o 4 es el error habitual en este repo. Una ruta que apunte a una
vista inexistente da un 500 opaco en cdmon, así que comprueba que la vista existe
antes de mergear.

## Páginas legales

`avislegal`, `privacitat`, `termes` y `politicacookies` viven en
`resources/views/includes/` pese a ser páginas completas, no includes.

- Las cuatro son **`noindex, follow`** y por eso **no van en `web/sitemap.xml`**:
  enviar una URL noindex en el sitemap es un error en Search Console.
- Comparten `web/css/legal.css` (clase `.legal-doc`). No vuelvas a meter un bloque
  `<style>` inline en ninguna de ellas.
- Las tablas van envueltas en `<div class="legal-table">` para que no desborden en móvil.
- El footer las enlaza todas desde la fila `.foot-legal`.

## Cookies y analítica

Google Analytics (`G-L3V62LP2WB`) **no se carga hasta que el usuario acepta**.
El banner de consentimiento está inline en `includes/head.blade.php` (antes era un
include propio, `includes/cookies.blade.php`, ya eliminado). Cumple RGPD/LSSI-CE:
botones aceptar/rechazar simétricos y `anonymize_ip`. `politicacookies.blade.php`
expone `cemavResetCookies()` para revocar el consentimiento.

No añadas scripts de terceros que dejen cookies sin pasarlos por ese gate.

## Deploy

Push a **`main`** dispara `.github/workflows/deploy.yml`, que sube por FTP en dos
tandas: `web/` → `./web/` y el core de Laravel → `./` (excluyendo `.env`, logs,
`node_modules/`, tests, `*.md` y ficheros `*copy*`).

- **El deploy real está activo** — ya no hay `dry-run`.
- El `.env` del servidor se creó a mano una sola vez y el deploy nunca lo toca.
- La rama de trabajo es `dev`; `main` es producción.

Detalle completo del primer despliegue y del rollback: [docs/deploy-cdmon.md](docs/deploy-cdmon.md).

⚠️ **El primer deploy todavía no se ha hecho.** `origin/main` sigue en `b94596f` y en
producción está lo que se subió por FTP a mano hace años. Ese primer despliegue va
acompañado del cambio de PHP 7.4 → 8.2 en cdmon, y las dos cosas tienen que ir en la
misma ventana: el `vendor/` del servidor no arranca en PHP 8 y el nuevo no arranca en
7.4. Plan, secuencia y copia de seguridad previa:
[docs/actualizacion-dependencias.md](docs/actualizacion-dependencias.md).

## SEO

La auditoría SEO completa del sitio está en
[docs/seo-auditoria.md](docs/seo-auditoria.md): 49 hallazgos con identificador estable
(`SEO-01`…`SEO-49`), priorizados y con plan de acción por tandas.

**Consúltala antes de tocar `includes/head.blade.php`, el sitemap, el schema JSON-LD o
las etiquetas `<h1>`.** Varias decisiones que parecen mejoras ya están analizadas ahí —
incluida una lista de lo que ya está bien y no hay que "corregir". Al arreglar algo,
cita el identificador en el mensaje de commit y marca la casilla del plan de acción.

## JavaScript

Del stack original solo queda el **CSS** de Bootstrap 4.5, que sí sostiene todo el
layout: el grid (`container`, `row`, `col-*`) y las utilidades (`mb-4`, `mt-5`,
`text-center`, `justify-content-center`) suman ~357 usos en las vistas y no están
redefinidas en `web/css/`. **No lo quites.**

El **JavaScript** de Bootstrap, jQuery y Popper se retiraron el 26/08/2026: entre los
tres solo daban servicio a un `data-toggle="collapse"`, el botón hamburguesa. Ahora lo
resuelven unas líneas de JS nativo al final de `includes/footer.blade.php`.

- **No vuelvas a añadir jQuery, Popper ni `bootstrap.min.js`.** Si necesitas un
  componente de Bootstrap que requiera JS (modal, carrusel, tooltip), escríbelo a mano
  o plantéalo antes: ahora mismo no hay ninguno en todo el web.
- El desplegable de Especialitats se abre con una regla CSS `:hover` en
  `includes/head.blade.php`, no con JS, y solo por encima de 992px. En móvil el `▾` se
  oculta y el enlace lleva a `/especialitats`.
- Sin librerías por CDN no hay atributos `integrity` que mantener sincronizados en 18
  ficheros — que es justo lo que provocó el hallazgo `SEO-03`.

## Rendimiento (PageSpeed)

Auditoría y plan en [docs/rendiment-pagespeed.md](docs/rendiment-pagespeed.md)
(`PSI-01`…`PSI-16`). Lo que hay que saber para no deshacerlo:

- **Bootstrap recortado.** `web/css/vendor/bootstrap-4.5.0.purged.min.css` solo contiene
  las clases que usan las vistas (10 KB en lugar de 160 KB). **Si añades a una vista una
  clase de Bootstrap que no se usaba en ningún otro sitio (`col-lg-3`, `d-md-flex`…),
  no tendrá efecto hasta regenerar el fichero:**

  ```bash
  curl -s -o bootstrap-4.5.0.min.css https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css
  npx purgecss@6 --css bootstrap-4.5.0.min.css --content "resources/views/**/*.blade.php"       --safelist show collapse collapsing active --output web/css/vendor/bootstrap-4.5.0.purged.min.css
  rm bootstrap-4.5.0.min.css
  ```

  (`show`/`collapse` van en la safelist porque las añade el JS del menú.)
- **Fuentes** en `web/fonts/`, declaradas en `base.css` con fuentes de reserva ajustadas
  (`Mulish Fallback`, `Fraunces Fallback`). Cualquier `font-family` nuevo debe incluirlas:
  `'Mulish', 'Mulish Fallback', sans-serif`. Si cambias un `.woff2`, cámbiale el nombre
  (caché de un año) y actualiza también el `preload` de `includes/head.blade.php`.
- **Imágenes:** a 2× del tamaño al que se muestran, como mucho. Fotos del equipo a
  500×500, logos de mútua dentro de 400×300. Una foto de móvil sin redimensionar son
  150-250 KB.
- **Hero con `background-image`:** cada vista lleva su `<link rel="preload" as="image"
  fetchpriority="high">`. Si no, el navegador no descubre la imagen del LCP hasta leer el CSS.
- **Iconos:** `@icon('heart-outline')`, nunca `<ion-icon name="…">` a mano: ya no se carga
  el JS de Ionicons y un `<ion-icon>` vacío no pinta nada. Para un icono nuevo, descarga
  `https://unpkg.com/ionicons@7.1.0/dist/svg/<nombre>.svg` a `resources/icons/`. No
  vuelvas a cargar Ionicons desde unpkg: era el último freno del LCP en móvil (`PSI-16`).
- **Mapa de `/contacte`:** es una fachada que solo carga el iframe de Google al hacer clic.
  No vuelvas a poner el iframe directamente: son ~450 KB y cookies de Google fuera del
  consentimiento.
- **Colores de texto:** para texto o botones azules usa `--blue-deep` (6,4:1 sobre blanco).
  `--blue` y el antiguo `#3090C7` no llegan a 4,5:1 y solo valen para iconos, bordes o
  títulos muy grandes.

## Al trabajar aquí

- No commitees `web/js/app.js`, `web/css/app.css` ni `mix-manifest.json` (generados).
- Los ficheros `* copy.php` son borradores locales y están gitignorados; no los subas.
- Antes de mergear a `main`, comprueba que ninguna ruta apunte a una vista inexistente:
  el hosting compartido devuelve un 500 opaco y cuesta diagnosticarlo.
