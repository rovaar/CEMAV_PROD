<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Contacte | Centre de Medicina Amable de Vic',
        'description' => "Contacta amb CEMAV, el teu centre mèdic a Vic. Truca'ns al 93 889 46 02 o vine a C/ Bisbe Strauch, 16. Horari de dilluns a divendres, de 8h a 20h.",
    ])
    <link rel="stylesheet" href="{{asset('css/contacte.css')}}">
  </head>
  <body>
  @include('includes.nav')
    <div class="container-fluid" id="portada">
        <div class="col-12 col-md-6" id="dades">
            <div class="row" id="titol">
                <div class="col-md-12">
                    <h1 style="margin: 130px 0px 60px 60px"><strong>Contacta amb </br> nosaltres:</strong></h1>
                </div>
            </div>
            <div class="row" id="direcció">
                <div class="col-12 col-md-6">
                    <label style="margin: 0px 0px 20px 60px"><strong>Adreça:</strong> </br> C/ Bisbe Strauch, 16</label>
                </div>
            </div>
            <div class="row"v id="tel">
                <div class="col-12 col-md-6">
                    <label style="margin: 0px 0px 20px 60px"><strong>Telèfon:</strong> </br><a href="tel: +93 889 46 02"> +93 889 46 02</a></label>
                </div>
            </div>
            <div class="row" id="adreça">
                <div class="col-12 col-md-6">
                    <label style="margin: 0px 0px 20px 60px"><strong>Correu electrònic:</strong> </br><a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a></label>
                </div>
                <div class="col-12 col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.585218229426!2d2.249101714945508!3d41.92327457056577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a527119a56dd7d%3A0x84f0ed8304ce9538!2sCemav!5e0!3m2!1sca!2ses!4v1617832343957!5m2!1sca!2ses" width="600" height="450" style="border:0;" allowfullscreen=""  id="mapa" loading="lazy" title="Mapa de ubicación de CEMAV"></iframe>
                </div>
            </div>
        </div>
        {{--
        <div class="col-12 col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.585218229426!2d2.249101714945508!3d41.92327457056577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a527119a56dd7d%3A0x84f0ed8304ce9538!2sCemav!5e0!3m2!1sca!2ses!4v1617832343957!5m2!1sca!2ses" width="600" height="450" style="border:0;" allowfullscreen=""  id="mapa" loading="lazy"></iframe>
        </div>
        --}}
    </div>

  @include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
