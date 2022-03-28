@extends('index')

@section('content')


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	

<section id="map-section" class="dl-section dl-full-75 pt-140">













    <div class="container">
        <div class="row">
            <div class="dl-title">
                <span>{{trans('routes.Find Us Around the World')}}</span>
                <div class="dl-divider"></div>
            </div>

            <div class="col-md-4">
                @foreach(App\location::all()->pluck('location_id') as $location_id)
                @php( $location_lat=App\location::where('location_id', $location_id)->pluck('location_lat'))
                @php( $location_long=App\location::where('location_id', $location_id)->pluck('location_long'))
                @php( $location_address=App\location::where('location_id', $location_id)->pluck('location_address'))
                <h3 class="location" data-lat="{{$location_lat[0]}}" data-lang="{{$location_long[0]}}">{{$location_address[0]}}</h3>
                <div class="dl-divider"></div>
                @endforeach
            </div>

            <!--
            Just remove the style from here, we don't need the height as you put the Google maps,
            and the background is just for you to notice the div, if necessary, keep the height.
            -->
            <div class="col-md-8" id="mymap" style="background-color: #777; height: 400px;">

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
                                        <h3 class="footer__title">{{trans('routes.Transportation details')}}</h3>
                                        <div class="dl-divider"></div>
                                        <div class="footer-contact">
                                            <div class="footer-contact__inner">
                                                <div class="footer-contact__info">
                                                    {{trans('routes.54 NewHill Station Ave CA, Newyork')}}<br>
                                                    {{trans('routes.33102 US')}}
                                                </div>
                                                <div class="footer-contact__info">{{trans('routes.Phone: (007) 123 456 7890')}}</div>
                                                <div class="footer-contact__info">{{trans('routes.Email:')}}
                                                    <a href="mailto:inquiry@domain.com">{{trans('routes.inquiry@domain.com')}}</a>
                                                </div>

                                            </div>
                                        </div><!-- end footer-contact -->
                                    </section>
                                </div><!-- end col -->

                                <div class="col-lg-3 col-md-3">
                                    <section class="footer__section">
                                        <h3 class="footer__title">{{trans('routes.Trade details')}}</h3>
                                        <div class="dl-divider"></div>
                                        <div class="footer-contact">
                                            <div class="footer-contact__inner">
                                                <div class="footer-contact__info">
                                                    {{trans('routes.54 NewHill Station Ave CA, Newyork')}}<br>
                                                    {{trans('routes.33102 US')}}
                                                </div>
                                                <div class="footer-contact__info">{{trans('routes.Phone: (007) 123 456 7890')}}</div>
                                                <div class="footer-contact__info">{{trans('routes.Email:')}}
                                                    <a href="mailto:inquiry@domain.com">{{trans('routes.inquiry@domain.com')}}</a>
                                                </div>

                                            </div>
                                        </div><!-- end footer-contact -->
                                    </section>
                                </div><!-- end col -->
                                <div class="col-lg-3 col-md-3">
                                    <section class="footer__section">
                                        <h3 class="footer__title">{{trans('routes.services offered')}}</h3>
                                        <div class="dl-divider"></div>
                                        <ul class="footer-list list-unstyled">
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{trans('routes.Sea Transportation')}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{trans('routes.Road Transport')}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{trans('routes.Air Transportation')}}</a>
                                            </li>
                                            <li class="footer-list__item">
                                                <a class="footer-list__link" href="#">{{trans('routes.Warehousing')}}</a>
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
<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('mymap'), {
          zoom: 4,
          center: uluru
        });
        
        $.ajax('/location' , {
           type:'get',
           success:function (result)
           {
               for(var i = 0 ; i < result.length ; i++){
                     var marker = new google.maps.Marker({
                     position: {lat: result[i].location_lat , lng: result[i].location_long},
                        map: map
                    });
               }
           } 
        });
        
        $('.location').on('click' , function(){
            map.setCenter({
                lat: $(this).data('lat'),
                lng: $(this).data('lang')     
            });
        });
      
      }
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5OZ6_mIe5LUbzUJPIhbW2qjgDAPG-zpU&callback=initMap">
    </script>

@stop