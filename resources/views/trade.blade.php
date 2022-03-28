@extends('index')


@section('content')

<section id="hero-section" class="dl-half">
        <div class="container">

            <div class="dl-title">
                <h2>{{trans('routes.Trading Products')}}</h2>
                <span>{{trans('routes.Best Services ever ...')}}</span>
                <div class="dl-divider text-left"></div>
            </div>
        </div>
    </section>


<section id="blog-section" class="dl-section dl-full trade-section">
    <div class="container">
        <div class="row">
            <div class="dl-title">
                <h2>{{trans('routes.Meet Our Products')}}</h2>
            </div>

            <!-- FILTERS -->
            
     
      
          
           
            <div class="trade_item" id="filters">
                
                <ul class="category-filter">
                    <p>{{trans('routes.Select a category')}}</p>
                     @foreach(App\main_category::all()  as $main_category)
                    @php($main_category_name=App\main_category::where('cat_name',$main_category->cat_name)->pluck(trans('routes.main_cat_name')))
                    <span><li class="active dl-button dl-button-secondary">
                   <a href="#" data-filter=".filter_{{$main_category->cat_id}}"> {{$main_category_name[0]}}</a></li></span>
                    
                 @endforeach
                </ul>
                <ul class="category-title">
                    <p>{{trans('routes.Then choose any product')}}</p>
                </ul>

                <div id="filters-filter">
                    
                    @foreach(App\main_category::all()  as $m_category)
                    
                    <div class="col-md-12 blog-item filter_{{$m_category->cat_id}}">
                        <div class="filter_{{$m_category->cat_id}}" id="filters-{{$m_category->cat_id}}">
                            <ul class="blog-filter">
                                @php($tag = "")
                                @foreach(App\sub_category::where('cat_id',$m_category->cat_id)->pluck(trans('routes.subcat_name_column'))  as $sub_category)
                                @php($sub_category_id = App\sub_category::where(trans('routes.subcat_name_column'),$sub_category)->pluck('subcat_id'))
                                @php($cat_id = App\sub_category::where(trans('routes.subcat_name_column'),$sub_category)->pluck('cat_id'))
                               
                         @php($tag = $tag. '.item_'.$cat_id[0].'_'.$sub_category_id[0].', ')
                              
                                
                               @endforeach
                              @php($trimmed = rtrim($tag, ", "))
                              
                              
                                 <li class="active"><a href="#" data-filter=
                                 
                                 
                                 "{{$trimmed}}">All</a></li>
                                  
                               
                               
                                 @foreach(App\sub_category::where('cat_id',$m_category->cat_id)->pluck(trans('routes.subcat_name_column'))  as $sub_category)
                                @php($sub_category_id = App\sub_category::where(trans('routes.subcat_name_column'),$sub_category)->pluck('subcat_id'))
                                @php($cat_id = App\sub_category::where(trans('routes.subcat_name_column'),$sub_category)->pluck('cat_id'))
                                
                             
                                
                                <li><a href="#" data-filter=".item_{{$cat_id[0]}}_{{$sub_category_id[0]}}">{{$sub_category}}</a></li>
                               
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                     @endforeach
                    
                    
                </div>
            </div>




            <div class="section-top-minus">
                <div class="container">
                    <div class="row" id="blog-items">

                       
                        @foreach(App\item::all()  as $item)
                         @php($main_category_id = App\sub_category::where('subcat_id',$item->sub_category_id)->pluck('cat_id'))
                         
                        <div class="col-sm-4 blog-item filter_{{$main_category_id[0]}} item_{{$main_category_id[0]}}_{{$item->sub_category_id}}">
                            <article class="post clearfix">
                                @php($img_count= App\item_images::where('item_id',$item->item_id)->count())
                                @if($img_count>0)
                              
                                <div class="post_media">
                                    <div id="post-carousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @for($i=0 ; $i<$img_count+1 ; $i++)
                                                @if($i==0)
                                                 <li data-target="#post-carousel"  class="active" data-slide-to="{{$i}}" ></li>
                                                 @else
                                            <li data-target="#post-carousel" data-slide-to="{{$i}}" ></li>
                                            @endif
                                            @endfor
                                        </ol>
                                        <div class="carousel-inner">
                                            
                                          @php($j=0)
                                           
                                            @foreach( App\item_images::where('item_id',$item->item_id)->pluck('image_url') as $item_images)
                                               
                                               @if($j==0)
                                               <div class="item active">
                                                
                                                <a href="/single/{{$item->item_id}}">
                                                    <img class="img-responsive"
                                                         src="{{asset('upload/'.$item_images)}}"
                                                         alt="">
                                                </a>
                                                
                                               </div>
                                           
                                                @else   
                                                      <div class="item">
                                    <a href="/single/{{$item->item_id}}"><img class="img-responsive" src="{{asset('/upload/'.$item->item_main_image)}}
                                    " alt=""></a>
                                          </div>    
                                            <div class="item">
                                                
                                                <a href="/single/{{$item->item_id}}">
                                                    <img class="img-responsive"
                                                         src="{{asset('upload/'.$item_images)}}"
                                                         alt="">
                                                </a>
                                                
                                            </div>
                                            
                                            
                                            @endif
                                            @php($j=$j+1)
                                            
                                            @endforeach
                                      
                                        </div>
                                        <a class="blog-left-control" href="#post-carousel" role="button"
                                           data-slide="prev"><i
                                                class="fa fa-angle-left"></i></a>
                                        <a class="blog-right-control" href="#post-carousel" role="button"
                                           data-slide="next"><i
                                                class="fa fa-angle-right"></i></a>
                                       </div>
                                </div>
                                
       
                                @else
                                <div class="post_media">
                                    <a href="/single/{{$item->item_id}}"><img class="img-responsive" src="{{asset('/upload/'.$item->item_main_image)}}
                                    " alt=""></a>
                                </div>
                                 @endif
                                <div class="post_main">
                                    <div class="entry-header">
                                        @php($item_name=App\item::where('item_id',$item->item_id)->pluck(trans('routes.item_name_column')))
                                        <h2 class="post_title ui-title-inner">{{$item_name[0]}}</h2>
                                    </div>
                                    <div class="entry-content">
                                        @php($item_sub_description=App\item::where('item_id',$item->item_id)->pluck(trans('routes.item_sub_description_column')))
                                        <p>{{$item_sub_description[0]}}</p>
                                    </div>
                                    <div class="entry-footer">
                                        <div class="dl-divider"></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        
                        @endforeach
                        
                        
                        
                      

                    </div>
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