<!doctype html>
<html lang="en">
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
  
  @include('includes.breadcrumb', ['pageTitle' => 'Odontologia'])
  
  <section id="portada">
    <div class="container">
      <div class="content-center">
        <h1 id="titol" style="position: absolute; top: 25%; left: 5%;">ODONTOLOGIA</h1>
       </div>
    </div>
  </section>
  
  <section id="professionals">
    <div class="container">
      <div id="descripcio" style="margin: 100px 50px 50px 50px; font-size: 20px; text-align: justify">
          Servei d’odontologia integral per a pacients privats i mutualistes. A les nostres instal.lacions podràs ser atès per un equip humà atent a les teves necessitats, i on podràs gaudir d’una àmplia gamma de tractaments bucodentals, amb una òptima relació cost-benefici.<br>
<br>
A cemav dental trobaràs : <br>
- Odontologia General i conservadora (Higiene dental, obturacions, endodòncies, exodòncies simples, etc.). <br>
- Rehabilitació protèssica (pròtesis removibles i fixes dento i implantosuportades). <br>
- Implantologia oral. <br>
- Manteniment periodontal. <br>
- Tractament de  problemàtica d’ ATM (confecció de fèrul.les, servei de fisioteràpia específica). <br>
- Revisions Infantils (detecció de càries, maloclusions, i tractaments odontopediàtrics lleus). <br>
- Ortodòncia fixa i removible (tractaments per a la correcció de les maloclusions esquelètiques i/o dentals a qualsevol edat). <br>
- Ortodòncia invisible (Invisalign). <br>
- Blanquejaments dentals. <br>

<br>
    La consulta, diagnòstic, radiografies (periapical , ortopantomografia) i pressupost, són totalment gratuïtes.
    La clínica està totalment adaptada per a persones amb  la mobilitat reduïda.

      </div>
      <div class="content-center" style="margin-top: 50px">
          <h1>Professionals</h1>
       </div>
       <div class="row">
         <div class="col-12 col-md-12 style="text-align: center;">
          <div class="row">
            <div  class="col-md-6 style="text-align: center;">
              <img src="img/Fotos Treballadors/jordiarn.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">JORDI ARNAU TUNEU</p>
              <p style="text-align: center;">Odontòleg/a</p>
              <p style="text-align: center;">N.Coleg 3591</p>
            </div>
            <div  class="col-md-6 style="text-align: center;">
              <img src="img/Fotos Treballadors/nuria.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">NÚRIA AZNAR ARASA</p>
              <p style="text-align: center;">Ortodoncista</p>
              <p style="text-align: center;">N.Coleg 4573</p>
            </div>
             <div class="col-md-6 style="text-align: center;">
              <img src="img/Fotos Treballadors/GeorginaS.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">GEORGINA SANFELIU MOLINERO</p>
              <p style="text-align: center;">Ortodoncista</p>
              <p style="text-align: center;">N.Coleg 5418</p>
            </div>
            <div  class="col-md-6 style="text-align: center;">
              <img src="img/Fotos Treballadors/Jessenia.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">JESSENIA VELÁSQUEZ FIGUEROA</p>
              <p style="text-align: center;">Higienista dental</p>
              <p style="text-align: center;"></p>
            </div>
            <div  class="col-md-6" style="text-align: center;">
              <img src="img/iconaDona.webp" class="foto" alt="foto" style="width: 350px; height: 350px; margin: 0px 100px 50px 100px">
              <p style="text-align: center; font-weight: 700">VALENTINA CHAVEZ MARIN</p>
              <p style="text-align: center;">Higienista dental</p>
              <p style="text-align: center;">00003</p>
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
