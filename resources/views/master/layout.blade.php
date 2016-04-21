<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Biblioteca Infantil')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="A small sentence describing your website's subject" />
    <meta name="keywords" content="some, keywords, separated, by, comas" />
    <meta name="Robots" content="index, follow" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}" />
    
    <!-- Main CSS -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/4slinding.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/4style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="css/select_color.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="js/fancybox/jquery.fancybox-1.3.4.css" />
    
    <!-- Skin CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="styles/Yellow-Orange/yellow-orange.css" class="changeme" />
    
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="./css/ie7.css" /><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="./css/ie8.css" /><![endif]-->
</head>
<body>
    @include('master.nav')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/menuresponsive.js') }}"></script>
    
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>