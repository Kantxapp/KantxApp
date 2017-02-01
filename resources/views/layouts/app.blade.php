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
  <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLNDDoIJy4ZFyAKX3KZ9zIPMKA15q4vD4&callback=initMap" type="text/javascript"></script>-->

  <!-- <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />-->
  <!--<link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />-->
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-1.11.1.js" ></script>
  <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="/assets/bower_components/moment/min/moment.min.js"></script>-->
<!--  <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>-->
<!--  <script type="text/javascript" src="/assets/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>-->
<style>
       #map {
        height: 500px;
        width: 500px;
       }
    </style>
<script type="text/javascript">
  var XmlHttpObj;
  var Utf8 = {
    //Convierte de UTF-8 a ISO
    decode : function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i+1);
                c3 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}

function CreateXmlHttpObj()
{
	try
	{
		XmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
	
	}
	catch(e)
	{
		try
		{
			XmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch(oc)
		{
			XmlHttpObj = null;
		}
	}
		if(!XmlHttpObj && typeof XMLHttpRequest != "undefined") 
	{
		XmlHttpObj = new XMLHttpRequest();
	}
}

function provinciaListOnChange() {

    var provinciaList = document.getElementById("provinciaList");
 
    var selectedprovincia = provinciaList.options[provinciaList.selectedIndex].value;
    var requestUrl;

    //requestUrl = "data.php" + "?filter=" + encodeURIComponent(selectedprovincia);
    requestUrl = "/localidades/" + selectedprovincia;
    
	CreateXmlHttpObj();
	
	if(XmlHttpObj)
	{
	
		XmlHttpObj.onreadystatechange = StateChangeHandler;
		XmlHttpObj.open( "GET", requestUrl, true );
		XmlHttpObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		XmlHttpObj.send("");		
	}
}


function StateChangeHandler()
{
	if(XmlHttpObj.readyState == 4)
	{
		if(XmlHttpObj.status == 200)
		{			
			PopulatelocalidadList(XmlHttpObj.responseXML.documentElement);
		}
		else
		{
			alert("Código de error: "  + XmlHttpObj.status);
		}
	}
}

function PopulatelocalidadList(localidadNode)
{	
    var localidadList = document.getElementById("localidadList");
	for (var count = localidadList.options.length-1; count >-1; count--)
	{
		localidadList.options[count] = null;
	}

	var localidadNodes = localidadNode.getElementsByTagName('localidad');
	var textValue; 
	var optionItem;
	for (var count = 0; count < localidadNodes.length; count++)
	{ 
   		textValue = Utf8.decode(GetInnerText(localidadNodes[count]));
		idValue=count;		
		optionItem = new Option( textValue, textValue,  false, false);
		localidadList.options[localidadList.length] = optionItem;
	}
var to=document.getElementById("advice");
to.innerHTML="";
}

function GetInnerText (node)
{
	 return (node.textContent || node.innerText || node.text) ;
}

    
 
// $(document).ready(function() {
//     $('#filter').on('change', function () {        
//             var option = parseInt($(this).val());
//             if (option > 2){
//                 $('#provincia-input').fadeOut(200);
//             } else 
//                 $('#provincia-input').fadeIn(200);
//             refreshResults(dateSelected, $("#").val(),$('#filter').val(),$('#provincia').val());
//         });
//         $('#provincia').on('change', function () {
//             refreshResults(dateSelected, $("#").val(),$('#filter').val(),$('#provincia').val());
//         });
// }); 
//Mapa 

//  function initMap() {
//         // Create a map object and specify the DOM element for display.
//         var map = new google.maps.Map(document.getElementById('map'), {
//           center: {lat: 43.3277237, lng: -1.9732295},
//         //   scrollwheel: false,
//           zoom: 8
//         });
//       }
 var marker;
var map, places, infoWindow;
var markers = [];
var autocomplete;
var hostnameRegexp = new RegExp('^https?://.+?/');

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 43.3275473, lng: -1.9712059}
  });
//     var image = '/assets/images/logo-128x128-81.png';
//     // size: new google.maps.Size(20, 32)};
//     var Img = {
//             url: image,
//             size: new google.maps.Size(35, 35)
//           };
//     var campo = new google.maps.Marker({
//     position: {lat: 43.3249712, lng: -1.9694205},
//     map: map,
//     icon: image

//   });
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: 43.3275473, lng: -1.9712059}
  });
  marker.addListener('click', toggleBounce);


function toggleBounce() {
  if (Marker.getAnimation() !== null) {
    Marker.setAnimation(null);
  } else {
    Marker.setAnimation(google.maps.Animation.BOUNCE);
  }
} 
infoWindow = new google.maps.InfoWindow({
    content: document.getElementById('info-content')
  });

  // Create the autocomplete object and associate it with the UI input control.
  // Restrict the search to the default country, and to place type "cities".
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */ (
          document.getElementById('autocomplete')), {
        types: ['(cities)'],
        componentRestrictions: countryRestrict
      });
  places = new google.maps.places.PlacesService(map);

  autocomplete.addListener('place_changed', onPlaceChanged);

  // Add a DOM event listener to react when the user selects a country.
  document.getElementById('country').addEventListener(
      'change', setAutocompleteCountry);
}

// When the user selects a city, get the place details for the city and
// zoom the map in on the city.
function onPlaceChanged() {
  var place = autocomplete.getPlace();
  if (place.geometry) {
    map.panTo(place.geometry.location);
    map.setZoom(15);
    search();
  } else {
    document.getElementById('autocomplete').placeholder = 'Enter a city';
  }
}

// Search for hotels in the selected city, within the viewport of the map.
function search() {
  var search = {
    bounds: map.getBounds(),
    types: ['lodging']
  };
}


// [START region_setcountry]
// Set the country restriction based on user input.
// Also center and zoom the map on the given country.
function setAutocompleteCountry() {
  var country = document.getElementById('country').value;
  if (country == 'all') {
    autocomplete.setComponentRestrictions([]);
    map.setCenter({lat: 15, lng: 0});
    map.setZoom(2);
  } else {
    autocomplete.setComponentRestrictions({'country': country});
    map.setCenter(countries[country].center);
    map.setZoom(countries[country].zoom);
  }
  clearResults();
  clearMarkers();
}
// [END region_setcountry]

function dropMarker(i) {
  return function() {
    markers[i].setMap(map);
  };
}

function addResult(result, i) {
  var results = document.getElementById('results');
  var markerLetter = String.fromCharCode('A'.charCodeAt(0) + i);
  var markerIcon = MARKER_PATH + markerLetter + '.png';

  var tr = document.createElement('tr');
  tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
  tr.onclick = function() {
    google.maps.event.trigger(markers[i], 'click');
  };

  var iconTd = document.createElement('td');
  var nameTd = document.createElement('td');
  var icon = document.createElement('img');
  icon.src = markerIcon;
  icon.setAttribute('class', 'placeIcon');
  icon.setAttribute('className', 'placeIcon');
  var name = document.createTextNode(result.name);
  iconTd.appendChild(icon);
  nameTd.appendChild(name);
  tr.appendChild(iconTd);
  tr.appendChild(nameTd);
  results.appendChild(tr);
}

function clearResults() {
  var results = document.getElementById('results');
  while (results.childNodes[0]) {
    results.removeChild(results.childNodes[0]);
  }
}

// Get the place details for a hotel. Show the information in an info window,
// anchored on the marker for the hotel that the user selected.
function showInfoWindow() {
  var marker = this;
  places.getDetails({placeId: marker.placeResult.place_id},
      function(place, status) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
          return;
        }
        infoWindow.open(map, marker);
        buildIWContent(place);
      });
}

// Load the place information into the HTML elements used by the info window.
function buildIWContent(place) {
  document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
      'src="' + place.icon + '"/>';
  document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
      '">' + place.name + '</a></b>';
  document.getElementById('iw-address').textContent = place.vicinity;

  if (place.formatted_phone_number) {
    document.getElementById('iw-phone-row').style.display = '';
    document.getElementById('iw-phone').textContent =
        place.formatted_phone_number;
  } else {
    document.getElementById('iw-phone-row').style.display = 'none';
  }

  // Assign a five-star rating to the hotel, using a black star ('&#10029;')
  // to indicate the rating the hotel has earned, and a white star ('&#10025;')
  // for the rating points not achieved.
  if (place.rating) {
    var ratingHtml = '';
    for (var i = 0; i < 5; i++) {
      if (place.rating < (i + 0.5)) {
        ratingHtml += '&#10025;';
      } else {
        ratingHtml += '&#10029;';
      }
    document.getElementById('iw-rating-row').style.display = '';
    document.getElementById('iw-rating').innerHTML = ratingHtml;
    }
  } else {
    document.getElementById('iw-rating-row').style.display = 'none';
  }

  // The regexp isolates the first part of the URL (domain plus subdomain)
  // to give a short URL for displaying in the info window.
  if (place.website) {
    var fullUrl = place.website;
    var website = hostnameRegexp.exec(place.website);
    if (website === null) {
      website = 'http://' + place.website + '/';
      fullUrl = website;
    }
    document.getElementById('iw-website-row').style.display = '';
    document.getElementById('iw-website').textContent = website;
  } else {
    document.getElementById('iw-website-row').style.display = 'none';
  }

}
</script>
  @yield('head')
</head>
<body @yield('body')>
<section id="menu-2">

    <nav class="navbar navbar-dropdown navbar-fixed-top" style="background: #88b04b;">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="/" class="navbar-logo"><img src="/assets/images/logo-128x128-81.png" alt="logo_kantxapp"></a>
                        <a class="navbar-caption text-white"@yield('kantxcolor') href="/home">KANTXAPP</a>
                        
                    </div>
                    
                </div>
                
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>
                    
                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        
                         <li class="nav-item"><a class="nav-link link" href="/partidas">Partidas y Eventos</a></li>
                         <li class="nav-item"><a class="nav-link link" href="/deportes">Deportes</a></li>
                         <li class="nav-item"><a class="nav-link link" href="/campos">Campos</a></li>
                         
                         <form class="navbar-form navbar-left">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Buscar" />
                             
                            </div>
                            <!--<button type="submit" class="btn btn-default">Submit</button>-->
                         </form>
                        
                        <li class="nav-item dropdown open">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/" aria-expanded="true">
                                @if (Auth::user()->avatar == null)
                                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" style="width:35px; height:30px; float:left; border-radius:50%; margin-right:25px;" />
                                    @else
                                        <img src="{{ Auth::user()->avatar}}" style="width:35px; height:35px; float:left; border-radius:50%; margin-right:25px;"/>
                                    @endif
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="{{ route('account.show') }}">Mi Cuenta</a>
                            <a class="dropdown-item" href="{{ route('profile',['slug' => Auth::user()->slug]) }}">Mi Perfil</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Salir</a>
                                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
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