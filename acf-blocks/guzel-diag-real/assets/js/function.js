(function($){
	$('document').ready(function(){
        $('.diag').removeClass('visible');
        $('.diag').on('click', function(){
            $(this).toggleClass('visible');
        });
    });
})(jQuery);