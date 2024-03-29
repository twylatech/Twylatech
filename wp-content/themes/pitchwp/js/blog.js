var $j = jQuery.noConflict();

$j(document).ready(function () {
	"use strict";
	
	fitAudio();
	initMasonryBlogList();
});

$j(window).load(function () {
	"use strict";
	
	initBlog();
	initBlogMasonryFullWidth();
	initBlogSlider();
	initBlogSimpleSlider();
});

$j(window).resize(function () {
	"use strict";
	
	initBlog();
	initBlogMasonryFullWidth();
	initBlogSlider();
	initMasonryBlogList();
});

/*
 **	Init audio player for blog layout
 */
function fitAudio() {
	"use strict";
	
	var holder = $j('audio.blog_audio');
	
	if(holder.length) {
		holder.mediaelementplayer({
			audioWidth: '100%'
		});
	}
}

/*
 **	Init masonry layout for blog template
 */
function initBlog() {
	"use strict";
	
	if ($j('.blog_holder.masonry').length) {
		var $container = $j('.blog_holder.masonry');
		
		$container.isotope({
			itemSelector: 'article',
			resizable: false,
			masonry: {
				columnWidth: '.blog_holder_grid_sizer',
				gutter: '.blog_holder_grid_gutter'
			}
		});
		
		$j('.filter').on('click', function () {
			var selector = $j(this).attr('data-filter');
			$container.isotope({filter: selector});
			return false;
		});
		
		if ($container.hasClass('masonry_infinite_scroll')) {
			
			$container.infinitescroll({
					
					navSelector: '.blog_infinite_scroll_button span',
					nextSelector: '.blog_infinite_scroll_button span a',
					itemSelector: 'article',
					loading: {
						finishedMsg: finished_text,
						msgText: loading_text
					}
				},
				// call Isotope as a callback
				function (newElements) {
					$container.append(newElements).isotope('appended', $j(newElements));
					fitVideo();
					fitAudio();
					initFlexSlider();
					setTimeout(function () {
						$j('.blog_holder.masonry').isotope('layout');
					}, 400);
				}
			);
		} else if ($container.hasClass('masonry_load_more')) {
			
			var i = 1;
			$j('.blog_load_more_button a').off('click tap').on('click tap', function (e) {
				e.preventDefault();
				
				var link = $j(this).attr('href');
				var $content = '.masonry_load_more';
				var $anchor = '.blog_load_more_button a';
				var $next_href = $j($anchor).attr('href');
				$j.get(link + '', function (data) {
					var $new_content = $j($content, data).wrapInner('').html();
					$next_href = $j($anchor, data).attr('href');
					$container.append($j($new_content)).isotope('reloadItems').isotope({sortBy: 'original-order'});
					fitVideo();
					fitAudio();
					initFlexSlider();
					setTimeout(function () {
						$j('.blog_holder.masonry').isotope('layout');
					}, 400);
					if ($j('.blog_load_more_button span').data('rel') > i) {
						$j('.blog_load_more_button a').attr('href', $next_href); // Change the next URL
					} else {
						$j('.blog_load_more_button').remove();
					}
				});
				i++;
			});
		}
		
		$j('.blog_holder.masonry, .blog_load_more_button_holder').animate({opacity: "1"}, 400, function () {
			$j('.blog_holder.masonry').isotope('layout');
		});
	}
}

/*
 * Masonry Blog List shortcode
 */
function initMasonryBlogList() {
	'use strict';
	
	if ($j('.latest_post_holder.masonry .post_list').length) {
		$j('.latest_post_holder.masonry .post_list').each(function () {
			var $this = $j(this);
			$this.waitForImages(function () {
				$this.animate({opacity: 1});
				$this.isotope({
					itemSelector: '.blog-list-masonry-item',
					masonry: {
						columnWidth: '.blog-list-masonry-grid-sizer',
						gutter: '.blog-list-masonry-grid-sizer-gutter'
					}
				});
			});
		});
	}
}

/*
 **	Init full width masonry layout for blog template
 */
function initBlogMasonryFullWidth() {
	"use strict";
	
	if ($j('.masonry_full_width').length) {
		var $container = $j('.masonry_full_width');
		
		$j('.filter').on('click', function () {
			var selector = $j(this).attr('data-filter');
			$container.isotope({filter: selector});
			return false;
		});
		
		if ($container.hasClass('masonry_infinite_scroll')) {
			$container.infinitescroll({
					navSelector: '.blog_infinite_scroll_button span',
					nextSelector: '.blog_infinite_scroll_button span a',
					itemSelector: 'article',
					loading: {
						finishedMsg: finished_text,
						msgText: loading_text
					}
				},
				// call Isotope as a callback
				function (newElements) {
					$container.isotope('appended', $j(newElements));
					fitVideo();
					fitAudio();
					initFlexSlider();
					setTimeout(function () {
						$j('.blog_holder.masonry_full_width').isotope('layout');
					}, 400);
				}
			);
		} else if ($container.hasClass('masonry_load_more')) {
			
			var i = 1;
			$j('.blog_load_more_button a').off('click tap').on('click tap', function (e) {
				e.preventDefault();
				
				var link = $j(this).attr('href');
				var $content = '.masonry_load_more';
				var $anchor = '.blog_load_more_button a';
				var $next_href = $j($anchor).attr('href');
				$j.get(link + '', function (data) {
					var $new_content = $j($content, data).wrapInner('').html();
					$next_href = $j($anchor, data).attr('href');
					$container.append($j($new_content)).isotope('reloadItems').isotope({sortBy: 'original-order'});
					fitVideo();
					fitAudio();
					initFlexSlider();
					setTimeout(function () {
						$j('.blog_holder.masonry_full_width').isotope('layout');
					}, 400);
					if ($j('.blog_load_more_button span').data('rel') > i) {
						$j('.blog_load_more_button a').attr('href', $next_href); // Change the next URL
					} else {
						$j('.blog_load_more_button').remove();
					}
				});
				i++;
			});
		}
		
		$container.isotope({
			itemSelector: 'article',
			resizable: false,
			masonry: {
				columnWidth: '.blog_holder_grid_sizer',
				gutter: '.blog_holder_grid_gutter'
			}
		});
		
		$j('.masonry_full_width, .blog_load_more_button_holder').animate({opacity: "1"}, 400, function () {
			$j('.blog_holder.masonry_full_width').isotope('layout');
		});
	}
}

/*
 ** Init Blog Slider
 */
function initBlogSlider() {
	"use strict";
	
	if ($j('.blog_slider').length) {
		$j('.blog_slider').each(function () {
			var blogs_shown;
			if (typeof $j(this).data('blogs_shown') !== 'undefined') {
				blogs_shown = $j(this).data('blogs_shown');
			} else {
				blogs_shown = 'auto';
			}
			
			var maxItems = $j(this).parents('.grid_section').length === 1 ? 3 : blogs_shown;
			var itemWidthTemp;
			
			switch (blogs_shown) {
				case 3:
					itemWidthTemp = 667;
					break;
				case 4:
					itemWidthTemp = 500;
					break;
				case 5:
					itemWidthTemp = 400;
					break;
				case 6:
					itemWidthTemp = 334;
					break;
				default:
					itemWidthTemp = 500;
					
					break;
			}
			
			var itemWidth = $j(this).parents('.grid_section').length === 1 ? 353 : itemWidthTemp;
			
			$j(this).find('.blog_slides').carouFredSel({
				circular: true,
				responsive: true,
				scroll: 1,
				prev: {
					button: function () {
						return $j(this).parent().siblings('.caroufredsel-direction-nav').find('.caroufredsel-prev');
					}
				},
				next: {
					button: function () {
						return $j(this).parent().siblings('.caroufredsel-direction-nav').find('.caroufredsel-next');
					}
				},
				pagination: function () {
					return $j(this).parent().siblings('.blog_slider_pager');
				},
				items: {
					width: itemWidth,
					visible: {
						min: responsiveNumberSlides(maxItems),
						max: maxItems
					}
				},
				auto: false,
				mousewheel: false,
				swipe: {
					onMouse: true,
					onTouch: true
				},
				onCreate: function () {
					$j(this).css('display', 'block').animate({'opacity': 1}, 1000, function () {
						if ($j('.widget_sticky-sidebar').length) {
							widgetTopOffset = $j('.widget_sticky-sidebar').offset().top;
							widgetParentOffset = $j('.widget_sticky-sidebar').position().top;
							stickySidebarHeight = $j('aside.sidebar').height();
						}
						if ($j(window).width() > 600) {
							stickySidebar($scroll, widgetTopOffset, widgetParentOffset, stickySidebarHeight);
						}
					});
				}
			});
		});
		
		calculateHeights();
		initParallax();
		
		$j('.blog_slider .flex-direction-nav a').on('click', function (e) {
			e.preventDefault();
			e.stopImmediatePropagation();
			e.stopPropagation();
		});
	}
}

/*
 ** Calculate responsiveness for Blog Slider
 */
function responsiveNumberSlides(maxItems) {
	"use strict";
	
	var windowWidth = window.innerWidth;
	
	if (windowWidth > 1200) {
		return maxItems;
	} else if (windowWidth < 1200 && windowWidth >= 800) {
		return 3;
	} else if (windowWidth < 800 && windowWidth > 500) {
		return 2;
	} else if (windowWidth <= 500) {
		return 1;
	}
}

/*
 **	Init flexslider for blog slider simple shortcode
 */
function initBlogSimpleSlider() {
	"use strict";
	$j('.blog_slider_simple_holder').each(function () {
		var interval = 8000;
		var iconClasses = getIconClassesForNavigation(directionNavArrows);
		
		$j(this).flexslider({
			animationLoop: true,
			controlNav: true,
			directionNav: false,
			useCSS: false,
			pauseOnAction: true,
			pauseOnHover: true,
			slideshow: true,
			animation: 'fade',
			prevText: '<span class="' + iconClasses.leftIconClass + '"></span>',
			nextText: '<span class="' + iconClasses.rightIconClass + '"></span>',
			animationSpeed: 600,
			slideshowSpeed: interval,
			start: function () {
				setTimeout(function () {
					$j(".blog_slider_simple_holder").fitVids();
				}, 100);
			}
		});
		
		$j('.blog_slider_simple_holder .flex-direction-nav a').on('click', function (e) {
			e.preventDefault();
			e.stopImmediatePropagation();
			e.stopPropagation();
		});
	});
}
