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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <script>
  
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
  </script>
<style>
       #map {
        height: 600px;
        width: 759px;
       }
       .controls {
      margin-top: 10px;
      border: 1px solid transparent;
      border-radius: 2px 0 0 2px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      height: 32px;
      outline: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    
    #pac-input {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 300px;
    }
    
    #pac-input:focus {
      border-color: #4d90fe;
    }
    
    .pac-container {
      font-family: Roboto;
    }
    
    #type-selector {
      color: #fff;
      background-color: #4d90fe;
      padding: 5px 11px 0px 11px;
    }
    
    #type-selector label {
      font-family: Roboto;
      font-size: 13px;
      font-weight: 300;
    }

    </style>
<script type="text/javascript">

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 43.3275473, lng: -1.9712059},
    zoom: 13
  });
  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}
//Eventos
 $(document).ready(function(){
    $(".list-group").hide();
    $("#BusEvento").change(function(){
    $(".list-group").hide();
    $("#div_" + $(this).val()).show();
    });
});

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});
</script>
  @yield('head')
</head>
<body @yield('body')>
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
                        <!--<li class="nav-item"><a class="nav-link link" href="{{ route('sports') }}">Deportes</a></li>-->
                        <li class="nav-item"><a class="nav-link link" href="{{ route('kantxas') }}">Kantxas</a></li>

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
<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-i" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="/assets/images/logo-128x128-81.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>
 Alejandria Kalea, 2<br>
20013 Donostia, Gipuzkoa</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: kantxapp@gmail.com<br>
Phone: +34 666 555 666<br>
Fax: +34 943 999 888</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Links</strong><br>
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
  <script src="/assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="/assets/social-likes/social-likes.js"></script>
  <script src="/assets/dropdown/js/script.min.js"></script>
  <script src="/assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  
  @yield('script')
  
  
  <input name="animation" type="hidden">
  </body>
</html>