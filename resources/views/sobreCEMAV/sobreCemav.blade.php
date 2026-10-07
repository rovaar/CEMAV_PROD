<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Sobre CEMAV | Centre de Medicina Amable de Vic',
        'description' => "Coneix CEMAV, el Centre de Medicina Amable de Vic. Des del 2002 oferim atenció mèdica especialitzada amb la filosofia 'Persones tractant a persones'.",
    ])
    <link rel="stylesheet" href="@assetv('css/sobre.css')">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "@id": "https://www.cemavvic.cat/sobreCemav#pagina",
      "url": "https://www.cemavvic.cat/sobreCemav",
      "name": "Sobre CEMAV",
      "inLanguage": "ca",
      "isPartOf": { "@type": "WebSite", "url": "https://www.cemavvic.cat/", "name": "CEMAV" },
      "about": { "@id": "https://www.cemavvic.cat/#clinica" }
    }
    </script>
  </head>
  <body>
  @include('includes.nav')

    <!-- Hero -->
    <section class="sobre-hero">
      <div class="container">
        <span class="sobre-eyebrow">Qui som</span>
        <h1 class="sobre-title">Sobre CEMAV</h1>
        <p class="sobre-subtitle">Centre de Mèdic a Vic · Des del 2002</p>
      </div>
    </section>

    <!-- Intro: text left, image right -->
    <section class="sobre-intro">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 sobre-text">
            <p>
              CEMAV va néixer el <strong>2 de maig del 2002</strong> amb el nom "Avicena Espai Natural, S.L",
              oferint un espai dedicat a la medicina alternativa amb especialitats com homeopatia,
              acupuntura, fisioteràpia i podologia.
            </p>
            <p>
              Amb l'entrada de nous socis el <strong>2005</strong>, vam ampliar la nostra oferta incorporant
              especialitats mèdiques com traumatologia, urologia, oftalmologia, odontologia,
              dermatologia i psicologia, entre d'altres. Així, ens vam convertir en el
              <strong>Centre de Medicina Avançada de Vic (CEMAV)</strong>.
            </p>
            <p>
              El <strong>2020</strong> vam iniciar una nova etapa mantenint el mateix nom però
              reinterpretant-lo com a <strong>Centre de Medicina Amable de Vic</strong>. Actualment,
              continuem oferint una àmplia gamma de serveis mèdics i terapèutics.
            </p>
          </div>
          <div class="col-lg-6 sobre-img-wrap">
            <img src="img/Portada3.webp" alt="Façana CEMAV" class="sobre-img">
          </div>
        </div>
      </div>
    </section>

    <!-- Milestones -->
    <section class="sobre-milestones">
      <div class="container">
        <h2 class="milestones-title">La nostra història</h2>
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-12">
            <div class="milestone-card">
              <div class="milestone-year">2002</div>
              <div class="milestone-icon">&#127807;</div>
              <h3>Fundació</h3>
              <p>Neixem com "Avicena Espai Natural" amb medicina alternativa i teràpies naturals.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="milestone-card milestone-card--accent">
              <div class="milestone-year">2005</div>
              <div class="milestone-icon">&#128138;</div>
              <h3>Creixement</h3>
              <p>Incorporem especialitats mèdiques i ens convertim en Centre de Medicina Avançada.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="milestone-card">
              <div class="milestone-year">2020</div>
              <div class="milestone-icon">&#10084;</div>
              <h3>Nova etapa</h3>
              <p>Reinterpretem CEMAV com a Centre de Medicina <em>Amable</em>: persones primer.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Filosofia quote -->
    <section class="sobre-filosofia">
      <div class="container">
        <blockquote class="filosofia-quote">
          <span class="quote-mark">"</span>
          Persones tractant a persones
          <span class="quote-mark">"</span>
        </blockquote>
        <p class="filosofia-sub">La filosofia que guia cada visita al nostre centre.</p>
      </div>
    </section>

  @include('includes.footer')

  </body>
</html>
