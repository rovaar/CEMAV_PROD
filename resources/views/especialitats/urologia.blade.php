<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Urologia a Vic | CEMAV',
        'description' => "Servei d'urologia a Vic. Diagnòstic i tractament de patologies del sistema urinari i masculí. Especialistes en urologia a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero2.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Urologia - CEMAV Vic",
      "description": "Servei d'urologia a Vic. Diagnòstic i tractament de patologies del sistema urinari i masculí.",
      "url": "https://www.cemavvic.cat/urologia",
      "medicalSpecialty": "https://schema.org/Urologic",
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
<section id="hero-urologia" class="d-flex align-items-center text-center">
    <div class="container">

        <p class="hero-slug">
            Especialistes en salut urològica i andrologia a Vic
        </p>

        <h1 class="hero-title">
            Urologia i Andrologia <span>per cuidar la teva salut urinària</span>
        </h1>

        <p class="hero-subtitle">
            Diagnòstic i tractament de patologies urològiques, andrologia
            i salut sexual masculina per mútues assistencials i visites privades.
        </p>

        <a href="/contacte" class="hero-btn">
            Demanar visita
        </a>

    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Urologia'])

<!-- SERVEIS -->
<section id="serveis-urologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>urologia</span> i andrologia
            </h2>

            <p>
                Diagnòstic i tractament integral del sistema urinari i masculí.
            </p>

            <p class="text-small">
                Servei d'urologia i andrologia per mútues assistencials i visites privades. Diagnòstic i tractament de malalties urològiques, infeccions urinàries, litiasi renal i salut sexual masculina.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="medkit-outline"></ion-icon>
                    </div>

                    <h3>Urologia general</h3>

                    <p>
                        Diagnòstic i tractament de malalties urològiques,
                        infeccions urinàries, incontinència i litiasi renal.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="man-outline"></ion-icon>
                    </div>

                    <h3>Andrologia i salut sexual</h3>

                    <p>
                        Disfunció erèctil, esterilitat masculina
                        i malalties de transmissió sexual.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>

                    <h3>Patologia oncològica</h3>

                    <p>
                        Diagnòstic, seguiment i tractament de la patologia
                        oncològica del sistema urinari masculí.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-urologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>urologia</span>
            </h2>

            <p>
                Especialistes en urologia i andrologia a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaMen.webp"
                         alt="Marc Serrallach Orejas Uròleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Marc Serrallach Orejas</h3>
                    <p>Núm. col·legiat: 27273</p>
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
