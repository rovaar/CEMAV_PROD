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
  `noindex`. Ara conté exactament les 23 rutes indexables.
- **Pàgina de proves** — `/proves` era pública, sense `noindex` i sense cap enllaç que
  hi apuntés. Eliminada amb la seva vista i `web/css/proves.css`, que no feia servir
  ningú.
- **Fitxers morts** — fora `welcome.blade.php` (i el bloc comentat que la referenciava),
  `web/img/Osteopatia.webp`, `errors.log`, `php_errors.log` (ara al `.gitignore`),
  `index.blade copy.php` i els directoris buits `backup_db/` i `tmp/`.

---

## Decisions obertes

- **Formulari de contacte.** `contactes/contacte.blade.php` només ofereix un
  `mailto:noucemav@gmail.com`. No hi ha cap ruta POST ni cap Mailable, i el `.env`
  encara apunta a Mailtrap amb credencials buides. Si es vol formulari real cal:
  ruta POST + validació + Mailable + SMTP de cdmon + captcha. Si no, el `mailto` ja
  compleix i es pot tancar el tema.

- **`/digestoleg` i `/ortodoncista`** tenen vista, ruta i entrada al sitemap, i
  s'enllacen des de `especialitats/index.blade.php`, però **no des del menú
  principal** (`includes/nav.blade.php`), que sí que llista les altres onze
  especialitats. Confirmar si és intencional.

- **README.md** és encara el genèric de Laravel. Ara que hi ha `CLAUDE.md`, decidir
  si val la pena substituir-lo.

- **Imatges repetides a la graella d'especialitats.** `img/Odontologia.webp` es fa
  servir **5 vegades**: Odontologia, Dermatologia, Nutrició, Digestologia i
  Ortodòncia. Dues tenen arranjament immediat perquè la imatge ja existeix sense
  fer-se servir: `Nutrició.webp` i `Digestoleg.webp`. Per a Dermatologia i
  Ortodòncia no hi ha imatge al repositori. Oftalmologia fa servir la genèrica
  `PersonesTractantPersones.webp` i Infermeria `Medicina Amable.webp`.
