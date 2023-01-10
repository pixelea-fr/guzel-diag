(function ($) {
	$(document).ready(function () {
		$(window).scroll(function () {
			if($(document).scrollTop() > 700){
				$('.button-container').addClass('hide');
			}
			else{
				$('.button-container').removeClass('hide');
			}
		});
	});
})(jQuery);