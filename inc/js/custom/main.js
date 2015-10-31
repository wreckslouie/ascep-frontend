/*
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {


	$(function() {
		$header = $('#masthead')

		$(window).on('load', function() {

			$('.metaslider').scrollwatch({
				delay:		0,
				range:		0.5,
				anchor:		'top',
				on:			function() { $header.addClass('alt reveal'); },
				off:		function() { $header.removeClass('alt'); }
			});

		});

	});

})(jQuery);