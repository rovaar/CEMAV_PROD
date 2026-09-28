<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Digestologia a Vic | CEMAV',
        'description' => 'Servei de digestologia a Vic. Diagnòstic i tractament de malalties del sistema digestiu, fetge i intestí. Especialistes a CEMAV.',
        'robots'      => 'noindex, follow',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero2.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Digestologia a Vic",
      "serviceType": "Digestologia",
      "description": "Servei de digestologia a Vic. Diagnòstic i tractament de malalties del sistema digestiu, fetge i intestí.",
      "url": "https://www.cemavvic.cat/digestoleg",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Gastroenterologic"
    }
    </script>
  </head>
  <body>

  @include('includes.nav')

<!-- HERO -->
<section id="portada-digestoleg">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">Digestologia <span>per cuidar el teu sistema digestiu</span></h1>
        <h2>Especialistes en malalties del sistema digestiu a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Digestologia'])

<!-- SERVEIS -->
<section id="serveis-digestoleg">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>digestologia</span> i aparell digestiu
            </h2>

            <p>
                Diagnòstic i tractament de les malalties del tracte digestiu.
            </p>

            <p class="text-small">
                Especialitat de l'Aparell Digestiu per mútues assistencials i visites privades. Diagnòstic, tractament i cirurgia de les malalties del tracte digestiu, fetge, vies biliars i pàncrees.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="medkit-outline"></ion-icon>
                    </div>

                    <h3>Patologia digestiva</h3>

                    <p>
                        Diagnòstic i tractament de malalties de l'esòfag, estómac,
                        intestí prim, colon, recte i anus.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="body-outline"></ion-icon>
                    </div>

                    <h3>Òrgans glandulars</h3>

                    <p>
                        Tractament de malalties del fetge, vies biliars i pàncrees
                        i les seves repercussions en l'organisme.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="cut-outline"></ion-icon>
                    </div>

                    <h3>Cirurgia digestiva</h3>

                    <p>
                        Petites intervencions, cirurgia digestiva, del sistema
                        endocrí i de l'abdomen.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-digestoleg">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>digestologia</span>
            </h2>

            <p>
                Especialistes en l'aparell digestiu a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaMen.webp"
                         alt="Joan Molinas Bruguera Digestòleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Joan Molinas Bruguera</h3>
                    <p>Núm. col·legiat: 23744</p>
                </div>
            </div>

        </div>

    </div>

</section>

  @include('includes.especialitats-relacionades', ['actual' => 'digestoleg'])

@include('includes.footer')

  </body>
</html>
