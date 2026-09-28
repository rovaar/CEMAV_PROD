<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Mutues | Centre de Medicina Amable de Vic',
        'description' => 'CEMAV treballa amb les principals mútues i assegurances mèdiques. Consulta quines cobertes a Vic: Adeslas, AEGON, Agrupació Mútua i moltes més.',
    ])
    <link rel="stylesheet" href="{{asset('css/mutues.css')}}">
  </head>
  <body>

  @include('includes.nav')

    <header class="mutues-hero">
        <h1>Les nostres <span>mútues</span></h1>
        <p>Treballem amb les principals mútues i assegurances mèdiques. Consulta si la teva
           hi és i truca'ns al <a href="tel:+34938894602">93 889 46 02</a> per confirmar la
           cobertura del servei que necessites.</p>
    </header>

    <section class="mutues-intro">
        <div class="container">
            <h2>Vens per mútua?</h2>
            <p>Al centre atenem tant visites privades com per mútua. La cobertura de cada
               especialitat depèn de la pòlissa que tinguis contractada, així que el més
               ràpid és que ens truquis abans de venir i t'ho confirmem.</p>
        </div>
    </section>

    <section class="mutues-llista">
        <div class="container">
            <h2>Mútues amb què treballem</h2>
        </div>

    <div class="container" style="padding-bottom: 80px;">
        <div class="mutues-grid">
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/adeslas.webp')}}" alt="Logo Adeslas" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Adeslas</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/AEGON.webp')}}" alt="Logo AEGON" width="200" height="150" loading="lazy">
                <span class="mutua-nom">AEGON</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/agrupacioMutua.webp')}}" alt="Logo Agrupació Mútua" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Agrupació Mútua</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/asisa.webp')}}" alt="Logo Asisa" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Asisa</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/assistenciaSanitaria.webp')}}" alt="Logo Assistència Sanitària" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Assistència Sanitària</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/atlantida.webp')}}" alt="Logo Atlàntida Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Atlàntida Seguros</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/axa.webp')}}" alt="Logo AXA" width="200" height="150" loading="lazy">
                <span class="mutua-nom">AXA</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/caser.webp')}}" alt="Logo Caser Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Caser Seguros</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/cosalud.webp')}}" alt="Logo Cosalud" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Cosalud</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/divinapastora.webp')}}" alt="Logo Divina Pastora Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Divina Pastora Seguros</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/dkv.webp')}}" alt="Logo DKV Seguros Médicos" width="200" height="150" loading="lazy">
                <span class="mutua-nom">DKV Seguros Médicos</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/fiatcSeguros.webp')}}" alt="Logo FIATC Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">FIATC Seguros</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/generali.webp')}}" alt="Logo Generali" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Generali</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/groupama.webp')}}" alt="Logo Groupama" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Groupama</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/hna.webp')}}" alt="Logo HNA" width="200" height="150" loading="lazy">
                <span class="mutua-nom">HNA</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/mapfre.webp')}}" alt="Logo Mapfre" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Mapfre</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/Mutuacat.webp')}}" alt="Logo Mutuacat" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Mutuacat</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/mutuageneralcat.webp')}}" alt="Logo Mútua General de Catalunya" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Mútua General de Catalunya</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/plusUltra.webp')}}" alt="Logo Plus Ultra Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Plus Ultra Seguros</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/sanitas.webp')}}" alt="Logo Sanitas" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Sanitas</span>
            </div>
            <div class="mutua-card">
                <img src="{{asset('img/Mutues/logosantalucia.webp')}}" alt="Logo Santa Lucía Seguros" width="200" height="150" loading="lazy">
                <span class="mutua-nom">Santa Lucía Seguros</span>
            </div>
        </div>
    </div>
    </section>

  @include('includes.footer')

  </body>
</html>
