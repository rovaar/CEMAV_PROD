<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => "Termes d'ús | Centre de Medicina Amable de Vic",
        'description' => "Termes i condicions d'ús del lloc web de CEMAV.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="stylesheet" href="{{asset('css/sobre.css')}}">
    <link rel="stylesheet" href="{{asset('css/legal.css')}}">
  </head>
  <body>
  @include('includes.nav')

    <article class="legal-doc">
      <h1>Termes d'ús</h1>
      <p class="updated">Última actualització: juny de 2026</p>

      <p>L'accés i la navegació per aquest lloc web (www.cemavvic.cat) impliquen l'acceptació
      d'aquests termes d'ús, així com de l'<a href="{{URL::to('/avislegal')}}">Avís legal</a>, la
      <a href="{{URL::to('/politicadeprivacitat')}}">Política de privacitat</a> i la
      <a href="{{URL::to('/politicadecookies')}}">Política de cookies</a>.</p>

      <h2>1. Finalitat del lloc web</h2>
      <p>Aquest lloc web ofereix informació sobre CEMAV, les seves especialitats i serveis
      mèdics. Té caràcter merament informatiu i no constitueix consell mèdic. La informació
      publicada no substitueix la consulta, el diagnòstic ni el tractament d'un professional
      sanitari.</p>

      <h2>2. Ús correcte del lloc web</h2>
      <p>L'usuari es compromet a:</p>
      <ul>
        <li>Fer un ús lícit dels continguts i serveis, conforme a la llei i a la bona fe.</li>
        <li>No introduir ni difondre virus o programes que puguin causar danys.</li>
        <li>No intentar accedir a àrees restringides ni alterar el funcionament del lloc web.</li>
        <li>No utilitzar els continguts amb finalitats comercials sense autorització.</li>
      </ul>

      <h2>3. Propietat intel·lectual</h2>
      <p>Els continguts del lloc web estan protegits per drets de propietat intel·lectual i
      industrial. Queda prohibida la seva reproducció, distribució, comunicació pública o
      transformació sense autorització expressa del titular.</p>

      <h2>4. Responsabilitat</h2>
      <p>El titular procura mantenir la informació actualitzada i lliure d'errors, però no
      garanteix la disponibilitat contínua del lloc web ni l'absència total d'errors. El titular
      no es responsabilitza de l'ús que els usuaris facin de la informació publicada.</p>

      <h2>5. Modificacions</h2>
      <p>El titular es reserva el dret de modificar aquests termes d'ús i els continguts del
      lloc web en qualsevol moment i sense avís previ. Es recomana revisar-los periòdicament.</p>

      <h2>6. Legislació aplicable</h2>
      <p>Aquests termes d'ús es regeixen per la legislació espanyola.</p>
    </article>

  @include('includes.footer')
  </body>
</html>
