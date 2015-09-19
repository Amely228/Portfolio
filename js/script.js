$(document).ready(function () {

    /*Nice Scroll*/
   /* $("body").niceScroll();*/


    /*Scroll to top*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scrollTop').fadeIn();
        } else {
            $('#scrollTop').fadeOut();
        }
    });


    $("#scrollTop").click(function() {
        $("body,html").animate({
            scrollTop:0
        }, 1000, 'easeOutQuad');
    });

    /*Nav animated scrollTo*/
    $(function() {

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });

    });


    /*Slider*/
    var revapi;

    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner').revolution(
            {
                delay:15000,
                startwidth:1170,
                startheight:500,
                hideThumbs:10,
                fullWidth:"off",
                fullScreen:"on",
                fullScreenOffsetContainer: ""
            });

    });	//ready

    /*Wow JS*/
    var wow = new WOW({
        animateClass : 'animated',
        offset: 100
    });
    wow.init();

    /*MixItUp*/
    (function($){
        // Instantiate MixItUp:
        jQuery('#mixItUp_container').mixItUp();
    })(jQuery);

    $(".mix_active, .filter_link").click(function (e) {
        e.preventDefault();
    });

    $('.circlestat').circliful();


    $('.slider_wrapper').css({
        marginTop : $('.navbar').css('height')
    });



    /*Tooltip*/
    $(".footer_nav a, #filter_clickarea a").tooltip();

});/*end of document ready state*/


