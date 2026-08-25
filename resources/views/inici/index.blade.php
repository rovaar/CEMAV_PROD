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
      "@id": "https://www.cemavvic.cat/#clinica",
      "name": "CEMAV - Centre de Medicina Amable de Vic",
      "alternateName": "CEMAV",
      "description": "Centre medic a Vic amb especialitats i serveis per a visites privades i mutues assistencials.",
      "url": "https://www.cemavvic.cat",
      "logo": "https://www.cemavvic.cat/img/logoPrincipal.webp",
      "image": "https://www.cemavvic.cat/img/og-cemav.webp",
      "telephone": "+34938894602",
      "email": "noucemav@gmail.com",
      "foundingDate": "2002-05-02",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer Bisbe Strauch, 16",
        "addressLocality": "Vic",
        "addressRegion": "Catalunya",
        "postalCode": "08500",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.92327,
        "longitude": 2.24910
      },
      "hasMap": "https://www.google.com/maps/search/CEMAV+Centre+Medicina+Amable+Vic",
      "areaServed": [
        { "@type": "City", "name": "Vic" },
        { "@type": "AdministrativeArea", "name": "Osona" }
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "14:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "15:00",
          "closes": "20:00"
        }
      ],
      "medicalSpecialty": [
        "https://schema.org/Dentistry",
        "https://schema.org/Podiatric",
        "https://schema.org/Physiotherapy",
        "https://schema.org/Optometric",
        "https://schema.org/DietNutrition",
        "https://schema.org/Urologic",
        "https://schema.org/Ophthalmologic",
        "https://schema.org/Musculoskeletal",
        "https://schema.org/Dermatology",
        "https://schema.org/Nursing"
      ]
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
                <h2>Persones tractant a persones</h2>
                <a href="{{URL::to('/contacte')}}" class="hero-btn" style="margin-top:60px;">Contacte</a>
            </div>
        </div>
        <!--
        <div class="row" id="novetat">
          <div class="col-md-12" style="text-align:center;">
             <h1 style="margin-top: 10px">NOVETAT!</h1>
             <p style="color: black; font-size:30px;">Ara també fem revisions de permis de conduir, cita prèvia a <a href="https://www.emedicalboxvic.com/" style="color: white;">  emedicalboxvic.com</a></p>
          </div>
        </div>
        -->

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
                <img src="img/Fisioteràpia.webp" onclick="javascript:window.location='{{URL::to('/fisioterapia')}}';" alt="Fisioteràpia a CEMAV Vic" loading="lazy" class="img-dep" width="120" height="120">
                <a href="{{URL::to('/fisioterapia')}}" class="title-dep">
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

        <!-- SEO TEXT -->
        <section id="seo-text">
            <svg class="seo-cross" viewBox="0 0 48 48" aria-hidden="true">
              <path d="M18 6h12v12h12v12H30v12H18V30H6V18h12z" fill="currentColor"/>
            </svg>
            <div class="seo-wrap">
                <div class="seo-copy">
                    <span class="eyebrow">Centre mèdic a Vic</span>
                    <h2>Un servei mèdic integral, <span>a prop teu</span></h2>
                    <p>
                        A CEMAV oferim un servei mèdic integral amb especialistes en diferents àrees de la salut,
                        amb l'objectiu de millorar la qualitat de vida dels pacients amb un tracte humà i proper.
                    </p>
                    <a href="{{URL::to('/sobreCemav')}}" class="cta-btn cta-btn-ghost">Coneix el centre</a>
                </div>
                <ul class="seo-stats">
                    <li>
                        <a href="{{URL::to('/especialitats')}}">
                            <strong>11+</strong>
                            <span>Especialitats mèdiques</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('/mutues')}}">
                            <strong>20+</strong>
                            <span>Mútues col·laboradores</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('/contacte')}}">
                            <strong>Vic</strong>
                            <span>Centre de referència local</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
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

  <!-- ===== CARRUSEL LOGOTIPS MÚTUES ===== -->
  <div class="mutues-carousel" aria-label="Logotips de mútues col·laboradores">
    <div class="mc-viewport">
      <div class="mc-track">
        <div class="mc-slide"><img src="{{asset('img/Mutues/adeslas.webp')}}"              alt="Adeslas"                  class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/AEGON.webp')}}"                alt="AEGON"                    class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/agrupacioMutua.webp')}}"       alt="Agrupació Mútua"          class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/asisa.webp')}}"                alt="Asisa"                    class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/assistenciaSanitaria.webp')}}" alt="Assistència Sanitària"    class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/atlantida.webp')}}"            alt="Atlàntida"                class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/axa.webp')}}"                  alt="AXA"                      class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/caser.webp')}}"                alt="Caser"                    class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/cosalud.webp')}}"              alt="Cosalud"                  class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/divinapastora.webp')}}"        alt="Divina Pastora"           class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/dkv.webp')}}"                  alt="DKV"                      class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/fiatcSeguros.webp')}}"         alt="FIATC Seguros"            class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/generali.webp')}}"             alt="Generali"                 class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/groupama.webp')}}"             alt="Groupama"                 class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/hna.webp')}}"                  alt="HNA"                      class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/logosantalucia.webp')}}"       alt="Santa Lucía"              class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/mapfre.webp')}}"               alt="Mapfre"                   class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/Mutuacat.webp')}}"             alt="Mutuacat"                 class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/mutuageneralcat.webp')}}"      alt="Mútua General Catalunya"  class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/plusUltra.webp')}}"            alt="Plus Ultra"               class="mc-logo"></div>
        <div class="mc-slide"><img src="{{asset('img/Mutues/sanitas.webp')}}"              alt="Sanitas"                  class="mc-logo"></div>
        <!-- Duplicat per al bucle infinit sense interrupcions -->
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/adeslas.webp')}}"              alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/AEGON.webp')}}"                alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/agrupacioMutua.webp')}}"       alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/asisa.webp')}}"                alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/assistenciaSanitaria.webp')}}" alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/atlantida.webp')}}"            alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/axa.webp')}}"                  alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/caser.webp')}}"                alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/cosalud.webp')}}"              alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/divinapastora.webp')}}"        alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/dkv.webp')}}"                  alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/fiatcSeguros.webp')}}"         alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/generali.webp')}}"             alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/groupama.webp')}}"             alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/hna.webp')}}"                  alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/logosantalucia.webp')}}"       alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/mapfre.webp')}}"               alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/Mutuacat.webp')}}"             alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/mutuageneralcat.webp')}}"      alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/plusUltra.webp')}}"            alt="" class="mc-logo"></div>
        <div class="mc-slide" aria-hidden="true"><img src="{{asset('img/Mutues/sanitas.webp')}}"              alt="" class="mc-logo"></div>
      </div>
    </div>
  </div>

  <!-- ===== CTA ===== -->
  <section class="cta-band" id="contacte">
    <svg class="cw" style="top:-20px;left:5%;width:120px" viewBox="0 0 48 48">
      <path d="M18 6h12v12h12v12H30v12H18V30H6V18h12z" fill="currentColor"/>
    </svg>
    <svg class="cw" style="bottom:-30px;right:6%;width:160px" viewBox="0 0 48 48">
      <path d="M18 6h12v12h12v12H30v12H18V30H6V18h12z" fill="currentColor"/>
    </svg>
    <div class="wrap">
      <h2>Persones tractant a persones</h2>
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
															
