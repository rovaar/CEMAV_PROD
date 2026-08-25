<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Infermeria a Vic | CEMAV',
        'description' => "Servei d'infermeria a Vic. Cures infermeres, injeccions, extraccions de sang i atenció preventiva. Infermers especialitzats a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Infermeria - CEMAV Vic",
      "description": "Servei d'infermeria a Vic. Cures infermeres, injeccions, extraccions de sang i atenció preventiva.",
      "url": "https://www.cemavvic.cat/infermeria",
      "medicalSpecialty": "https://schema.org/Nursing",
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
<section id="portada-infermeria">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Infermeria <span>per cuidar la teva salut</span></h1>
        <h2>Atenció infermera especialitzada a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Infermeria'])

<!-- SERVEIS -->
<section id="serveis-infermeria">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>infermeria</span> i atenció sanitària
            </h2>

            <p>
                Cures infermeres professionals i atenció preventiva de qualitat.
            </p>

            <p class="text-small">
                Servei d'infermeria per mútues assistencials i visites privades. Analítiques, revisions laborals, aplicació d'injectables i mesura de la pressió arterial.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="eyedrop-outline"></ion-icon>
                    </div>

                    <h3>Administració de medicaments</h3>

                    <p>
                        Aplicació d'injectables, vacunes i tractaments
                        infermers personalitzats i de qualitat.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="pulse-outline"></ion-icon>
                    </div>

                    <h3>Controls i revisions</h3>

                    <p>
                        Mesura de la pressió arterial, glucèmia i controls
                        de salut preventius periòdics.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="flask-outline"></ion-icon>
                    </div>

                    <h3>Analítiques i extraccions</h3>

                    <p>
                        Extraccions de sang i analítiques laborals amb
                        resultats ràpids i servei professional.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-infermeria">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>infermeria</span>
            </h2>

            <p>
                Infermers especialitzats en atenció sanitària a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaDona.webp"
                         alt="Silvia Carner Grau Infermera a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Silvia Carner Grau</h3>
                    <p>Núm. col·legiat: 33678</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'infermeria'])

@include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
