<!DOCTYPE html>
<html lang="en">
<head>

    <title>{{trans('routes.New Design')}}</title>

    <!-- METAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- INIT SCRIPTS, SHOULD STAY IN HEADER -->
    <script type="text/javascript" src="{{asset('assets/inc/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/inc/rev-slider/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('assets/inc/rev-slider/js/jquery.themepunch.revolution.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/inc/rev-slider/css/settings.css')}}">

    <!-- INIT CSS -->
    <link rel="stylesheet" href="{{asset('assets/inc/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/margin.helper.css')}}">

    <!-- PLUGINS CSS -->
    <link rel="stylesheet" href="{{asset('assets/inc/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/inc/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/inc/owl-carousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/inc/owl-carousel/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/inc/flexslider/flexslider.css')}}">
    <!--<link rel="stylesheet" href="inc/lightbox/lightbox.css">-->


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- SKINS -->
    <link rel="stylesheet" href="{{asset('assets/css/presets/preset_blue.css')}}">

    <!--[if lt IE 9]>
    <script src="inc/ie/html5shiv.js"></script>
    <script src="inc/ie/respond.min.js"></script>
    <![endif]-->

    <!-- FONTS & FAVICON -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    

</head>


<body class="indexPage">
 
  @include('header')
  @yield('content')
  @include('footer')

</body>

</html>