<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Dietètica i Nutrició a Vic | CEMAV',
        'description' => 'Servei de dietètica i nutrició a Vic. Assessorament nutricional personalitzat per a una alimentació saludable i control de pes. CEMAV.',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="@assetv('css/especialitats.css')">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Dietètica i Nutrició a Vic",
      "serviceType": "Dietètica i Nutrició",
      "description": "Servei de dietètica i nutrició a Vic. Assessorament nutricional personalitzat per a una alimentació saludable i control de pes.",
      "url": "https://www.cemavvic.cat/nutricio",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/DietNutrition"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-nutricio">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Nutrició i Dietètica <span>per a una vida saludable</span></h1>
        <h2>Assessorament nutricional personalitzat a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Nutrició'])

<!-- SERVEIS -->
<section id="serveis-nutricio">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>nutrició</span> i dietètica
            </h2>

            <p>
                Assessorament nutricional per a una alimentació sana i equilibrada.
            </p>

            <p class="text-small">
                Servei de nutricionista per visites privades. Assessorament en nutrició i dietètica, plans nutricionals personalitzats adaptats a les necessitats i estils de vida de cada pacient.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('leaf-outline')
                    </div>

                    <h3>Plans nutricionals personalitzats</h3>

                    <p>
                        Dietes per perdre pes i hàbits de vida saludables
                        adaptats a cada pacient i les seves necessitats.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('restaurant-outline')
                    </div>

                    <h3>Nutrició esportiva i especial</h3>

                    <p>
                        Nutrició esportiva, vegetariana i vegana amb receptes
                        i plans alimentaris especialitzats.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('fitness-outline')
                    </div>

                    <h3>Prevenció de malalties</h3>

                    <p>
                        Prevenció de malalties i millora de la salut general
                        a través d'una alimentació sana i equilibrada.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

  @include('includes.especialitats-relacionades', ['actual' => 'nutricio'])

@include('includes.footer')

  </body>
</html>
