<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Ortodòncia a Vic | CEMAV',
        'description' => "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles. Ortodoncistes especialitzats a CEMAV.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Ortodòncia a Vic",
      "serviceType": "Ortodòncia",
      "description": "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles.",
      "url": "https://www.cemavvic.cat/ortodoncista",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Dentistry"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-ortodoncista">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Ortodòncia <span>per un somriure perfecte</span></h1>
        <h2>Especialistes en correcció dental i ortodòncia a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Ortodòncia'])

<!-- SERVEIS -->
<section id="serveis-ortodoncista">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>ortodòncia</span> i correcció dental
            </h2>

            <p>
                Correcció de maloclusions dentals per a totes les edats.
            </p>

            <p class="text-small">
                Servei d'ortodòncia per visites privades. Correcció de maloclusions i tractaments per a la correcció de les alteracions esquelètiques i dentals a qualsevol edat.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3>Ortodòncia correctiva</h3>

                    <p>
                        Bràquets estètics, ortodòncia lingual i correcció
                        de maloclusions esquelètiques i dentals.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="body-outline"></ion-icon>
                    </div>

                    <h3>Ortopèdia infantil</h3>

                    <p>
                        Ortodòncia interceptiva i ortopèdia infantil per
                        corregir el creixement dels maxil·lars.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                    </div>

                    <h3>Prevenció d'hàbits</h3>

                    <p>
                        Correcció d'hàbits per evitar mala oclusió i seguiment
                        ortodòntic personalitzat per a totes les edats.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-ortodoncista">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>ortodòncia</span>
            </h2>

            <p>
                Ortodoncistes especialitzats en correcció dental a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/nuria.webp"
                         alt="Núria Aznar Arasa Ortodoncista a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Núria Aznar Arasa</h3>
                    <p>Núm. col·legiat: 4573</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/GeorginaS.webp"
                         alt="Georgina Sanfeliu Molinero Ortodoncista a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Georgina Sanfeliu Molinero</h3>
                    <p>Núm. col·legiat: 5418</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'ortodoncista'])

@include('includes.footer')

  </body>
</html>
