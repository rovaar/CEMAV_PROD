<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Traumatologia a Vic | CEMAV',
        'description' => 'Servei de traumatologia a Vic. Diagnòstic i tractament de lesions musculoesquelètiques, fractures i patologies ortopèdiques. CEMAV.',
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Traumatologia i Ortopèdia - CEMAV Vic",
      "description": "Servei de traumatologia a Vic. Diagnòstic i tractament de lesions musculoesquelètiques, fractures i patologies ortopèdiques.",
      "url": "https://www.cemavvic.cat/traumatologia",
      "medicalSpecialty": "https://schema.org/Musculoskeletal",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer Bisbe Strauch, 16",
        "addressLocality": "Vic",
        "addressRegion": "Catalunya",
        "postalCode": "08500",
        "addressCountry": "ES"
      },
      "telephone": "+34938894602",
      "openingHours": ["Mo-Fr 08:00-14:00", "Mo-Fr 15:00-20:00"],
      "parentOrganization": {
        "@type": "MedicalClinic",
        "name": "CEMAV - Centre de Medicina Amable de Vic",
        "url": "https://www.cemavvic.cat"
      }
    }
    </script>
  </head>
  <body>
  
  @include('includes.nav')
  
  @include('includes.breadcrumb', ['pageTitle' => 'Traumatologia'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">TRAUMATOLOGIA I ORTOPÈDIA</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
      Servei de traumatologia mitjançant mútues assistencials i visites
        privades. Atenció personalitzada de pacients amb patologia traumàtica,
        congènita o ortopèdica de l’aparell locomotor. Valoració clínica,
        diagnòstic, prevenció i tractament de les diverses afectacions
        traumatològiques. Atenció personalitzada i de qualitat.
        </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-6" style="text-align: center;">
              <img src="img/Busian.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">JOSEP MANUEL BUISAN</p>
              <p style="text-align: center;">N.Coleg 9676</p>
            </div>
            <div  class="col-md-6" style="text-align: center;">
              <img src="img/Fotos Treballadors/JC1.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">JOSEP CASTANEDO PEREZ</p>
              <p style="text-align: center;">N.Coleg 11394</p>
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
