<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.10.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.10.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/assets/images/logo-128x128-78.png" type="image/x-icon">
  <meta name="description" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="/assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="/assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="/assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="/assets/mobirise2/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="/assets/theme2/css/style.css">
  <link rel="stylesheet" href="/css/magic.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
  <script src="//js.pusher.com/4.0/pusher.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
    <style type="text/css">
        .magictime {
        -webkit-animation-duration: 3s;
        -moz-animation-duration: 3s;
        -o-animation-duration: 3s;
        animation-duration: 3s;
        }
    </style>
  <script>
  
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        
        var pusher = new Pusher("481a39585496417697f8");
        var channel = pusher.subscribe('sensor-channel');
        channel.bind('sensor-change', function(data) {
            
            var sensor_data=JSON.parse(data);
            $('#'+ sensor_data['idSensor']+'_radiacion').removeClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_humedad').removeClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_ocupado').removeClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_llover').removeClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_viento').removeClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_temperatura').removeClass('magictime twisterInUp');
            
            
            $('#'+ sensor_data['idSensor']+'_radiacion').html(sensor_data["radiacion"]);
            $('#'+ sensor_data['idSensor']+'_humedad').html(sensor_data["humedad"]);
            
            if (sensor_data["ocupado"] == 1){
                $('#'+ sensor_data['idSensor']+'_ocupado').html(' ocupada');
            }else{
                $('#'+ sensor_data['idSensor']+'_ocupado').html(' libre');
            }
            
            
            
            $('#'+ sensor_data['idSensor']+'_llover').html(sensor_data["llover"]);
            $('#'+ sensor_data['idSensor']+'_viento').html(sensor_data["viento"]);
            $('#'+ sensor_data['idSensor']+'_temperatura').html(sensor_data["temperatura"]);
            

            $('#'+ sensor_data['idSensor']+'_radiacion').addClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_humedad').addClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_ocupado').addClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_llover').addClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_viento').addClass('magictime twisterInUp');
            $('#'+ sensor_data['idSensor']+'_temperatura').addClass('magictime twisterInUp');

        });
  </script>
  @yield('head')
</head>
<body @yield('body') >
<div class="vue">
    <section id="menu-2">

    <nav class="navbar navbar-dropdown navbar-fixed-top app" style="background: #88b04b;">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="/home" class="navbar-logo"><img src="/assets/images/logo-128x128-81.png" alt="logo_kantxapp"></a>
                        <a class="navbar-caption text-white"@yield('kantxcolor') href="/home">KANTXAPP</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="{{ route('events') }}">Partidas y Eventos</a></li>
                        <li class="nav-item"><a class="nav-link link" href="{{ route('friends') }}">Amigos</a></li>
                        <li class="nav-item"><a class="nav-link link" href="{{ route('kantxas.get') }}">Kantxas</a></li>

                        <li class="nav-item dropdown open">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/" aria-expanded="true">
                                @if (Auth::user()->avatar == null)
                                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" style="width:35px; height:30px; float:left; border-radius:50%; margin-right:25px;" />
                                    @else
                                        <img src="{{ Auth::user()->avatar}}" style="width:35px; height:35px; float:left; border-radius:50%; margin-right:25px;"/>
                                    @endif
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="{{ route('account.show') }}">Mi Cuenta</a>
                            <a class="dropdown-item" href="{{ route('profile',['slug' => Auth::user()->slug]) }}">Mi Perfil</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Salir</a>
                                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                     </form>
                            </div>
                            
                        </li>
                        <li class="nav-item"><unread></unread></li>
                        
                        
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
@yield('content')
<search></search>    

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-i" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="/assets/images/logo-128x128-81.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>@lang('landingPage.footer_addr_header')</strong><br>
                @lang('landingPage.footer_addr_str')<br/>
                @lang('landingPage.footer_addr_CP')<br/>
                @lang('landingPage.footer_addr_pr')</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>@lang('landingPage.footer_contact')</strong><br>
                Email: kantxapp@gmail.com<br>
                @lang('landingPage.landing_form_phone') +34 555 666 324<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>@lang('landingPage.footer_links')</strong><br>
<a class="text-primary" href="https://facebook.com/">Facebook</a><br>
<a class="text-primary" href="https://twitter.com/">Twitter</a><br>
<a class="text-primary" href="https://plus.google.com/">Google+</a></p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-h" style="background-color: rgb(46, 46, 46); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    @yield('footer')
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 KantxApp.</p>
    </div>
</footer>

        <init></init>
        @if(Auth::check())
            <notification :id="{{ Auth::id() }}"></notification>
        @endif
        <audio id="noty_audio">
            <source src="{{ asset('audio/notify.mp3') }}">
            <source src="{{ asset('audio/notify.ogg') }}">
            <source src="{{ asset('audio/notify.wav') }}">
        </audio>
</div>

  <script src="/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="/assets/tether/tether.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="/assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="/assets/jarallax/jarallax.js"></script>
  <script src="/assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="/assets/social-likes/social-likes.js"></script>
  <script src="/assets/dropdown/js/script.min.js"></script>
  <script src="/assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  <script src="/js/app.js"></script>
  <script src="/js/location.js"></script>


  
  @yield('script')
  
  
  <input name="animation" type="hidden">
  </body>
</html>
