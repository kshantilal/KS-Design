jQuery(function($){


// Change text colour and logo on scroll for secondary navigation
$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        console.log('here');
        $('nav').addClass('nav-background');
    }else{
        $('nav').removeClass('nav-background')
    }
});

});