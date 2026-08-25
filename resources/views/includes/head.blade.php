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
    <meta property="og:image" content="https://www.cemavvic.cat/img/Medicina%20Amable.webp">
    <meta property="og:site_name" content="CEMAV">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'CEMAV' }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="https://www.cemavvic.cat/img/Medicina%20Amable.webp">
    @endisset

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <!-- Preconnect a CDNs per reduir latència -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    {{-- MDBootstrap retirat el 25/08/2026: cap vista feia servir ni una sola classe seva. --}}
    <!-- Bootstrap (crític per al layout, síncron) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    {{-- Només Fraunces + Mulish: són les dues que fixa base.css. Titillium Web i Roboto
         retirades el 25/08/2026, no les feia servir cap full d'estil de producció. --}}
    <!-- Google Fonts (asíncron, no bloqueja el renderitzat) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Mulish:wght@400;500;600;700;800&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Mulish:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    </noscript>

    <!-- Sistema de disseny compartit: tokens + tipografia (Mulish + Fraunces) -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">

    <!-- Footer CSS (compartit per totes les pàgines) -->
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <!-- Ionicons (diferit, no bloqueja el renderitzat) -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule defer src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Dropdown per hover al navbar (escriptori) -->
    <style>
        @media (min-width: 992px) {
            .navbar .nav-item.dropdown:hover > .dropdown-menu {
                display: block;
                margin-top: 0;
                position: absolute;
            }
        }
    </style>

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
      .cemav-cc{position:fixed;bottom:24px;left:24px;right:24px;max-width:420px;background:#fff;border:1px solid #DFE1FF;padding:22px 22px 24px;border-radius:15px;box-shadow:0 10px 30px -8px rgba(0,0,0,.25);z-index:99999;font-family:'Mulish',sans-serif}
      .cemav-cc h4{font-size:19px;font-weight:700;margin:0 0 8px;color:#16324f}
      .cemav-cc p{font-size:14px;line-height:1.5;color:#555;margin:0 0 16px}
      .cemav-cc p a{color:#3090C7;text-decoration:underline}
      .cemav-cc .cc-btns{display:flex;gap:10px;flex-wrap:wrap}
      .cemav-cc button{flex:1 1 120px;padding:11px 16px;border:none;border-radius:8px;font-size:15px;font-weight:600;cursor:pointer;transition:transform .2s ease}
      .cemav-cc button:hover{transform:scale(.98)}
      .cemav-cc .cc-accept{background:#3090C7;color:#fff}
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
              '<h4>Aquest web utilitza cookies</h4>' +
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
