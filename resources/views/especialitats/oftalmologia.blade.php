<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Oftalmologia a Vic | Clínica Oftalmològica CEMAV',
        'description' => "Servei d'oftalmologia a Vic. Especialistes en cataractes, glaucoma i salut visual. Visites privades i mútues a CEMAV.",
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero3.webp')}}">
    <link rel="stylesheet" href="@assetv('css/especialitats.css')">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Oftalmologia a Vic",
      "serviceType": "Oftalmologia",
      "description": "Servei d'oftalmologia a Vic. Especialistes en cataractes, glaucoma i salut visual. Visites privades i mútues a CEMAV.",
      "url": "https://www.cemavvic.cat/oftalmologia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      }
    }
    </script>
  </head>
  <body>
  
  @include('includes.nav')

<!-- HERO -->
<section id="portada-oftalmologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Oftalmologia a Vic <span>per cuidar la teva visió</span></h1>
        <h2>Especialistes en salut visual i diagnòstic ocular a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Oftalmologia'])

<!-- SERVEIS -->
<section id="serveis-oftalmologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis d'<span>oftalmologia</span> i salut visual
            </h2>

            <p>
                Diagnòstic i tractament de les principals patologies oculars.
            </p>

            <p class="text-small">
                Servei d'oftalmologia per mútues assistencials i visites privades. Diagnòstic, tractament i prevenció de les patologies relacionades amb els ulls i la visió.
            </p>

        </div>

        <div class="row mt-5">

            <!-- TARGETA -->
            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('eye-outline')
                    </div>

                    <h3>Exploració visual completa</h3>

                    <p>
                        Revisió oftalmològica integral per detectar problemes 
                        de visió i malalties oculars.
                    </p>

                </div>
            </div>

            <!-- TARGETA -->
            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('medkit-outline')
                    </div>

                    <h3>Diagnòstic de patologies oculars</h3>

                    <p>
                        Diagnòstic i seguiment de cataractes, glaucoma, 
                        ull sec i altres alteracions visuals.
                    </p>

                </div>
            </div>

            <!-- TARGETA -->
            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        @icon('shield-checkmark-outline')
                    </div>

                    <h3>Prevenció i seguiment</h3>

                    <p>
                        Controls periòdics per prevenir problemes visuals 
                        i mantenir una bona salut ocular.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-oftalmologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip d'<span>oftalmologia</span>
            </h2>

            <p>
                Professionals especialitzats en salut visual a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">

                <div class="doctor-card text-center">

                    <img src="img/iconaMen.webp"
                         alt="Dr. Manel J. Amen Letran Oftalmòleg a Vic"
                         loading="lazy"
                         class="doctor-img">

                    <h3>Dr. Manel J. Amen Letran</h3>

                    <p>Núm. col·legiat: 21688</p>

                </div>

            </div>

        </div>

    </div>

</section>
  
  @include('includes.especialitats-relacionades', ['actual' => 'oftalmologia'])

@include('includes.footer')

  </body>
</html>