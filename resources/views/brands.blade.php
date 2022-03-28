@extends('index')

@section('content')



<section id="brands-section" class="dl-section dl-full-75 pt-140">
    <div class="container">
        <div class="row">
            
            <div class="dl-title">
               
                <span>{{trans('routes.We Proudly Present Our Clients')}}</span>
            </div>
           
            <div class="col-md-12">
               @foreach(App\brand::all()->pluck('brand_id') as $brand_id)     
                <div class="col-md-3 brand-item">
                    @php( $brand_title=App\brand::where('brand_id', $brand_id)->pluck(trans('routes.brand_title_column')))
                    <h1>{{$brand_title[0]}}</h1>
                     @php( $img=App\brand::where('brand_id', $brand_id)->pluck('brand_image'))
                     <img class="img-responsive" src="{{asset('/upload/'.$img[0])}}" alt="brand"></img> 
                    
                </div>
            @endforeach     
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