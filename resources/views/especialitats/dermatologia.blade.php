<!doctype html>
<html lang="ca">
<head>
    @include('includes.head', [
        'title'       => 'Dermatologia a Vic | CEMAV',
        'description' => 'Servei de dermatologia a Vic. Diagnòstic i tractament de malalties de la pell, cabells i ungles. Dermatòlegs especialitzats a CEMAV.',
    ])
    <link rel="stylesheet" href="{{asset('css/especialitats.css')}}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Dermatologia - CEMAV Vic",
      "description": "Servei de dermatologia a Vic. Diagnòstic i tractament de malalties de la pell, cabells i ungles.",
      "url": "https://www.cemavvic.cat/dermatologia",
      "medicalSpecialty": "https://schema.org/Dermatology",
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

@include('includes.breadcrumb', ['pageTitle' => 'Dermatologia'])

<section id="portada">
<div class="container">
    <div class="content-center">
    <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">DERMATOLOGIA</h1>
    </div>
</div>
</section>

<section id="professionals">
<div class="container">
    <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
        En aquest moments no disposem del Servei de dermatologia, esperem en breu poder disposar del dermatòleg.
    </div>
    <div class="content-center">
        <h1 style="margin-top: 5%;">Professionals</h1>
    </div>
    <div class="row">
        <div  class="col-12" style="text-align: center;">
            <img src="img/iconaMen.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px; display: block; margin: auto;">
            <p style="text-align: center; font-weight: 700; margin-top:20px">CARLES JANÉS</p>
            <p style="text-align: center;">N.Coleg xxxx</p>
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