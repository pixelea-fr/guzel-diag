(function($){
	$( window ).on( "load", function() { 
		$('.intro').slick({
			mobileFirst: true,
			centerMode: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true
		});
	});
})(jQuery);