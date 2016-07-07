/* global $, document, window, setTimeout, setInterval, clearInterval */

$(document).ready(function () {
	"use strict";

	var cursorIsFrozen = false;

	$(document).click(function () {
		cursorIsFrozen = true;
		//cursor animate on click
		$(".cursor").addClass("is-searching").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () { //on end of animation
			$(".cursor").removeClass("is-searching");
			cursorIsFrozen = false; //unfreeze cursor position after animation
		});
	});

	$(document).mousemove(function (position) {
		if (!cursorIsFrozen) {
			$(".cursor").css({
				left: position.pageX - 120,
				top: position.pageY - 130
			});
		}
	});

	$(".treasure").click(function () {
		$(this).addClass("is-found");
	});
});