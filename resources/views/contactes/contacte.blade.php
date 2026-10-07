<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Contacte i cita prèvia | CEMAV, centre mèdic a Vic',
        'description' => "Contacta amb CEMAV, centre mèdic a Vic. Truca'ns al 93 889 46 02 o vine a C/ Bisbe Strauch, 16. De dilluns a divendres, de 8 a 14 h i de 15 a 20 h.",
    ])
    <link rel="stylesheet" href="@assetv('css/contacte.css')">
    @include('includes.schema-clinica')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "@id": "https://www.cemavvic.cat/contacte#pagina",
      "url": "https://www.cemavvic.cat/contacte",
      "name": "Contacte i cita prèvia",
      "inLanguage": "ca",
      "isPartOf": { "@type": "WebSite", "url": "https://www.cemavvic.cat/", "name": "CEMAV" },
      "about": { "@id": "https://www.cemavvic.cat/#clinica" }
    }
    </script>
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
              <span class="ic">@icon('location-outline')</span>
              <div>
                <h2>Adreça</h2>
                <p>C/ Bisbe Strauch, 16 · Vic</p>
              </div>
            </a>

            <a class="info-card" href="tel:+34938894602">
              <span class="ic">@icon('call-outline')</span>
              <div>
                <h2>Telèfon</h2>
                <p>93 889 46 02</p>
              </div>
            </a>

            <a class="info-card" href="mailto:noucemav@gmail.com">
              <span class="ic">@icon('mail-outline')</span>
              <div>
                <h2>Correu electrònic</h2>
                <p>noucemav@gmail.com</p>
              </div>
            </a>

            <div class="info-card no-link">
              <span class="ic">@icon('time-outline')</span>
              <div>
                <h2>Horari</h2>
                <p>Dilluns a divendres</p>
                <p class="hours">8.00 h – 14.00 h · 15.00 h – 20.00 h</p>
              </div>
            </div>

          </section>

          <!-- Columna mapa -->
          {{-- Facana del mapa (PSI-10). L'iframe de Google Maps carregava ~450 KB de
               JavaScript a cada visita i podia deixar cookies de Google sense passar pel
               consentiment. Ara nomes es carrega quan l'usuari ho demana. Sense JS,
               l'enllac obre Google Maps. --}}
          <section class="contact-map" aria-label="Ubicació al mapa">
            <a class="map-facade" id="map-facade" target="_blank" rel="noopener"
               href="https://www.google.com/maps/search/CEMAV+Centre+Medicina+Amable+Vic"
               data-embed="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.585218229426!2d2.249101714945508!3d41.92327457056577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a527119a56dd7d%3A0x84f0ed8304ce9538!2sCemav!5e0!3m2!1sca!2ses!4v1617832343957!5m2!1sca!2ses">
              <span class="map-pin" aria-hidden="true">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s7-6.2 7-12a7 7 0 0 0-14 0c0 5.8 7 12 7 12z"/><circle cx="12" cy="10" r="2.6"/></svg>
              </span>
              <span class="map-addr">C/ Bisbe Strauch, 16 · Vic</span>
              <span class="map-btn">Mostra el mapa</span>
              <span class="map-note">Es carregarà Google Maps, que pot fer servir cookies pròpies.</span>
            </a>
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
          @icon('call-outline')
          Truca al 93 889 46 02
        </a>
      </div>
    </section>

  @include('includes.footer')

  <script>
    // Facana del mapa: substitueix l'enllac per l'iframe nomes quan es clica.
    (function () {
      var f = document.getElementById('map-facade');
      if (!f) return;
      f.addEventListener('click', function (e) {
        e.preventDefault();
        var i = document.createElement('iframe');
        i.src = f.getAttribute('data-embed');
        i.title = "Mapa d'ubicació de CEMAV";
        i.setAttribute('allowfullscreen', '');
        i.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');
        i.style.border = '0';
        f.parentNode.replaceChild(i, f);
        i.focus();
      });
    })();
  </script>

  </body>
</html>
