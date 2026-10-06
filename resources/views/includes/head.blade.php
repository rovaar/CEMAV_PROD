    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- hreflang: lloc en català, Espanya -->
    <link rel="alternate" hreflang="ca" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}" />

    <title>{{ $title ?? 'CEMAV | Centre de Medicina Amable de Vic' }}</title>

    @isset($description)
    <meta name="description" content="{{ $description }}">
    @endisset

    @isset($robots)
    <meta name="robots" content="{{ $robots }}">
    @endisset

    @isset($description)
    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title ?? 'CEMAV' }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="CEMAV">
    <meta property="og:locale" content="ca_ES">
    <meta property="og:image" content="https://www.cemavvic.cat/img/og-cemav.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Façana de CEMAV, centre mèdic al carrer Bisbe Strauch de Vic">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'CEMAV' }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="https://www.cemavvic.cat/img/og-cemav.webp">
    <meta name="twitter:image:alt" content="Façana de CEMAV, centre mèdic al carrer Bisbe Strauch de Vic">
    @endisset

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    {{-- Fonts allotjades a web/fonts/ i declarades a base.css (PSI-02). Abans venien
         de Google Fonts: dos dominis mes abans de poder pintar el text. Aquestes URLs
         han de coincidir exactament amb les del @font-face, o es baixarien dues vegades. --}}
    <link rel="preload" as="font" type="font/woff2" href="{{asset('fonts/mulish-v18-latin-400-800.woff2')}}" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="{{asset('fonts/fraunces-v38-latin-400-600.woff2')}}" crossorigin>

    {{-- Bootstrap 4.5.0, NOMES el CSS, retallat amb PurgeCSS a les classes que fan servir
         les vistes: 160 KB -> 10 KB (PSI-01). Servit des del domini, sense passar per cdnjs.
         Si una vista fa servir una classe de Bootstrap nova, cal regenerar-lo: vegeu CLAUDE.md. --}}
    <link rel="stylesheet" href="@assetv('css/vendor/bootstrap-4.5.0.purged.min.css')">

    <!-- Sistema de disseny compartit: tokens + tipografia (Mulish + Fraunces) -->
    <link rel="stylesheet" href="@assetv('css/base.css')">

    <!-- Footer CSS (compartit per totes les pàgines) -->
    <link rel="stylesheet" href="@assetv('css/footer.css')">

    {{-- Ionicons ja no es carrega des d'unpkg: les icones son SVG inline amb @icon() (PSI-16). --}}

    {{-- Els estils del desplegable i del boto hamburguesa han passat a
         web/css/base.css el 26/08/2026, al costat de .nav-link, en comptes
         de viure en un <style> inline aqui. --}}

    <!-- CSS específic de la pàgina -->
    @stack('head-css')

    <!-- Schema.org injectat per la pàgina (opcional, via @push('head-schema')) -->
    @stack('head-schema')

    <!-- ============================================================
         Consentiment de cookies (RGPD / LSSI-CE / guia AEPD)
         Google Analytics NO es carrega fins que l'usuari accepta.
         Banner injectat a totes les pàgines amb opció Acceptar/Rebutjar.
         ============================================================ -->
    <style>
      .cemav-cc{position:fixed;bottom:24px;left:24px;right:24px;max-width:420px;background:#fff;border:1px solid #DFE1FF;padding:22px 22px 24px;border-radius:15px;box-shadow:0 10px 30px -8px rgba(0,0,0,.25);z-index:99999;font-family:'Mulish', 'Mulish Fallback', sans-serif}
      /* Titol en <p> i no <h4>: el banner es un dialeg, no part de l'esquema de la pagina (PSI-13) */
      .cemav-cc .cc-title{font-family:'Fraunces','Fraunces Fallback',Georgia,serif;font-size:19px;font-weight:700;line-height:1.2;margin:0 0 8px;color:#16324f}
      .cemav-cc p{font-size:14px;line-height:1.5;color:#555;margin:0 0 16px}
      .cemav-cc p a{color:#13639C;text-decoration:underline}
      .cemav-cc .cc-btns{display:flex;gap:10px;flex-wrap:wrap}
      .cemav-cc button{flex:1 1 120px;padding:11px 16px;border:none;border-radius:8px;font-size:15px;font-weight:600;cursor:pointer;transition:transform .2s ease}
      .cemav-cc button:hover{transform:scale(.98)}
      .cemav-cc .cc-accept{background:#13639C;color:#fff}
      .cemav-cc .cc-reject{background:#eef1f6;color:#16324f}
      @media (max-width:480px){.cemav-cc{left:12px;right:12px;bottom:12px}}
    </style>
    <script>
      (function () {
        var KEY = 'cemav_cookie_consent';   // 'granted' | 'denied'
        var GA_ID = 'G-L3V62LP2WB';
        var gaLoaded = false;

        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }

        function loadGA() {
          if (gaLoaded) return;
          gaLoaded = true;
          var s = document.createElement('script');
          s.async = true;
          s.src = 'https://www.googletagmanager.com/gtag/js?id=' + GA_ID;
          document.head.appendChild(s);
          gtag('js', new Date());
          gtag('config', GA_ID, { anonymize_ip: true });
        }

        function hideBanner() {
          var b = document.getElementById('cemav-cookie-banner');
          if (b) b.remove();
        }

        window.cemavCookieChoice = function (choice) {
          try { localStorage.setItem(KEY, choice); } catch (e) {}
          hideBanner();
          if (choice === 'granted') loadGA();
        };

        function showBanner() {
          var html =
            '<div class="cemav-cc" id="cemav-cookie-banner" role="dialog" aria-live="polite" aria-label="Consentiment de cookies">' +
              '<p class="cc-title">Aquest web utilitza cookies</p>' +
              '<p>Utilitzem cookies analítiques (Google Analytics) per entendre com es navega pel web. ' +
              'Pots acceptar-les o rebutjar-les. Més detalls a la nostra ' +
              '<a href="/politicadecookies">Política de cookies</a>.</p>' +
              '<div class="cc-btns">' +
                '<button type="button" class="cc-reject" onclick="cemavCookieChoice(\'denied\')">Rebutjar</button>' +
                '<button type="button" class="cc-accept" onclick="cemavCookieChoice(\'granted\')">Acceptar</button>' +
              '</div>' +
            '</div>';
          document.body.insertAdjacentHTML('beforeend', html);
        }

        var stored = null;
        try { stored = localStorage.getItem(KEY); } catch (e) {}

        if (stored === 'granted') {
          loadGA();
        } else if (stored !== 'denied') {
          if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', showBanner);
          } else {
            showBanner();
          }
        }
      })();
    </script>
