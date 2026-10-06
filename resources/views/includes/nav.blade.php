<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('img/logoPrincipal.webp')}}" class="logo" alt="CEMAV, Centre de Medicina Amable de Vic" width="240" height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            @icon('menu-outline')
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/')}}">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/sobreCemav')}}">Sobre CEMAV</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{URL::to('/especialitats')}}">
                        Especialitats <span class="caret-especialitats" aria-hidden="true">▾</span>
                    </a>
                    {{-- Nomes es veu per sota de 992px. A escriptori el desplegable
                         s'obre amb :hover i el ▾ decoratiu ja va dins de l'enllac. --}}
                    <button class="nav-especialitats-toggle" type="button"
                            aria-expanded="false" aria-controls="menu-especialitats"
                            aria-label="Mostra la llista d'especialitats">▾</button>
                <div class="dropdown-menu" id="menu-especialitats" aria-labelledby="especialitats">
                    <a class="dropdown-item" href="{{URL::to('/dermatologia')}}" id="dermatologia">Dermatologia</a>
                    <a class="dropdown-item" href="{{URL::to('/nutricio')}}" id="nutricio">Dietista i Nutrició</a>
                    <a class="dropdown-item" href="{{URL::to('/fisioterapia')}}" id="fisioterapia">Fisioteràpia</a>
                    <a class="dropdown-item" href="{{URL::to('/infermeria')}}" id="infermeria">Infermeria</a>
                    <a class="dropdown-item" href="{{URL::to('/odontologia')}}" id="odontologia">Odontologia</a>
                    <a class="dropdown-item" href="{{URL::to('/oftalmologia')}}" id="oftalmologia">Oftalmologia</a>
                    <a class="dropdown-item" href="{{URL::to('/optometria')}}" id="optometria">Optometria</a>
                    <a class="dropdown-item" href="{{URL::to('/podologia')}}" id="podologia">Podologia</a>
                    <a class="dropdown-item" href="{{URL::to('/psicologia')}}" id="psicologia">Psicologia</a>
                    <a class="dropdown-item" href="{{URL::to('/traumatologia')}}" id="traumatologia">Traumatologia i ortòpèdia</a>
                    <a class="dropdown-item" href="{{URL::to('/urologia')}}" id="urologia">Urologia</a>

                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/serveis')}}">Altres Serveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/mutues')}}">Mútues</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/contacte')}}">Contacte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>		
