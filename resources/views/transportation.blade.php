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
    <script type="text/javascript" src="../assets/inc/jquery/jquery.js"></script>
    <script src="../assets/inc/rev-slider/js/jquery.themepunch.plugins.min.js"></script>
    <script src="../assets/inc/rev-slider/js/jquery.themepunch.revolution.js"></script>
    <link rel="stylesheet" href="../assets/inc/rev-slider/css/settings.css">

    <!-- INIT CSS -->
    <link rel="stylesheet" href="../assets/inc/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/margin.helper.css">

    <!-- PLUGINS CSS -->
    <link rel="stylesheet" href="../assets/inc/animate/animate.min.css">
    <link rel="stylesheet" href="../assets/inc/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/inc/owl-carousel/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/inc/flexslider/flexslider.css">
    <!--<link rel="stylesheet" href="inc/lightbox/lightbox.css">-->


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!-- SKINS -->
    <link rel="stylesheet" href="../assets/css/presets/preset_blue.css">

    <!--[if lt IE 9]>
    <script src="inc/ie/html5shiv.js"></script>
    <script src="inc/ie/respond.min.js"></script>
    <![endif]-->

    <!-- FONTS & FAVICON -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

</head>
<body>

<header id="home">

    <article class="fullscreen-container">
        <div class="fullscreenbanner">
            <div class="tp-banner">
                <ul>
                   @php( $slider_id=App\slider::where('slider_name', 'slider_transportation')->pluck('slider_id'))           
                   
                  @foreach(App\slider_item::where('slider_id', $slider_id[0])->pluck('slider_item_image_url') as $slider_img)
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000">

                        <!-- MAIN IMAGE 
                      -->
                      
                       
                        <img src="{{asset('/upload/'.$slider_img)}}" alt="" data-bgfit="cover" data-bgposition="center center"
                             data-bgrepeat="no-repeat">

                        <!-- LAYERS -->

                        <!-- Layer title -->
                        <div class="tp-caption medium_light_white hidden-xs sft customout"
                             data-x="left"
                             data-y="center"
                             data-voffset="-100"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             style="z-index: 10">{{trans('routes.We provide highest quality')}}
                        </div>

                        <!-- Layer sub-title -->
                        @php($slider_item_title = App\slider_item::where('slider_id', $slider_id[0])->pluck('slider_item_title'))
                        <div class="tp-caption large_bold_white sfl customout"
                             data-x="left"
                             data-y="center"
                             data-voffset="-40"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             style="z-index: 10">{{$slider_item_title[0]}}
                        </div>

                        <!-- Layer separator -->
                        <div class="tp-caption decor-2 dl-divider hidden-xs sfb customout"
                             data-x="left"
                             data-y="center"
                             data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             style="z-index: 10">
                        </div>

                        <!-- Layer caption -->
                        @php($slider_item_subtitle = App\slider_item::where('slider_id', $slider_id[0])->pluck('slider_item_subtitle'))
                        <div class="tp-caption small_light_white hidden-xs sfr customout"
                             data-x="left"
                             data-y="center"
                             data-voffset="40"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1700"
                             data-easing="Back.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             style="z-index: 10">{{$slider_item_subtitle[0]}}
                        </div>

                        <!-- Layer button -->
                        <div class="tp-caption dl-button dl-button-primary dl-button-primary lfl hidden-xs customout"
                             data-x="left"
                             data-y="center"
                             data-voffset="100"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="2000"
                             data-easing="Back.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             style="z-index: 10">{{trans('routes.View More')}}
                        </div>

                    </li>
                    
                    
                    @endforeach
                    
                    
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </article>

    <!-- NAVBAR -->
    <nav id='nav_bar' class="navbar-fixed-top nav-shadow sticky">
        <div class="nav-container">

            <!-- MOBILE -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">{{trans('routes.Toggle navigation')}}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <h1><img class="img-responsive image-responsive" src="../assets/images/logo.png" alt="logo"></h1>
                </a>
            </div>

            <!-- DESKTOP -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">{{trans('routes.Home')}}</a></li>
                    <li class="dropdown">
                        <a href="/transportation" class="dropdown-toggle" data-toggle="dropdown"
                           aria-expanded="false">
                            {{trans('routes.Transportation')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/transportation">{{trans('routes.Transportation')}}</a></li>
                            <li><a href="#">{{trans('routes.Link 2')}}</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/trade" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{trans('routes.Trade')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/trade">{{trans('routes.All Products')}}</a></li>
                            <li><a href="#">{{trans('routes.Link 2')}}</a></li>

                        </ul>
                    </li>

                    <li><a href="/news">{{trans('routes.News')}}</a></li>
                    <li><a href="/map">{{trans('routes.Map Locations')}}</a></li>
                    <li><a href="/brands">{{trans('routes.Brands')}}</a></li>
                    <li><a href="/about">{{trans('routes.Our Company')}}</a></li>
                    <li><a href="/contact">{{trans('routes.Contact Us')}}</a></li>
                    <li class="dropdown">
                        <a href="/en" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="../assets/images/flags/flag%201.png" alt=""> English
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/ru"><img src="../assets/images/flags/flag%202.png" alt=""> Russian</a></li>
                            <li><a href="/ro"><img src="../assets/images/flags/flag%203.png" alt=""> Romania</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>

<section id="about-section" class="dl-full-75 ">
    <div class="about-upper dl-half-40">
        <div class="container">
            <div class="row">
                <div class="wow fadeInUp">
                    <div class="col-xs-12">
                        <div class="dl-title">
                            <h2>{{trans('routes.international Transportation')}}</h2>
                               
                            <div class="dl-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-lower">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-4 wow fadeIn" data-wow-duration="1200ms" data-wow-delay="500ms">
                        <div class="card">
                            <h2>
                                {{trans('routes.a')}}
                            </h2>
                            <p>
                                {{trans('routes.l')}}
                            </p>
                            <hr>
                            <a href="#" class="dl-button dl-button-primary">{{trans('routes.Read More')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-duration="1200ms" data-wow-delay="600ms">
                        <div class="card">
                            <h2>
                                {{trans('routes.a')}}
                            </h2>
                            <p>
                                {{trans('routes.l')}}
                            </p>
                            <hr>
                            <a href="#" class="dl-button dl-button-primary">{{trans('routes.Read More')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-duration="1200ms" data-wow-delay="700ms">
                        <div class="card">
                            <h2>
                                {{trans('routes.a')}}
                            </h2>
                            <p>
                                {{trans('routes.l')}}
                            </p>
                            <hr>
                            <a href="#" class="dl-button dl-button-primary">{{trans('routes.Read More')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="facts-section" class="dl-full-75">
    <div class="container">
        <div class="row">
            <div class="dl-title">
                @php( $section_title=App\website_sections::where('section_id', 4)->pluck(trans('routes.section_title_column'))) 
                <h1>
                    {{$section_title[0]}} 
                    <span class="icon-container"><i class="fa fa-truck fa-2x"></i></span> 
                    {{trans('routes.isClient\'sSatisfaction')}}
                </h1>
                <p>
                    {{trans('routes.b')}}
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <ul class="facts_left list-unstyled">
                <li class="fact_item clearfix">
                     @php( $section_features_title=App\section_features::where('section_id', 4)->pluck(trans('routes.section_features_title_column')))
                    @php( $section_features_value=App\section_features::where('section_id', 4)->pluck(trans('routes.section_features_value_column')))
                    <div>
                        <span class="fact_number" data-percent="{{$section_features_value[0]}}">
                            <span>{{$section_features_value[0]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[0]}}</span>
                        <div class="dl-divider"></div>
                    </div>
                </li>
                <li class="fact_item clearfix">
                    <div>
                        <span class="fact_number" data-percent="{{$section_features_value[1]}}">
                            <span>{{$section_features_value[1]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[1]}}</span>
                        <div class="dl-divider"></div>
                    </div>
                </li>
                <li class="fact_item clearfix">
                    <div>
                        <span class="fact_number" data-percent="{{$section_features_value[2]}}">
                            <span>{{$section_features_value[2]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[2]}}</span>
                    </div>
                </li>
            </ul>
            
            
            <ul class="facts_right list-unstyled">
                <li class="fact_item clearfix">
                    <div>
                        <span class="fact_number chart" data-percent="{{$section_features_value[3]}}">
                            <span>{{$section_features_value[3]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[3]}}</span>
                        <div class="dl-divider"></div>
                    </div>
                </li>
                <li class="fact_item clearfix">
                    <div>
                        <span class="fact_number chart" data-percent="{{$section_features_value[4]}}">
                            <span>{{$section_features_value[4]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[4]}}</span>
                        <div class="dl-divider"></div>
                    </div>
                </li>
                <li class="fact_item clearfix">
                    <div>
                        <span class="fact_number chart" data-percent="{{$section_features_value[5]}}">
                            <span>{{$section_features_value[5]}}</span>
                        </span>
                        <span class="fact_name">{{$section_features_title[5]}}</span>
                    </div>
                </li>
            </ul>
            <div>
                <img class="center-block img-responsive" src="../assets/images/facts/bg.png" alt="background">
            </div>
        </div>
    </div>
</section>

<section id="shipment-section" class="dl-half">
    <div class="">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li>
                    <div class="col-md-6 np">
                        <img src="../assets/images/bg/bg-1.jpg"/>
                    </div>
                    <div class="flex-content">
                        <span><i class="fa fa-plane fa-4x"></i></span>
                        <div class="dl-divider"></div>
                         @php($section_features = App\section_features::where('section_id' , 3)->pluck(trans('routes.section_features_value_column')))
                        <p>
                            {{$section_features[4]}}
                        </p>
                        
                    </div>
                </li>
                <li>
                    <div class="col-md-6 np">
                        <img src="../assets/images/bg/bg-2.jpg"/>
                    </div>
                    <div class="flex-content">
                        <span><i class="fa fa-train fa-4x"></i></span>
                        <div class="dl-divider"></div>
                         @php($section_features = App\section_features::where('section_id' , 3)->pluck(trans('routes.section_features_value_column')))
                        <p>
                            {{$section_features[5]}}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 np">
                        <img src="../assets/images/bg/bg-3.jpg"/>
                    </div>
                    <div class="flex-content">
                        <span><i class="fa fa-institution fa-4x"></i></span>
                        <div class="dl-divider"></div>
                         @php($section_features = App\section_features::where('section_id' , 3)->pluck(trans('routes.section_features_value_column')))
                        <p>
                            {{$section_features[6]}}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 np">
                        <img src="../assets/images/bg/bg-4.jpg"/>
                    </div>

                    <div class="flex-content">
                        <span><i class="fa fa-ship fa-4x"></i></span>
                        <div class="dl-divider"></div>
                         @php($section_features = App\section_features::where('section_id' , 3)->pluck(trans('routes.section_features_value_column')))
                        <p>
                            {{$section_features[7]}}
                        </p>
                    </div>
                </li>
                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
        <div id="carousel" class="flexslider flex-carousel-container">
            <ul class="slides">
                <li>
                    <div class="flex-nav-item">
                        <h2>{{trans('routes.Air Transportation')}}</h2>
                    </div>

                </li>
                <li>
                    <div class="flex-nav-item">
                        <h2>{{trans('routes.Land Transportation')}}</h2>
                    </div>
                </li>
                <li>
                    <div class="flex-nav-item">
                        <h2>{{trans('routes.WareHousing')}}</h2>
                    </div>
                </li>
                <li>
                    <div class="flex-nav-item">
                        <h2> {{trans('routes.Sea Transportation')}}</h2>
                    </div>
                </li>
                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
    </div>

</section>

<section id="features-section" class="dl-full-75">
    <div class="container">
        <div class="row">
            <div class="dl-title">
                @php( $section_title=App\website_sections::where('section_id', 5)->pluck(trans('routes.section_title_column')))
                <span>{{trans('routes.Why choosing us')}}</span>
                <h2>{{$section_title[0]}}</h2>
                <div class="dl-divider"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-5 col-sm-7">
                <ul class="list-unstyled">
                    <li class="features_item">
                        <i class="features_icon fa fa-user"></i>
                        <div class="features_inner">
            @php( $section_features_value=App\section_features::where('section_id', 5)->pluck(trans('routes.section_features_value_column')))
                            <h3 class="features_title ui-title-inner">{{ $section_features_value[0]}}</h3>
                            <div class="features_description">{{$section_features_value[1]}}
                            </div>
                        </div>
                    </li>
                    <li class="features_item">
                        <i class="features_icon fa fa-users"></i>
                        <div class="features_inner">
                            <h3 class="features_title ui-title-inner">{{$section_features_value[2]}}</h3>
                            <div class="features_description">{{$section_features_value[3]}}
                            </div>
                        </div>
                    </li>
                    <li class="features_item">
                        <i class="features_icon fa fa-rocket"></i>
                        <div class="features_inner">
                            <h3 class="features_title ui-title-inner">{{$section_features_value[4]}}</h3>
                            <div class="features_description">{{$section_features_value[5]}}
                            </div>
                        </div>
                    </li>
                    <li class="features_item">
                        <i class="features_icon fa fa-hacker-news"></i>
                        <div class="features_inner">
                            <h3 class="features_title ui-title-inner">{{$section_features_value[6]}}</h3>
                            <div class="features_description">{{$section_features_value[7]}}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-5">
                <img class="img-responsive" src="../assets/images/features/bg.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section id="footer-section" class="dl-half-30">
    <div class="container-fluid" style="padding: 0 60px">
        <div class="row">
            <div class="col-xs-12">

                <footer class="footer">
                    <div class="footer-main">
                        <div class="section__inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="footer__section">
                                        <a class="footer__logo" href="#"><img src="../assets/images/logo_2.png"
                                                                              alt="Logo"></a>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-lg-3 col-md-3">
                                    <section class="footer__section">
                                     @php( $section_title=App\website_sections::where('section_id', 1)->pluck(trans('routes.section_title_column')))   
                                        <h3 class="footer__title">{{$section_title[0]}}</h3>
                                        <div class="dl-divider"></div>
                                        <div class="footer-contact">
                                             <div class="footer-contact__inner">
                                                 @php( $section_features=App\section_features::where('section_id', 1)->pluck(trans('routes.section_features_value_column')))
                                                <div class="footer-contact__info">
                                                    {{$section_features[0]}}
                                                </div>
                                                <div class="footer-contact__info">{{$section_features[1]}}</div>
                                                @php( $section_features_title=App\section_features::where('section_id', 2)->pluck('section_features_title'))
                                                <div class="footer-contact__info">{{$section_features_title[2]}}
                                                    <a href="mailto:inquiry@domain.com">{{$section_features[2]}}</a>
                                                </div>

                                            </div>
                                        </div><!-- end footer-contact -->
                                    </section>
                                </div><!-- end col -->

                                <div class="col-lg-3 col-md-3">
                                    <section class="footer__section">
                                        @php( $section_title=App\website_sections::where('section_id', 2)->pluck(trans('routes.section_title_column')))   
                                        <h3 class="footer__title">{{$section_title[0]}}</h3>
                                        <div class="dl-divider"></div>
                                        <div class="footer-contact">
                                            <div class="footer-contact__inner">
                                                 @php( $section_features=App\section_features::where('section_id', 2)->pluck(trans('routes.section_features_value_column')))
                                                <div class="footer-contact__info">
                                                    {{$section_features[0]}}
                                                </div>
                                                <div class="footer-contact__info">{{$section_features[1]}}</div>
                                                @php( $section_features_title=App\section_features::where('section_id', 2)->pluck('section_features_title'))
                                                <div class="footer-contact__info">{{$section_features_title[2]}}
                                                    <a href="mailto:inquiry@domain.com">{{$section_features[2]}}</a>
                                                </div>

                                            </div>
                                        </div><!-- end footer-contact -->
                                    </section>
                                </div><!-- end col -->
                                <div class="col-lg-3 col-md-3">
                                    <section class="footer__section">
                                        @php( $section_title=App\website_sections::where('section_id', 3)->pluck(trans('routes.section_title_column')))   
                                        <h3 class="footer__title">{{$section_title[0]}}</h3>
                                        <div class="dl-divider"></div>
                                        <ul class="footer-list list-unstyled">
                                          
                                            @php($section_features = App\section_features::where('section_id' , 3)->pluck(trans('routes.section_features_value_column')))
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{$section_features[0]}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{$section_features[1]}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{$section_features[2]}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{$section_features[3]}}</a>
                                            </li>
                                           
                                            
                                            
                                        </ul>
                                    </section>
                                </div><!-- end col -->
                            </div><!-- end row -->
                            
                            <div class="row">
                                <ul class="social-links text-center social-links_mod-a list-inline">
                                    <li><a target="_blank" href="https://twitter.com/"><i
                                            class="icons fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/"><i
                                            class="icons fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/"><i
                                            class="icons fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i
                                            class="icons fa fa-google-plus"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/"><i
                                            class="icons fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- end section__inner -->
                    </div><!-- end footer-main -->

                    <div class="copyright clearfix">
                        <div class="copyright__inner">{{trans('routes.Designed & Developed by')}}
                            <a class="copyright__link" href="http://appagroup.net/">{{trans('routes.APPA Group')}}</a> {{trans('routes.v')}}
                        </div>
                        <ul class="copyright-list list-inline">
                            <li class="copyright-list__item">
                                <a class="copyright-list__link" href="/">{{trans('routes.Terms of Use')}}</a>
                            </li>
                            <li class="copyright-list__item">
                                <a class="copyright-list__link" href="/">{{trans('routes.Privacy Policy')}}</a>
                            </li>
                        </ul>
                    </div><!-- end copyright -->
                </footer><!-- end footer -->

            </div><!-- end col -->
        </div>
    </div>
</section>

<!-- INIT JS -->

<script type="text/javascript" src="../assets/inc/bootstrap/bootstrap.min.js"></script>

<!-- PLUGINS JS -->
<script type="text/javascript" src="../assets/inc/owl-carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/inc/jquery/jquery.inview.min.js"></script>
<script type="text/javascript" src="../assets/inc/jquery/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../assets/inc/animate/wow.min.js"></script>
<script type="text/javascript" src="../assets/inc/scroll/mousescroll.js"></script>
<script type="text/javascript" src="../assets/inc/scroll/smoothscroll.js"></script>
<script type="text/javascript" src="../assets/inc/jquery/jquery.countTo.js"></script>
<script type="text/javascript" src="../assets/inc/flexslider/jquery.flexslider.js"></script>

<!-- MAIN JS -->
<script type="text/javascript" src="../assets/js/main.js"></script>
<script>
    $(window).load(function () {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: true,
            itemWidth: 84,
            itemMargin: 8,
            asNavFor: '#slider',
            direction: "vertical",
            smoothHeight: true
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            smoothHeight: true,
            sync: "#carousel"
        });
    });
</script>
</body>

</html>