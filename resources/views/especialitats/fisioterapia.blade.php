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
  
  @include('includes.breadcrumb', ['pageTitle' => 'Fisioteràpia'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">FISIOTERÀPIA</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
        Servei de Fisioteràpia mitjançant mútues assistencials i visites privades.
        Fisioteràpia en general. Prevenció i tractament de lesions esportives o
        lesions en general. Tractaments de l’ ATM (articulació temporo-
        mandibular). Massatges relaxants i massatge esportiu de descàrrega.
        Teràpia Manual. Drenatge Limfàtic. Acupuntura. Punció Seca.
        Kinesiotape i Embenats funcionals. Ganxos. Estiraments. Electroteràpia
        (corrents antiàlgiques, electroestimulació). Termoteràpia.
        Magnetoteràpia. Manteniment i prevenció de la salut.
        Tractaments individualitzats.
      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
      </div>
       <div class="row">
         <div class="col-12 col-md-12" style="text-align: center;">
          <div class="row">
            <div  class="col-md-6">
              <img src="img/Fotos Treballadors/ferran.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">FERRAN COLOM MARSO</p>
              <p style="text-align: center;">N.Coleg 7552</p>
            </div>
            <div  class="col-md-6" style="text-align: center;">
              <img src="img/Fotos Treballadors/xevi.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">XAVIER VALERI JUNCÀ</p>
              <p style="text-align: center;">N.Coleg 1898</p>
            </div>
         </div>´
         <div class="row">
            <div class="col-12 col-md-12" style="text-align: center;">
               <img src="img/iconaDona.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin-bottom: 50px;">
               <p style="font-weight: 700">MIREIA PUIG SALVANAS</p>
               <p>N.Coleg 17076</p>
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
