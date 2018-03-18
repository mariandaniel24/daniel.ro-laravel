/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {


$(document).ready(function () {

	// modals
	$(".body-modal").iziModal({
		width: 860,

		padding: 30,
		setGroup: 'portfolios',
		arrowKeys: true,
		navigateCaption: true,
		navigateArrows: true,
		transitionIn: 'comingIn',
		transitionOut: 'comingOut',
		setTitle: 'title0',
		setFullscreen: true,
		closeButton: true,
		onOpening: function onOpening() {
			$('body').addClass('disable-scroll');
		},
		onClosing: function onClosing() {
			$('body').removeClass('disable-scroll');
		}
		// onOpening: function (modal) {
		// 	modal.startLoading();
		// 	var modalId = modal.id.charAt(modal.id.length - 1);
		// 	var modalContainer = $('#body-modal-' + modalId + ' .iziModal-content .container');
		// 	var alreadyLoaded = modalContainer.children('h2').text() === ''  ? false : true;


		// 	if(!alreadyLoaded) {

		// 		$.get('/rest-api/portfolio/' + modalId, function (data) {


		// 			modalContainer.children('h2').text(data.project_name);

		// 			for (i = 0; i < data.images.length; i++) {
		// 				if (i > 0) {

		// 					modalContainer.children('.row').children('.modal-images-box').children('.modal-secondary-image').append('<div class="col-md-3"><img class="img-responsive" src="' + data.images[i].image_url + '" /></div>');
		// 				} else {
		// 					modalContainer.children('.row').children('.modal-images-box').children('.modal-main-image').append('<div class="col-md-12"><img class="img-responsive" src="' + data.images[i].image_url + '" /></div>');
		// 				}
		// 			}


		// 		});
		// 	}
		// 	modal.stopLoading();
		// }


	});

	// contact page
	// contact page
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	// hide contact loader after ajax call ends
	$(document).ajaxComplete(function () {
		$('#contact-loading-box').css({
			'opacity': 0
		});
		$('#contact-submit').prop('disabled', false);
	});

	var contactform = $('#contact-form');

	$('#contact-submit').click(function (e) {
		validated = contactform[0].checkValidity();

		if (validated) {
			$('#contact-submit').prop('disabled', true);

			$('#contact-loading-box').css({
				'opacity': 1
			});
			e.preventDefault();

			$.ajax({
				url: '/rest-api/contact/store',
				type: "post",
				dataType: 'JSON',
				data: {
					'name': $('input[name="name"]').val(),
					'email': $('input[name="email"]').val(),
					'message': $('textarea[name="message"]').val()
				},
				success: function success(data) {
					console.log(data);
					message = data.message;
					var msg = message.toString().replace(',', '<br />');

					if (data.type == 'error') {

						iziToast.error({
							message: msg,
							position: 'bottomRight'
						});
					} else {

						iziToast.show({
							theme: 'dark',
							icon: 'fa fa-check',
							iconColor: 'lightgreen',
							message: msg,
							position: 'topCenter'
						});
						contactform.find('input, textarea').val('');
					}
				},
				error: function error() {
					iziToast.error({
						message: 'Message wasn\'t sent, please try again later.',
						position: 'bottomRight' // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
					});
				}

			});
		}
	});

	// language dropdown
	// language dropdown


	$('.language-box').click(function () {
		$(this).children('.language-dropdown-list').toggleClass('active');
	});

	// image zoom
	// image zoom
	$('.zoom-link').fancybox({
		buttons: ['close'],
		loop: true,
		lang: $('html')[0].lang,
		i18n: {
			'en': {
				CLOSE: 'Close',
				NEXT: 'Next',
				PREV: 'Previous',
				ERROR: 'The requested content cannot be loaded. <br/> Please try again later.',
				ZOOM: 'Zoom'
			},
			'ro': {
				CLOSE: 'Inchide',
				NEXT: 'Urmatorul',
				PREV: 'Precedent',
				ERROR: 'Imaginea nu s-a incarcat. <br/> Incearca mai tarziu.',
				ZOOM: 'Mareste'
			}
		}

	});

	// progress bar for carouesl
	function startProgressBar() {
		// apply keyframe animation
		$(".tab-button-item a").css({
			width: "100%",
			transition: "width 5000ms"
		});
	}

	function resetProgressBar() {
		$(".tab-button-item a").css({
			width: 0,
			transition: "width 0s"
		});
	}
	// owl carousel
	$('.owl-carousel').owlCarousel({
		autoplay: true,
		mouseDrag: true,
		autoplayHoverPause: true,
		// animateOut: 'fadeOut',
		// animateIn: 'fadeIn',
		items: 1,
		margin: 30,
		stagePadding: 30,
		smartSpeed: 450,

		onInitialized: startProgressBar,
		onTranslate: resetProgressBar,
		onTranslated: startProgressBar

	});

	$('.service-list-item').click(function () {
		if (!$(this).hasClass('tab-button-active')) {
			// get current pressed tab
			var current_tab = $(this).attr('data-tab-index');

			// remove old active classes
			// $('.tab-section').removeClass('tab-active');

			// add active classes to clicked tab and container
			$('.owl-carousel').trigger('to.owl.carousel', current_tab);
			$('.service-list-item').removeClass('tab-button-active');

			$(this).addClass('tab-button-active');
			// $('#' + current_tab).addClass('tab-active');
		}
	});

	$('.owl-carousel').on('changed.owl.carousel', function (e) {
		$('.service-list-item').removeClass('tab-button-active');
		$('.service-list-item[data-tab-index="' + e.item.index + '"]').addClass('tab-button-active');
	});

	// navbar active effects
	// navbar active effects
	// navbar active effects
	// navbar active effects
	// navbar active effects

	$(document).on("scroll", onScroll);

	//smoothscroll


	mobile = $(window).width() > 768 ? true : false;
	$(window).resize(function () {
		mobile = $(window).width() > 768 ? true : false;
	});

	// onscroll event
	function onScroll(event, sectionHome) {
		var sectionHome = $('section#home').height();
		var navHeight = $('nav.nav-box').height();
		var scrollPos = $(document).scrollTop();

		var navLinkColor = $('ul#menu li a');
		// if ((sectionHome - navHeight - 16) <= scrollPos && mobile) {
		if (navHeight - 16 <= scrollPos && mobile) {

			$('nav.nav-box').addClass('active').addClass('shadow-6');
			navLinkColor.removeClass('white');
			$('.logo#logo-navbar p').addClass('logo-active');
		} else {

			$('nav.nav-box').removeClass('active').removeClass('shadow-6');
			navLinkColor.addClass('white');
			$('.logo#logo-navbar p').removeClass('logo-active');
		}

		$('#menu li a').each(function () {
			var navHeight = $('nav.nav-box').height();
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));

			if (refElement.position().top <= scrollPos + 60 && refElement.position().top + refElement.height() > scrollPos + 48) {
				$('#menu li a').removeClass("active");
				currLink.addClass("active");
			} else {
				currLink.removeClass("active");
			}
		});
	};

	// hover effect on portfolio 
	// hover effect on portfolio

	$('.project-box').bind({
		mouseover: function mouseover() {

			if (mobile) {

				$(this).css({ 'transform': 'scale(1.05)' });
				$('.project-box').not($(this)).css({ 'transform': 'scale(.95)' });
			}
		},
		mouseout: function mouseout() {
			$('.project-box').css({ 'transform': 'scale(1)' });
		}
	});

	// activate navbar on mobile
	$('.hamburger').click(function () {
		$('.hamburger').toggleClass('is-active');
		$('nav.nav-box').toggleClass('desktop');

		$('body').toggleClass('no-scroll');
	});

	// smooth scroll on navbar click
	$('a[data-nav="true"]').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$('a[data-nav="true"]').each(function () {
			$(this).removeClass('active');
		});

		$(this).addClass('active');
		isNavbarLink = $(this).hasClass('not-navbar') ? false : true;

		if (!mobile && isNavbarLink) {
			$('.hamburger').toggleClass('is-active');
			$('nav.nav-box').toggleClass('desktop');
			$('body').toggleClass('no-scroll');
		}

		var target = this.hash,
		    menu = target;
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top + 2
		}, 500, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});

	// services expand tabs


	// 
	function getImages(images) {
		array = [];
		for (i = 0; i < images.length; i++) {
			array[i] = images[i].image_url;
		}
		return array;
	};

	// 

}); // end doc ready


$(window).on('load', function () {

	function showPage() {
		$("#wrapper").show();
		$("#loading-box").hide();
	}
	showPage();

	window.sr = ScrollReveal();

	sr.reveal('.title, .project-box');

	sr.reveal('#service-1, #service-2, #service-3, .about-section', {
		origin: 'bottom',
		distance: '50px',
		duration: 1000,
		delay: 800
	});
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);