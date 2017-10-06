/*******************************************
* GLOBAL VARIABLES
*******************************************/
var w;

// RE-POSITION FISHMONGERS (HOME-GRID) INTRO 900PX & ABOVE
jQuery(window).resize(function(){
	w = getWindowWidth();
	searchMove();

	if (jQuery(window).width() > 900) {
		jQuery('#gridwrap1 div.home-intro.fishmongers .content-container').insertAfter(jQuery('#gridwrap1 div.home-intro.fishmongers .image-container'));
	}
	else {
		jQuery('#gridwrap1 div.home-intro.fishmongers .content-container').insertBefore(jQuery('#gridwrap1 div.home-intro.fishmongers .image-container'));
	}
});

function getWindowWidth(){
	return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

function searchMove() {
	if (w < 730) {
		jQuery('#topwrap div.search').insertAfter(jQuery('#topwrap div.menu-reveal'));
	}
	else {
		jQuery('#topwrap div.search').insertBefore(jQuery('#topwrap div.logo'));
	}
}


jQuery(document).ready(function() {

	w = getWindowWidth();
	searchMove();

	/*******************************************
	 * HELPER FUNCTIONS *
	 *******************************************/

	/*
	 * Image lazy loading
	 * Further reading: https://www.appelsiini.net/projects/lazyload
	 * Example image tag:  <img class="lazy" data-original="img/example.jpg" width="640" height="480">
	 * Uncomment out the code below and in the index.php file to enable lazyloading
	 */

	// jQuery("img.lazy").lazyload({
	//     threshold : 200
	// });

	/*
	 * Check alt tags aren't empty for images
	 * For development use only
	 */

	// jQuery('img').each(function() {
	// 	console.log(jQuery(this).attr('alt'));
	// });

	/*******************************************
	 * RESPONSIVE NAV *
	 *******************************************/

	jQuery('.nav-btn').on('click', function() {
		jQuery('html').addClass('js-nav');
	});

	jQuery('.close-btn, .js-nav #innerwrap').on('click', function() {
		jQuery('html').removeClass('js-nav');
	});

	jQuery('.menu-reveal .menu-btn').on('click', function() {
		jQuery('html').addClass('js-nav');
	});

	jQuery('.close-btn, .js-nav #navwrap').on('click', function() {
		jQuery('html').removeClass('js-nav');
	});

	jQuery('#banner .hero-banner .banner-text a.cta').on('click', function() {
		var scrollToElem = jQuery(this).attr('href');
		jQuery('body').animate({
			scrollTop: (jQuery(scrollToElem).offset().top)
		}, 600);
	});

	jQuery('#navwrap #menu .follow-us').insertAfter(jQuery('#navwrap #menu ul li#menu-item-71'));

	jQuery('#navwrap #menu .contact-details').insertAfter(jQuery('#navwrap #menu ul li#menu-item-75 a'));

	jQuery('#banner .hero-banner.internal .banner-container h1').insertBefore(jQuery('#banner .hero-banner.internal .banner-container .banner-text p'));

	jQuery('#banner .hero-banner.internal .banner-container #breadcrumbs').insertBefore(jQuery('#banner .hero-banner.internal .banner-container .banner-text h1'));



	//OWL-CAROUSEL FOR HOMEPAGE BLOG ITEMS
	jQuery('#category-posts-2-internal').owlCarousel({
		loop:false,
		autoPlay:true,
    	margin:20,
    	nav:false,
		dots:true,
		responsive:{
			0:{
				items:1
			},
			500:{
				items:2
			},
			1650: {
				items:2
			}
		}
	});


	//OWL-CAROUSEL FOR ITNERNAL FISH RECIPES
	// jQuery('#recipes').owlCarousel({
	// 	loop:true,
	// 	autoPlay:true,
    // 	margin:25,
    // 	nav:false,
	// 	dots:false,
	// 	responsive:{
	// 		0:{
	// 			items:1
	// 		},
	// 		500:{
	// 			items:2
	// 		},
	// 		730: {
	// 			items:3
	// 		}
	// 	}
	// });
});
