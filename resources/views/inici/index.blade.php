<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}?v={{ time() }}"> 
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/Medicina Amable.jpg" />
    
    <link rel="shortcut icon" src="img/Medicina Amable.jpg">
    <title>CEMAV | Centre de medicina amable de Vic</title>
    <meta name="description" content="Centre de Medicina Amable de Vic. Especialistes en fisioteràpia, rehabilitació i serveis mèdics per al teu benestar. Demana cita prèvia!">
    <script type="application/ld+json">
      {
       "@context": "https://schema.org",
       "@type": "MedicalClinic",
       "name": "Centre de Medicina Amable de Vic",
       "address": {
         "@type": "PostalAddress",
         "streetAddress": "Adreça del centre",
         "addressLocality": "Vic",
         "addressRegion": "Catalunya",
         "postalCode": "08500",
         "addressCountry": "ES"
       },
     "telephone": "+34 123 456 789",
     "url": "https://www.cemavvic.com",
     "medicalSpecialty": ["Fisioteràpia","Oftalmologia", "Rehabilitació", "Odontologia"]
     }
   </script>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center" id="portada">
                <h2 style="margin-top:50px;">Acompanyant-te en el teu benestar i procés de rehabilitació</h2>
                <h1>CENTRE DE MEDICINA AMABLE DE VIC</h1>
                <h2>Persones tractant persones</h2>
                <a href="{{URL::to('/contacte')}}" class="btn btn-light" style="margin-top:60px;">Contacte</a>
            </div>
        </div>
        <div class="row" id="novetat">
          <div class="col-md-12" style="text-align:center;">
             <h1 style="margin-top: 10px">NOVETAT!</h1>
             <p style="color: black; font-size:30px;">Ara també fem revisions de permis de conduir, cita prèvia a <a href="https://www.emedicalboxvic.com/" style="color: white;">  emedicalboxvic.com</a></p>
          </div>
        </div>
        <div class="row" id="especialitats_titol">
          <div class="col-md-12" style="text-align:center;">
             <h1 style="margin-top">Especialitats</h1>
             <p>Els nostres especialistes ofereixen tots els seus coneixements i les seves habilitats per acompanyar-vos en el vostre procés de sanació i rehabilitació per millorar la teva qualitat de vida.</p>
          </div>
        </div>
        <div class="row" id="especialitats">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.jpg" onclick="javascript:window.location='{{URL::to('/odontologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/odontologia')}}" class="title-dep">
                    </br><span class="title-dep">Odontologia</span>
                </a> 
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Fisioteràpia.jpg" onclick="javascript:window.location='{{URL::to('/fisioteràpia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/fisioteràpia')}}" class="title-dep">
                    </br><span class="title-dep">Fisioteràpia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Urologia.jpg" onclick="javascript:window.location='{{URL::to('/urologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/urologia')}}" class="title-dep">
                    </br><span class="title-dep">Urologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Optometria.jpg" onclick="javascript:window.location='{{URL::to('/optometria')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/optometria')}}" class="title-dep">
                    </br><span class="title-dep">Optometria</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Psicologia.png" onclick="javascript:window.location='{{URL::to('/psicologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/psicologia')}}" class="title-dep">
                    </br><span class="title-dep">Psicologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Medicina Amable.jpg" onclick="javascript:window.location='{{URL::to('/infermeria')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/infermeria')}}" class="title-dep">
                    </br><span class="title-dep">Infermeria</span>
                </a>
            </div>
        </div>
        <div class="row" id="especialitats">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/PersonesTractantPersones.jpg" onclick="javascript:window.location='{{URL::to('/oftalmologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/oftalmologia')}}" class="title-dep">
                    </br><span class="title-dep">Oftalmologia</span>
                </a>
            </div>

            <div class="col-12 col-md-2 container-departaments">
                <img src="img/RevisionsMèdiques.jpg" onclick="javascript:window.location='{{URL::to('/traumatologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/traumatologia')}}" class="title-dep">
                    </br><span class="title-dep">Traumatologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/RevisionsMèdiques.jpg" onclick="javascript:window.location='{{URL::to('/serveis')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/serveis')}}" class="title-dep">
                    </br><span class="title-dep">Revisions</span>
                </a>
            </div>
          
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Podologia.png" onclick="javascript:window.location='{{URL::to('/podologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/podologia')}}" class="title-dep">
                    </br><span class="title-dep">Podologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Nutrició.jpg" onclick="javascript:window.location='{{URL::to('/nutricio')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/nutricio')}}" class="title-dep">
                    </br><span class="title-dep">Dietètica i nutrició</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.jpg" onclick="javascript:window.location='{{URL::to('/ortodoncista')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/ortodoncista')}}" class="title-dep">
                    </br><span class="title-dep">Ortodoncista</span>
                </a>
            </div>
        </div>

   
            
   
        <div class="wrapper">
           <img src="img/cookie.png" alt="">
           <div class="content">
              <header>Consentiment de Cookies</header>
              <p>Aquest lloc web utilitza cookies per assegurar-vos que obteniu la millor experiència al nostre web.</p>
              <div class="buttons">
                  <button class="item">Acceptar</button>
                  <a href="{{URL::to('/politicadecookies')}}" class="item">Més informació</a>
              </div>
           </div>
       </div>
  </div>
  @include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy= 2T; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=2T"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
  </body>
</html>		
															