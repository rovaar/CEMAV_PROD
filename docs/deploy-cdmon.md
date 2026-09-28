# Checklist de deploy a cdmon

Runbook del despliegue. Completa estos pasos EN ORDEN.
El deploy se dispara con un **push a `main`**; el workflow ya está activo (se le quitó
el `dry-run` en `62282d7`, no hay que tocar nada).

> ⚠️ **El PRIMER deploy es un caso especial.** Va acompañado del cambio de PHP 7.4 a
> 8.2 en cdmon y de la limpieza de librerías de frontend, y necesita una copia de
> seguridad previa que este documento no cubre.
> **Antes de ese primero, lee [actualizacion-dependencias.md](actualizacion-dependencias.md).**
> Este runbook es para los despliegues **a partir del segundo**.

---

## Paso 1 — Versión de PHP en cdmon: **8.2**

**Dónde:** Panel cdmon → Hosting → tu dominio → PHP → seleccionar 8.2

El `vendor/` que sube el workflow se resuelve sobre PHP 8.2 y **no arranca en 7.4**:
16 paquetes del `composer.lock` exigen PHP 8.1 o superior, y algunos usan sintaxis
que 7.4 ni siquiera sabe parsear. Detalle y lista completa en
[actualizacion-dependencias.md §1](actualizacion-dependencias.md).

> ⚠️ **No cambies la versión de PHP "para probar" sin desplegar a la vez.** Ya se
> intentó y tumbó el web: el `vendor/` que hay en el servidor es el viejo, resuelto
> sobre PHP 7.x, y ese sí revienta en PHP 8. Los dos árboles de dependencias son
> incompatibles entre sí, así que el cambio de PHP y el deploy del código nuevo van
> **en la misma ventana**. La secuencia correcta está en
> [actualizacion-dependencias.md §5, fase D](actualizacion-dependencias.md).

Al cambiar de versión, cdmon configura las extensiones **por versión**: las de 7.4 no
se heredan. Deben quedar activas `ctype`, `dom`, `fileinfo`, `iconv`, `json`,
`libxml`, `mbstring`, `openssl`, `pcre` y `tokenizer`.

---

## Paso 2 — Estructura de directorios en cdmon ✅ VERIFICADO

La estructura del servidor en cdmon es idéntica a la local:
- Raíz FTP = raíz Laravel (`app/`, `bootstrap/`, `vendor/`, etc.)
- Directorio web público = `web/` (no `public_html/`)

El workflow ya está configurado correctamente con `server-dir: ./web/`.

---

## Paso 3 — Crear el .env en el servidor (UNA SOLA VEZ)

El archivo `.env` NUNCA viaja por git ni por FTP. Lo tienes que crear manualmente
en el servidor la primera vez.

**Dónde subirlo:** raíz FTP del servidor (mismo nivel que verás `app/`, `config/`, etc.
después del deploy)

**Cómo generarlo:** Copia tu `.env` local, cambia estos valores:

```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.tudominio.cat   ← tu URL real
```

Sube el archivo vía FileZilla a la raíz FTP.

---

## Paso 4 — Verificar permisos de las carpetas de Laravel

Laravel necesita escribir en estas carpetas del servidor:

- `storage/` (y todas sus subcarpetas)
- `bootstrap/cache/`

**Cómo comprobarlo:** En FileZilla, clic derecho sobre `storage/` → File Permissions
→ debe tener al menos 755 (mejor 775).

En cdmon el hosting compartido suele tenerlo bien por defecto.
Si la web da error 500 después del deploy, es probable que sea esto.

---

## Paso 5 — Hacer el deploy

El workflow ya está activo. No hay que editar `deploy.yml`: basta con llevar los
cambios a `main` y hacer push.

```bash
git checkout main
git merge dev
git push origin main
```

Ve a https://github.com/rovaar/CEMAV_PROD/actions y espera al icono verde.

**Primer deploy:** 5-15 minutos (sube `vendor/` entero, ~3000 ficheros)
**Deploys siguientes:** 1-2 minutos (solo ficheros modificados)

Recuerda que la rama de trabajo es `dev`. Hacer commits en `dev`, o incluso push de
`dev`, **no despliega nada**: el workflow solo escucha `main`.

---

## Paso 6 — Verificar que funciona

Después del deploy (icono verde en Actions):

- [ ] Abre tu dominio en el navegador — la web debe cargar
- [ ] Si ves error 500 → revisa el Paso 4 (permisos) y el Paso 3 (.env)
- [ ] Si ves "No input file specified" → la carpeta raíz del servidor no es correcta (revisa Paso 2)

---

## Qué NO toca el deploy (nunca)

- `.env` del servidor → no se sobreescribe
- `storage/logs/` → los logs del servidor no se borran
- Base de datos → el deploy es solo de ficheros

---

## Si algo sale mal (rollback)

```bash
# Ver commits recientes
git log --oneline -5

# Deshacer el último commit sin borrar los cambios locales
git revert HEAD
git push origin main
```

GitHub Actions re-desplegará la versión anterior automáticamente.

> ⚠️ **Esto NO sirve como rollback del primer deploy.** El `composer.lock` de git es
> el de PHP 8.2 y siempre lo ha sido, así que revertir commits vuelve a subir el
> mismo `vendor/`: no hay ningún commit al que volver que genere uno compatible con
> PHP 7.4. Si el primer deploy sale mal, devolver cdmon a 7.4 deja el web caído
> igualmente, porque el `vendor/` viejo ya estará sobrescrito.
> El único rollback real es la copia previa del servidor:
> [actualizacion-dependencias.md §4](actualizacion-dependencias.md).
