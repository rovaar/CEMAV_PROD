<footer class="page-footer bg-dark" style="height: 100%">

    <div class="footer-top">
      <div class="container">
        <div class="row py-4 d-flex align-items-centers">

          <div class="col-md-12 text-center">
            <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
            <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
            <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
          </div>
        </div>
      </div>
    </div>
      
    </div class="container text-center text-md-left mt-5">
      <div class="row footer-bot">

     <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font weight-bold">Links Utils</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 85px;heigth: 2px ;background-color: #3090C7!important;">
             <ul class="list-unstyled">
              <li class="my-2"><a href="{{URL::to('/sobreCemav')}}">Sobre CEMAV</a></li>
              <li class="my-2"><a href="{{URL::to('/contacte')}}">Contacte</a></li>
              <li class="my-2"><a href="">Serveis</a></li>
              <li class="my-2"><a href="{{URL::to('/mutues')}}">Mutues</a></li>
            </ul>
        </div>
        
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font weight-bold">Horari</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 85px;heigth: 2px ;background-color: #3090C7!important;">
          
          <ul class="list-unstyled">
            <li class="my-2">De dilluns a divendres:</li>
            <li class="my-2">8.00h. – 14.00h.</li>
            <li class="my-2">15.00h. – 20.00h.</li>
          </ul>
        </div>
        
        <div class="col-md-3 mx-auto mb-4">
          <h6 class="text-uppercase font weight-bold">Contacte</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 85px;heigth: 2px ;background-color: #3090C7!important;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="{{URL::to('/sobreCemav')}}">Sobre CEMAV</a></li>
              <li class="my-2"><a href="mailto:noucemav@gmail.com">noucemav@gmail.com</a></li>
              <li class="my-2"><a href="tel: +93 889 46 02"> +93 889 46 02</a></li>
            </ul>
        </div>

        <div class="col-md-3 mx-auto mb-4">
          <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5937.170768706284!2d2.2512900000000005!3d41.923271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84f0ed8304ce9538!2sCemav!5e0!3m2!1sca!2ses!4v1618350453333!5m2!1sca!2ses" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>

  </footer>

  <style>
    @media (min-width: 762px) and (max-width: 920px) {
        #map{
          display: none;
        }
    }
   
  </style>