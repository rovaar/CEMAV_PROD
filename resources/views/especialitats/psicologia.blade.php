<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Psicologia a Vic | CEMAV',
        'description' => "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió. CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero4.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Psicologia - CEMAV Vic",
      "description": "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió.",
      "url": "https://www.cemavvic.cat/psicologia",
      "medicalSpecialty": "https://schema.org/Psychiatric",
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
<section id="hero-psicologia" class="d-flex align-items-center text-center">
    <div class="container">

        <p class="hero-slug">
            Atenció psicològica professional per a adults i infants a Vic
        </p>

        <h1 class="hero-title">
            Psicologia <span>per al teu benestar emocional</span>
        </h1>

        <p class="hero-subtitle">
            Teràpies personalitzades i suport psicològic professional
            per millorar la qualitat de vida i les relacions.
        </p>

        <a href="/contacte" class="hero-btn">
            Demanar visita
        </a>

    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Psicologia'])

<!-- SERVEIS -->
<section id="serveis-psicologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>psicologia</span> i benestar emocional
            </h2>

            <p>
                Acompanyament psicològic personalitzat per a cada etapa de la vida.
            </p>

            <p class="text-small">
                Servei de psicologia per visites privades. Teràpies personalitzades centrades en millorar la comunicació, el benestar emocional, l'autoestima i les relacions interpersonals.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>

                    <h3>Teràpia individual i creixement</h3>

                    <p>
                        Acompanyament personalitzat per al creixement personal,
                        millora de la comunicació i de l'autoestima.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="heart-outline"></ion-icon>
                    </div>

                    <h3>Gestió de l'ansietat i el dol</h3>

                    <p>
                        Suport en la gestió del dol, ansietat i depressió.
                        Tècniques de relaxació i estratègies de mindfulness.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>

                    <h3>Relacions familiars i de parella</h3>

                    <p>
                        Optimització de les relacions familiars i de parella.
                        Perspectiva des del vincle en la primera infància.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-psicologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>psicologia</span>
            </h2>

            <p>
                Professionals especialitzats en salut mental a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/ClaudiaMachado.webp"
                         alt="Clàudia Machado Azuaga Psicòloga a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Clàudia Machado Azuaga</h3>
                    <p>Núm. col·legiat: 29274</p>
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
