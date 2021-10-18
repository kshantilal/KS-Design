jQuery(function($){


    

    // Change text colour and logo on scroll for secondary navigation
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();

        if (scroll >= 150) {
            $('nav').addClass('nav-background');
        }else{
            $('nav').removeClass('nav-background')
        }

    });

    var swiper = new Swiper('.swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });

    var mixer_config = {
        load: {
            filter: '.web',
            sort: 'default:desc'
        },
        animation: {
            duration: 250,
            nudge: true,
            reverseOut: false,
            effects: "fade scale(0.01) translateX(20%)"
        }

    }

    var mixer = mixitup('#mixer-cont', mixer_config);


});