<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Psicologia a Vic | CEMAV',
        'description' => "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió. CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="@assetv('css/especialitats.css')">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Psicologia a Vic",
      "serviceType": "Psicologia",
      "description": "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió.",
      "url": "https://www.cemavvic.cat/psicologia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Psychiatric"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-psicologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Psicologia <span>per al teu benestar emocional</span></h1>
        <h2>Atenció psicològica professional per a adults i infants a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Psicologia'])

<!-- SERVEIS -->
<section id="serveis-psicologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>psicologia</span> i benestar emocional
            </h2>

            <p>
                Acompanyament psicològic personalitzat per a cada etapa de la vida.
            </p>

            <p class="text-small">
                Servei de psicologia per visites privades. Teràpies personalitzades centrades en millorar la comunicació, el benestar emocional, l'autoestima i les relacions interpersonals.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('people-outline')
                    </div>

                    <h3>Teràpia individual i creixement</h3>

                    <p>
                        Acompanyament personalitzat per al creixement personal,
                        millora de la comunicació i de l'autoestima.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('heart-outline')
                    </div>

                    <h3>Gestió de l'ansietat i el dol</h3>

                    <p>
                        Suport en la gestió del dol, ansietat i depressió.
                        Tècniques de relaxació i estratègies de mindfulness.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('home-outline')
                    </div>

                    <h3>Relacions familiars i de parella</h3>

                    <p>
                        Optimització de les relacions familiars i de parella.
                        Perspectiva des del vincle en la primera infància.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-psicologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>psicologia</span>
            </h2>

            <p>
                Professionals especialitzats en salut mental a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/ClaudiaMachado.webp"
                         alt="Clàudia Machado Azuaga Psicòloga a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Clàudia Machado Azuaga</h3>
                    <p>Núm. col·legiat: 29274</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'psicologia'])

@include('includes.footer')

  </body>
</html>
