<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Depilació Làser | Centre de Medicina Amable de Vic',
        'description' => 'Servei de depilació làser a CEMAV Vic. Tractaments professionals i segurs per a una pell llisa i sense pèl. Demana la teva cita al 93 889 46 02.',
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
  </head>
  <body>
  
  @include('includes.nav')
  
  @include('includes.breadcrumb', ['pageTitle' => 'Depilació'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 style="position: absolute; top: 30%; left: 5%;">DEPILACIÒ LÀSER</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-6">
              <img src="img/iconaMen.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">SILVIA MARTORELL SALLERAS</p>
              <p style="text-align: center;">N.Coleg xxxx</p>
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