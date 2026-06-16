<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'CEMAV | Centre de medicina amable de Vic',
        'description' => "Centre de Medicina Amable de Vic. Especialistes en fisioteràpia, rehabilitació i serveis mèdics per al teu benestar. Demana cita prèvia!",
    ])
    <!-- Preload hero image per millorar LCP -->
    <link rel="preload" as="image" href="/img/wallpapers/hero1.webp" fetchpriority="high">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script type="application/ld+json">
      {
       "@context": "https://schema.org",
       "@type": "MedicalClinic",
       "name": "Centre de Medicina Amable de Vic",
       "address": {
         "@type": "PostalAddress",
         "streetAddress": "Carrer Bisbe Strauch, 16",
         "addressLocality": "Vic",
         "addressRegion": "Catalunya",
         "postalCode": "08500",
         "addressCountry": "ES"
       },
       "telephone": "+34 938 894 602",
       "url": "https://www.cemavvic.cat",
       "medicalSpecialty": ["Fisioteràpia", "Oftalmologia", "Rehabilitació", "Odontologia", "Dermatologia", "Urologia", "Psicologia", "Traumatologia", "Podologia", "Nutrició", "Optometria", "Infermeria", "Ortodòncia", "Digestologia"]
      }
    </script>
  </head>
  <body>
  @include('includes.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center" id="portada">
                <h2 style="margin-top:50px;">Acompanyant-te en el teu benestar i procés de rehabilitació</h2>
                <h1 class="hero-title">CENTRE DE <span>MEDICINA AMABLE</span> DE <span>VIC</span></h1>
                <h2>Persones tractant persones</h2>
                <a href="{{URL::to('/contacte')}}" class="hero-btn" style="margin-top:60px;">Contacte</a>
            </div>
        </div>
        <div class="row" id="novetat">
          <div class="col-md-12" style="text-align:center;">
             <h1 style="margin-top: 10px">NOVETAT!</h1>
             <p style="color: black; font-size:30px;">Ara també fem revisions de permis de conduir, cita prèvia a <a href="https://www.emedicalboxvic.com/" style="color: white;">  emedicalboxvic.com</a></p>
          </div>
        </div>

        <!-- PER QUÈ -->
        <section id="perque">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Per què escollir <span>CEMAV</span>?</h2>
                    <p>Un centre mèdic orientat a les persones i la seva salut.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="info-card">
                            <ion-icon name="heart-outline"></ion-icon>
                            <h3>Atenció humana</h3>
                            <p>Tracte proper i personalitzat.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-card">
                            <ion-icon name="medkit-outline"></ion-icon>
                            <h3>Especialistes</h3>
                            <p>Equip mèdic multidisciplinari.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-card">
                            <ion-icon name="location-outline"></ion-icon>
                            <h3>A Vic</h3>
                            <p>Centre mèdic de referència local.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO TEXT -->
        <section id="seo-text">
            <div class="container">
                <h2>Centre mèdic a Vic</h2>
                <p>
                    A CEMAV oferim un servei mèdic integral amb especialistes en diferents àrees de la salut.
                </p>
                <p>
                    El nostre objectiu és millorar la qualitat de vida dels pacients amb un tracte humà i proper.
                </p>
            </div>
        </section>

        <!-- ===== ESPECIALITATS ===== -->

        <div class="row" id="especialitats_titol">
          <div class="col-md-12">
             <h1>Especialitats</h1>
             <p>Els nostres especialistes ofereixen tots els seus coneixements i les seves habilitats per acompanyar-vos en el vostre procés de sanació i rehabilitació per millorar la teva qualitat de vida.</p>
          </div>
        </div>
        <div class="row especialitats-row">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.webp" onclick="javascript:window.location='{{URL::to('/odontologia')}}';" alt="Odontologia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/odontologia')}}" class="title-dep">
                    </br><span class="title-dep">Odontologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Fisioteràpia.webp" onclick="javascript:window.location='{{URL::to('/fisioteràpia')}}';" alt="Fisioteràpia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/fisioteràpia')}}" class="title-dep">
                    </br><span class="title-dep">Fisioteràpia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Urologia.webp" onclick="javascript:window.location='{{URL::to('/urologia')}}';" alt="Urologia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/urologia')}}" class="title-dep">
                    </br><span class="title-dep">Urologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Optometria.webp" onclick="javascript:window.location='{{URL::to('/optometria')}}';" alt="Optometria a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/optometria')}}" class="title-dep">
                    </br><span class="title-dep">Optometria</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Psicologia.webp" onclick="javascript:window.location='{{URL::to('/psicologia')}}';" alt="Psicologia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/psicologia')}}" class="title-dep">
                    </br><span class="title-dep">Psicologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Medicina Amable.webp" onclick="javascript:window.location='{{URL::to('/infermeria')}}';" alt="Infermeria a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/infermeria')}}" class="title-dep">
                    </br><span class="title-dep">Infermeria</span>
                </a>
            </div>
        </div>
        <div class="row especialitats-row">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/PersonesTractantPersones.webp" onclick="javascript:window.location='{{URL::to('/oftalmologia')}}';" alt="Oftalmologia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/oftalmologia')}}" class="title-dep">
                    </br><span class="title-dep">Oftalmologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/traumatologia.webp" onclick="javascript:window.location='{{URL::to('/traumatologia')}}';" alt="Traumatologia i ortopèdia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/traumatologia')}}" class="title-dep">
                    </br><span class="title-dep">Traumatologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/RevisionsMèdiques.webp" onclick="javascript:window.location='{{URL::to('/serveis')}}';" alt="Revisions mèdiques a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/serveis')}}" class="title-dep">
                    </br><span class="title-dep">Revisions</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Podologia.webp" onclick="javascript:window.location='{{URL::to('/podologia')}}';" alt="Podologia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/podologia')}}" class="title-dep">
                    </br><span class="title-dep">Podologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Nutrició.webp" onclick="javascript:window.location='{{URL::to('/nutricio')}}';" alt="Dietètica i Nutrició a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/nutricio')}}" class="title-dep">
                    </br><span class="title-dep">Dietètica i nutrició</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.webp" onclick="javascript:window.location='{{URL::to('/ortodoncista')}}';" alt="Ortodoncista a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/ortodoncista')}}" class="title-dep">
                    </br><span class="title-dep">Ortodoncista</span>
                </a>
            </div>
        </div>

        @include('includes.cookies')
  </div>

  <!-- ===== MÚTUES ===== -->
  <section class="mutues" id="mutues">
    <div class="wrap">
      <div class="band">
        <div>
          <span class="eyebrow">Mútues</span>
          <h3>Treballem amb les principals mútues</h3>
          <p>Consulta'ns la teva i t'informem de la cobertura disponible al centre.</p>
        </div>
        <div class="logos">
          <span class="m">Adeslas</span>
          <span class="m">Sanitas</span>
          <span class="m">DKV</span>
          <span class="m">Asisa</span>
          <span class="m">Mutua General</span>
          <a href="{{URL::to('/mutues')}}" class="m">+ altres</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="cta-band" id="contacte">
    <svg class="cw" style="top:-20px;left:5%;width:120px" viewBox="0 0 48 48">
      <path d="M18 6h12v12h12v12H30v12H18V30H6V18h12z" fill="currentColor"/>
    </svg>
    <svg class="cw" style="bottom:-30px;right:6%;width:160px" viewBox="0 0 48 48">
      <path d="M18 6h12v12h12v12H30v12H18V30H6V18h12z" fill="currentColor"/>
    </svg>
    <div class="wrap">
      <h2>Persones tractant persones</h2>
      <p>Demana cita avui mateix i et truquem per trobar l'hora que millor t'encaixi.</p>
      <div class="cta-actions">
        <a href="mailto:noucemav@gmail.com" class="cta-btn" style="background:#fff;color:var(--blue-deep)">Escriu-nos</a>
        <a href="tel:+34938894602" class="cta-btn cta-btn-ghost">Truca'ns · 93 889 46 02</a>
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
															
