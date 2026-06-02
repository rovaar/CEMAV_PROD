<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Digestologia a Vic | CEMAV',
        'description' => 'Servei de digestologia a Vic. Diagnòstic i tractament de malalties del sistema digestiu, fetge i intestí. Especialistes a CEMAV.',
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Digestologia - CEMAV Vic",
      "description": "Servei de digestologia a Vic. Diagnòstic i tractament de malalties del sistema digestiu, fetge i intestí.",
      "url": "https://www.cemavvic.cat/digestoleg",
      "medicalSpecialty": "https://schema.org/Gastroenterologic",
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
  
  @include('includes.breadcrumb', ['pageTitle' => 'Digestologia'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">CIRÚRGIA GENERAL I DE L'APARELL DIGESTIU</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
        Especialitat de l'Aparell digestiu que s'ocupa de les malalties que afecten el tracte digestiu i els òrgans glandulars associats 
        (esòfag, estómac, intestí prim, colon, recte, anus, fetge, vies biliars i pàncrees) 
        així com les repercussions que impliquen les malalties digestives en la resta de l'organisme humà i a l'inversa. <br>
      
<br>
Tractaments:<br>
- Petites intervencions, exèresi.<br>
- Cirúrgia digestiva<br>
- Cirúrgia sistema endocrí<br>
- Cirúrgia de l'abdomen. <br>

<br>
      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-12">
              <img src="img/iconaMen.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px; display: block; margin: auto;">
              <p style="text-align: center; font-weight: 700; margin-top:20px">JOAN MOLINAS BRUGUERA</p>
              <p style="text-align: center;">N.Coleg 23744</p>
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