 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: true
 });

jQuery(document).ready(function($) {


	var siteCarousel = function () {

	  $('.slide-one-item-alt').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt-text').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt-text').trigger('prev.owl.carousel');
	    	}
	    }
	  });
	  $('.slide-one-item-alt-text').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt').trigger('prev.owl.carousel');
	    	}
	    }
	  });


	  /* testimonial-client */
	  $('.slide-one-item-alt-text2').owlCarousel({
	    center: false,
	    items: 3,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    loop:true,
	    margin:10,

	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:2,
	        },
	        1000:{
	            items:3,
	        }
	    }

	  });
	  /* testimonial-client */

	  


	  $('.custom-next').click(function(e) {
	  	e.preventDefault();
			$('.slide-one-item-alt').trigger('next.owl.carousel');
			$('.slide-one-item-alt-text').trigger('next.owl.carousel');
		});
		$('.custom-prev').click(function(e) {
			e.preventDefault();
		  $('.slide-one-item-alt').trigger('prev.owl.carousel');
		  $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
		});


		/* testimonial-client */
		$('.custom-next').click(function(e) {
	  	e.preventDefault();
			$('.slide-one-item-alt-text2').trigger('next.owl.carousel');
		});
		$('.custom-prev').click(function(e) {
			e.preventDefault();
		  $('.slide-one-item-alt-text2').trigger('prev.owl.carousel');
		});
		/* testimonial-client */

	};
	siteCarousel();

});