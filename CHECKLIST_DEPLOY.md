# Checklist de deploy a cdmon

Completa estos pasos EN ORDEN antes de hacer el deploy real.
El deploy real se activa eliminando `dry-run: true` del workflow y haciendo push.

---

## Paso 1 — Verificar versión PHP en cdmon

El `composer.lock` requiere PHP 8.2.
Asegúrate de que cdmon tenga PHP 8.2 activado para tu dominio.

**Dónde:** Panel cdmon → Hosting → tu dominio → PHP → seleccionar 8.2

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

## Paso 5 — Hacer el deploy real

Cuando hayas completado los pasos anteriores:

1. Abre `.github/workflows/deploy.yml`
2. Elimina las dos líneas `dry-run: true`
3. Haz commit y push:

```bash
git add .github/workflows/deploy.yml
git commit -m "ci: activar deploy real"
git push origin main
```

4. Ve a https://github.com/rovaar/CEMAV_PROD/actions y espera.

**Tiempo estimado del primer deploy:** 5-15 minutos (sube vendor/ entero, ~3000 ficheros)
**Deploys siguientes:** 1-2 minutos (solo ficheros modificados)

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
