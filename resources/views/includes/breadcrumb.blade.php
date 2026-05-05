    <!-- Breadcrumb Navigation for SEO -->
    <nav aria-label="breadcrumb" style="padding: 10px 0; background-color: #3090C7;">
        <div class="container">
            <ol class="breadcrumb" style="margin-bottom: 0; background-color: transparent; padding: 0; color: white;">
                @php
                    // Definir la ruta actual
                    $currentRoute = request()->path() ?? '';
                    $segments = array_filter(explode('/', $currentRoute));
                @endphp
                
                <!-- Home Link -->
                <li class="breadcrumb-item">
                    <a href="{{URL::to('/')}}" title="Inici - Centre Mèdic CEMAV">Inici</a>
                </li>

                <!-- Especialitats Section -->
                @if(in_array($currentRoute, ['odontologia', 'podologia', 'fisioterapia', 'optometria', 'nutricio', 'urologia', 'oftalmologia', 'traumatologia', 'dermatologia', 'psicologia', 'digestoleg', 'ortodoncista', 'infermeria', 'osteopatia']))
                    <li class="breadcrumb-item">
                        <a href="{{ url('/#especialitats') }}" title="Especialitats - Centre Mèdic CEMAV">Especialitats</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $pageTitle ?? ucfirst(str_replace('ièk', 'ia', $currentRoute)) }}
                    </li>

                <!-- Services Section -->
                @elseif(in_array($currentRoute, ['serveis', 'depilacio', 'analitiques', 'analitiquesCovid', 'revisions']) || strpos($currentRoute, 'serveis') !== false)
                    <li class="breadcrumb-item">
                        <a href="{{URL::to('/serveis')}}" title="Altres Serveis - CEMAV">Serveis</a>
                    </li>
                    @if($currentRoute != 'serveis')
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $pageTitle ?? ucfirst(str_replace('-', ' ', $currentRoute)) }}
                        </li>
                    @endif

                <!-- Mutuals Page -->
                @elseif($currentRoute == 'mutues')
                    <li class="breadcrumb-item active" aria-current="page">
                        Mútues
                    </li>

                <!-- About Page -->
                @elseif($currentRoute == 'sobreCemav')
                    <li class="breadcrumb-item active" aria-current="page">
                        Sobre CEMAV
                    </li>

                <!-- Contact Page -->
                @elseif($currentRoute == 'contacte')
                    <li class="breadcrumb-item active" aria-current="page">
                        Contacte
                    </li>

                <!-- Other Pages -->
                @elseif($currentRoute != '/')
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $pageTitle ?? ucfirst(str_replace('-', ' ', $currentRoute)) }}
                    </li>
                @endif
            </ol>
        </div>
    </nav>

    <!-- JSON-LD Structured Data for SEO -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
        "@type": "ListItem",
        "position": 1,
        "name": "Inici",
        "item": "{{ URL::to('/') }}"
        }
        @php
            $position = 2;
            $breadcrumbItems = [];
            
            if(in_array($currentRoute, ['odontologia', 'podologia', 'fisioterapia', 'optometria', 'nutricio', 'urologia', 'oftalmologia', 'traumatologia', 'dermatologia', 'psicologia', 'digestoleg', 'ortodoncista', 'infermeria', 'osteopatia'])) {

                $breadcrumbItems[] = [
                    'name' => 'Especialitats',
                    'url' => URL::to('/#especialitats'),
                    'position' => $position++
                ];

                $breadcrumbItems[] = [
                    'name' => $pageTitle ?? ucfirst(str_replace('-', ' ', $currentRoute)),
                    'url' => URL::to('/' . $currentRoute),
                    'position' => $position++
                ];

            } elseif(in_array($currentRoute, ['serveis', 'depilacio', 'analitiques', 'analitiquesCovid', 'revisions']) || strpos($currentRoute, 'serveis') !== false) {
                $breadcrumbItems[] = [
                    'name' => 'Serveis',
                    'url' => URL::to('/serveis'),
                    'position' => $position++
                ];
                if($currentRoute != 'serveis') {
                    $breadcrumbItems[] = [
                        'name' => $pageTitle ?? ucfirst(str_replace('-', ' ', $currentRoute)),
                        'url' => URL::to('/' . $currentRoute),
                        'position' => $position++
                    ];
                }
            }
        @endphp
        @foreach($breadcrumbItems as $item)
            ,
            {
            "@type": "ListItem",
            "position": {{ $item['position'] }},
            "name": "{{ $item['name'] }}"
            @isset($item['url'])
                , "item": "{{ $item['url'] }}"
            @endisset
            }
        @endforeach
    ]
    }
    </script>

    <style>
    .breadcrumb {
        list-style: none;
    }

    .breadcrumb-item {
        display: inline-block;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: " / ";
        color: #074169;
        margin: 0 8px;
    }

    .breadcrumb-item a {
        color: white;
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-item a:hover {
        color: white;
    }

    .breadcrumb-item.active {
        color: #074169;
        font-weight: 500;
    }

    @media (max-width: 576px) {
        .breadcrumb {
            font-size: 14px;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            margin: 0 4px;
        }
    }
    </style>
