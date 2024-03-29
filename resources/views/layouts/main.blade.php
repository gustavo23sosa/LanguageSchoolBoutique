<!-- 
=========================================================
 Paper Dashboard - v2.0.0
=========================================================

=========================================================


 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('img/apple-icono.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>
        {{ __('Language School Boutique') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <meta name="title" content="Language School Boutique - Inicia o Registrarte" />
    <meta name="description"
    content="Inicia sesion como admin o registrate como usuario nuevo." />
    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />

</head>

<body class="{{$class}}" background="{{ asset('img/bg/prueba.jpg')}}" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover; color:#FFFFFF;">
    
    @auth()
        @include('layouts.page_templates.auth')
        @include('layouts.navbars.fixed-plugin')
    @endauth
    
    @guest
        @include('layouts.page_templates.guest')
    @endguest

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js')}}"></script>
    <script src="{{ asset('js/core/popper.min.js')}}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/paper-dashboard.min.js')}}" type="text/javascript"></script>
    
    @stack('scripts')

    @include('layouts.navbars.fixed-plugin-js')
    
</body>

</html>
