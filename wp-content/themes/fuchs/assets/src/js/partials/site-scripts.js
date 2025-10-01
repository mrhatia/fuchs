/**
 * Sticky Header
 * Adds a class to header on scroll
 */
import magnificPopup from '../vendors/jquery-magnificpopup';
import organicTabs from '../vendors/organic-tab';
import slick from '../vendors/slick.min';
import gasap from '../vendors/gsap.min';
// jQuery( document ).on( 'scroll', function() {
// 	if ( jQuery( document ).scrollTop() > 0 ) {
// 		jQuery( 'header, body' ).addClass( 'shrink' );
// 	} else {
// 		jQuery( 'header, body' ).removeClass( 'shrink' );
// 	}
// } );

jQuery( function() {
	/**
	 * Header Wrapper Height Calculation for Navigation Overlay
	 */

	if ( jQuery( '.header-wrapper' ).length > 0 ) {
		function updateHeaderHeight() {
			jQuery( '.header-wrapper' ).each( function() {
				jQuery( this ).css( '--fc_header-wrapper-default', jQuery( this ).outerHeight() + 'px' );
			} );
		}
		updateHeaderHeight();
		jQuery( window ).resize( updateHeaderHeight );
	}

	/**
	 * Toggle menu for mobile
	 */
	const navOverlay = jQuery( '.nav-overlay' );
	const htmlBody = jQuery( 'html, body' );

	jQuery( '.menu-btn' ).on( 'click', function() {
		jQuery( this ).toggleClass( 'active' );
		navOverlay.toggleClass( 'open' );
		htmlBody.toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */

	jQuery( '.menu-item-has-children > a:first-child' ).each( function() {
		jQuery( this ).after( '<span class="submenu-icon"></span>' );
	} );

	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */

	jQuery( '.header-nav' ).on( 'click', '.submenu-icon', function() {
		const parentLi = jQuery( this ).closest( 'li' );

		parentLi.siblings( '.active' )
			.removeClass( 'active' )
			.find( 'ul' ).slideUp();

		parentLi.toggleClass( 'active' ).find( 'ul' ).stop( true, true ).slideToggle();
		parentLi.parents( 'ul' ).toggleClass( 'disabled-menu', parentLi.hasClass( 'active' ) );
	} );

	/**
	 *  Accessibility for Simple menu & Mega menu
	 */
	jQuery( '.menu-item-has-children > a' ).on( 'focus blur', function( event ) {
		jQuery( this ).siblings( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	jQuery( '.sub-menu a, .mega-menu a' ).on( 'focus blur', function( event ) {
		jQuery( this ).closest( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	/**
	 * Script for Accessibility of html Tags
	 */
	jQuery( 'h1, h2, h3, h4, h5, h6,p,li,blockquote,cite,strong,dt,dd,th,td,b,i,u,s,em,small,sup,del,ins,abbr,mark,details,pre,kbd,samp,var,address,code,q,figure,figcaption,caption,.top-bar-text,.top-bar-cross,.copy-right,.post-author-img,.post-author-name,.post-meta-date,.post-date' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );
	jQuery( '.header-nav li, .blog-nav li, .footer-nav li, .legal-nav li' ).each( function() {
		const link = jQuery( this ).find( 'a' );
		if ( link.length > 0 ) {
			jQuery( this ).removeAttr( 'tabindex' );
		} else {
			jQuery( this ).attr( 'tabindex', '0' );
		}
	} );
	jQuery( 'form p' ).each( function() {
		jQuery( this ).removeAttr( 'tabindex' );
	} );

	jQuery( 'a,button:not([href])' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );

	setTimeout( () => {
		jQuery( '#daextlwcnf-cookie-notice-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-notice-button-2' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-2' ).attr( 'role', 'button' );
	}, 500 );

	autosize();
	function autosize() {
		const text = jQuery( 'textarea' );

		text.each( function() {
			jQuery( this ).attr( 'rows', 5 );
			resize( jQuery( this ) );
		} );

		text.on( 'input', function() {
			resize( jQuery( this ) );
		} );

		function resize( $text ) {
			$text.css( 'min-height', 'auto' );
			$text.css( 'min-height', $text[ 0 ].scrollHeight + 'px' );
		}
	}
	// Menu animation
	if ( jQuery( '.header-nav li' ).length ) {
		jQuery( function() {
			const base = 470;
			const step = 70;

			jQuery( '.header-nav li ' ).each( function( i ) {
				const delay = base + i * step;
				jQuery( this ).find( 'a' ).css( 'animation-delay', delay + 'ms' );
			} );
		} );
	}

	if ( jQuery( '.hero-home' ).length ) {
		const slides = jQuery( '.slide' );
		const dots = jQuery( '.dot' );
		let current = 0;
		let animating = false;
		let touchStartX = 0;
		let touchEndX = 0;

		// Basic setup
		slides.css( {
			position: 'absolute',
			top: 0,
			left: 0,
			width: '100%',
			height: '100%',
		} );

		gsap.set( slides, { x: '100%' } ); // start all slides off-screen right
		gsap.set( slides.eq( current ), { x: '0%' } ); // show first slide

		function showSlide( index ) {
			if ( animating || index === current ) {
				return;
			}
			animating = true;

			const prev = current;

			// --- Infinite loop handling ---
			if ( index >= slides.length ) {
				index = 0;
			}
			if ( index < 0 ) {
				index = slides.length - 1;
			}
			current = index;

			gsap.set( slides.eq( current ), {
				x: '0%',
				zIndex: 1, // new slide niche
			} );

			// Old slide ko upar le kar aao taake move hota hua dikhe
			gsap.set( slides.eq( prev ), { zIndex: 2 } );

			// Purana slide left → right move hota hua dikhe
			gsap.to( slides.eq( prev ), {
				x: '100%',
				duration: 0.8,
				ease: 'power2.inOut',
				onComplete: () => {
					animating = false;
				},
			} );

			slides.removeClass( 'active remove-active' );
			slides.eq( prev ).addClass( 'remove-active' );
			slides.eq( current ).addClass( 'active' );

			dots.removeClass( 'active' );
			dots.eq( current ).addClass( 'active' );
		}

		// Initial active
		slides.eq( current ).addClass( 'active' );
		dots.eq( current ).addClass( 'active' );

		// Scroll
		jQuery( window ).on( 'wheel', function( e ) {
			if ( animating ) {
				return;
			}
			if ( e.originalEvent.deltaY > 0 ) {
				showSlide( current + 1 );
			} // next
			else if ( e.originalEvent.deltaY < 0 ) {
				showSlide( current - 1 );
			} // prev
		} );

		// Keyboard
		jQuery( window ).on( 'keydown', function( e ) {
			if ( animating ) {
				return;
			}
			if ( e.key === 'ArrowRight' || e.key === 'ArrowDown' ) {
				showSlide( current + 1 );
			} else if ( e.key === 'ArrowLeft' || e.key === 'ArrowUp' ) {
				showSlide( current - 1 );
			}
		} );

		// Dots
		dots.on( 'click', function() {
			const target = parseInt( jQuery( this ).data( 'slide' ) );
			showSlide( target );
		} );

		// Touch swipe
		jQuery( window ).on( 'touchstart', function( e ) {
			touchStartX = e.originalEvent.touches[ 0 ].clientX;
		} );

		jQuery( window ).on( 'touchend', function( e ) {
			touchEndX = e.originalEvent.changedTouches[ 0 ].clientX;
			if ( animating ) {
				return;
			}
			if ( touchStartX - touchEndX > 50 ) {
				showSlide( current + 1 );
			} // swipe left → next
			else if ( touchEndX - touchStartX > 50 ) {
				showSlide( current - 1 );
			} // swipe right → prev
		} );
	}

	if ( jQuery( '.loader' ).length ) {
		jQuery( window ).on( 'load', function() {
			const loader = jQuery( '.loader' );
			const spinner = jQuery( '.spinner-text' );

			spinner.addClass( 'spinner-loaded' );

			setTimeout( function() {
				loader.addClass( 'hide-loader' );
			}, 3200 );
		} );
	}
	if ( jQuery( '.hero-inner-slider' ).length ) {
		jQuery( '.hero-inner-slider' ).slick( {
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 1200,
			fade: true,
			cssEase: 'ease-in-out',
			pauseOnHover: false,
			pauseOnFocus: false,
			swipe: false,
		} );
	}
	if ( jQuery( '.testimonial-slider' ).length > 0 ) {
		jQuery( '.testimonial-slider' ).slick( {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			arrows: false,
			dots: true,
			touchThreshold: 200,
			autoplay: true,
			autoplaySpeed: 3000,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,

					},
				},
			],
		} );
	}
	if ( jQuery( '.tabbed-map-items' ).length > 0 ) {
		jQuery( '.tabbed-map-nav a' ).on( 'click', function( event ) {
			event.preventDefault();
			const tabId = jQuery( this ).attr( 'href' );
			jQuery( '.tabbed-id-item' ).hide();
			jQuery( `.tabbed-id-item${ tabId }` ).fadeIn( 400 ).addClass( 'active' );
			jQuery( '.tabbed-map-nav a' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
		} );
	}
	// jQuery( document ).ready( function() {
	// 	jQuery( '.testimonial-variation' ).slick( {
	// 		slidesToShow: 1,
	// 		slidesToScroll: 1,
	// 		dots: true,
	// 		arrows: false,
	// 		autoplay: true,
	// 		autoplaySpeed: 4000,
	// 		adaptiveHeight: true,
	// 		vertical: true,
	// 		verticalSwiping: true,
	// 		speed: 800,
	// 		cssEase: 'ease-in-out',
	// 	} );
	// } );
	if ( jQuery( '.faq-block' ).length > 0 ) {
		jQuery( '.faq-head' ).on( 'click keypress', function() {
			const currentFaq = jQuery( this );

			if ( currentFaq.hasClass( 'active' ) ) {
				currentFaq.removeClass( 'active' );
				currentFaq.siblings( '.faq-content' ).slideUp( 400 );
			} else {
				jQuery( '.faq-head' ).removeClass( 'active' );
				jQuery( '.faq-content' ).slideUp();

				currentFaq.addClass( 'active' );
				currentFaq.siblings( '.faq-content' ).slideDown( 400 );
			}
		} );
	}
} );
