(function($) {
	jQuery( ".col-md-7:odd" ).addClass( "col-md-push-5" );
	jQuery( ".col-md-5:odd" ).addClass( "col-md-pull-7" );
})(jQuery);

(function($) {
	jQuery('.blog-entry').hover(function() {
		jQuery(this).find('article').fadeToggle(500);
	});
})(jQuery);

(function($) {
	jQuery('html').hide().fadeIn(2000);
})(jQuery);

(function($) {
	jQuery('.navbar ul.nav li').on('click', function(e){
		e.preventdefault();
		var goTo = this.attribute('href');
			setTimeout(function() {
				window.location = goTo;
			}, 1000);
	});
})(jQuery);
