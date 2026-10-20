{{--
  Bloc "Altres especialitats" per al peu de cada pàgina d'especialitat.

  Existeix per resoldre SEO-07: les vistes d'especialitat no tenien ni una sola
  etiqueta <a> pròpia. Tot el que s'hi veia clicable venia del nav, el footer i
  el breadcrumb, idèntics a tot el web, i això no li diu res a Google sobre
  quines pàgines es relacionen entre si.

  Ús, just abans de @include('includes.footer'):
      @include('includes.especialitats-relacionades', ['actual' => 'dermatologia'])

  Dermatologia, digestologia i nutrició són noindex perquè el centre no ofereix
  aquests serveis ara mateix: no han de ser mai destí de $relacions. Sí que poden
  tenir el bloc (són noindex, follow), per això surten com a clau.
--}}
@php
    $especialitats = [
        'odontologia'   => ['Odontologia',            'img/Odontologia.webp'],
        'podologia'     => ['Podologia',              'img/Podologia.webp'],
        'fisioterapia'  => ['Fisioteràpia',           'img/Fisioteràpia.webp'],
        'optometria'    => ['Optometria',             'img/Optometria.webp'],
        'urologia'      => ['Urologia',               'img/Urologia.webp'],
        'oftalmologia'  => ['Oftalmologia',           'img/PersonesTractantPersones.webp'],
        'traumatologia' => ['Traumatologia',          'img/traumatologia.webp'],
        'psicologia'    => ['Psicologia',             'img/Psicologia.webp'],
        'infermeria'    => ['Infermeria',             'img/Medicina Amable.webp'],
        'ortodoncista'  => ['Ortodoncista',           'img/Odontologia.webp'],
    ];

    $relacions = [
        'odontologia'   => ['ortodoncista', 'infermeria', 'fisioterapia'],
        'podologia'     => ['fisioterapia', 'traumatologia', 'infermeria'],
        'fisioterapia'  => ['traumatologia', 'podologia', 'infermeria'],
        'optometria'    => ['oftalmologia', 'infermeria', 'psicologia'],
        'nutricio'      => ['psicologia', 'infermeria', 'fisioterapia'],
        'urologia'      => ['infermeria', 'fisioterapia', 'psicologia'],
        'oftalmologia'  => ['optometria', 'infermeria', 'odontologia'],
        'traumatologia' => ['fisioterapia', 'podologia', 'infermeria'],
        'dermatologia'  => ['podologia', 'infermeria', 'odontologia'],
        'psicologia'    => ['odontologia', 'infermeria', 'fisioterapia'],
        'infermeria'    => ['traumatologia', 'urologia', 'podologia'],
        'digestoleg'    => ['urologia', 'infermeria', 'psicologia'],
        'ortodoncista'  => ['odontologia', 'infermeria', 'fisioterapia'],
    ];

    // Mai enllacem la pàgina on som, ni res que no sigui a la llista.
    $items = collect($relacions[$actual] ?? [])
        ->reject(fn ($slug) => $slug === $actual)
        ->filter(fn ($slug) => isset($especialitats[$slug]))
        ->values();
@endphp

@if($items->isNotEmpty())
<section class="relacionades">
    <div class="container">

        <div class="section-title text-center">
            <h2>Altres <span>especialitats</span></h2>
            <p>Al centre també t'hi podem ajudar amb això.</p>
        </div>

        <div class="row justify-content-center mt-4">
            @foreach($items as $slug)
                @php([$nom, $img] = $especialitats[$slug])
                <div class="col-6 col-md-4 mb-4">
                    <a class="rel-card" href="{{ URL::to('/' . $slug) }}">
                        <img src="{{ asset($img) }}"
                             alt="{{ $nom }} a CEMAV Vic"
                             width="120" height="120" loading="lazy">
                        <span class="rel-nom">{{ $nom }}</span>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Enllac de navegacio a dalt i crida a l'accio a sota: primer "en vull veure
             mes", despres "ja ho tinc clar". No fem servir .hero-btn: es un boto de
             portada (18px/45px de padding i margin-top:40px) i aqui queda desproporcionat. --}}
        <div class="relacionades-peu">
            <a class="rel-totes" href="{{ URL::to('/especialitats') }}">Veure totes les especialitats</a>
            <a class="rel-cita" href="{{ URL::to('/contacte') }}">Demanar cita</a>
        </div>

    </div>
</section>
@endif
