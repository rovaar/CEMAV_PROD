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
      "@type": "MedicalBusiness",
      "name": "Traumatologia i Ortopèdia - CEMAV Vic",
      "description": "Servei de traumatologia a Vic. Diagnòstic i tractament de lesions musculoesquelètiques, fractures i patologies ortopèdiques.",
      "url": "https://www.cemavvic.cat/traumatologia",
      "medicalSpecialty": "https://schema.org/Musculoskeletal",
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

  @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
