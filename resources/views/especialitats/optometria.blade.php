<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Optometria a Vic | CEMAV',
        'description' => "Servei d'optometria a Vic. Exàmens visuals i adaptació de lents de contacte i ulleres. Optometristes especialitzats a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero3.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Optometria - CEMAV Vic",
      "description": "Servei d'optometria a Vic. Exàmens visuals i adaptació de lents de contacte i ulleres.",
      "url": "https://www.cemavvic.cat/optometria",
      "medicalSpecialty": "https://schema.org/Optometric",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer Bisbe Strauch, 16",
        "addressLocality": "Vic",
        "addressRegion": "Catalunya",
        "postalCode": "08500",
        "addressCountry": "ES"
      },
      "telephone": "+34938894602",
      "openingHours": ["Mo-Fr 08:00-14:00", "Mo-Fr 15:00-20:00"],
      "parentOrganization": {
        "@type": "MedicalClinic",
        "name": "CEMAV - Centre de Medicina Amable de Vic",
        "url": "https://www.cemavvic.cat"
      }
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-optometria">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Optometria <span>per una visió perfecta</span></h1>
        <h2>Especialistes en salut visual i adaptació de lents a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Optometria'])

<!-- SERVEIS -->
<section id="serveis-optometria">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>optometria</span> i salut visual
            </h2>

            <p>
                Exàmens visuals i adaptació de lents amb professionals especialitzats.
            </p>

            <p class="text-small">
                Servei d'optometria per mútues assistencials i visites privades. Prevenció i detecció de problemes visuals, prescripció i adaptació de lents oculars i ulleres.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <h3>Exàmens visuals</h3>

                    <p>
                        Prevenció i detecció de problemes visuals, pèrdua
                        visual progressiva i trastorns refractius.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="glasses-outline"></ion-icon>
                    </div>

                    <h3>Prescripció i adaptació de lents</h3>

                    <p>
                        Prescripció i adaptació de lents oculars correctores,
                        lents de contacte i ulleres.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                    </div>

                    <h3>Correccions refractives</h3>

                    <p>
                        Correcció de miopia, hipermetropia, astigmatisme
                        i presbícia amb solucions personalitzades.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-optometria">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>optometria</span>
            </h2>

            <p>
                Optometristes especialitzats en salut visual a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaMen.webp"
                         alt="Alfred Verdaguer Pairo Optometrista a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Alfred Verdaguer Pairo</h3>
                    <p>Núm. col·legiat: 2631</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
