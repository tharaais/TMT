@extends('index')

@section('content')



<section class="dl-section dl-full trade-section">
    <div class="container">
        <div class="row">
            <div class="dl-title">
                @php( $section_title=App\website_sections::where('section_id', 6)->pluck(trans('routes.section_title_column')))
                <h2>{{$section_title[0]}}</h2>
                <div class="dl-divider pb-40"></div>
            </div>
        </div>
 @php( $section_features_value=App\section_features::where('section_id', 6)->pluck(trans('routes.section_features_value_column')))
        <div class="row">
            <div class="col-md-6 ">
                <h2 class="text-center">{{$section_features_value[0]}}</h2>
                <p>
                    {{$section_features_value[1]}}
                   

                </p>
            </div>
            <div class="col-md-6 ">
                <h2 class="text-center">{{$section_features_value[2]}}</h2>
                <p>
                    {{$section_features_value[3]}}
                    
                </p>
            </div>
        </div>
    </div>
</section>
 @php( $slider_id=App\slider::where('slider_name', 'slider_news')->pluck('slider_id')) 
<section id="iso-section" class="dl-section dl-half">
    <div class="container">
        <div class="row">
            @php($slider_item_subtitle = App\slider_item::where('slider_id', $slider_id[0])->pluck('slider_item_subtitle'))
            <div class="dl-title">
                <h2>{{$slider_item_subtitle[0]}}</h2>
                <div class="dl-divider pb-40"></div>

                <div class="owl-iso owl-theme">
                    
                              
                   
                  @foreach(App\slider_item::where('slider_id', $slider_id[0])->pluck('slider_item_image_url') as $slider_img)
                    <div class="item">
                        <a href="{{asset('/upload/'.$slider_img)}}" data-lightbox="slider-group">
                            <img class="img-responsive" src="{{asset('/upload/'.$slider_img)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                    

                </div>

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

@stop 