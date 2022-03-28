jQuery(function ($) {

    //region SLIDER

    $(document).ready(function () {
        var revapi;

        revapi = jQuery('.tp-banner').revolution(
            {
                delay: 9000,
                startwidth: 1170,
                startheight: 500,
                hideThumbs: 10,
                fullWidth: "on",
                forceFullWidth: "on"
            });

    });	//ready


    //endregion

    //region BLOG FILTER

    $( document ).ready(function() {
        $('#filters-filter').isotope({filter: '.filter_1'});
    });

    $(window).load(function () {
        'use strict';

        var items = $('.blog-filter >li');
        var categories = $('.category-filter >span >li');

        var item_title = $('.blog-filter  >li > a');
        var category_title = $('.category-filter >span >li > a');

        var blog = $('#blog-items');
        blog.isotope({
            filter:'.item_1_1, .item_1_2',
            itemSelector: '.blog-item',
            layoutMode: 'fitRows'
        });

        category_title.on('click', function () {
            categories.removeClass('active');
            ($(this)).parent().addClass('active');
            var selector = $(this).attr('data-filter');

            $('#filters-filter').isotope({filter: selector});
            return false;
        });

        item_title.on('click', function () {
            items.removeClass('active');
            ($(this)).parent().addClass('active');
            var selector = $(this).attr('data-filter');

            blog.isotope({filter: selector});
            return false;
        });

    });


    //endregion

    $('#welcome-section .arrow-2').on('click', function () {
        $('html, body').animate({scrollTop: $("#parts-section").offset().top - 5}, 1500);
        return false;
    });

    $('.navbar-collapse ul li a').on('click', function () {
        $('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
        return false;
    });


    $('#tohash').on('click', function () {
        $('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
        return false;
    });

    //Initiate WOW JS
    new WOW().init();

    //smoothScroll
    smoothScroll.init();

    $(function () {
        $(".expand").on("click", function () {
            // $(this).next().slideToggle(200);
            $expand = $(this).find(">:first-child");

            if ($expand.text() == "+") {
                $expand.text("-");
            } else {
                $expand.text("+");
            }
        });
    });

    // Owl carousel for ISO
    $('.owl-iso').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});

