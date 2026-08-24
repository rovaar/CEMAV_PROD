<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Política de cookies | Centre de Medicina Amable de Vic',
        'description' => "Política de cookies de CEMAV. Quines cookies utilitzem, amb quina finalitat i com gestionar les teves preferències.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="stylesheet" href="{{asset('css/sobre.css')}}">
    <link rel="stylesheet" href="{{asset('css/legal.css')}}">
  </head>
  <body>
  @include('includes.nav')

    <article class="legal-doc">
      <h1>Política de cookies</h1>
      <p class="updated">Última actualització: juny de 2026</p>

      <p>Aquest lloc web utilitza cookies. En aquesta política expliquem què són, quines fem
      servir, amb quina finalitat i com pots gestionar-les o retirar el teu consentiment en
      qualsevol moment.</p>

      <h2>Què són les cookies?</h2>
      <p>Una cookie és un petit fitxer de text que un lloc web desa al teu navegador quan el
      visites. Serveixen perquè el web funcioni, recordi preferències o reculli informació
      estadística sobre la navegació.</p>

      <h2>El teu consentiment</h2>
      <p>Quan visites el web per primera vegada, et mostrem un avís on pots
      <strong>acceptar</strong> o <strong>rebutjar</strong> les cookies no essencials.
      Les cookies analítiques <strong>no s'instal·len fins que les acceptes</strong>. Si les
      rebutges, el web continua funcionant amb normalitat. Pots canviar la teva decisió quan
      vulguis (vegeu l'apartat final).</p>

      <h2>Cookies que utilitzem</h2>

      <h3>Cookies tècniques i de preferències (sempre actives)</h3>
      <div class="legal-table">
        <table>
          <thead>
            <tr><th>Cookie</th><th>Titularitat</th><th>Finalitat</th><th>Durada</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>cemav_cookie_consent</td>
              <td>Pròpia (localStorage)</td>
              <td>Recordar si has acceptat o rebutjat les cookies analítiques</td>
              <td>Persistent fins que l'esborris</td>
            </tr>
            <tr>
              <td>XSRF-TOKEN / sessió</td>
              <td>Pròpia (Laravel)</td>
              <td>Seguretat i funcionament tècnic del lloc</td>
              <td>Sessió</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>Cookies analítiques (només si les acceptes)</h3>
      <div class="legal-table">
        <table>
          <thead>
            <tr><th>Cookie</th><th>Titularitat</th><th>Finalitat</th><th>Durada</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>_ga</td>
              <td>Google Analytics 4 (Google LLC)</td>
              <td>Distingir usuaris de manera anònima</td>
              <td>2 anys</td>
            </tr>
            <tr>
              <td>_ga_L3V62LP2WB</td>
              <td>Google Analytics 4 (Google LLC)</td>
              <td>Mantenir l'estat de la sessió per a l'estadística de visites</td>
              <td>2 anys</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p>Google Analytics ens ajuda a entendre, de forma agregada i anònima, com s'utilitza el
      web. Tens més informació a la
      <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">política de privacitat de Google</a>.
      Pots inhabilitar el seguiment de Google Analytics amb el
      <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">complement d'inhabilitació del navegador</a>.</p>

      <h2>Com gestionar o eliminar les cookies</h2>
      <p>Pots configurar el teu navegador per bloquejar o eliminar cookies. Aquí tens les
      instruccions oficials:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647?hl=ca" target="_blank" rel="noopener">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/ca/kb/Esborrar%20les%20galetes" target="_blank" rel="noopener">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/ca-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
        <li><a href="https://support.microsoft.com/ca-es/microsoft-edge" target="_blank" rel="noopener">Microsoft Edge</a></li>
      </ul>

      <h2>Canviar el teu consentiment</h2>
      <p>Pots retirar el consentiment a les cookies analítiques en qualsevol moment fent clic
      aquí. Tornarem a mostrar-te l'avís de cookies:</p>
      <button type="button" class="cc-revoke" onclick="cemavResetCookies()">Canviar les preferències de cookies</button>

      <p style="margin-top:32px">Vegeu també l'
      <a href="{{URL::to('/avislegal')}}">Avís legal</a> i la
      <a href="{{URL::to('/politicadeprivacitat')}}">Política de privacitat</a>.</p>
    </article>

  @include('includes.footer')

    <script>
      function cemavResetCookies(){
        try { localStorage.removeItem('cemav_cookie_consent'); } catch (e) {}
        location.reload();
      }
    </script>
  </body>
</html>
