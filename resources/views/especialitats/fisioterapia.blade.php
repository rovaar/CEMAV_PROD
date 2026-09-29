<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Fisioteràpia a Vic | Centre de Rehabilitació CEMAV',
        'description' => 'Servei de fisioteràpia i rehabilitació a Vic. Tractament de lesions musculars i articulars amb fisioterapeutes especialitzats. Demana cita a CEMAV.',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero3.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Fisioteràpia i Rehabilitació a Vic",
      "serviceType": "Fisioteràpia i Rehabilitació",
      "description": "Servei de fisioteràpia i rehabilitació a Vic. Tractament de lesions musculars i articulars amb fisioterapeutes especialitzats.",
      "url": "https://www.cemavvic.cat/fisioterapia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Physiotherapy"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-fisioterapia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Fisioteràpia avançada <span>per recuperar el teu moviment</span></h1>
        <h2>Especialistes en rehabilitació i tractament de lesions a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Fisioteràpia'])

<!-- SERVEIS -->
<section id="serveis-fisioterapia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>fisioteràpia</span> i rehabilitació
            </h2>

            <p>
                Tractament integral de lesions musculars, articulars i esportives.
            </p>

            <p class="text-small">
                Servei de fisioteràpia per mútues assistencials i visites privades. Fisioteràpia general, tractaments de l'ATM, massatges, drenatge limfàtic i manteniment i prevenció de la salut.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="body-outline"></ion-icon>
                    </div>

                    <h3>Fisioteràpia general i esportiva</h3>

                    <p>
                        Prevenció i tractament de lesions esportives, musculars i generals
                        amb tractaments individualitzats i de qualitat.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="hand-left-outline"></ion-icon>
                    </div>

                    <h3>Teràpia Manual i Drenatge</h3>

                    <p>
                        Teràpia manual, drenatge limfàtic, acupuntura, punció seca,
                        ganxos, kinesiotape i embenats funcionals.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="flash-outline"></ion-icon>
                    </div>

                    <h3>Electroteràpia i Termoteràpia</h3>

                    <p>
                        Corrents antiàlgiques, electroestimulació, magnetoteràpia
                        i tractaments tèrmics especialitzats.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-fisioterapia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>fisioteràpia</span>
            </h2>

            <p>
                Fisioterapeutes especialitzats en rehabilitació a Vic.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/ferran.webp"
                         alt="Ferran Colom Marso Fisioterapeuta a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Ferran Colom Marso</h3>
                    <p>Núm. col·legiat: 7552</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/xevi.webp"
                         alt="Xavier Valeri Juncà Fisioterapeuta a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Xavier Valeri Juncà</h3>
                    <p>Núm. col·legiat: 1898</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaDona.webp"
                         alt="Mireia Puig Salvanas Fisioterapeuta a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Mireia Puig Salvanas</h3>
                    <p>Núm. col·legiat: 17076</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'fisioterapia'])

@include('includes.footer')

  </body>
</html>
