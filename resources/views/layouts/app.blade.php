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

<script language="JavaScript" type="text/javascript">
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
                        
                         <li class="nav-item"><a class="nav-link link" href="/profile/partidas">Partidas y Eventos</a></li>
                         <li class="nav-item"><a class="nav-link link" href="#">Clubs</a></li>
                         <li class="nav-item"><a class="nav-link link" href="#">Campos</a></li>
                         
                         <form class="navbar-form navbar-left">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Buscar">
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