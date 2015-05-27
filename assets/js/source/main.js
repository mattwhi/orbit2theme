(function($) {
	jQuery( ".col-md-7:odd" ).addClass( "col-md-push-5" );
	jQuery( ".col-md-5:odd" ).addClass( "col-md-pull-7" );
})(jQuery);

(function($) {
	jQuery('.blog-entry').hover(function() {
		jQuery(this).find('article').fadeToggle(500);
	});
})(jQuery);
