<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Traumatologia a Vic | CEMAV',
        'description' => 'Servei de traumatologia a Vic. Diagnòstic i tractament de lesions musculoesquelètiques, fractures i patologies ortopèdiques. CEMAV.',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero2.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Traumatologia i Ortopèdia a Vic",
      "serviceType": "Traumatologia i Ortopèdia",
      "description": "Servei de traumatologia a Vic. Diagnòstic i tractament de lesions musculoesquelètiques, fractures i patologies ortopèdiques.",
      "url": "https://www.cemavvic.cat/traumatologia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Musculoskeletal"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-traumatologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Traumatologia <span>per recuperar la teva mobilitat</span></h1>
        <h2>Especialistes en lesions musculoesquelètiques i ortopèdia a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Traumatologia'])

<!-- SERVEIS -->
<section id="serveis-traumatologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>traumatologia</span> i ortopèdia
            </h2>

            <p>
                Atenció integral de patologies traumàtiques i ortopèdiques.
            </p>

            <p class="text-small">
                Servei de traumatologia per mútues assistencials i visites privades. Atenció personalitzada de pacients amb patologia traumàtica, congènita o ortopèdica de l'aparell locomotor.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="fitness-outline"></ion-icon>
                    </div>

                    <h3>Patologia traumàtica i ortopèdica</h3>

                    <p>
                        Atenció de pacients amb patologia traumàtica, congènita
                        o ortopèdica de l'aparell locomotor.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>

                    <h3>Diagnòstic i prevenció</h3>

                    <p>
                        Valoració clínica, diagnòstic i prevenció de les diverses
                        afectacions traumatològiques i fractures.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>

                    <h3>Atenció personalitzada</h3>

                    <p>
                        Tractament individualitzat i de qualitat per a cada pacient,
                        amb seguiment continuat i proper.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-traumatologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>traumatologia</span>
            </h2>

            <p>
                Especialistes en traumatologia i ortopèdia a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Busian.webp"
                         alt="Josep Manuel Buisan Traumatòleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Josep Manuel Buisan</h3>
                    <p>Núm. col·legiat: 9676</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/JC1.webp"
                         alt="Josep Castanedo Perez Traumatòleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Josep Castanedo Perez</h3>
                    <p>Núm. col·legiat: 11394</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'traumatologia'])

@include('includes.footer')

  </body>
</html>
