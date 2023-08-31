<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=en-US>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="initial-scale=1.0">
    <meta name="google" content="notranslate" />

    <title>Examen de colocacion</title>
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('img/apple-icono.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png')}}">

    <link rel="stylesheet" href="{{ asset('administrador/red/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/superfish/css/superfish.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/dl-menu/component.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/font-awesome-new/css/font-awesome.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/fancybox/jquery.fancybox.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/flexslider/flexslider.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/css/style-responsive.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/css/style-custom.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/plugins/masterslider/public/assets/css/masterslider.main.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('administrador/red/css/master-custom.css')}}" type="text/css" media="all">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-theme2.css')}}">
    <link href="css/app.css" rel="stylesheet">
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/prueba.js')}}" defer></script>
    <script src="{{ asset('js/prueba2.js')}}" defer></script>
    <script src="{{ asset('js/customer.js')}}" defer></script>

  
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body data-rsssl=1 class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7" style="background-image: url({{ asset('img/header.jpg')}}); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; color:#FFFFFF;" translate="no" onload="nobackbutton()">
<div class="wrapper wrapper-full-page " >
    <div class="full-page section-image" filter-color="black">
        <header class="gdlr-header-wrapper" >
            <div class="dlr-header-inner">
                <div class="gdlr-header-container container">
                    <div class="gdlr-logo">
                        <img src="{{ asset('img/logo.png')}}" alt="" width="50%">
                        <!-- <a href="index.html"> <img src="administrador/red/images/logo_red_1.png" alt=""> </a> -->
                        <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            
                            <button class="dl-trigger"> Men&uacute;</button>

                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item">
                                    
                                </li>
                                <!--<li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>-->
                               <!-- <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>-->
                             <!--   <li class="menu-item menu-item-has-children">
                                    <a href="#">Ponentes</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation role=navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-home">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name}} {{ Auth::user()->aPaterno }} {{ Auth::user()->aMaterno }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end menu-item menu-item-home" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('home')}}" aria-current="page">Inicio</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </header>
        <div id="gdlr-header-substitute"></div>
        <div class="content-wrapper">
            <div class="gdlr-content">
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">
        <div class=content-wrapper>
            <div class=gdlr-content>
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">

                                    <section>
                                        <div class="col-md-6 ml-auto table " style="width: 150px; align-content: center; float: left;"></div>
                                        <div class="col-md-6 ml-auto table " style="width: 70%; align-content: center; float: left;">
                                            <div class="card card-signup text-center">
                                                <div class="container">
                <hr>
                <h2>¡Ex&aacute;men de colocaci&oacute;n!</h2>
                <br><div style="font-size: 125%"><span id="reloj"></span></div><br>
                <hr>
                <form name="basico" method="POST" action="{{route('evaluarb')}}">
                    @csrf   
                    <!-- {{$n=0}} -->
                    <!-- {{$i=1}} -->
                    @foreach($preguntas as $pregunta)
                    
                    @if($n<=61)
                    
                        <!--{{$o=1}}-->
                        @if ($n>=45)
                            @if($n==45)
                            
                            <center><h6>Lee el siguiente texto y responde las preguntas correspondientes: </h6><br>
                            <h2>The House</h2>
                            <div style="font-size: 75%; text-align: justify; width: 95%">
                            <h4>Mr. and Mrs. Smith have one son and one daughter. The son's name is John. The daughter's name is Sarah.
                            The Smiths live in a house. They have a living room. They watch TV in the living room. The father cooks food in the kitchen. They eat in the dining room. The house has two bedrooms. They sleep in the bedrooms. They keep their clothes in the closet. There is one bathroom. They brush their teeth in the bathroom.
                            The house has a garden. John and Sarah play in the garden. They have a dog. John and Sarah like to play with the dog.</h4>
                            </div>
                            </center><br><br>
                            @endif
                            <label for="pregunta{{$i}}" style="color: black; font-size: 100%"><span> {{ $pregunta->preguntas }} </span></label><br><br>

                            @while($o<=4)
                            
                            <input type="radio" id="pregunta{{$i}}" name="pregunta{{$i}}" value="{{ $exprepuestas1[$n]->ID }}" required>
                            <label style=" font-size: 100%;"><span>{{ $exprepuestas1[$n]->respuestas }}</span></label><br>
                            <!-- {{$n++}}
                            {{$o++}} -->

                            @endwhile
                            <br>
                        @else
                            <label for="pregunta{{$i}}" style="color: black; font-size: 100%"><span> {{ $pregunta->preguntas }} </span></label><br><br>
                            @while($o<=3)
                            
                                <input type="radio" id="pregunta{{$i}}" name="pregunta{{$i}}" value="{{ $exprepuestas1[$n]->ID }}" required>
                                <label style="font-size: 100%;"><span>{{ $exprepuestas1[$n]->respuestas }}</span></label><br>
                                <!-- {{$n++}}
                                {{$o++}} -->
                            @endwhile
                        <br>
                        @endif

                    @else
                        <br>
                    @endif
                    <input type="hidden" id="datos{{$i}}" name="datos{{$i}}" value="0">
                    <!-- {{$i++}} -->
                    @endforeach
                    
                    
                    <button type="submit" onclick="return confirm('Todas las preguntas seran calificadas y no habra mas intentos, ¿Estas seguro?')" class="btn btn-warning">Calificar Examen</button>
                </form>

                
                <br>
                <br>
                <br>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </section>

                                    
                                <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
    <script type="text/javascript">
        function nobackbutton()
        {
          window.location.hash="no-back-button";
          window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
          window.onhashchange=function(){window.location.hash="no-back-button";} 
        }
    </script>
    <script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
    <script src='administrador/red/js/jquery/jquery.js'></script>
    <script src='administrador/red/js/jquery/jquery-migrate.min.js'></script>
    <script src='administrador/red/plugins/superfish/js/superfish.js'></script>
    <script src='administrador/red/js/hoverIntent.min.js'></script>
    <script src='administrador/red/plugins/dl-menu/modernizr.custom.js'></script>
    <script src='administrador/red/plugins/dl-menu/jquery.dlmenu.js'></script>
    <script src='administrador/red/plugins/jquery.easing.js'></script>
    <script src='administrador/red/plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script src='administrador/red/plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script src='administrador/red/plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script src='administrador/red/plugins/flexslider/jquery.flexslider.js'></script>
    <script src='administrador/red/plugins/jquery.isotope.min.js'></script>
    <script src='administrador/red/js/plugins.min.js'></script>
<footer class=footer-wrapper>
        <div class=copyright-wrapper>
            <div class="copyright-container container">
                <div class=copyright-left> <font color="#FFFFFF">© Copyright LANGUAGE SCHOOL BOUTIQUE </font></div>
                <!-- <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div> -->
                <div class=clear></div>
            </div>
        </div>
    </footer>
</body>
</html>