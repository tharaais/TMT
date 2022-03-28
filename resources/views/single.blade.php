@extends('index')

@section('content')


    <section id="single-post">
        <div class="container">
            <div class="row">
                
                <div class="col-md-9 col-sm-8">
                    <div class="section-default section-posts">
                        <article class="post post_main clearfix">
                            <div class="entry-media">
                                @php( $img=App\item::where('item_id', $item_id)->pluck('item_main_image'))
                                   <img class="img-responsive" src="{{asset('/upload/'.$img[0])}}" alt="Foto"></img> 
                                
                            </div>

                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                    @php( $item_name = App\item::where('item_id', $item_id)->pluck(trans('routes.item_name_column')) )                                        
                                        {{$item_name[0]}}
                                    </h2>
                                </div>
                                <div class="dl-divider"></div>
                                <div class="entry-content">
                                    <p>
                                        @php( $item_description = App\item::where('item_id', $item_id)->pluck(trans('routes.item_description_column')) )                                        
                                        {{$item_description[0]}}
                                    </p>
                                   
                                </div>
                              
                              <div class="row"> 
                                   
                    @foreach(App\item_images::where('item_id', $item_id)->pluck('image_url') as $item_image)  
                              
                                  <div class="col-md-6">                                  
                             <img class="post-img img-responsive" src="{{asset('/upload/'.$item_image)}}" ></img> 
                                  </div>
                      @endforeach          
                                
                              </div> 
                                
                                <footer class="entry-footer clearfix">
                                    <div class="entry-footer_links">
                                        <div class="dl-divider"></div>
                                        <span>{{trans('routes.Share Now')}}</span>
                                    </div>
                                    <ul class="social-links social-links_mod-a list-inline">
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
                                </footer>
                            </div>
                        </article>


                    </div>
                </div>



















                <div class="col-md-3 col-sm-4">
                    <aside class="sidebar">
                        <div class="widget">
                            <h3 class="title">{{trans('routes.Recent Items')}}</h3>
                            <div class="dl-divider"></div>
                            <div class="widget-content">
                                <div class="post-widget clearfix">
                                    <div class="post-widget__media">
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{asset('assets/images/portfolio/4.jpg')}}"
                                                 alt="foto">
                                        </a>
                                    </div>
                                    <div class="post-widget__inner">

                                        <a class="post-widget__title" href="#">{{trans('routes.E')}}</a>
                                    </div>
                                </div>
                                <div class="post-widget clearfix">
                                    <div class="post-widget__media">
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{asset('assets/images/portfolio/5.jpg')}}"
                                                 alt="foto">
                                        </a>
                                    </div>
                                    <div class="post-widget__inner">

                                        <a class="post-widget__title" href="#">{{trans('routes.A')}}</a>
                                    </div>
                                </div>
                                <div class="post-widget clearfix">
                                    <div class="post-widget__media">
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{asset('assets/images/portfolio/6.jpg')}}"
                                                 alt="foto">
                                        </a>
                                    </div>
                                    <div class="post-widget__inner">

                                        <a class="post-widget__title" href="#">{{trans('routes.Rr')}}</a>
                                    </div>
                                </div>
                                <div class="post-widget clearfix">
                                    <div class="post-widget__media">
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{asset('assets/images/portfolio/4.jpg')}}"
                                                 alt="foto">
                                        </a>
                                    </div>
                                    <div class="post-widget__inner">

                                        <a class="post-widget__title" href="#">{{trans('routes.Re')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
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
                                            <a class="footer__logo" href="#"><img src="{{asset('assets/images/logo_2.png')}}"
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


</div>

@stop