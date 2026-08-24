# CEMAV — Centre de Medicina Amable de Vic

Web corporativa del centro médico CEMAV, en Vic.

**Producción:** https://www.cemavvic.cat

Sitio informativo: presenta el centro, sus especialidades, servicios y mutuas.
No tiene área de usuarios, reservas online ni formularios — el contacto es por
teléfono y correo.

---

## Stack

- **Laravel 8** sobre **PHP 8.2**
- Vistas **Blade**, sin controladores: las rutas son closures que devuelven vistas
- CSS escrito a mano en `web/css/`, un fichero por página + `base.css` compartido
- Bootstrap 4.5 + MDB 4.19, Font Awesome e Ionicons, todo por CDN
- Tipografías Fraunces (títulos) y Mulish (texto) desde Google Fonts
- Hosting **cdmon**, despliegue por FTP con GitHub Actions

Laravel Mix está presente pero prácticamente sin usar: el CSS de producción se
edita directamente en `web/css/`. No hace falta `npm run prod` para desplegar.

---

## Puesta en marcha en local

Requiere PHP 8.2 y Composer.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

La web queda en http://127.0.0.1:8000. No hace falta base de datos: ninguna vista
consulta datos.

Si cambias una vista y no ves el cambio, limpia la caché de Blade:

```bash
php artisan view:clear
```

---

## Estructura

```
resources/views/     vistas Blade
  inici/             portada
  especialitats/     índice + una vista por especialidad
  serveis/           servicios
  mutues/            mutuas
  sobreCEMAV/        sobre el centro
  contactes/         contacto
  includes/          head, nav, footer, breadcrumb y las 4 páginas legales
routes/web.php       todas las rutas
web/                 raíz pública (css, js, img, sitemap.xml, robots.txt)
docs/                documentación del proyecto
```

**El directorio público es `web/`, no `public/`.** `public` es un enlace simbólico
a `web/`, porque cdmon sirve `web/` como raíz del dominio. No lo cambies.

---

## Añadir una página

Hay que tocar cuatro sitios; olvidar uno es el error habitual:

1. `routes/web.php` — la ruta
2. `resources/views/…` — la vista
3. `web/sitemap.xml` — la URL, solo si es indexable (se mantiene a mano)
4. `includes/nav.blade.php` y/o `especialitats/index.blade.php` — el enlace

Una ruta que apunte a una vista inexistente da un error 500 opaco en cdmon.
Compruébalo antes de mergear.

---

## Despliegue

Push a **`main`** dispara el workflow de GitHub Actions, que sube por FTP a cdmon.
La rama de trabajo es `dev`; hacer commits o push en `dev` no despliega nada.

El `.env` del servidor se creó a mano una sola vez y el despliegue nunca lo toca.

Detalle del primer despliegue y del rollback: [docs/deploy-cdmon.md](docs/deploy-cdmon.md).

---

## Documentación

- [CLAUDE.md](CLAUDE.md) — contexto y convenciones del proyecto
- [docs/deploy-cdmon.md](docs/deploy-cdmon.md) — checklist de despliegue a cdmon
- [docs/pendent.md](docs/pendent.md) — estado de la rama y decisiones abiertas

---

## Notas

- El contenido de cara al usuario está **en catalán**, igual que los mensajes de commit.
- Google Analytics no se carga hasta que el usuario acepta el banner de cookies.
- Las páginas legales y las especialidades que el centro no ofrece están marcadas
  `noindex` y quedan fuera del sitemap.
