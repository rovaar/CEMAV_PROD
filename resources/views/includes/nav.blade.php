<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="img/logoPrincipal.webp" class="logo" alt="logo" style="height: 60px; width: 250px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu-outline"></ion-icon>
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
                    <a class="nav-link dropdown-toggle" href="#" id="especialitats" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Especialitats
                    </a>
                <div class="dropdown-menu dropdown-menu-horizontal" aria-labelledby="navbarDropdownMenuLink">
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
