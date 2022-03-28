
<!-- INIT JS -->

<script type="text/javascript" src="{{asset('assets/inc/bootstrap/bootstrap.min.js')}}"></script>

<!-- PLUGINS JS -->
<script type="text/javascript" src="{{asset('assets/inc/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/jquery/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/jquery/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/animate/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/spinner/spin.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/scroll/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/scroll/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/jquery/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/inc/flexslider/jquery.flexslider.js')}}"></script>
<!--<script type="text/javascript" src="inc/lightbox/lightbox.min.js"></script>-->

<!-- MAIN JS -->
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
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




