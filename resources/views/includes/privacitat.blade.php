<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Política de privacitat | Centre de Medicina Amable de Vic',
        'description' => "Política de privacitat de CEMAV. Informació sobre el tractament de dades personals segons el RGPD i la LOPDGDD.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="stylesheet" href="@assetv('css/sobre.css')">
    <link rel="stylesheet" href="@assetv('css/legal.css')">
  </head>
  <body>
  @include('includes.nav')

    <article class="legal-doc">
      <h1>Política de privacitat</h1>
      <p class="updated">Última actualització: juny de 2026</p>

      <p>D'acord amb el Reglament (UE) 2016/679 (RGPD) i la Llei orgànica 3/2018, de protecció de
      dades personals i garantia dels drets digitals (LOPDGDD), us informem sobre el tractament
      de les vostres dades personals.</p>

      <h2>1. Responsable del tractament</h2>
      <ul>
        <li><strong>Responsable:</strong> Avicena Espai Natural, S.L. (nom comercial «CEMAV – Centre de Medicina Amable de Vic»)</li>
        <li><strong>CIF:</strong> B62873013</li>
        <li><strong>Registre sanitari (RCESS):</strong> E08652790</li>
        <li><strong>Domicili:</strong> Carrer Bisbe Strauch, 16, 08500 Vic (Barcelona)</li>
        <li><strong>Correu electrònic:</strong> <a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a></li>
        <li><strong>Telèfon:</strong> 93 889 46 02</li>
      </ul>

      <h2>2. Quines dades tractem i amb quina finalitat</h2>
      <div class="legal-table">
        <table>
          <thead>
            <tr><th>Activitat</th><th>Dades</th><th>Finalitat</th><th>Base jurídica (art. RGPD)</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>Contacte (telèfon / correu electrònic)</td>
              <td>Nom, telèfon, correu electrònic i el contingut del missatge</td>
              <td>Atendre la vostra consulta o sol·licitud de cita</td>
              <td>Consentiment i/o mesures precontractuals (art. 6.1.a i 6.1.b)</td>
            </tr>
            <tr>
              <td>Prestació de serveis sanitaris</td>
              <td>Dades identificatives i dades de salut (categoria especial)</td>
              <td>Assistència mèdica i gestió de la història clínica</td>
              <td>Finalitats de medicina preventiva i assistència sanitària (art. 9.2.h) i obligació legal</td>
            </tr>
            <tr>
              <td>Analítica web</td>
              <td>Identificadors de cookies, adreça IP, dades de navegació</td>
              <td>Mesurar i millorar l'ús del lloc web (Google Analytics)</td>
              <td>Consentiment (art. 6.1.a) — vegeu la Política de cookies</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="legal-note">ℹ️ Les <strong>dades de salut</strong> són categories especials de
      dades (art. 9 RGPD) i es tracten amb mesures de seguretat reforçades i amb deure de secret
      professional. Aquest lloc web <strong>no recull dades de salut a través d'Internet</strong>;
      el tractament clínic es fa al centre.</div>

      <h2>3. Durant quant de temps conservem les dades</h2>
      <p>Les dades de contacte es conserven el temps necessari per atendre la sol·licitud i,
      després, durant els terminis legals de prescripció. La història clínica es conserva segons
      la Llei 41/2002 i la normativa sanitària aplicable (com a mínim 5 anys des de l'alta de
      cada procés assistencial).</p>

      <h2>4. A qui comuniquem les dades</h2>
      <p>No se cedeixen dades a tercers excepte per obligació legal. Es poden utilitzar
      proveïdors de serveis (encarregats del tractament) com Google LLC per a l'analítica web,
      sempre amb les garanties exigides pel RGPD per a transferències internacionals.</p>

      <h2>5. Els vostres drets</h2>
      <p>Podeu exercir els drets d'accés, rectificació, supressió, oposició, limitació i
      portabilitat enviant un correu a
      <a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a> o per escrit al domicili
      indicat, adjuntant una còpia d'un document identificatiu. També teniu dret a presentar una
      reclamació davant l'<strong>Agència Espanyola de Protecció de Dades</strong>
      (<a href="https://www.aepd.es" target="_blank" rel="noopener">www.aepd.es</a>) o l'Autoritat
      Catalana de Protecció de Dades.</p>

      <h2>6. Seguretat</h2>
      <p>Apliquem les mesures tècniques i organitzatives adequades per garantir la
      confidencialitat, integritat i disponibilitat de les dades i evitar-ne l'alteració, pèrdua
      o accés no autoritzat.</p>

      <p style="margin-top:32px">Vegeu també l'
      <a href="{{URL::to('/avislegal')}}">Avís legal</a> i la
      <a href="{{URL::to('/politicadecookies')}}">Política de cookies</a>.</p>
    </article>

  @include('includes.footer')
  </body>
</html>
