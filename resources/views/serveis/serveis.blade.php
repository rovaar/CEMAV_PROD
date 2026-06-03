<!DOCTYPE html>
<html lang="ca">
    <head>
        @include('includes.head', [
            'title'       => 'Serveis complementaris | Centre de Medicina Amable de Vic',
            'description' => 'Descobreix els serveis complementaris de CEMAV a Vic: analítiques, depilació làser, revisions mèdiques i molt més. Demana cita al 93 889 46 02.',
        ])
        <link rel="stylesheet" href="{{asset('css/serveis.css')}}">
    </head>
    <body>
    @include('includes.nav')

    <!-- HERO -->
    <section id="hero-serveis" class="d-flex align-items-center text-center">
        <div class="container">

            <p class="hero-slug">
                Serveis mèdics complementaris al teu abast a Vic
            </p>

            <h1 class="hero-title">
                Tots els serveis que <span>necessites</span>
            </h1>

            <p class="hero-subtitle">
                Analítiques, revisions mèdiques, rehabilitació i molt més,
                amb un servei proper i personalitzat.
            </p>

            <a href="/contacte" class="hero-btn">
                Demanar cita
            </a>

        </div>
    </section>

    @include('includes.breadcrumb', ['pageTitle' => 'Altres Serveis'])

    <!-- SERVEIS -->
    <section id="serveis-altres">

        <div class="container">

            <div class="section-title text-center">

                <h2>
                    Els nostres <span>serveis</span> complementaris
                </h2>

                <p>
                    Un centre integral per a tota la família.
                </p>

                <p class="text-small">
                    A més de les consultes mèdiques habituals, oferim una àmplia gamma de serveis per garantir el teu benestar de manera integral.
                </p>

            </div>

            <div class="row mt-5">

                <div class="col-md-4 mb-4">
                    <div class="servei-card">
                        <div class="servei-icon">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </div>
                        <h3>Revisions mèdiques i laborals</h3>
                        <p>
                            Medicina de Família (privada i mútues). Reconeixements mèdics d'àmbit laboral.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="servei-card">
                        <div class="servei-icon">
                            <ion-icon name="car-outline"></ion-icon>
                        </div>
                        <h3>Revisions carnet de cotxe</h3>
                        <p>
                            Demanar cita prèvia a: <a href="https://www.emedicalboxvic.com" target="_blank" rel="noopener">emedicalboxvic.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="servei-card">
                        <div class="servei-icon">
                            <ion-icon name="fitness-outline"></ion-icon>
                        </div>
                        <h3>Revisions esportives</h3>
                        <p>
                            Reconeixements esportius per detectar riscos i prevenir patologies relacionades amb l'esport.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="servei-card">
                        <div class="servei-icon">
                            <ion-icon name="flask-outline"></ion-icon>
                        </div>
                        <h3>Analítiques</h3>
                        <p>
                            Servei d'analítiques per a privats i mútues. Truqueu per demanar informació.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="servei-card">
                        <div class="servei-icon">
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <h3>Rehabilitació</h3>
                        <p>
                            Tractament i recuperació funcional amb professionals especialitzats en fisioteràpia i rehabilitació.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
pt src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
ipt src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
