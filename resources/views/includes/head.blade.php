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

    <!-- Bootstrap + MDB (crítics per al layout, síncrons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- Google Fonts (asíncron, no bloqueja el renderitzat) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    </noscript>

    <!-- Font Awesome (asíncron, no bloqueja el renderitzat) -->
    <link rel="preload" as="style" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"></noscript>

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

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3V62LP2WB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-L3V62LP2WB');
    </script>
