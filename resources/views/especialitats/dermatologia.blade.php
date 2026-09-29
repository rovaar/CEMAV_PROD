<!doctype html>
<html lang="ca">
<head>
    @include('includes.head', [
        'title'       => 'Dermatologia a Vic | CEMAV',
        'description' => 'Servei de dermatologia a Vic. Diagnòstic i tractament de malalties de la pell, cabells i ungles. Dermatòlegs especialitzats a CEMAV.',
    ])
    <link rel="preload" as="image" fetchpriority="high" href="{{asset('img/wallpapers/hero2.webp')}}">
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Dermatologia a Vic",
      "serviceType": "Dermatologia",
      "description": "Servei de dermatologia a Vic. Diagnòstic i tractament de malalties de la pell, cabells i ungles.",
      "url": "https://www.cemavvic.cat/dermatologia",
      "provider": {
        "@type": "MedicalClinic",
        "@id": "https://www.cemavvic.cat/#clinica",
        "name": "CEMAV - Centre de Medicina Amable de Vic"
      },
      "areaServed": {
        "@type": "City",
        "name": "Vic"
      },
      "category": "https://schema.org/Dermatology"
    }
    </script>
</head>
<body>

@include('includes.nav')

<!-- HERO -->
<section id="portada-dermatologia">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title">Dermatologia avançada <span>per cuidar la teva pell</span></h1>
        <h2>Especialistes en pell, cabell i ungles a Vic</h2>
      </div>
    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Dermatologia'])

<!-- SERVEIS -->
<section id="serveis-dermatologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis de <span>dermatologia</span> i salut cutània
            </h2>

            <p>
                Diagnòstic i tractament de les principals malalties de la pell.
            </p>

            <p class="text-small">
                Servei de dermatologia per visites privades i mútues assistencials. Diagnòstic i tractament de les malalties que afecten la pell, els cabells i les ungles.
            </p>

        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="scan-outline"></ion-icon>
                    </div>

                    <h3>Diagnòstic dermatològic</h3>

                    <p>
                        Exploració i diagnòstic de malalties de la pell,
                        cabells i ungles amb tecnologia especialitzada.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="medical-outline"></ion-icon>
                    </div>

                    <h3>Tractament de patologies</h3>

                    <p>
                        Tractament de dermatitis, psoriasi, acne, infeccions
                        cutànies i altres afeccions de la pell.
                    </p>

                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                    </div>

                    <h3>Prevenció i seguiment</h3>

                    <p>
                        Control dermatoscòpic, crioteràpia i seguiment
                        de lesions pigmentades i nevi.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROFESSIONALS -->
<section id="professionals-dermatologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Equip de <span>dermatologia</span>
            </h2>

            <p>
                Professionals especialitzats en salut cutània a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">
                <div class="doctor-card text-center">
                    <img src="img/iconaMen.webp"
                         alt="Carles Janés Dermatòleg a Vic"
                         loading="lazy"
                         class="doctor-img">
                    <h3>Carles Janés</h3>
                    <p>Dermatòleg</p>
                </div>
            </div>

        </div>

    </div>

</section>

@include('includes.especialitats-relacionades', ['actual' => 'dermatologia'])

@include('includes.footer')

</body>
</html>
