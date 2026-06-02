    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

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
    <link rel="shortcut icon" type="image/x-icon" href="/img/Medicina Amable.webp" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap + MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- CSS específic de la pàgina -->
    @stack('head-css')

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3V62LP2WB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-L3V62LP2WB');
    </script>
