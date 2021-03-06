/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title a' ).html( newval );
		} );
	} );

	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'powen_mod[header_textcolor]', function( value ) {
		value.bind( function( newval ) {
			$('.site-title a').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[header_taglinecolor]', function( value ) {
		value.bind( function( newval ) {
			$('.site-description').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[header_background]', function( value ) {
		value.bind( function( newval ) {
			$('.site-header').css('background-color', newval );
		} );
	} );

	wp.customize( 'powen_mod[primary_menu_background_color]', function( value ) {
		value.bind( function( newval ) {
			$('#mm-powen-primary-nav').css('background-color', newval );
		} );
	} );

	wp.customize( 'powen_mod[primary_menu_color]', function( value ) {
		value.bind( function( newval ) {
			$('#mm-powen-primary-nav').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[main_menu_background_color]', function( value ) {
		value.bind( function( newval ) {
			$('#mm-powen_secondary_nav').css('background-color', newval );
		} );
	} );

	wp.customize( 'powen_mod[main_menu_color]', function( value ) {
		value.bind( function( newval ) {
			$('#mm-powen_secondary_nav').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[powen-footer-widgets_background]', function( value ) {
		value.bind( function( newval ) {
			$('.powen-footer-widgets').css('background-color', newval );
		} );
	} );

	wp.customize( 'powen_mod[powen-footer-widgets_textcolor]', function( value ) {
		value.bind( function( newval ) {
			$('.powen-footer-widgets').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[powen-footer-widgets_linkcolor]', function( value ) {
		value.bind( function( newval ) {
			$('.powen-footer-widgets a').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[footer_bottom_textcolor]', function( value ) {
		value.bind( function( newval ) {
			$('.site-info a').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[footer_bottom_textcolor]', function( value ) {
		value.bind( function( newval ) {
			$('.site-info').css('color', newval );
		} );
	} );

	wp.customize( 'powen_mod[footer_bottom_background_color]', function( value ) {
		value.bind( function( newval ) {
			$('.site-info').css('background-color', newval );
		} );
	} );

} )( jQuery );

// As you can see from the example above, a single basic handler looks like this:


wp.customize( 'YOUR_SETTING_ID', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
	} );
} );
