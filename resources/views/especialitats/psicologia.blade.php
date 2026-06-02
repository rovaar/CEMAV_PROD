<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Psicologia a Vic | CEMAV',
        'description' => "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió. CEMAV.",
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Psicologia - CEMAV Vic",
      "description": "Servei de psicologia a Vic. Atenció psicològica per a adults, joves i infants. Teràpia individual i tractament de l'ansietat i depressió.",
      "url": "https://www.cemavvic.cat/psicologia",
      "medicalSpecialty": "https://schema.org/Psychiatric",
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
  
  @include('includes.breadcrumb', ['pageTitle' => 'Psicologia'])

  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">PSICOLOGIA</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
         Servei de psicologia mitjançant visites privades. Acompanyament en l’acceptació i assessorament davant del canvi. Teràpies personalitzades pel creixement personal centrades en millorar la comunicació, tenir més consciencia d’un mateix, treballar l’autoestima i les habilitats socials. Suport en la gestió del dol, optimització de les relacions familiars i de parella i tècniques de relaxació davant de l’ansietat i estratègies de Mindfulness. Perspectiva des de la teoria del vincle en la primera infància.
      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12">
          <div class="row">
            <div  class="col-md-12">
              <img src="img/ClaudiaMachado.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px; display: block; margin: auto;">
              <p style="text-align: center; font-weight: 700; margin-top:20px">CLÀUDIA MACHADO AZUAGA</p>
              <p style="text-align: center;">N.Coleg 29274</p>
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
