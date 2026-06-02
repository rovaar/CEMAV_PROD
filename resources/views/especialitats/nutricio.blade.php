<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Dietètica i Nutrició a Vic | CEMAV',
        'description' => 'Servei de dietètica i nutrició a Vic. Assessorament nutricional personalitzat per a una alimentació saludable i control de pes. CEMAV.',
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Dietètica i Nutrició - CEMAV Vic",
      "description": "Servei de dietètica i nutrició a Vic. Assessorament nutricional personalitzat per a una alimentació saludable i control de pes.",
      "url": "https://www.cemavvic.cat/nutricio",
      "medicalSpecialty": "https://schema.org/DietNutrition",
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

  @include('includes.breadcrumb', ['pageTitle' => 'Nutrició'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">DIATISTA I NUTRICIÓ</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
    <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
        Servei de nutricionista mitjançant visites privades. Assessorament en
        nutrició i dietètica. Dietes per perdre pes. Hàbits de vida saludables i
        prevenció de malalties mitjançant l’alimentació. Plans nutricionals
        personalitzats adaptats a les necessitats i estils de vida de cada pacient.
        Alimentació sana i equilibrada. Nutrició esportiva. Nutrició vegetariana i
        vegana. Receptes.
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