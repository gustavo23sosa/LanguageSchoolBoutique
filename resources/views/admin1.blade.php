<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=en-US>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="initial-scale=1.0">

    <title>Menú - Language School Boutique</title>
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
    
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/prueba.js')}}" defer></script>
    <script src="{{ asset('js/prueba2.js')}}" defer></script>

  
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body data-rsssl=1 class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7">
<div class="wrapper wrapper-full-page " style="background-image: url({{ asset('img/bg/fabio-mangione.jpg')}}); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; color:#FFFFFF;">
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
                                <!-- <li class="menu-item menu-item-home">
                                    <a href="#inicio" aria-current="page">{{ Auth::user()->name}} {{ Auth::user()->aPaterno }} {{ Auth::user()->aMaterno }}</a>
                                </li> -->
                                <!--<li class="menu-item">
                                    <a href="#historia">Historia</a>
                                </li>-->

                                
                                <!-- <li class="menu-item menu-item-home">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                                </li> -->
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
                    <!-- <section id="inicio">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2 data-bgspeed=0.2" style="background-image: url(''); padding-top: 100px; padding-bottom: 70px; ">
                            <div class="container">
                                <div class="gdlr-title-item" style="margin-bottom: 40px;">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                        <div class="gdlr-item-title-head">
                                            
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section> -->
        <div class=content-wrapper>
            <div class=gdlr-content>
                <div class="with-sidebar-wrapper gdlr-type-no-sidebar">

                                    <section >

                                        <div class="col-md-6 ml-auto table ">
                                            <div class="card card-signup text-center">
                                        <div class="container">
                                          <br>
                                        @if($message = Session::get('success'))
                                                                    <div style="background-color: #d4edda;" class="alert alert-success" role="alert">
                                                                    <font color="#155724">{{ $message }}</font>
                                                                    </div>
                                                                    @endif
                                        @if($message = Session::get('warning'))
                                                                    <div style="background-color: #d4edda;" class="alert alert-warning" >
                                                                    <font color="#721c24">{{ $message }}</font>
                                                                    </div>
                                                                    @endif

                                        @if($message = Session::get('danger'))
                                                                    <div style="background-color: #d4edda;" class="alert alert-danger" >
                                                                    <font color="#721c24">{{ $message }}</font>
                                                                    </div>
                                                                    @endif
                                          <h2>Modulo de administrador.</h2>
                                          
                                          
                                          <br>
                                          <table id="example" style="width:100%" class="table table-bordered table-striped display">
                                            <thead>
                                              <tr>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>
                                                <th>Accion</th>
                                                <!-- <th><a href="{{url('detalleAlumno/create')}}">
                                                        @csrf
                                                            
                                                            <input type="submit"  name="Detalles" class="btn btn-success"value="Crear Alumno">
                                                        </a></th> -->
                                              </tr>
                                            </thead>
                                            <tbody id="myTable">
                                            @foreach($registradosUs as $registrados)
                                                
                                                <tr>
                                                    <td>{{ $registrados->name}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td>{{ $registrados->aPaterno }}&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                                    <td>{{ $registrados->aMaterno }}&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                                    <td>{{ $registrados->email }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td>{{ $registrados->telefono }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <!-- <td >
                                                        <form method="post" name="Aceptar" action="{{ url('aceptarUsuario') }}">
                                                        @csrf
                                                            <input type="hidden" name="id_user" value="{{ $registrados->id }}">
                                                            <input type="submit" name="Aceptar" value="Aceptar">
                                                        </form>
                                                    </td> -->

                                                    <td>
                                                        <form method="POST" name="Detalle" action="{{ url('/detalleAlumno') }}">
                                                        @csrf
                                                        <input type="hidden" name="id_user" value="{{ $registrados->id }}">
                                                            <input type="submit"  name="Detalles" class="btn btn-warning"value="Detalles">
                                                        </form>
                                                    </td>
                                                </tr>
                                                
                                            @endforeach  
                                            <!-- <tfoot><tr><th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>
                                                <th></th>
                                                </tr>
                                                </tfoot> -->
                                            </tbody>
                                          </table>
                                        </div>
                                        </div>
                                        </div>
                                    </section>
                                    <br>
                                <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    <footer class=footer-wrapper>
        <div class=copyright-wrapper>
            <div class="copyright-container container">
                <div class=copyright-left> <font color="#FFFFFF">© Copyright LANGUAGE SCHOOL BOUTIQUE </font></div>
                <!-- <div class=copyright-right> <a href="https://conatrib.org.mx/">P&aacute;gina web</a> | <a href="https://www.youtube.com/channel/UCjy09Wgg2LXoqTAtLXLpeQQ">Youtube</a> | <a href="https://m.facebook.com/CONATRIBoficial/">Facebook</a> | <a href="https://twitter.com/ConatribMx">Twitter</a></div> -->
                <div class=clear></div>
            </div>
        </div>
    </footer>
    
    <script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script src="{{ asset('administrador/red/js/jquery/jquery.js')}}"></script>
<script src="{{ asset('administrador/red/js/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/superfish/js/superfish.js')}}"></script>
<script src="{{ asset('administrador/red/js/hoverIntent.min.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/dl-menu/modernizr.custom.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/dl-menu/jquery.dlmenu.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/jquery.easing.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/flexslider/jquery.flexslider.js')}}"></script>
<script src="{{ asset('administrador/red/plugins/jquery.isotope.min.js')}}"></script>
<script src="{{ asset('administrador/red/js/plugins.min.js')}}"></script>

</body>
</html>