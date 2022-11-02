(function ($) {
	"use strict";

	$(document).ready(function () {
		// Header Mobile Menu
		$("header .header-menu").meanmenu({
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

		$('.magnificPopup').magnificPopup({
		  type: 'image'
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

				$('.intro-section .intro-item .image-mobile').on('click', function(){
					$(this).next('.text-box').show();
					$(this).hide();
				});

				$('.intro-section .intro-item .text-box').on('click', function(){
					$(this).prev('.image-mobile').show();
					$(this).hide();
				});
			}
		}

		// Zoom Img
		$(".zoom-1").elevateZoom({});
	});
})(jQuery);
