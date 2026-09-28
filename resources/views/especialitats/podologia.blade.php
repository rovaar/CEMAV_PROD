<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Podologia a Vic | CEMAV',
        'description' => 'Servei de podologia a Vic. Diagnòstic i tractament de patologies del peu i turmell. Podòlegs especialitzats a CEMAV.',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Podologia a Vic",
      "serviceType": "Podologia",
      "description": "Servei de podologia a Vic. Diagnòstic i tractament de patologies del peu i turmell.",
      "url": "https://www.cemavvic.cat/podologia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Podiatric"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-podologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Podologia avançada <span>per cuidar els teus peus</span></h1>
        <h2>Especialistes en salut del peu i turmell a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Podologia'])

<!-- SERVEIS -->
<section id="serveis-podologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>podologia</span> i salut del peu
            </h2>

            <p>
                Tractament integral de les patologies del peu i turmell.
            </p>

            <p class="text-small">
                Servei de podologia per mútues assistencials i visites privades. Prevenció i tractament de les alteracions del peu, cirurgia podològica, plantilles personalitzades i podologia esportiva.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="walk-outline"></ion-icon>
                    </div>

                    <h3>Podologia general i cirurgia</h3>

                    <p>
                        Quiropòdies, cirurgia podològica dèrmica i unguial,
                        i tractament d'infeccions, fongs i berrugues.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="footsteps-outline"></ion-icon>
                    </div>

                    <h3>Plantilles i ortesis</h3>

                    <p>
                        Confecció de plantilles personalitzades i ortesis de silicona
                        per a l'alineació correcta del peu.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="bicycle-outline"></ion-icon>
                    </div>

                    <h3>Podologia esportiva i diabètica</h3>

                    <p>
                        Control i tractament del peu diabètic i podologia
                        esportiva per prevenir lesions.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-podologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>podologia</span>
            </h2>

            <p>
                Podòlegs especialitzats en salut del peu a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/Marta.webp"
                         alt="Marta Serra Raurell Podòloga a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Marta Serra Raurell</h3>
                    <p>Núm. col·legiat: 1246</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'podologia'])

@include('includes.footer')

  </body>
</html>
