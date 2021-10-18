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
    

    
    

	function lightBoxModal() {
		//----Lightbox----//
		var	lightBox = $("#Lightbox");
		var Images = $(".single-image");
        
		Images.click(function(){
			lightBox.fadeIn("fast");
            console.log('Images');
			for (var i = 0; i < Images.length; i++) {
                
				var image = this.getElementsByTagName('img')[0];
				document.getElementById('Lightbox-Image').src = image.src;
			}
			$('body').addClass('preventscroll');

		});


		$(".close-button").click(function(){
			$('body').removeClass('preventscroll');
			lightBox.fadeOut("fast");

		});

		$("#Lightbox").click(function(){
			$('body').removeClass('preventscroll');
			lightBox.fadeOut("fast");

		});

	}

	lightBoxModal();
    var mixer = mixitup('#mixer-cont', mixer_config);
});