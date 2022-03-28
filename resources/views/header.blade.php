
<header id="home">

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
                    <h1><img class="img-responsive image-responsive" src="{{asset('assets/images/logo.png')}}" alt="logo"></h1>
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
               
                        <a href="/{{trans('routes.current_lang')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{asset(trans('routes.current_lang_img'))}}" alt=""> {{trans('routes.current_lang_name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/{{trans('routes.other1')}}"><img src="{{asset(trans('routes.other1_img'))}}" alt=""> {{trans('routes.other1_name')}} </a></li>
                            <li><a href="/{{trans('routes.other2')}}"><img src="{{asset(trans('routes.other2_img'))}}" alt=""> {{trans('routes.other2_name')}} </a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>


