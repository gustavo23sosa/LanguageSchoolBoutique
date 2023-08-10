<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang=en-US><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang=en-US><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=en-US>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icono.png">
    <title>Detalles - Language School Boutique</title>

    <link rel="stylesheet" href="administrador/red/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/superfish/css/superfish.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/dl-menu/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/flexslider/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/style-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all">
    <link rel="stylesheet" href="administrador/red/css/master-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
    <link href="css/app.css" rel="stylesheet">
    <script src="js/app.js" defer></script>

  
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Droid+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=5e348039466ee2df77d142cdeeca1221' type=text/css media=all>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body data-rsssl=1 class="home page-template-default page page-id-3304 _masterslider _msp_version_3.2.7">
<div class="wrapper wrapper-full-page " style="background-image: url('img/jan.jpg');">
    <div class="full-page section-image" filter-color="black">
        <header class="gdlr-header-wrapper" >
            <div class="dlr-header-inner">
                <div class="gdlr-header-container container">
                    <div class="gdlr-logo">
                        <img src="img/logo.png" alt="" width="50%">

                        <!-- <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                            
                            <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                                
                                <li class="menu-item">
                                    <a href="#historia">Objetivo</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#programa">Programa</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#ponentescdmx">Ponentes</a>
                                </li>
                            </ul>
                        </div> -->
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
        <div class="content-wrapper" >
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
                                        <div class="col-md-6 col-md-4 ml-auto  mr-auto" >
                                            <div class="card card-signup text-center"style="width: 110%;">
                                        <div class="container">
                                          <br>

                                          <h2>Detalles.</h2>
                                          
                                          <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
                                          <br>
                                          <table class="table table-bordered table-striped">
                                            <thead>
                                              <th>Campos</th><th>Detalles
                                              </th>
                                            </thead>
                                            <tbody id="myTable">
                                            @foreach($usuariodetalle as $usuario)
                                                
                                                <tr>
                                                    <td>Nombre</td><td>{{ $usuario->name}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Apellido Paterno</td><td>{{ $usuario->aPaterno }}&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                                </tr>
                                                <tr>
                                                    <td>Apellido Materno</td><td>{{ $usuario->aMaterno }}&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                                </tr>
                                                <tr>
                                                    <td>Correo</td><td>{{ $usuario->email }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Telefono</td><td>{{ $usuario->telefono }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr><tr><td>Estatus</td><td>{{ $usuario->estatus }}&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                                                <tr><td>Entidad Federativa</td><td>{{ $usuario->entidad }}&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                                                @if($usuario->Por == 0)
                                                <tr><td>Resultados del examen</td><td>{{ ('Sin resultados') }}&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                                                @else
                                                <tr><td>Resultados del examen</td><td>{{ $usuario->Por.('%') }}&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                                                @endif
                                                <tr>
                                                    <td>Nivel del usuario elegido</td><td>{{ $usuario->nivel }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Forma de tomar clases</td><td>{{ $usuario->tipo }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Rango de ingles obtenido en el examen</td><td>{{ $usuario->rank }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Observaciones</td><td>{{ $usuario->Observaciones }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                </tr>
                                                

                                            @endforeach 

                                            </tbody>

                                          </table>
                                          <br><br>
                                            <form method="post" name="EnviarExamen" action="{{ url('ModificaUsuario') }}"> <textarea class="form-control" placeholder="Observaciones" name="Observaciones" rows="5" style="width : 600px; height: 70px;"></textarea>
                                          <table>
                                            <tr><td>
                                                        @csrf
                                                            <input type="hidden" name="id_user" value="{{ $usuario->id }}">
                                                            <input type="submit"  name="EnviarExamen" class="btn btn-warning" value="Modificar usuario">
                                                        </form></td>
                                                <td> <form method="post" name="EnviarExamen" action="{{ url('AceptarUsuario') }}">
                                                        @csrf
                                                            <input type="hidden" name="id_user" value="{{ $usuario->id }}">
                                                            <input type="submit"  name="EnviarExamen" class="btn btn-success" value="Aceptar Examen">
                                                        </form></td>
                                                <td><form method="post" name="Baja" action="{{ url('BajaUsuario') }}">
                                                        @csrf
                                                            <input type="hidden" name="id_user" value="{{ $usuario->id }}">
                                                            <input type="submit"  name="Baja" value="Dar de baja" onclick="return confirm('¿Estas seguro de dar de baja a este usuario?')" class="btn btn-danger">
                                                        </form>
                                                </td></tr></table>
                                          <br><br><br>  
                                        </div>
                                        </div>
                                        </div>
                                      
                                    </section>
                                    <br>
                                
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
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
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

</body>
</html>