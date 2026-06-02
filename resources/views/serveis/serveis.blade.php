<!DOCTYPE html>
<html lang="ca">
<head>
    @include('includes.head', [
        'title'       => 'Serveis complementaris | Centre de Medicina Amable de Vic',
        'description' => 'Descobreix els serveis complementaris de CEMAV a Vic: analítiques, depilació làser, revisions mèdiques i molt més. Demana cita al 93 889 46 02.',
    ])
    <style>
        h3 {
            color: #2c3e50;
            font-weight: 600;
        }

        .service-section {
            padding: 50px 0;
        }
        .service-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .service-box:hover {
            transform: translateY(-5px);
        }
        .service-box img {
            width: 100%;
            max-width: 200px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .service-box {
                text-align: center;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
</head>
<body>
    @include('includes.nav')
    
    @include('includes.breadcrumb')

    <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">ALTRES SERVEIS</h1>
       </div>
    </div>
  </section>

    <div class="container service-section">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="text-center">
                    <p>Al nostre centre mèdic, ens preocupem per la teva salut de manera integral. A més de les consultes mèdiques habituals, també oferim una àmplia gamma de serveis complementaris per garantir el teu benestar.</p>
                </div>
            </div>
         </div>
       <div class="row">
           <div class="col-md-4 mb-4 d-flex">
                <div class="service-box text-center">
                    <img src="img/RevisionsMèdiques.webp" alt="Revisions Mèdiques">
                    <h3>Revisions mèdiques i laborals</h3>
                    <p>Servei de Medicina de Família (Privada i Mútues). També fem Reconeixements Mèdics d'àmbit laboral.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex">
                <div class="service-box text-center">
                    <img src="img/RevisionsMèdiques.webp" alt="Revisions Carnet de Cotxe">
                    <h3>Revisions Carnet de cotxe</h3>
                    <p>Demanar cita prèvia a: <a href="https://www.emedicalboxvic.com">emedicalboxvic.com</a></p>
                </div>
            </div>
           <div class="col-md-4 mb-4 d-flex">
                <div class="service-box text-center">
                    <img src="img/analitiques.webp" alt="Revisions Esportives">
                    <h3>Servei de revisions esportives</h3>
                    <p>Reconeixements esportius per detectar riscos i prevenir patologies relacionades amb l'esport.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex">
                <div class="service-box text-center">
                    <img src="img/analitiques.webp" alt="Analítiques">
                    <h3>Servei d'analítiques</h3>
                    <p>Servei d'analítiques per a privats i mútues. Truqueu per demanar informació.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex">
                <div class="service-box text-center">
                    <img src="img/Fisioteràpia.webp" alt="Rehabilitació">
                    <h3>Servei de Rehabilitació</h3>         
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
