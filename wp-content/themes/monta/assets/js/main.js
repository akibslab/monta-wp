(function ($) {
	"use strict";

	$(document).ready(function () {
		// Header Mobile Menu
		$("header .main-menu").meanmenu({
			meanMenuContainer: ".mobile-menu",
			meanScreenWidth: "767",
			meanExpand: ['<i class="fal fa-plus"></i>'],
		});

		$("header .mobile-toggle img").on("click", function () {
			$(".side-menu").addClass("active");
		});

		$(".side-menu .cross-icon-box img").on("click", function () {
			$(".side-menu").removeClass("active");
		});

		$(".magnificPopup").magnificPopup({
			type: "image",
			// other options
		});

		$(window).on("resize", function (e) {
			checkScreenSize();
		});

		checkScreenSize();

		function checkScreenSize() {
			var newWindowWidth = $(window).width();
			if (newWindowWidth < 768) {
				$(".features-box .feature-item h4.heading-4").on("click", function () {
					$(this).hide();
					$(this).next("p").show();
				});

				$(".features-box .feature-item p").on("click", function () {
					$(this).hide();
					$(this).prev("h4").show();
				});

				$(".product-section .item-4").insertBefore(".product-section .item-3");

				$(".intro-section .intro-item .image-mobile").on("click", function () {
					$(this).next(".text-box").show();
					$(this).hide();
				});

				$(".intro-section .intro-item .text-box").on("click", function () {
					$(this).prev(".image-mobile").show();
					$(this).hide();
				});
			}
		}
	});

	$(".monta-product.show").zoomImage();
	$(".show-small-img:first-of-type").css({
		border: "solid 1px #951b25",
		padding: "2px",
	});
	$(".show-small-img:first-of-type")
		.attr("alt", "now")
		.siblings()
		.removeAttr("alt");
	$(".show-small-img").click(function () {
		$("#show-img").attr("src", $(this).attr("src"));
		$("#big-img").attr("src", $(this).attr("src"));
		$(this).attr("alt", "now").siblings().removeAttr("alt");
		$(this)
			.css({ border: "solid 1px #951b25", padding: "2px" })
			.siblings()
			.css({ border: "none", padding: "0" });
		if ($("#small-img-roll").children().length > 4) {
			if (
				$(this).index() >= 3 &&
				$(this).index() < $("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css("left", -($(this).index() - 2) * 76 + "px");
			} else if (
				$(this).index() ==
				$("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css(
					"left",
					-($("#small-img-roll").children().length - 4) * 76 + "px"
				);
			} else {
				$("#small-img-roll").css("left", "0");
			}
		}
	});
	// 点击 '>' 下一张
	$("#next-img").click(function () {
		$("#show-img").attr(
			"src",
			$(".show-small-img[alt='now']").next().attr("src")
		);
		$("#big-img").attr(
			"src",
			$(".show-small-img[alt='now']").next().attr("src")
		);
		$(".show-small-img[alt='now']")
			.next()
			.css({ border: "solid 1px #951b25", padding: "2px" })
			.siblings()
			.css({ border: "none", padding: "0" });
		$(".show-small-img[alt='now']")
			.next()
			.attr("alt", "now")
			.siblings()
			.removeAttr("alt");
		if ($("#small-img-roll").children().length > 4) {
			if (
				$(".show-small-img[alt='now']").index() >= 3 &&
				$(".show-small-img[alt='now']").index() <
					$("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css(
					"left",
					-($(".show-small-img[alt='now']").index() - 2) * 76 + "px"
				);
			} else if (
				$(".show-small-img[alt='now']").index() ==
				$("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css(
					"left",
					-($("#small-img-roll").children().length - 4) * 76 + "px"
				);
			} else {
				$("#small-img-roll").css("left", "0");
			}
		}
	});
	// 点击 '<' 上一张
	$("#prev-img").click(function () {
		$("#show-img").attr(
			"src",
			$(".show-small-img[alt='now']").prev().attr("src")
		);
		$("#big-img").attr(
			"src",
			$(".show-small-img[alt='now']").prev().attr("src")
		);
		$(".show-small-img[alt='now']")
			.prev()
			.css({ border: "solid 1px #951b25", padding: "2px" })
			.siblings()
			.css({ border: "none", padding: "0" });
		$(".show-small-img[alt='now']")
			.prev()
			.attr("alt", "now")
			.siblings()
			.removeAttr("alt");
		if ($("#small-img-roll").children().length > 4) {
			if (
				$(".show-small-img[alt='now']").index() >= 3 &&
				$(".show-small-img[alt='now']").index() <
					$("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css(
					"left",
					-($(".show-small-img[alt='now']").index() - 2) * 76 + "px"
				);
			} else if (
				$(".show-small-img[alt='now']").index() ==
				$("#small-img-roll").children().length - 1
			) {
				$("#small-img-roll").css(
					"left",
					-($("#small-img-roll").children().length - 4) * 76 + "px"
				);
			} else {
				$("#small-img-roll").css("left", "0");
			}
		}
	});
})(jQuery);
