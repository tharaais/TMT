@extends('index')

@section('content')



<section id="welcome-section" class="dl-section dl-full-75">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp">
                <div class="col-xs-12">
                    <div class="text-center pt-60">
                        <img class="img-responsive" src="../assets/images/logo.png" alt="">
                    </div>
                    <div class="dl-title">
                        <span>{{trans('routes.International Services')}}</span>
                        <h2>{{trans('routes.Transportation & Trade')}}</h2>
                        <div class="dl-divider"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="arrow-2">
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="arrow-1 animated hinge infinite zoomIn"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="parts-section" class="dl-section dl-full-75">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-1 col-md-4 wow fadeIn" data-wow-duration="1200ms" data-wow-delay="500ms">
                <article class="post item clearfix">
                    <div class="entry-media">
                        <div class="dl-title">
                            <h2>{{trans('routes.Transportation')}}</h2>
                            <div class="arrow-container-2">
                                <div class="arrow-3 animated hinge infinite zoomIn"></div>
                            </div>
                            <span class="icon-container"><i class="fa fa-ship" style="padding-left: 5px;"></i></span>

                            <div class="dl-divider"></div>
                            <a href="/transportation" class="dl-button dl-button-primary">{{trans('routes.Read More')}}</a>
                        </div>
                    </div>

                    <div class="entry-main">
                        <div class="entry-content">
                            <p>
                                {{trans('routes.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi architecto facilis
                                fugit,
                                neque quam repudiandae vero? Aperiam doloremque fuga harum ipsum laborum minus quas
                                reiciendis
                                repellendus temporibus, veritatis. Illum!')}}
                            </p>
                            <div class="text-right">
                                <a href="#" class="dl-button dl-button-secondary"> {{trans('routes.Download Brochure')}}</a>
                            </div>

                        </div>

                    </div>
                </article>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 wow fadeIn" data-wow-duration="1200ms" data-wow-delay="500ms">
                <article class="post item clearfix">
                    <div class="entry-media">
                        <div class="dl-title">
                            <h2>{{trans('routes.Trading')}}</h2>
                            <div class="arrow-container-2">
                                <div class="arrow-3 arrow-secondary animated hinge infinite zoomIn"></div>
                            </div>
                            <span class="icon-container"><i class="fa fa-globe " style="padding-left: 5px;"></i></span>
                            <div class="dl-divider"></div>

                            <a href="/trade" class="dl-button dl-button-primary">{{trans('routes.Read More')}}</a>
                        </div>
                    </div>

                    <div class="entry-main">

                        <div class="entry-content">
                            <p>
                                {{trans('routes.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores atque dicta
                                harum nam
                                nihil nostrum obcaecati sint? Aut beatae consequatur delectus, earum ipsa numquam
                                officia
                                quibusdam quisquam sequi tempora?')}}
                            </p>
                            <div class="text-right">
                                <a href="#" class="dl-button dl-button-secondary"> {{trans('routes.Download Brochure')}}</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="blog-section" class="dl-section dl-full">
    <div class="container">
        <div class="row">
            <div class="dl-title">
                <span>{{trans('routes.LATEST FROM OUR BLOG')}}</span>
                <h2>{{trans('routes.COMPANY NEWS')}}</h2>
            </div>
            <div class="section-top-minus section_mod-a">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="post clearfix">
                                <div class="post_media">
                                    <img class="img-responsive" src="../assets/images/news/news.jpg" alt="">
                                    <div class="post_date">
                                        <a href="#">
                                            <span class="post_date_inner">{{trans('routes.10 feb')}}</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="post_main">
                                    <div class="entry-header">
                                        <h2 class="post_title ui-title-inner">{{trans('routes.Lorem ipsum dolor sit consectetur')}}</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{trans('routes.Lorem ipsum dolor sit amet consectetur dipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis
                                            nostrud ...')}}</p>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="dl-divider"></div>
                                        <a class="btn-link" href="#">{{trans('routes.read more')}}</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="post  clearfix">
                                <div class="post_media">
                                    <img class="img-responsive" src="../assets/images/news/news-2.jpg" alt="">
                                    <div class="post_date">
                                        <a href="#">
                                            <span class="post_date_inner">{{trans('routes.10 feb')}}</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="post_main">
                                    <div class="entry-header">
                                        <h2 class="post_title ui-title-inner">{{trans('routes.incididunt ut labore et dolore magna')}}</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{trans('routes.Commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat ...')}}</p>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="dl-divider"></div>
                                        <a class="btn-link" href="#">{{trans('routes.read more')}}</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="post clearfix">
                                <div class="post_media">
                                    <img class="img-responsive" src="../assets/images/news/news-3.png" alt="">
                                    <div class="post_date">
                                        <a href="#">
                                            <span class="post_date_inner">{{trans('routes.10 feb')}}</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="post_main">
                                    <div class="entry-header">
                                        <h2 class="post_title ui-title-inner">{{trans('routes.nostrud exercitation ullamco laboris')}}</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{trans('routes.Lorem ipsum dolor sit amet consectetur dipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis
                                            nostrud ...')}}</p>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="dl-divider"></div>
                                        <a class="btn-link" href="#">{{trans('routes.read more')}}</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-30 text-center" data-wow-duration="1000ms" data-wow-delay="500ms">
            <a href="#" class="dl-button dl-button-primary">{{trans('routes.Load More')}}</a>
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
                                <a class="copyright-list__link" href="/home">{{trans('routes.Terms of Use')}}</a>
                            </li>
                            <li class="copyright-list__item">
                                <a class="copyright-list__link" href="/home">{{trans('routes.Privacy Policy')}}</a>
                            </li>
                        </ul>
                    </div><!-- end copyright -->
                </footer><!-- end footer -->

            </div><!-- end col -->
        </div>
    </div>
</section>


@stop