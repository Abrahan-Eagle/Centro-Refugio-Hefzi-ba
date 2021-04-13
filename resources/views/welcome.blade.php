<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/logo/favicon.ico" type="image/ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app_f.css')}}">
        @toastr_css
        
    </head>



<!-- *****************************************************  NAVBAR ***************************************************** -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img width="65px" src="{{('/images/logo/LOGO.png')}}" alt="Logo2"/><a class="navbar-brand" href="{{url('/')}}"><!--<i class="flaticon-cross"></i>--><span>Centro Refugio</span> <span>Hefzi-bá</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>


      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{Request::is('/')?'active':''}}"><a href="{{url('/')}}" class="nav-link">Home</a></li>
          <li class="nav-item {{Request::is('about')?'active':''}}"><a href="{{url('/about')}}" class="nav-link">Nosotros</a></li>
          <li class="nav-item {{Request::is('events')?'active':''}}"><a href="{{url('/events')}}" class="nav-link">Eventos</a></li>
          <li class="nav-item {{Request::is('sermons')?'active':''}}"><a href="{{url('/sermons')}}" class="nav-link">Predicas</a></li>
          <li class="nav-item {{Request::is('blog')?'active':''}}"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
          <li class="nav-item {{Request::is('contact')?'active':''}}"><a href="{{url('/contact')}}" class="nav-link">Contactanos</a></li>
          <li class="nav-item {{Request::is('donation')?'active':''}}"><a href="{{url('/donation')}}" class="nav-link">Donar</a></li>
          
          @if (Route::has('login'))
          <li class="nav-item dropdown">
            @guest
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            @endguest
            
            @auth
            <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
            @else
            <div class="dropdown-hover dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
              <a href="{{ route('login') }}"  class="dropdown-item">Login</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}"  class="dropdown-item">Registrar</a>
              @endif
            </div>
            @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- ***************************************************** END NAVBAR ***************************************************** -->
  <!-- *****************************************************   CENTER   ***************************************************** -->
  
  @yield('content')
  
  <!-- ***************************************************** END CENTER ***************************************************** -->
  <!-- *****************************************************  FOOTER ***************************************************** -->
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget text-center">
            <h1 class="ftco-heading-2 text-center"><img width="150px" height="150px"  src="{{asset('/images/logo/LOGO.png')}}"/></h1>
            <div class="block-23  text-center">
            <h4><a href="{{ url('/')}} "><span>Centro Refugio Hefzi-bá</span></a></h4>
            </div>
            <p class="text-center">Proclamando el Reino de Dios a todas las naciones.</p>
          </div>
        </div>
        <!--
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="{{ url('/about')}} " class="py-2 d-block">Nosotros</a></li>
              <li><a href="{{ url('/events')}} " class="py-2 d-block">Eventos</a></li>
              <li><a href="{{ url('/sermons')}} " class="py-2 d-block">Predicas</a></li>
              <li><a href="{{ url('/blog')}} " class="py-2 d-block">Blog</a></li>
              <li><a href="{{ url('/contact')}} " class="py-2 d-block">Contactanos</a></li>
              <li><a href="{{ url('/donation')}} " class="py-2 d-block">Donar</a></li>
            </ul>
          </div>
        </div>
      
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Información de Contacto</h2>
            <ul class="list-unstyled">
              
              <li><a href="#" class="py-2 d-block"><span class="icon icon-map-marker"></span> Valencia, Edo Carabobo, Venezuela. Urb. Pop. El Socorro, Av. Bella Vista, entre calles Cesar giron y Las Torres. </a></li>
              <li><a href="#" class="py-2 d-block">+58 0241 8360829 +58 0241 6140728.</a></li>
              <li><a href="#" class="py-2 d-block">crh@gmail.com</a></li>
            </ul>
          </div>
        </div>
        -->
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Información de Contacto</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Valencia, Edo Carabobo, Venezuela. Urb. Pop. El Socorro, Av. Bella Vista, entre calles Cesar giron y Las Torres. </span></li>
                <li><a href="tel:+582418360829"><span class="icon icon-phone"></span><span class="text">+58 241 8360829</span></a></li>
                <li><a href="tel:+582416140728"><span class="icon icon-phone"></span><span class="text">+58 241 6140728</span></a></li>
                
              </ul>
            </div>
           
          </div>
        </div>
        <div class="col-md text-center">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"></h2>
            <div class="block-23 mb-5">
              <ul>                                                                      
                <li><a href="https://centrorefugiohefzi-ba.com" target="_blank"><span class="icon icon-globe"></span><span class="text">Centro Refugio Hefzi-bá</span></a></li>
                <li><a href="mailto:contact@centrorefugiohefzi-ba.com" target="_blank"><span class="icon icon-envelope"></span><span class="text">contact@centrorefugiohefzi-ba.com</span></a></li>
                <li><a href="mailto:centrorefugiohefziba@gmail.com" target="_blank"><span class="icon icon-envelope"></span><span class="text">centrorefugiohefziba@gmail.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Lunes &mdash; Viernes 8:00am - 5:00pm</span></li>
              </ul>
            </div>

            <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
              <li class="ftco-animate"><a href="https://facebook.com/CentroRefugioHefziba/" target="_blank"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://instagram.com/cr.hefziba/" target="_blank"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCDROqr4_Pbev0pLI-0RECbQ" target="_blank"><span class="icon-youtube"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos | Centro Refugio Hefzi-bá <i class="icon-heart" aria-hidden="true"></i> por - <a href="https://ap-worlds.com" target="_blank">AP World's Digital Services</a></p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#055e94"/>
    </svg>
  </div>
  
  <script src="{{asset('js/app_f.js')}}" defer></script>
  <script src="{{asset('js/lazyload.js')}}" defer></script>

  <script>
    $(document).ready(function(){
        $('img').lazyload();
    });
  </script>

    </body>
    @jquery
    @toastr_js
    @toastr_render

</html>
