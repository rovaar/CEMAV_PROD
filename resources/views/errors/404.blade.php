<!doctype html>
<html lang="ca">
  <head>
    {{-- Pàgina 404 pròpia (SEO-49, POS-09). Laravel la serveix sola per a qualsevol ruta
         que no existeixi, amb el codi 404. Abans sortia la pantalla "Not Found" de Laravel,
         sense menú: qui arribava des de Google a una URL antiga es quedava sense sortida. --}}
    @include('includes.head', [
        'title'       => 'Pàgina no trobada | CEMAV',
        'description' => "Aquesta pàgina no existeix o ha canviat d'adreça. Consulta les especialitats de CEMAV, centre mèdic a Vic, o truca'ns al 93 889 46 02.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="stylesheet" href="@assetv('css/sobre.css')">
    <link rel="stylesheet" href="@assetv('css/error.css')">
  </head>
  <body>
  @include('includes.nav')

    <main class="err404">
      <p class="err404-codi">Error 404</p>
      <h1>No trobem aquesta pàgina</h1>
      <p class="err404-text">Potser l'adreça ha canviat o no s'ha escrit bé. Segurament el que
      busques és en alguna d'aquestes pàgines:</p>

      <ul class="err404-links">
        <li><a href="{{URL::to('/especialitats')}}">Totes les especialitats</a></li>
        <li><a href="{{URL::to('/odontologia')}}">Odontologia</a></li>
        <li><a href="{{URL::to('/fisioterapia')}}">Fisioteràpia</a></li>
        <li><a href="{{URL::to('/podologia')}}">Podologia</a></li>
        <li><a href="{{URL::to('/nutricio')}}">Nutrició i dietètica</a></li>
        <li><a href="{{URL::to('/psicologia')}}">Psicologia</a></li>
        <li><a href="{{URL::to('/oftalmologia')}}">Oftalmologia</a></li>
        <li><a href="{{URL::to('/traumatologia')}}">Traumatologia</a></li>
        <li><a href="{{URL::to('/dermatologia')}}">Dermatologia</a></li>
        <li><a href="{{URL::to('/serveis')}}">Revisions i analítiques</a></li>
        <li><a href="{{URL::to('/mutues')}}">Mútues</a></li>
        <li><a href="{{URL::to('/contacte')}}">Contacte</a></li>
      </ul>

      <div class="err404-cta">
        <a class="err404-btn" href="{{URL::to('/')}}">Torna a l'inici</a>
        <a class="err404-btn err404-btn--sec" href="tel:+34938894602">@icon('call-outline') Truca al 93 889 46 02</a>
      </div>
    </main>

  @include('includes.footer')
  </body>
</html>
