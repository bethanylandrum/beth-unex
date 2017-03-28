<?php
/*
* Plugin Name: SalesCart Ecommerce
* Module Name: scart_display.php
* Description: Decipers short-code
* Version: 1.1
* Author: SalesCart
* Author URI: http://www.SalesCart.com
* Copyright (C) 2015 by ComCity LLC and SalesCart.
* Distribution License: GNU General Public License v2
* -Uses David J. Bradshaw iframe Resizer under the MIT License: http://opensource.org/licenses/MIT
* All Other Rights Reserved
*/

/********************************/
/*	MAIN FUNCTIONS		*/
/********************************/

function salescart_shortcode(){
/* executes the shortcode decipher */

$comment_c = "\n" . '<!--' . "\n";
$comment_c .= '* Plugin Name: SalesCart Ecommerce plugin for WordPress' . "\n";
$comment_c .= '* Version: 1.1' . "\n";
$comment_c .= '* Author: SalesCart' . "\n";
$comment_c .= '* Author URI: http://www.SalesCart.com' . "\n";
$comment_c .= '* Copyright (C) 2015 by ComCity LLC and SalesCart.' . "\n";
$comment_c .= '* Distribution License: GNU General Public License v2 & MIT License' . "\n";
$comment_c .= '* All Other Rights Reserved' . "\n";
$comment_c .= '-->' . "\n";

$before_c =  '<!--SalesCart Store -->' . "\n";
$before_c .= '<div class="LoadingImage">';
$before_c .= '<div id="WPPageFix">';
$before_c .= '<iframe id="SalesCartFrame" class="StoreIFrame" src="http://www.salescart.net/store20/StoreTop.aspx?StoreID=';

$after_c = '"></iframe>' . "\n";
$after_c .= '<script>iFrameResize({log:true})</script>' . "\n";
$after_c .= '</div></div>' . "\n" . '<!-- .SalesCart End -->';


$sc_snippet = $comment_c . $before_c . get_option('scart_store_id') . $after_c;
return $sc_snippet;
}

/********************************/
/*	Do WORK ON PAGE		*/
/********************************/
add_action('init', 'register_iframeResizer');
add_action('wp_head', 'print_iframeResizer');
add_action('wp_enqueue_scripts', 'scframe_style');


/********************************/
/*	MORE FUNCTIONS		*/
/********************************/

/* registers iframeresizer script */
function register_iframeResizer() {
	wp_register_script('iframeResizer', (SC_PLUGURL . 'js/iframeResizer.min.js'), array('jquery'), '1.1', false);
}

/* registers prints iframeresizer into header */
function print_iframeResizer() {
	wp_print_scripts('iframeResizer');
}

/* Enqueues page styles */
function scframe_style() {
/* load page style  */
    wp_enqueue_style("sc_frame_css",  (SC_PLUGURL . 'css/scFrameStyle.css') );

}

?>