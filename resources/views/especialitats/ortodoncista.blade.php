<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Ortodòncia a Vic | CEMAV',
        'description' => "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles. Ortodoncistes especialitzats a CEMAV.",
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Ortodòncia - CEMAV Vic",
      "description": "Servei d'ortodòncia a Vic. Correccions dentals amb bràquets i alineadors invisibles.",
      "url": "https://www.cemavvic.cat/ortodoncista",
      "medicalSpecialty": "https://schema.org/Dentistry",
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
  
  @include('includes.breadcrumb', ['pageTitle' => 'Ortodòncia'])

  <section id="portada">
    <div class="container">
      <div>
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">ORTODONCISTA</h1>
      </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
     <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
      Ortodòncia correctiva (braquets estètics, ortodòncia lingual). Maloclusions (mossegada creuada, mossegada oberta, etc). Ortodòncia interceptiva – ortopèdia infantil (correcció de l’amplària, longitud i o altura dels maxil·lars). Correcció d’hàbits per evitar mala oclusió.
      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-6">
              <img src="img/Fotos Treballadors/nuria.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">NÚRIA AZNAR ARASA</p>
              <p style="text-align: center;">N.Coleg 4573</p>
            </div>
            <div class="col-md-6">
              <img src="img/iconaMen.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">GEORGINA SANFELIU MOLINERO</p>
              <p style="text-align: center;">N.Coleg 5418</p>
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
