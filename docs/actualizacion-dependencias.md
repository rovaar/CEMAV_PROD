# Actualización de PHP y librerías

> **Plan de migración.** Se ejecuta **una sola vez**, en el mismo tramo que el primer
> deploy real. El runbook del deploy en sí está en [deploy-cdmon.md](deploy-cdmon.md);
> aquí está el **qué** hay que actualizar y el **porqué**.
>
> **Estado:** desplegado el 29/09/2026 — queda la verificación manual (fase E) y la fase F.
> **Última revisión:** 29/09/2026

---

## Por qué existe este documento

El web público de cemavvic.cat corre sobre **PHP 7.4**, que está fuera de soporte
(EOL desde noviembre de 2022) y por el que cdmon cobra **2,95 €/mes** de soporte
extendido. Una versión soportada es gratis.

Pero el cambio de versión no es un clic en el panel. Se intentó y **el web se cayó**,
y hubo que volver a 7.4. Este documento explica por qué pasó eso, por qué era
esperable, y cuál es la secuencia correcta.

De paso recoge el estado de las librerías de frontend, que llevan sin tocarse desde
que se montó el web y arrastran versiones inconsistentes entre páginas.

---

## 0. Punto de partida

Verificado sobre el repositorio el 26/08/2026.

| Cosa | Estado real |
|---|---|
| Rama publicada | `origin/main` = `b94596f` (02/06/2026) |
| Rama de trabajo | `dev`, **52 commits por delante** de `main` |
| ¿El deploy automático ha corrido alguna vez? | **No.** `b94596f` es anterior a `62282d7`, el commit que quitó el `dry-run` |
| Qué hay en el servidor | Lo que se subió por FTP a mano hace años, con un `vendor/` resuelto sobre PHP 7.x |
| PHP en cdmon | 7.4 (EOL, de pago) |
| PHP en local y en CI | 8.2 |

**Consecuencia:** el primer push a `main` no es un deploy incremental. Sube el
proyecto entero, incluido un `vendor/` nuevo de ~3000 ficheros que **no es el que
hay ahora en el servidor**.

---

## 1. PHP: de 7.4 a 8.2

### 1.1 Por qué el `vendor/` nuevo no puede correr en 7.4

El `composer.lock` de este repositorio se resolvió sobre PHP 8.2, y arrastra
**16 paquetes de producción que declaran PHP 8 o superior**:

| Paquete | Versión | Requiere |
|---|---|---|
| `symfony/css-selector` | v7.4.8 | `>=8.2` |
| `nette/utils` | v4.1.3 | `8.2 - 8.5` |
| `brick/math` | 0.14.8 | `^8.2` |
| `dragonmantank/cron-expression` | v3.6.0 | `^8.2` … `^8.5` |
| `nette/schema` | v1.3.5 | `8.1 - 8.5` |
| `psr/log` | 2.0.0 | `>=8.0.0` |
| `symfony/translation` | v6.4.34 | `>=8.1` |
| `symfony/event-dispatcher` | v6.4.36 | `>=8.1` |
| `symfony/string` | v6.4.34 | `>=8.1` |
| `ramsey/collection` | 2.1.1 | `^8.1` |
| `ramsey/uuid` | 4.9.2 | `^8.0` |
| + `carbonphp/carbon-doctrine-types`, `symfony/deprecation-contracts`, `symfony/service-contracts`, `symfony/translation-contracts`, `symfony/event-dispatcher-contracts` | | `>=8.0` / `>=8.1` |

Y no es solo metadato de Composer: el código usa sintaxis que PHP 7.4 **no sabe
parsear**, así que el fallo es fatal, no un aviso.

- `vendor/psr/log/src/LoggerInterface.php` → `emergency(string|\Stringable $message, ...)`
  — tipos unión, PHP 8.0+
- `vendor/brick/math/src/BigDecimal.php` → `final readonly class BigDecimal`
  — `readonly`, PHP 8.2+

### 1.2 Por qué se cayó el web al cambiar la versión en el panel

Porque se probó PHP 8 contra el **código viejo**, no contra el nuevo.

El `vendor/` que hay ahora en el servidor se instaló hace años sobre PHP 7.x, así
que Composer resolvió la generación de dependencias compatible con 7.4 — que es
justamente la que rompe en PHP 8.

O sea que hay dos árboles de dependencias incompatibles entre sí:

```
vendor/ EN EL SERVIDOR   -> resuelto sobre PHP 7.x -> funciona en 7.4, revienta en 8.x
vendor/ QUE SUBE EL CI   -> resuelto sobre PHP 8.2 -> revienta en 7.4, funciona en 8.2
```

**El cambio de PHP no falló. Falló porque se hizo aislado.** Probar PHP 8 sin
desplegar el código nuevo no podía funcionar, y volver a 7.4 fue la reacción
correcta.

### 1.3 La consecuencia: PHP y deploy son un solo paso

No se puede "cambiar PHP y verificar que todo sigue bien" antes de desplegar, ni
"desplegar y cambiar PHP la semana que viene". Cada mitad por separado deja el web
caído. **Van juntas, en la misma ventana, y hay downtime durante el proceso.**

> ⚠️ Esto contradice el Paso 1 de [deploy-cdmon.md](deploy-cdmon.md), que decía
> cambiar PHP primero. Ese paso está corregido y ahora apunta aquí.

### 1.4 Versión destino: **PHP 8.2**

| Versión | Veredicto |
|---|---|
| 8.0, 8.1 | ❌ Insuficientes. `symfony/css-selector`, `nette/utils`, `brick/math` y `cron-expression` piden `>=8.2` |
| **8.2** | ✅ **La elegida.** Es la del workflow de CI y la del entorno local, o sea la misma contra la que Composer resolvió el `lock`. Cero sorpresas |
| 8.3, 8.4 | ⚠️ Probablemente irían (`nette/utils` tolera hasta 8.5), pero Laravel 8.83 no está testeado ahí. Sin ventaja a cambio de riesgo |
| 8.5+ | ❌ Fuera del techo de `nette/utils` (`8.2 - 8.5`) |

El techo real del árbol es **8.5**, marcado por `nette/utils`. Cuando cdmon retire
8.2 habrá que revisar este documento.

### 1.5 Extensiones que deben estar activas

Al cambiar de versión en cdmon, las extensiones se configuran **por versión**: las
que estaban activas en 7.4 no se heredan. Estas son las que pide el árbol de
dependencias:

```
ctype  dom  fileinfo  iconv  json  libxml  mbstring  openssl  pcre  tokenizer
```

El workflow de CI activa además `pdo`, `xml` y `bcmath`. No hacen falta para servir
el web (no hay base de datos), pero si el panel las ofrece, actívalas igual.

### 1.6 `composer.json` miente y hay que arreglarlo

```json
"require": {
    "php": "^7.3|^8.0",     <- falso: el árbol instalado exige >=8.2
```

Como el `composer.json` declara un mínimo que ya no es cierto, Composer **nunca
avisó** de la incompatibilidad: instala tan contento en cualquier PHP 8 y produce
un `vendor/` que no arranca donde toca.

**Cambiar a `"php": "^8.2"`.** Es un cambio de metadatos, no toca ninguna
dependencia. A partir de ahí, un `composer install` en un PHP incorrecto falla con
un mensaje claro en vez de dejar el problema para producción.

> ⚠️ No hace falta regenerar el `composer.lock` y **conviene no hacerlo**. El `lock`
> actual está probado en local. Un `composer update` justo antes de publicar mete
> versiones nuevas sin probar en el peor momento posible. Cambia solo el
> `composer.json`; si Composer se queja de que el `lock` está desactualizado,
> `composer update --lock` regenera únicamente el hash sin tocar versiones.

---

## 2. Backend: dependencias de Composer

**En esta migración no se actualiza ninguna.** El `composer.lock` se queda como está.

| Paquete | Versión | Nota |
|---|---|---|
| `laravel/framework` | v8.83.29 | Última de la rama 8.x. Fuera de soporte oficial (EOL enero 2023) |
| `guzzlehttp/guzzle` | 7.10.0 | Al día |
| `nesbot/carbon` | 2.73.0 | Al día en la rama 2 |
| `swiftmailer/swiftmailer` | v6.3.0 | Abandonado; Laravel 9 lo sustituyó por Symfony Mailer. **Este web no envía correo** (contacto es un `mailto:`), así que no se usa |
| `monolog/monolog` | 2.11.0 | Al día en la rama 2 |

**Sobre Laravel 8 → 11/12:** es un proyecto aparte, no un paso de esta migración.
Este web son closures en `routes/web.php` que devuelven vistas Blade, sin modelos,
sin base de datos y sin controladores, así que el salto sería mucho menos doloroso
de lo normal — pero sigue siendo un cambio de framework completo, y no se hace en
la misma ventana en la que además cambias de versión de PHP y publicas 52 commits.

Anotado como trabajo futuro. No bloquea nada: Laravel 8.83 funciona en PHP 8.2.

---

## 3. Frontend

### 3.1 Estado actual

| Librería | Versión | Dónde se carga |
|---|---|---|
| Bootstrap **CSS** | 4.5.0 (cdnjs) | `includes/head.blade.php:53` |
| Bootstrap **JS** | **4.0.0** (maxcdn) | al pie de 18 vistas |
| jQuery | **3.2.1 slim** (code.jquery.com) | al pie de 18 vistas |
| Popper | 1.12.9 (cdnjs) | al pie de 18 vistas |
| Ionicons | 5.5.2 (unpkg) | `includes/head.blade.php:70-71` |

Dos incoherencias:

1. **CSS 4.5.0 con JS 4.0.0** en la misma página. Versiones distintas del mismo
   Bootstrap.
2. **`serveis/serveis.blade.php` va por libre:** carga jQuery 3.5.1, el bundle de
   `bootstrap@4.5.2` desde jsDelivr y **Ionicons 7.1.0** — mientras el `head` ya le
   ha cargado Ionicons 5.5.2. Esa página carga dos versiones mayores de Ionicons a
   la vez, y sus dos scripts son los únicos del web **sin `integrity`**.

MDBootstrap 4.19 y Font Awesome 5.8 **ya no se cargan** — retirados el 25/08/2026
porque ninguna vista usaba una sola de sus clases. `CLAUDE.md` todavía los lista;
hay que corregirlo.

### 3.2 Qué se usa de verdad

Antes de decidir versiones, lo que el web realmente necesita de esos ~85 KB de JS:

| Comprobación | Resultado |
|---|---|
| `$.ajax` / `$.get` / `$.post` | **0 usos** |
| jQuery en scripts propios (`head`, `footer`, `politicacookies`) | **0 usos** — todo es vanilla |
| Componentes JS de Bootstrap | **uno**: `data-toggle="collapse"`, el botón hamburguesa de `nav.blade.php:5` |
| `data-toggle="dropdown"` | **0 usos** — el desplegable de Especialitats se abre con una regla CSS `:hover` en `head.blade.php` |
| Tooltips, popovers, modales, carruseles | ninguno |

**Popper.js se carga en 18 páginas y no hace absolutamente nada.** Solo existe para
posicionar dropdowns, tooltips y popovers de Bootstrap, y aquí no hay ninguno
gestionado por JS.

### 3.3 Decisión: retirar jQuery, Popper y Bootstrap JS

En vez de actualizar tres librerías, **se quitan las tres** y se sustituye la única
funcionalidad que aportan por unas líneas de JavaScript nativo.

**Qué se gana:**

- ~85 KB menos de JS por página y 3 conexiones a CDN menos
- Desaparecen las vulnerabilidades conocidas de jQuery 3.2.1
  (CVE-2019-11358 prototype pollution, CVE-2020-11022 / 11023 XSS) y de
  Bootstrap 4.0.0 (CVE-2018-14041 / 14042, XSS en tooltip y popover vía `data-*`)
- Desaparecen los tres `integrity` que hay que mantener a mano en 18 ficheros —
  el problema que ya provocó el hallazgo **SEO-03**
- Menos peticiones a terceros: mejor LCP y menos IPs de pacientes enviadas a
  code.jquery.com, cdnjs y maxcdn

**Qué NO se toca: el Bootstrap CSS 4.5.0 se queda.** Todo el layout depende de su
grid y de sus clases de utilidad, y `web/css/*.css` está escrito encima. Quitarlo
sería rehacer el web entero. Aquí solo se retira el **JavaScript**.

**Sustitución** (a colocar en `includes/footer.blade.php`, una sola vez, en lugar de
las tres líneas repetidas en 18 vistas):

```html
<script>
    // Menú hamburguesa. Sustitueix el data-toggle="collapse" de Bootstrap JS,
    // que era l'únic que es feia servir de jQuery + Popper + bootstrap.min.js.
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        var menu = document.querySelector('#navbarSupportedContent');
        var obert = menu.classList.toggle('show');
        this.setAttribute('aria-expanded', obert);
    });
</script>
```

`.collapse` y `.show` son clases del CSS de Bootstrap, que sigue cargado, así que los
estilos del menú desplegado se mantienen.

> **Verificar sí o sí en móvil real** después del cambio: el botón hamburguesa abre
> y cierra, `aria-expanded` cambia, y el desplegable de Especialitats sigue
> funcionando en escritorio (ese va por CSS `:hover`, no lo toca este cambio).

### 3.4 Bug colateral que aparece al mirar esto

El desplegable de Especialitats **no se abría nunca en móvil**. En `nav.blade.php` el
`.dropdown-menu` no tiene `data-toggle="dropdown"` ni ningún manejador: solo lo abre
la regla CSS `:hover` de `head.blade.php`, que está dentro de un
`@media (min-width: 992px)`.

En pantallas pequeñas el enlace "Especialitats ▾" lleva a `/especialitats`, así que no
era un callejón sin salida, pero el `▾` prometía un desplegable que no existía.

> **Primer intento (26/08/2026): ocultar el `▾` en móvil.** ❌ Descartado tras probarlo
> en un móvil real: dejaba el menú sin acceso a ninguna especialidad, solo a la
> rejilla. Asumía que `/especialitats` bastaba como destino y no es así — desde el
> menú se espera poder saltar directo a una especialidad.
>
> ✅ **Solución aplicada: el `▾` es un botón que despliega el submenú.**
> `nav.blade.php` tiene ahora dos elementos para la flecha:
> - `<span class="caret-especialitats">` — decorativo, dentro del enlace, visible
>   **solo** a partir de 992px, donde el desplegable se abre con `:hover`
> - `<button class="nav-especialitats-toggle">` — visible **solo** por debajo de
>   992px, con `aria-expanded` y `aria-controls`, área táctil de 44×44
>
> Cada breakpoint tiene el elemento que le corresponde, así que no queda ningún
> control muerto: `display: none` saca el botón del orden de tabulación y del árbol
> de accesibilidad en escritorio. El texto "Especialitats" sigue siendo un enlace a
> la rejilla; solo la flecha despliega.
>
> En móvil el `.nav-item.dropdown` pasa a `display: flex` con el `.dropdown-menu` a
> `flex: 1 0 100%`, para que el submenú caiga a la línea de abajo como un subnivel
> indentado en vez de flotar encima. Y en la media query de escritorio hay un
> `.dropdown-menu.show { display: none }` para que, si alguien abre el submenú en
> móvil y luego ensancha la ventana, la clase `.show` no deje el desplegable
> encallado abierto.

### 3.5 Ionicons: unificar a 7.1.0

Ahora conviven 5.5.2 (18 vistas, vía `head`) y 7.1.0 (solo `serveis`, que se lo
carga otra vez encima).

Comprobado: el web usa **34 nombres de icono distintos**, todos de la familia
`*-outline` y todos del núcleo de la librería (`medkit-outline`,
`shield-checkmark-outline`, `body-outline`, `fitness-outline`, `menu-outline`…).
**Los 34 existen en Ionicons 7**, así que el salto no rompe ningún icono.

Acción: subir el `head` a 7.1.0 y **borrar** las dos líneas duplicadas de
`serveis.blade.php`.

### 3.6 Resumen de cambios de frontend

| Librería | Ahora | Después |
|---|---|---|
| Bootstrap CSS | 4.5.0 | **4.5.0 (sin cambios)** |
| Bootstrap JS | 4.0.0 | **retirada** |
| jQuery | 3.2.1 slim | **retirada** |
| Popper | 1.12.9 | **retirada** |
| Ionicons | 5.5.2 + 7.1.0 | **7.1.0, una sola vez** |
| MDBootstrap | — | ya retirada el 25/08/2026 |
| Font Awesome | — | ya retirada el 25/08/2026 |

Ficheros afectados: `includes/head.blade.php`, `includes/footer.blade.php`,
`includes/nav.blade.php` y las 18 vistas que repiten los tres `<script>` al pie.

### 3.7 Opcional, para más adelante: autoalojar

El web carga CSS y JS de cuatro terceros (cdnjs, unpkg, code.jquery.com, jsDelivr)
más Google Fonts. Cada uno recibe la IP del visitante. Para un centro médico, y con
el cuidado que ya se ha puesto en el gate de cookies, servir Bootstrap CSS, Ionicons
y las tipografías desde `web/` tiene sentido: quita conexiones externas, elimina la
dependencia de que el CDN siga vivo y hace innecesarios los `integrity`.

No es parte de esta migración. Anotado.

---

## 4. Copia de seguridad y rollback

**Esta es la parte que no se puede saltar.**

El rollback que describe [deploy-cdmon.md](deploy-cdmon.md) (`git revert` + push) **no
sirve para esta migración**, y es importante entender por qué:

> El `composer.lock` que hay en git es el de PHP 8.2 — y siempre lo ha sido, no ha
> cambiado desde `16d2ef0` (05/05/2026). Revertir commits y redesplegar vuelve a
> subir **el mismo `vendor/` de PHP 8.2**. No existe ningún commit al que volver que
> genere un `vendor/` compatible con 7.4.

O sea: si el deploy sale mal y devuelves cdmon a PHP 7.4, el web **sigue caído**,
porque el `vendor/` viejo que funcionaba en 7.4 ya lo habrá sobrescrito el FTP.

**El único rollback real es una copia del servidor hecha antes de tocar nada:**

- [x] Descargar por FTP **toda la raíz FTP** del servidor a un ZIP local, con fecha en
      el nombre. No basta con el `vendor/`: el deploy sobrescribe también `app/`,
      `routes/`, `resources/`, `config/` y `web/`, y restaurar solo el `vendor/` viejo
      dejaría código nuevo corriendo sobre él, una combinación nunca probada.
      Lo irrecuperable es el **`vendor/`**: no está en git y no se puede regenerar
      (haría falta un PHP 7.4 con Composer para resolver aquel árbol). Si el gestor de
      ficheros de cdmon permite comprimir, zipear en el servidor y bajar un solo
      fichero es mucho más rápido que 3000 sueltos por FTP.
- [ ] Mirar si cdmon ofrece copia de seguridad o snapshot desde el panel y hacer una.
      Es más rápido y fiable que el FTP, pero **no sustituye** la descarga: hay que
      tener la copia también fuera de cdmon.

**Procedimiento de rollback**, si hace falta, en este orden:

1. Subir la copia entera encima de lo desplegado.
2. Borrar del servidor `.ftp-state-web.json` (en `web/`), `.ftp-state-vendor.json`
   (en `vendor/`) y `.ftp-state-core.json` (en la raíz). Los deja el primer deploy y describen el estado **nuevo**: si se
   quedan, el siguiente deploy creerá que el servidor ya tiene esos ficheros y solo
   subirá diferencias, dejando un web a medias.
3. Borrar `bootstrap/cache/*.php` y `storage/framework/views/*.php`.
4. Devolver cdmon a PHP 7.4.

---

## 5. Plan de ejecución

Las fases A y B se pueden hacer con calma, en `dev`, sin tocar producción. La fase D
es la ventana crítica.

### Fase A — Preparación en el repositorio (sin riesgo) ✅ HECHA el 26/08/2026

- [x] `composer.json`: `"php"` de `^7.3|^8.0` a `^8.2` (§1.6). `composer update --lock`
      refrescó el `lock`: **69 paquetes, 0 cambios de versión**, `platform` a `^8.2`,
      `composer validate` en verde
- [x] Retirar jQuery, Popper y Bootstrap JS: **63 líneas en 19 vistas** (§3.3)
- [x] Toggle vanilla del hamburguesa en `includes/footer.blade.php` (§3.3)
- [x] Desplegable en móvil: el `▾` es un botón que abre el submenú (§3.4)
- [x] Ionicons a 7.1.0 en el `head` y borradas las líneas duplicadas de
      `serveis.blade.php` (§3.5)
- [x] `CLAUDE.md`: fila nueva de JavaScript en el stack, sección «JavaScript» con la
      regla de no reintroducir las librerías, y aviso de que el primer deploy va atado
      al cambio de PHP
- [x] Probado en local con `php artisan serve`: **23/23 rutas a 200**, los 4 redirects
      301 a `/serveis`, y en el HTML servido solo queda Ionicons como JS externo
- [x] **Comprobado en móvil real:** el hamburguesa abre y cierra bien. Sin Bootstrap JS
      ya no hay animación de despliegue (la clase `.collapsing`), el menú aparece de
      golpe — es el único cambio visible respecto a antes
- [x] Corregido lo que salió de esa prueba: no se llegaba a las especialidades desde
      el menú móvil (§3.4)
- [x] Hamburguesa y flecha agrandadas tras verlas en móvil: el icono pasa de los
      1.25rem que hereda de Bootstrap a **2.25rem**, la flecha a **1.75rem** en azul
      `--blue`, y ambos botones a un área táctil de **48×48** centrada con flexbox.
      Añadido `:focus-visible` a los dos, que antes no tenían indicador de foco
- [x] Las reglas del nav se han movido del `<style>` inline de `head.blade.php` a
      `web/css/base.css`, junto a `.nav-link`. En el HTML ya solo queda un `<style>`,
      el del banner de cookies
- [x] Comprobado en móvil (29/09/2026): el hamburguesa y el `▾` funcionan
- [x] Portadas rotas en móvil corregidas (29/09/2026): las 13 especialidades y
      `/especialitats` tenían altura fija y un `font-size: 48px` inline que ganaba al
      media query; `/serveis` y `/sobreCemav` tenían menos padding superior que los
      100px del nav fijo

### Fase B — Cerrar lo que quede pendiente

- [x] `.env` del servidor corregido y subido (29/09/2026): tenía los valores de
      desarrollo (`APP_ENV=local`, **`APP_DEBUG=true`**, `APP_URL=http://localhost`).
      Ahora `production` / `false` / `https://www.cemavvic.cat` y `LOG_LEVEL=error`.
      La copia local es `.env.prod`, en `.gitignore`. El web viejo carga bien con él
- [ ] Repasar [pendent.md](pendent.md) y [seo-auditoria.md](seo-auditoria.md).
      Nada de lo que queda bloquea el deploy
- [ ] Merge `dev` → `main` **sin push todavía**

### Fase C — Copia de seguridad

- [x] Todo lo de la §4. **No seguir sin esto.** Copia descargada el 29/09/2026

### Fase D — Ventana de migración (hay downtime)

Elegir una hora de poco tráfico. Cuenta con **15-30 minutos** con el web caído.

- [ ] Confirmar que el `.env` sigue en la raíz FTP del servidor, con
      `APP_ENV=production`, `APP_DEBUG=false` y `APP_URL=https://www.cemavvic.cat`
- [ ] `git push origin main` → arranca el workflow
- [ ] Vigilar https://github.com/rovaar/CEMAV_PROD/actions hasta el icono verde
      (el primero tardó 1h 15m: sube el `vendor/` entero, ~5240 ficheros de uno en uno)
- [ ] **Solo con Actions en verde:** panel de cdmon → PHP → **8.2**
- [ ] Activar en 8.2 las extensiones de la §1.5
- [ ] Borrar por FTP los `bootstrap/cache/*.php` y los `storage/framework/views/*.php`
      del servidor: son caché compilada con el `vendor/` viejo y el deploy no los borra
- [ ] Abrir https://www.cemavvic.cat

### Fase E — Verificación

- [ ] Las 23 rutas responden 200 (portada, 13 especialidades, serveis, mútues,
      contacte, sobreCemav, especialitats y las 4 legales)
- [ ] Los 4 redirects 301 de `/analitiques`, `/analitiquesCovid`, `/depilacio` y
      `/revisions` llevan a `/serveis`
- [ ] El menú hamburguesa funciona en un móvil de verdad
- [ ] Consola del navegador limpia, sin scripts bloqueados
- [ ] `storage/logs/laravel.log` del servidor sin errores nuevos
- [ ] Google Analytics solo dispara después de aceptar cookies
- [ ] **Dar de baja el soporte extendido de PHP 7.4 en cdmon** — los 2,95 €/mes

### Fase F — Después

- [ ] A los 2-3 días: revisar Search Console (cobertura, los 301, sitemap)
- [ ] Actualizar este documento con lo que pasó de verdad (§6)
- [ ] Actualizar `pendent.md`

---

## 6. Registro de ejecución

Rellenar a medida que se ejecuta. Si algo falla, **anotar el error literal** —
es lo que faltó la primera vez que se intentó el cambio de PHP.

| Fecha | Fase | Qué se hizo | Resultado |
|---|---|---|---|
| ~antes~ | — | Cambio de PHP a 8.x en el panel de cdmon, sin desplegar | ❌ Web caído. Vuelta a 7.4. Causa: el `vendor/` del servidor está resuelto sobre PHP 7.x (§1.2) |
| 26/08/2026 | A | Retirada de jQuery, Popper y Bootstrap JS; Ionicons a 7.1.0; `composer.json` a `^8.2` | ✅ 23/23 rutas a 200 en local, 0 cambios de versión en el `lock` |
| 26/08/2026 | A | Prueba en móvil real: el hamburguesa va, pero el menú no daba acceso a ninguna especialidad | ⚠️ Corregido el mismo día: el `▾` pasa a ser un botón que despliega el submenú (§3.4) |
| 29/09/2026 | A | Segunda prueba en móvil: portadas de especialidades, serveis y sobre CEMAV desbordadas | ✅ Corregido (`4aa705c`) |
| 29/09/2026 | B | `.env` del servidor era el de desarrollo, con `APP_DEBUG=true` | ✅ Corregido y subido antes del deploy; el web viejo carga |
| 29/09/2026 | C | Copia de seguridad del servidor descargada en local | ✅ |
| 29/09/2026 | D | Push a `main` (`6983766`). `web/` sube bien; el core falla dos veces con `Error: read ECONNRESET (data socket)` | ❌ cdmon corta la conexión FTP a media subida. El web sigue en PHP 7.4 con el código viejo y el CSS nuevo. Se separa `vendor/` en tanda propia con 3 intentos y `timeout: 120000` |
| 29/09/2026 | D | Push `8b96bf9`: `vendor/` sube entero al primer intento (**~5240 ficheros, 1h 15m**, no los ~3000 que estimaba este documento); el core falla los tres intentos | ❌ Nuevo error: `550 errors/errors.log.20220326: Permission denied` |
| 29/09/2026 | D | Con `vendor/` nuevo ya arriba: cdmon a PHP 8.2 + extensiones, caches borradas | ✅ El web vuelve a cargar, aún con las vistas viejas |
| 29/09/2026 | D | Causa del 550: `errors/`, `logs/` y `.ftpquota` son ficheros de cdmon que se colaron en `67abf39 Primer commit desde FTP`. Fuera de git y excluidos del deploy, igual que el symlink `public`. Push `fefdcf1` | ✅ Verde en 1m 37s |
| 29/09/2026 | E | 23 rutas a 200, los 4 redirects 301 a `/serveis`, vistas nuevas servidas, sin jQuery/Popper/Bootstrap JS | ✅ Desde `curl`; queda la prueba manual en móvil |
| | | | |

---

## 7. Lo que NO se hace en esta migración

Anotado a propósito, para que nadie lo dé por olvidado:

- **Laravel 8 → 11/12.** Proyecto aparte (§2)
- **Bootstrap 4 → 5.** Obligaría a renombrar todos los `data-*` a `data-bs-*`, las
  clases `ml-`/`mr-` a `ms-`/`me-` y a repasar el CSS a mano de `web/css/`. Se hará
  si algún día se rehace el diseño
- **Regenerar el `composer.lock`.** Deliberadamente congelado (§1.6)
- **Autoalojar CSS, JS y tipografías.** Buena idea, otro día (§3.7)
- **Laravel Mix.** Está sin usar y el CSS de producción se escribe a mano. Se puede
  retirar `webpack.mix.js`, `package.json` y `resources/js|css`, pero no ahora

---

## Referencias

- [deploy-cdmon.md](deploy-cdmon.md) — runbook del deploy
- [pendent.md](pendent.md) — estado de la rama `dev`
- [seo-auditoria.md](seo-auditoria.md) — 49 hallazgos SEO. **SEO-03** (hashes SRI)
  se cerró el 25/08/2026; la retirada de Bootstrap JS de la §3.3 hace que no pueda
  repetirse
