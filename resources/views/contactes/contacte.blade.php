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

    <!-- ============ HERO ============ -->
    <header class="contact-hero">
      <div class="wrap">
        <h1>Parlem?</h1>
        <p>Contacta amb nosaltres i et donarem resposta el més aviat possible. Persones tractant a persones.</p>
      </div>
    </header>

    <!-- ============ CONTINGUT ============ -->
    <main class="contact-main">
      <div class="wrap">
        <div class="contact-grid">

          <!-- Columna dades -->
          <section class="contact-info" aria-label="Dades de contacte">

            <a class="info-card" href="https://www.google.com/maps/search/CEMAV+Centre+Medicina+Amable+Vic" target="_blank" rel="noopener">
              <span class="ic"><ion-icon name="location-outline"></ion-icon></span>
              <div>
                <h3>Adreça</h3>
                <p>C/ Bisbe Strauch, 16 · Vic</p>
              </div>
            </a>

            <a class="info-card" href="tel:+34938894602">
              <span class="ic"><ion-icon name="call-outline"></ion-icon></span>
              <div>
                <h3>Telèfon</h3>
                <p>93 889 46 02</p>
              </div>
            </a>

            <a class="info-card" href="mailto:noucemav@gmail.com">
              <span class="ic"><ion-icon name="mail-outline"></ion-icon></span>
              <div>
                <h3>Correu electrònic</h3>
                <p>noucemav@gmail.com</p>
              </div>
            </a>

            <div class="info-card no-link">
              <span class="ic"><ion-icon name="time-outline"></ion-icon></span>
              <div>
                <h3>Horari</h3>
                <p>Dilluns a divendres</p>
                <p class="hours">8.00 h – 14.00 h · 15.00 h – 20.00 h</p>
              </div>
            </div>

          </section>

          <!-- Columna mapa -->
          <section class="contact-map" aria-label="Ubicació al mapa">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.585218229426!2d2.249101714945508!3d41.92327457056577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a527119a56dd7d%3A0x84f0ed8304ce9538!2sCemav!5e0!3m2!1sca!2ses!4v1617832343957!5m2!1sca!2ses"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Mapa d'ubicació de CEMAV"></iframe>
          </section>

        </div>
      </div>
    </main>

    <!-- ============ CTA ============ -->
    <section class="contact-cta">
      <div class="wrap">
        <h2>Vols demanar visita?</h2>
        <p>Truca'ns i t'atendrem amb la millor de les actituds.</p>
        <a class="cta-btn" href="tel:+34938894602">
          <ion-icon name="call-outline"></ion-icon>
          Truca al 93 889 46 02
        </a>
      </div>
    </section>

  @include('includes.footer')

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
