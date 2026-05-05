<!doctype html>
<html lang="en">
  <head>
    @include('includes.head')
    <title>Oftalmologia a Vic | Clínica Oftalmològica CEMAV</title>
    <meta name="description" content="Servei d’oftalmologia a Vic. Especialistes en cataractes, glaucoma i salut visual. Visites privades i mútues a CEMAV.">
    <!-- Open Graph -->
    <meta property="og:title" content="Oftalmologia a Vic - CEMAV">
    <meta property="og:description" content="Centre mèdic especialitzat en oftalmologia a Vic.">
    <meta property="og:type" content="website">
  </head>
  <body>
  
  @include('includes.nav')

<!-- HERO -->
<section id="hero-oftalmologia" class="d-flex align-items-center text-center">
    <div class="container">
        
        <!-- SLUG -->
        <p class="hero-slug">
            Especialistes en salut visual i diagnòstic ocular a Vic
        </p>

        <!-- TITOL GRAN -->
        <h1 class="hero-title">
            Oftalmologia avançada <span>per cuidar la teva visió</span>
        </h1>

        <!-- SUBTITOL -->
        <p class="hero-subtitle">
            Oferim diagnòstic, prevenció i tractament de patologies oculars 
            amb un servei personalitzat i tecnologia especialitzada.
        </p>

        <!-- BOTO -->
        <a href="/contacte" class="hero-btn">
            Demanar visita
        </a>

    </div>
</section>

@include('includes.breadcrumb', ['pageTitle' => 'Oftalmologia'])

<!-- SERVEIS -->
<section id="serveis-oftalmologia">

    <div class="container">

        <div class="section-title text-center">

            <h2>
                Serveis d’<span>oftalmologia</span> i salut visual
            </h2>

            <p>
                Diagnòstic i tractament de les principals patologies oculars.
            </p>

            <p class="text-small">
                Servei d’oftalmologia per mútues assistencials i visites privades. Diagnòstic, tractament i prevenció de les patologies relacionades amb els ulls i la visió.
            </p>

        </div>

        <div class="row mt-5">

            <!-- TARGETA -->
            <div class="col-md-4 mb-4">
                <div class="servei-card">

                    <div class="servei-icon">
                        <ion-icon name="eye-outline"></ion-icon>
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
                        <ion-icon name="medkit-outline"></ion-icon>
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
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
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
                Equip d’<span>oftalmologia</span>
            </h2>

            <p>
                Professionals especialitzats en salut visual a Vic.
            </p>

        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">

                <div class="doctor-card text-center">

                    <img src="img/iconaMen.jpg"
                         alt="Dr. Manel J. Amen Letran Oftalmòleg a Vic"
                         class="doctor-img">

                    <h3>Dr. Manel J. Amen Letran</h3>

                    <p>Núm. col·legiat: 21688</p>

                </div>

            </div>

        </div>

    </div>

</section>
  
  @include('includes.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>