/**
*	Kaffen - Cafe & Restaurant Template (HTML)
*	Version: 1.0
*	Author: bslthemes
*	Author URL: http://themeforest.net/user/bslthemes
*	Copyright © Kaffen by bslthemes. All Rights Reserved.
**/

( function( $ ) {
	'use strict';

	$(window).on("load", function() {

		/**
			Preloader
		**/
		setTimeout(function(){
			var preload = $('.preloader');
			preload.addClass('loaded');
			preload.find('.centrize').fadeOut();
		}, 1000);

		/**
			init Scrolla
		**/
		$('.scroll-animate').scrolla({
			once: true,
			mobile: true
		});

	});

	$(function() {

		/*
			init Cursor
		*/
		initCursor();

		/*
			Splitting
		*/
		Splitting();

		/*
			Skrollr
		*/
		if ($(window).width() > 1024 ) {
			var s = skrollr.init();
		}

		/*
			Header Sticky
		*/
		if($('.kf-header').length) {
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > 48 ) {
					$('.kf-header').addClass('fixed');
				} else {
					$('.kf-header').removeClass('fixed');
				}
			});
		}
		if(!$('.kf-started-inner .kf-parallax-bg').length && !$('.kf-started-slider').length) {
			$('.kf-navbar').addClass('inner-navbar');
		}

		/*
			Header Menu Button
		*/
		$('.kf-header').on('click', '.kf-menu-btn', function(){
			if($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.kf-header').removeClass('show');
				$('.kf-header').addClass('no-touch');
				setTimeout(function(){
					$('.kf-header').removeClass('animated');
				}, 500);
				setTimeout(function(){
					$('.kf-header').removeClass('opened');
					$('.kf-header').removeClass('no-touch');
				}, 1000);
			}
			else {
				$(this).addClass('active');
				$('.kf-header').addClass('animated');
				$('.kf-header').addClass('no-touch');
				setTimeout(function(){
					$('.kf-header').addClass('opened');
				}, 500);
				setTimeout(function(){
					$('.kf-header').addClass('show');
					$('.kf-header').removeClass('no-touch');
				}, 1000);
			}
			return false;
		});

		/*
			Header Menu Mobile
		*/
		if ($(window).width() <= 1024 ) {
			$('.kf-navbar-mobile .kf-main-menu').append( '<ul class="kf-main-menu-nav">' + $('.kf-main-menu > ul').html() + '</ul>' );
		}

		/*
			Header Menu Dropdown
		*/
		$('.kf-navbar-mobile .kf-main-menu').on('click', '.has-children > i', function(){
			if($(this).closest('li').hasClass('opened')) {
				$(this).closest('li').removeClass('opened');
				$(this).closest('li').find('> ul').slideUp();
			} else {
				$(this).closest('li').addClass('opened');
				$(this).closest('li').find('> ul').slideDown();
			}
			return false;
		});

		/**
			Cart Popup
		**/
		$('.kf-cart-btn .cart-icon').on('click', function(){
			if($(this).closest('.kf-cart-btn').hasClass('opened')){
				$(this).closest('.kf-cart-btn').removeClass('opened');
				$(this).closest('.kf-cart-btn').find('.cart-widget').hide();
			} else {
				$(this).closest('.kf-cart-btn').addClass('opened');
				$(this).closest('.kf-cart-btn').find('.cart-widget').fadeIn();
			}

			return false;
		});

		/*
			Parallax
		*/
		if ($(window).width() > 1024 ) {
			$(".js-parallax").paroller({
				factor: -0.3,
				factorXs: 0.1,
				factorSm: 0.2,
				factorMd: 0.2,
				factorLg: 0.3,
				type: 'foreground',
				direction: 'vertical',
				transition: 'transform 0.1s ease'
			});
		}

		/*
			Home Slider
		*/
		var interleaveOffset = 0.5;
		var st_auto_val = $('.kf-started-slider .swiper-container').data('autoplay');
		if (st_auto_val > 1) {
			var st_auto = true;
			$('.kf-started-slider .swiper-container .swiper-slide').attr('data-swiper-autoplay', st_auto_val);
		} else {
			var st_auto = false;
		}
		var mainSliderSelector = new Swiper('.kf-started-slider .swiper-container', {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			speed: 1000,
			parallax: true,
			autoplay: st_auto,
			watchSlidesProgress: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			on: {
				progress: function() {
					var swiper = this;
					for (var i = 0; i < swiper.slides.length; i++) {
						var slideProgress = swiper.slides[i].progress,
							innerOffset = swiper.width * interleaveOffset,
							innerTranslate = slideProgress * innerOffset;
						swiper.slides[i].querySelector('.slide').style.transform = 'translateX(' + innerTranslate + 'px)';
					}
				},
				touchStart: function() {
					var swiper = this;
					for (var i = 0; i < swiper.slides.length; i++) {
						swiper.slides[i].style.transition = '';
					}
				},
				setTransition: function(swiper, speed) {
					for (var i = 0; i < swiper.slides.length; i++) {
						swiper.slides[i].style.transition = speed + 'ms';
						swiper.slides[i].querySelector('.slide').style.transition = speed + 'ms';

					}
				}
			}
		});

		/*
			Grid Carousel
		*/
	  var swiperGrid = new Swiper('.kf-grid-carousel .swiper-container', {
	    slidesPerView: 3,
		  spaceBetween: 30,
			loop: true,
			speed: 1000,
			autoplay: false,
			watchSlidesProgress: true,
		  pagination: false,
			navigation: false,
			breakpoints: {
				0: {
					slidesPerView: 1
				},
				767: {
					slidesPerView: 2
				},
				1024: {
					slidesPerView: 2
				},
				1200: {
					slidesPerView: 3
				}
			}
		});

		/*
			Insta Carousel
		*/
	  var swiperInsta = new Swiper('.kf-insta-carousel .swiper-container', {
	    slidesPerView: 3,
		  spaceBetween: 0,
			loop: true,
			speed: 1000,
			autoplay: false,
			watchSlidesProgress: true,
		  pagination: false,
			navigation: false,
			breakpoints: {
				0: {
					slidesPerView: 1
				},
				767: {
					slidesPerView: 2
				},
				1024: {
					slidesPerView: 3
				},
				1200: {
					slidesPerView: 3
				}
			}
		});

		/*
			Testimonials Slider
		*/
	  var swiperTestimonials = new Swiper('.kf-testimonials-slider .swiper-container', {
	    slidesPerView: 1,
		  spaceBetween: 60,
			loop: false,
			speed: 1000,
			autoplay: false,
		  pagination: false,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});

		/*
			Testimonials Carousel
		*/
	  var swiperTestimonials_C = new Swiper('.kf-testimonials-carousel .swiper-container', {
	    slidesPerView: 4,
		  spaceBetween: 30,
			loop: false,
			speed: 1000,
			autoplay: false,
			watchSlidesProgress: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: 'true',
			},
			navigation: false,
			breakpoints: {
				0: {
					slidesPerView: 1
				},
				767: {
					slidesPerView: 2
				},
				1024: {
					slidesPerView: 3
				},
				1200: {
					slidesPerView: 4
				}
			}
		});

		/*
			History Carousel
		*/
	  var swiperHistory = new Swiper('.kf-history-carousel .swiper-container', {
	    slidesPerView: 1,
		  spaceBetween: 70,
			loop: false,
			speed: 1000,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: 'true',
			},
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: false,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
		$('.kf-history-carousel .swiper-pagination-bullet').each(function( index ) {
			if ($('.kf-history-carousel .swiper-slide:nth-child(1)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(1)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(2)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(2)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(3)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(3)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(4)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(4)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(5)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(5)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(6)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(6)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(7)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(7)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(8)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(8)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(9)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(9)').find('.date-value').text());
			}
			if ($('.kf-history-carousel .swiper-slide:nth-child(10)').index() == $(this).index()) {
				$(this).text(''+$('.kf-history-carousel .swiper-slide:nth-child(10)').find('.date-value').text());
			}
		});

		/*
			Gallery Masonry
		*/
		var $gal_container = $('.kf-gallery-items');
		$gal_container.imagesLoaded(function() {
			$gal_container.isotope({
				itemSelector: '.kf-gallery-col',
				percentPosition: true,
			});
		});
		$('.kf-filter-gal').on( 'click', 'a', function() {
			var filterValue = $(this).attr('data-href');
			$gal_container.isotope({ filter: filterValue });

			$('.kf-filter-gal a').removeClass('active');
			$(this).addClass('active');
			$(filterValue).find('.scroll-animate').removeClass('animate__active');
			$(filterValue).find('.scroll-animate').addClass('animate__active');

			return false;
		});

		/*
			Menu Masonry
		*/
		var $m_container = $('.kf-menu-tabs .kf-menu-items .row');
		$m_container.imagesLoaded(function() {
			$m_container.isotope({
				itemSelector: '.kf-menu-item-col',
				percentPosition: true,
			});
		});
		$('.kf-filter-menu').on( 'click', 'a', function() {
			var filterValue = $(this).attr('data-href');
			$m_container.isotope({ filter: filterValue });

			$('.kf-filter-menu a').removeClass('active');
			$(this).addClass('active');
			$(filterValue).find('.scroll-animate').removeClass('animate__active');
			$(filterValue).find('.scroll-animate').addClass('animate__active');

			return false;
		});

		/*
			Magnific Popups
		*/
		if(/\.(?:jpg|jpeg|gif|png)$/i.test($('.blocks-gallery-item:first a').attr('href'))){
			$('.blocks-gallery-item a').magnificPopup({
			  gallery: {
			    enabled: true
			  },
			  type: 'image',
			  closeBtnInside: false,
			  mainClass: 'mfp-fade'
			});
		}
		$('.has-popup-image').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-fade',
			image: {
				verticalFit: true
			}
		});
		$('.has-popup-video').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			iframe: {
	            patterns: {
	                youtube_short: {
	                  index: 'youtu.be/',
	                  id: 'youtu.be/',
	                  src: 'https://www.youtube.com/embed/%id%?autoplay=1'
	                }
	            }
	        },
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
			mainClass: 'mfp-fade',
			callbacks: {
				markupParse: function(template, values, item) {
					template.find('iframe').attr('allow', 'autoplay');
				}
			}
		});
		$('.has-popup-gallery').magnificPopup({
			type: 'image',
			gallery:{
				enabled:true
			}
		});

		/*
			Tabs
		*/
		$('.tab-menu').on('click', '.tab-btn', function(){
			var tab_bl = $(this).attr('href');

			$(this).closest('.tab-menu').find('li').removeClass('active');
			$(this).closest('li').addClass('active');

			$(this).closest('.tabs').find('> .tab-item').hide();
			$(tab_bl).fadeIn();

			return false;
		});

		/*
			Collapse
		*/
		$('.collapse-item').on('click', '.collapse-btn', function(){
			if($(this).closest('.collapse-item').hasClass('active')) {
				$(this).closest('.collapse-item').find('.collapse-content').slideUp();
				$(this).closest('.collapse-item').removeClass('active');
				$(this).removeClass('active');
			}
			else {
				$(this).closest('.collapse-item').find('.collapse-content').slideDown();
				$(this).closest('.collapse-item').addClass('active');
				$(this).addClass('active');
			}
		});

		/*
			Video
		*/
		$('.kf-video-item').on('click', '.play, img', function(){
			$(this).closest('.kf-video-item').addClass('active');
			var iframe = $(this).closest('.kf-video-item').find('.js-video-iframe');
			largeVideoPlay(iframe);
			return false;
		});
		function largeVideoPlay( iframe ) {
			var src = iframe.data('src');
			iframe.attr('src', src);
		}

		/* Numbers Animation */

		$(window).on('load', function() {
			var statistics = $('.kf-js-numbers');
			var numbers = $('.kf-js-number');
			var animationIsDone = false;
			var scroll = $(window).scrollTop() + $(window).height();

			if ($('*').is('.kf-js-numbers')) {
				var offset = statistics.offset().top;

				if (!animationIsDone && scroll >= offset) {
					animateNumbers();
				}

				$(window).on('scroll', function() {
					scroll = $(window).scrollTop() + $(window).height();

					if (!animationIsDone && scroll >= offset) {
						animateNumbers();
					}
				});
			}

			function animateNumbers() {
				numbers.each(function() {
					var endValue = parseInt($(this).attr('data-end-value'), 10);

					$(this).easy_number_animate({
						start_value: 0,
						end_value: endValue,
						duration: 2500,
						after: function( $element, _value ) {
            	$($element).append('+');
          	}
					});

				});

				animationIsDone = true;
			}
		});

	});

	function initCursor() {
		var mouseX=window.innerWidth/2, mouseY=window.innerHeight/2;

		var cursor = {
			el: $('.cursor'),
			x: window.innerWidth/2,
			y: window.innerHeight/2,
			w: 30,
			h: 30,
			update:function() {
				var l = this.x-this.w/2;
				var t = this.y-this.h/2;
				this.el.css({ 'transform':'translate3d('+l+'px,'+t+'px, 0)' });
			}
		}

		$(window).mousemove (function(e) {
			mouseX = e.clientX;
			mouseY = e.clientY;
		});

		$('a, .swiper-pagination, .swiper-button-prev, .swiper-button-next, button, .button, .btn, .lnk').hover(function() {
			$('.cursor').addClass("cursor-zoom");
		}, function(){
			$('.cursor').removeClass("cursor-zoom");
		});

		setInterval(move,1000/60);

		function move() {
			cursor.x = lerp (cursor.x, mouseX, 0.1);
			cursor.y = lerp (cursor.y, mouseY, 0.1);
			cursor.update()
		}

		function lerp (start, end, amt) {
			return (1-amt)*start+amt*end
		}
	}

} )( jQuery );
