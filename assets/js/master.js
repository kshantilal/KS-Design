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
    
    // if (window.location.pathname=='/') {
    if (document.querySelector('#mixer-cont')) {
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
    }

	// function lightBoxModal() {
	// 	//----Lightbox----//
	// 	var	lightBox = $("#Lightbox");
	// 	var Images = $(".single-image, .image-row img");
        
	// 	Images.click(function(){
	// 		lightBox.fadeIn("fast");
	// 		for (var i = 0; i < Images.length; i++) {
                
	// 			var image = this.getElementsByTagName('img')[0];
	// 			document.getElementById('Lightbox-Image').src = image.src;
	// 		}
	// 		$('body').addClass('preventscroll');

	// 	});


	// 	$(".close-button").click(function(){
	// 		$('body').removeClass('preventscroll');
	// 		lightBox.fadeOut("fast");

	// 	});

	// 	$("#Lightbox").click(function(){
	// 		$('body').removeClass('preventscroll');
	// 		lightBox.fadeOut("fast");

	// 	});

	// }
function lightBoxModal() {
  var lightBox = $("#Lightbox");
  var images = $(".single-image img, .image-row img");

  images.on("click", function () {
    var src = $(this).attr("src");
    if (!src) return;

    $("#Lightbox-Image").attr("src", src);
    lightBox.addClass("is-open");
    $("body").addClass("preventscroll");
  });

  $(".close-button, #Lightbox").on("click", function (e) {
    // stop clicks inside the content from closing
    if ($(e.target).closest("#Lightbox-Content").length && !$(e.target).hasClass("close-button")) {
      return;
    }

    lightBox.removeClass("is-open");
    $("#Lightbox-Image").attr("src", "");
    $("body").removeClass("preventscroll");
  });
}

$(document).ready(lightBoxModal);
    
});