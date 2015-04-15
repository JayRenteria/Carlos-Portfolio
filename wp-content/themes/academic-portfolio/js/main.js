// enclosing function to allow $ to be used in wordpress

//(function($){
//
//// normal jQuery code
//
//	$('a[href^="#"]').on('click',function (e) {
//		e.preventDefault();
//
//		var target = this.hash;
//		var $target = $(target);
//		var scrollTo = $target.offset().top - 56;
//
//		$('html, body').stop().animate({
//			'scrollTop': scrollTo
//		}, 900, 'swing');
//	});
//
//// end code, close function
//
//})(jQuery);

//commented out rest of code temporarily, code above solves anchor issues

(function($) {
	//$(window).scrollTop(0);
//
//	/**
//	 * Initialize stellar parallax plugin
//	 */
//	//$.stellar({
//	//	horizontalScrolling: false,
//	//	verticalOffset: 40
//	//});
//
//	/**
//	 * Start Swipebox jQuery plugin (light box)
//	 */
//	//$('.swipebox').swipebox();
//
	/**
	 * Scroll-to events
	 */
	var $top       = $("#top_page");
	var $portfolio = $("#portfolio_section");
	var $bio       = $("#bio_section");
	var $contact   = $("#contact_section");

	// constants
	var speed        = 0.3;

	if($('body').hasClass('admin-bar')) {
		var wpAdminBar = 32;
	} else {
		var wpAdminBar = 0;
	}

	var navBarHeight = 40 + wpAdminBar;
	var marginTop    = 80;

	$('a[href="#top_page"]').on('click', function(event) {
		event.preventDefault();

		$('html, body').animate({scrollTop: getTargetVerticalPosition($top)},
			getVerticalDistance($(this), $top) * speed);
	});

	$('a[href="#portfolio_section"]').on('click', function(event) {
		event.preventDefault();

		$('html, body').animate({scrollTop: getTargetVerticalPosition($portfolio)},
			getVerticalDistance($(this), $portfolio) * speed);
	});

	$('a[href="#bio_section"]').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: getTargetVerticalPosition($bio)},
			getVerticalDistance($(this), $bio) * speed);
	});

	$('a[href="#contact_section"]').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: getTargetVerticalPosition($contact)},
			getVerticalDistance($(this), $contact) * speed);
	});

	/**
	 * get the vertical position of the link target
	 *
	 * @param $target
	 * @returns float vertical position
	 */
	function getTargetVerticalPosition($target) {

		// if the home section has already an offset of marginTop
		if($('#home_section').css('margin-top') === marginTop + 'px') {
			console.log($target.offset().top - (navBarHeight + marginTop - wpAdminBar));
			return $target.offset().top - (navBarHeight + marginTop - wpAdminBar);
		}
		console.log($target.offset().top - navBarHeight);
		return $target.offset().top - navBarHeight;
	}

	/**
	 * returns the vertical distance between two html tags
	 *
	 * @param $element1 the first element
	 * @param $element2 the second element
	 * @returns {number} the distance between the two elements
	 */
	function getVerticalDistance($element1, $element2) {
		return Math.abs($element1.offset().top - $element2.offset().top);
	}

	/**
	 * Scroll event
	 */
	$(window).on('scroll', calculateMarginTop);

	/**
	 * calculate the margin top
	 */
	function calculateMarginTop() {

		// if the scroll position is greater than 0
		if($(window).scrollTop() > 0) {
			$('nav').css({backgroundColor: 'rgba(0, 0, 0, 0.7)'});
			$('#home_section').css({marginTop: wpAdminBar + 'px'});
		} else {
			$('nav').css({backgroundColor: 'rgb(0, 0, 0)'});
			$('#home_section').css({marginTop: marginTop + 'px'});
		}
	}
	calculateMarginTop();

	$('#searchsubmit').addClass('btn');
	$('#searchsubmit').addClass('btn-default');

})( jQuery );