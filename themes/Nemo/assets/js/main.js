$(document).ready(function(){

	(function($) {

		$('#header__icon').click(function(e){
			e.preventDefault();
			$('body').toggleClass('with--sidebar');
		});
    
    $('#site-cache').click(function(e){
      $('body').removeClass('with--sidebar');
    });

    })(jQuery);
    
    $(document).ready(function(){
        $('.carousel-equipe').owlCarousel({
          nav:false,
          loop:true,
          dots: true,
          autoplay:false,
          autoplayTimeout:5000,
          autoplayHoverPause:true,
          responsiveClass: true,
          responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:3,
            }
        }
        });
    });

});
