<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Ortodòncia a Vic | CEMAV',
        'description' => "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles. Ortodoncistes especialitzats a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Ortodòncia - CEMAV Vic",
      "description": "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles.",
      "url": "https://www.cemavvic.cat/ortodoncista",
      "medicalSpecialty": "https://schema.org/Dentistry",
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

  @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
