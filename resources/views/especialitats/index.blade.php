<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Especialitats - CEMAV',
        'description' => 'Descobreix totes les especialitats mèdiques que oferim a CEMAV. Odontologia, fisioterapia, oftalmologia, dermatologia i moltes més.',
    ])
    <link rel="stylesheet" type="text/css" href="{{asset('css/especialitats.css')}}?v={{ time() }}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "CEMAV - Centre de Medicina Amable de Vic",
      "description": "Descobreix totes les especialitats mèdiques que oferim a CEMAV. Odontologia, fisioterapia, oftalmologia, dermatologia i moltes més.",
      "url": "https://www.cemavvic.cat/especialitats",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer Bisbe Strauch, 16",
        "addressLocality": "Vic",
        "addressRegion": "Catalunya",
        "postalCode": "08500",
        "addressCountry": "ES"
      },
      "telephone": "+34938894602",
      "openingHours": ["Mo-Fr 08:00-14:00", "Mo-Fr 15:00-20:00"]
    }
    </script>
  </head>
  <body>
  
  @include('includes.nav')
  
  @include('includes.breadcrumb', ['pageTitle' => 'Especialitats'])
  
  <section id="portada_especialitats">
    <div class="container">
      <div class="content-center">
        <h1 class="hero-title" style="font-size: 48px;">LES NOSTRES <span>ESPECIALITATS</span></h1>
        <h2>Tots els serveis de salut que necessites</h2>
      </div>
    </div>
  </section>

  <div class="row" id="especialitats_titol">
    <div class="col-md-12" style="text-align:center;">
       <h1 style="margin-top">Especialitats</h1>
       <p>Els nostres especialistes ofereixen tots els seus coneixements i les seves habilitats per acompanyar-vos en el vostre procés de sanació i rehabilitació per millorar la teva qualitat de vida.</p>
    </div>
  </div>

  <div class="row" id="especialitats">
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/odontologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Odontologia.webp" alt="Odontologia" class="img-dep">
              <span class="title-dep">Odontologia</span>
          </a> 
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/fisioterapia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Fisioteràpia.webp" alt="Fisioterapia" class="img-dep">
              <span class="title-dep">Fisioterapia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/oftalmologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/PersonesTractantPersones.webp" alt="Oftalmologia" class="img-dep">
              <span class="title-dep">Oftalmologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/dermatologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Dermatologia.webp" alt="Dermatologia" class="img-dep">
              <span class="title-dep">Dermatologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/optometria')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Optometria.webp" alt="Optometria" class="img-dep">
              <span class="title-dep">Optometria</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/podologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Podologia.webp" alt="Podologia" class="img-dep">
              <span class="title-dep">Podologia</span>
          </a>
      </div>
  </div>

  <div class="row" id="especialitats">
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/nutricio')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Nutrició.webp" alt="Nutrició" class="img-dep">
              <span class="title-dep">Nutrició</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/traumatologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/traumatologia.webp" alt="Traumatologia" class="img-dep">
              <span class="title-dep">Traumatologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/urologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Urologia.webp" alt="Urologia" class="img-dep">
              <span class="title-dep">Urologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/psicologia')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Psicologia.webp" alt="Psicologia" class="img-dep">
              <span class="title-dep">Psicologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/infermeria')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Medicina Amable.webp" alt="Infermeria" class="img-dep">
              <span class="title-dep">Infermeria</span>
          </a>
      </div>
  </div>

  <div class="row" id="especialitats">
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/digestoleg')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Digestoleg.webp" alt="Digestologia" class="img-dep">
              <span class="title-dep">Digestologia</span>
          </a>
      </div>
      <div class="col-12 col-md-2 container-departaments">
          <a href="{{URL::to('/ortodoncista')}}" style="text-decoration: none; color: inherit;">
              <img src="img/Odontologia.webp" alt="Ortodòncia" class="img-dep">
              <span class="title-dep">Ortodòncia</span>
          </a>
      </div>
  </div>

  @include('includes.footer')
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GasSVhelCC7BvE" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzwhdelDn7QWGxq15l7wI0CmeVovn/Xm+6KJ51fqx6gTnxX" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
  </body>
</html>
