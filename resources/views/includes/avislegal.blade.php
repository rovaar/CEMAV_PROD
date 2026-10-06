<!doctype html>
<html lang="ca">
  <head>
    @include('includes.head', [
        'title'       => 'Avís legal | Centre de Medicina Amable de Vic',
        'description' => "Avís legal de CEMAV. Dades identificatives del titular del lloc web cemavvic.cat segons la LSSI-CE.",
        'robots'      => 'noindex, follow',
    ])
    <link rel="stylesheet" href="@assetv('css/sobre.css')">
    <link rel="stylesheet" href="@assetv('css/legal.css')">
  </head>
  <body>
  @include('includes.nav')

    <article class="legal-doc">
      <h1>Avís legal</h1>
      <p class="updated">Última actualització: juny de 2026</p>

      <p>En compliment de l'article 10 de la Llei 34/2002, d'11 de juliol, de Serveis de la
      Societat de la Informació i de Comerç Electrònic (LSSI-CE), es posen a disposició dels
      usuaris les dades identificatives del titular d'aquest lloc web.</p>

      <h2>1. Dades del titular</h2>
      <ul>
        <li><strong>Titular:</strong> Avicena Espai Natural, S.L. (nom comercial «CEMAV – Centre de Medicina Amable de Vic»)</li>
        <li><strong>CIF:</strong> B62873013</li>
        <li><strong>Domicili:</strong> Carrer Bisbe Strauch, 16, 08500 Vic (Barcelona)</li>
        <li><strong>Dades registrals:</strong> Registre Mercantil de Barcelona, Volum 34581, Foli 170, Full B-251476, Inscripció 3</li>
        <li><strong>Registre sanitari (RCESS):</strong> E08652790</li>
        <li><strong>Telèfon:</strong> 93 889 46 02</li>
        <li><strong>Correu electrònic:</strong> <a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a></li>
        <li><strong>Lloc web:</strong> <a href="https://www.cemavvic.cat">www.cemavvic.cat</a></li>
      </ul>

      <h2>2. Objecte</h2>
      <p>Aquest lloc web té caràcter informatiu i divulgatiu sobre els serveis mèdics i les
      especialitats que ofereix CEMAV. La navegació pel lloc web atribueix la condició d'usuari
      i implica l'acceptació plena d'aquest avís legal.</p>

      <h2>3. Condicions d'ús</h2>
      <p>L'usuari es compromet a fer un ús adequat dels continguts i serveis del lloc web i a no
      emprar-los per a activitats il·lícites, contràries a la bona fe o a l'ordre públic, ni de
      manera que puguin danyar, inutilitzar o sobrecarregar el lloc web o impedir-ne l'ús normal
      per part d'altres usuaris.</p>

      <h2>4. Propietat intel·lectual i industrial</h2>
      <p>Tots els continguts del lloc web (textos, imatges, logotips, disseny gràfic i codi font)
      són titularitat del titular o de tercers que n'han autoritzat l'ús, i estan protegits per
      la normativa de propietat intel·lectual i industrial. Queda prohibida la seva reproducció,
      distribució o transformació sense autorització expressa.</p>

      <h2>5. Responsabilitat</h2>
      <p>El titular no es fa responsable dels danys que es puguin derivar d'errors o omissions
      als continguts, de la falta de disponibilitat del lloc web o de la transmissió de virus o
      programes maliciosos, malgrat haver adoptat les mesures tecnològiques necessàries per
      evitar-ho. La informació d'aquest web no substitueix en cap cas el consell, diagnòstic o
      tractament mèdic professional.</p>

      <h2>6. Enllaços</h2>
      <p>El lloc web pot contenir enllaços a llocs de tercers. El titular no assumeix cap
      responsabilitat sobre els continguts ni les polítiques de privacitat d'aquests llocs.</p>

      <h2>7. Legislació aplicable</h2>
      <p>Aquest avís legal es regeix per la legislació espanyola. Per a la resolució de
      qualsevol controvèrsia, les parts se sotmeten als jutjats i tribunals que corresponguin
      segons la normativa aplicable.</p>

      <p style="margin-top:32px">Vegeu també la nostra
      <a href="{{URL::to('/politicadeprivacitat')}}">Política de privacitat</a> i la
      <a href="{{URL::to('/politicadecookies')}}">Política de cookies</a>.</p>
    </article>

  @include('includes.footer')
  </body>
</html>
