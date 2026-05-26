<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head')
    <title>CEMAV</title>
  </head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L3V62LP2WB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L3V62LP2WB');
</script>
  <body>
  
  @include('includes.nav')
  
  @include('includes.breadcrumb', ['pageTitle' => 'Podologia'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">PODOLOGIA</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
    <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
        Servei de podologia mitjançant mútues assistencials i visites privades.
        Prevenció i tractament de les alteracions i malalties del peu. Cirurgia
        podològica (dèrmica i unguial). Quiropòdies (tallat d’ungles, durícies,
        malalties de la pell del peu, infeccions, fongs, berrugues, quists).
        Tractament de les alineacions del peu mitjançant la confecció de
        plantilles, ortesis de silicona, etc. Control i tractament del peu diabètic.
        Podologia per a esportistes (millora i prevenció de lesions degudes a
        l’activitat esportiva).
      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-12">
              <img src="img/Fotos Treballadors/Marta.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px; display: block; margin: auto;">
              <p style="text-align: center; font-weight: 700; margin-top:20px">MARTA SERRA RAURELL</p>
              <p style="text-align: center;">N.Coleg 1246</p>
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
