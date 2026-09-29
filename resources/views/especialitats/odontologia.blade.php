<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Odontologia a Vic | Dentista CEMAV',
        'description' => "Servei d'odontologia a Vic. Dentistes especialitzats en prevenció, estètica dental i tractaments bucodentals. Visites privades i mútues a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero2.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Odontologia a Vic",
      "serviceType": "Odontologia",
      "description": "Servei d'odontologia a Vic. Dentistes especialitzats en prevenció, estètica dental i tractaments bucodentals.",
      "url": "https://www.cemavvic.cat/odontologia",
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
<section id="portada-odontologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Odontologia <span>per cuidar el teu somriure</span></h1>
        <h2>Especialistes en salut bucodental a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Odontologia'])

<!-- SERVEIS -->
<section id="serveis-odontologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>odontologia</span> i salut dental
            </h2>

            <p>
                Àmplia gamma de tractaments bucodentals amb una òptima relació cost-benefici.
            </p>

            <p class="text-small">
                Servei d'odontologia integral per a pacients privats i mutualistes. Consulta, diagnòstic, radiografies i pressupost totalment gratuïts. Clínica adaptada per a persones amb mobilitat reduïda.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="medkit-outline"></ion-icon>
                    </div>

                    <h3>Odontologia general</h3>

                    <p>
                        Higiene dental, obturacions, endodòncies, exodòncies
                        i atenció integral bucodental.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3>Implantologia i estètica dental</h3>

                    <p>
                        Implantologia oral, blanquejaments dentals i rehabilitació
                        protèssica fixa i removible.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>

                    <h3>Ortodòncia i Odontopediatria</h3>

                    <p>
                        Ortodòncia fixa i invisible (Invisalign), revisions infantils
                        i tractaments per a totes les edats.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-odontologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>odontologia</span>
            </h2>

            <p>
                Dentistes, ortodoncistes i higienistes especialitzats a Vic.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/jordiarn.webp"
                         alt="Jordi Arnau Tuneu Odontòleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Jordi Arnau Tuneu</h3>
                    <p>Odontòleg</p>
                    <p>Núm. col·legiat: 3591</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/nuria.webp"
                         alt="Núria Aznar Arasa Ortodoncista a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Núria Aznar Arasa</h3>
                    <p>Ortodoncista</p>
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
                    <p>Ortodoncista</p>
                    <p>Núm. col·legiat: 5418</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/Fotos Treballadors/Jessenia.webp"
                         alt="Jessenia Velásquez Figueroa Higienista dental a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Jessenia Velásquez Figueroa</h3>
                    <p>Higienista dental</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaDona.webp"
                         alt="Valentina Chavez Marin Higienista dental a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Valentina Chavez Marin</h3>
                    <p>Higienista dental</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'odontologia'])

@include('includes.footer')

  </body>
</html>
