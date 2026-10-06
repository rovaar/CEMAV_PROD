<footer>
  <div class="wrap">
    <div class="foot-grid">

      <div class="foot-brand">
        <span class="name">CEMAV</span>
        <p>Centre de Medicina Amable de Vic. Persones tractant a persones.</p>
      </div>

      <div>
        <h2 class="foot-title">Links útils</h2>
        <ul>
          <li><a href="{{URL::to('/sobreCemav')}}">Sobre CEMAV</a></li>
          <li><a href="{{URL::to('/serveis')}}">Serveis</a></li>
          <li><a href="{{URL::to('/mutues')}}">Mútues</a></li>
          <li><a href="{{URL::to('/contacte')}}">Contacte</a></li>
        </ul>
      </div>

      <div>
        <h2 class="foot-title">Horari</h2>
        <ul>
          <li>Dilluns a divendres</li>
          <li style="color:#fff;font-weight:700">8.00 h – 14.00 h</li>
          <li style="color:#fff;font-weight:700">15.00 h – 20.00 h</li>
        </ul>
      </div>

      <div>
        <h2 class="foot-title">Contacte</h2>
        <div class="contact-line">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <rect x="3" y="5" width="18" height="14" rx="2"/>
            <path d="m3 7 9 6 9-6"/>
          </svg>
          <a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a>
        </div>
        <div class="contact-line">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>
          </svg>
          <a href="tel:+34938894602">93 889 46 02</a>
        </div>
        <div class="map-card">
          <b>Com arribar</b>
          <span style="font-size:.9rem;display:block">Carrer Bisbe Strauch, 16 · Vic</span>
          <a class="maps" href="https://www.google.com/maps/search/CEMAV+Centre+Medicina+Amable+Vic" target="_blank" rel="noopener">
            Obre a Maps
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <path d="M15 3h6v6M10 14 21 3M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5"/>
            </svg>
          </a>
        </div>
      </div>

    </div>
    <div class="foot-legal">
      <a href="{{URL::to('/avislegal')}}">Avís legal</a>
      <a href="{{URL::to('/politicadeprivacitat')}}">Política de privacitat</a>
      <a href="{{URL::to('/politicadecookies')}}">Política de cookies</a>
      <a href="{{URL::to('/termesdus')}}">Termes d'ús</a>
    </div>
    <div class="foot-bottom">
      <span>© <span id="yr"></span> CEMAV · Centre de Medicina Amable de Vic</span>
      <span>Persones tractant a persones</span>
    </div>
  </div>
</footer>
<script>
  document.getElementById('yr').textContent = new Date().getFullYear();

  // Menu hamburguesa. Substitueix el data-toggle="collapse" de Bootstrap JS:
  // era l'unic component que es feia servir de jQuery + Popper + bootstrap.min.js,
  // retirats el 26/08/2026. Les classes .collapse i .show les segueix donant el
  // CSS de Bootstrap, que si que es carrega.
  var cemavToggler = document.querySelector('.navbar-toggler');
  var cemavMenu = document.getElementById('navbarSupportedContent');

  if (cemavToggler && cemavMenu) {
    cemavToggler.addEventListener('click', function () {
      var obert = cemavMenu.classList.toggle('show');
      cemavToggler.setAttribute('aria-expanded', obert ? 'true' : 'false');
    });
  }

  // Submenu d'especialitats dins del hamburguesa. El boto nomes es visible per
  // sota de 992px; a escriptori el desplegable segueix obrint-se amb :hover.
  var cemavEsp = document.querySelector('.nav-especialitats-toggle');
  var cemavEspMenu = document.getElementById('menu-especialitats');

  if (cemavEsp && cemavEspMenu) {
    cemavEsp.addEventListener('click', function () {
      var obert = cemavEspMenu.classList.toggle('show');
      cemavEsp.setAttribute('aria-expanded', obert ? 'true' : 'false');
    });
  }
</script>
