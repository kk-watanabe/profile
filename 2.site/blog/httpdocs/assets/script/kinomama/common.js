"use strict";

require('../app.js');

const
 fix_pos        = 100,
 fix_class_name = 'is-fixed';

$(window).on('scroll', function() {
	let scroll_top = $(this).scrollTop();

	if (scroll_top > fix_pos) {
		$('#js-menu__btn').addClass(fix_class_name);
	} else {
		$('#js-menu__btn').removeClass(fix_class_name);
	}
});
