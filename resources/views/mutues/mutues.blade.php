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

    <div style="padding: 120px 0 40px 0; text-align: center;">
        <h1 style="font-size: 2.5rem; font-weight: 700; color: #2c3e50;">Les nostres <span style="color: #3090C7;">mútues</span></h1>
        <p style="font-size: 1.1rem; color: #666; margin-top: 15px; text-align: center;">Treballem amb les principals mútues i assegurances mèdiques.</p>
    </div>

    <div class="container" style="padding-bottom: 80px;">
        <div class="d-flex flex-wrap justify-content-center" style="gap: 30px;">
            <img src="{{asset('img/Mutues/adeslas.webp')}}" class="foto" alt="Logo Adeslas" width="200" height="150">
            <img src="{{asset('img/Mutues/AEGON.webp')}}" class="foto" alt="Logo AEGON" width="200" height="150">
            <img src="{{asset('img/Mutues/agrupacioMutua.webp')}}" class="foto" alt="Logo Agrupació Mútua" width="200" height="150">
            <img src="{{asset('img/Mutues/asisa.webp')}}" class="foto" alt="Logo Asisa" width="200" height="150">
            <img src="{{asset('img/Mutues/assistenciaSanitaria.webp')}}" class="foto" alt="Logo Assistència Sanitària" width="200" height="150">
            <img src="{{asset('img/Mutues/axa.webp')}}" class="foto" alt="Logo AXA" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/cosalud.webp')}}" class="foto" alt="Logo Cosalud" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/divinapastora.webp')}}" class="foto" alt="Logo Divina Pastora Seguros" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/dkv.webp')}}" class="foto" alt="Logo DKV Seguros Médicos" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/generali.webp')}}" class="foto" alt="Logo Generali" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/hna.webp')}}" class="foto" alt="Logo HNA" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/mutuageneralcat.webp')}}" class="foto" alt="Logo Mútua General de Catalunya" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/sanitas.webp')}}" class="foto" alt="Logo Sanitas" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/fiatcSeguros.webp')}}" class="foto" alt="Logo FIATC Seguros" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/Mutuacat.webp')}}" class="foto" alt="Logo Mutuacat" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/plusUltra.webp')}}" class="foto" alt="Logo Plus Ultra Seguros" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/logosantalucia.webp')}}" class="foto" alt="Logo Santa Lucía Seguros" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/groupama.webp')}}" class="foto" alt="Logo Groupama" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/mapfre.webp')}}" class="foto" alt="Logo Mapfre" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/caser.webp')}}" class="foto" alt="Logo Caser Seguros" width="200" height="150" loading="lazy">
            <img src="{{asset('img/Mutues/atlantida.webp')}}" class="foto" alt="Logo Atlàntida Seguros" width="200" height="150" loading="lazy">
        </div>
    </div>

  @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
