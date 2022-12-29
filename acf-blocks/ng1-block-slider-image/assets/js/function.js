(function($){
	$( window ).on( "load", function() { 
		$('.slider-image').slick({
			mobileFirst: true,
			infinite: true,
			centerMode: true,
			variableWidth: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			arrows: false
		});
	});
})(jQuery);