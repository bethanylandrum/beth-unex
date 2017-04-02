<?php
/*
Plugin Name: E-commerce by SalesCart 
Plugin URI: http://www.salescart.com?source=WordPress
Description: SalesCart is so EASY - ANYONE can do it! A 100% Complete shopping cart from the originators of plug-in E-commerce. It takes under 15 minutes to create your store and add it to any WordPress site/blog or theme, and an additional 3 mins per product afterwards.
Text Domain: salescart-ecommerce
Author: SalesCart Team
Version: 1.1.0
Author URI: http://www.salescart.com/FaceBook/about/?source=WordPress
License: Freeware, GNU General Public License v2
API Reference: https://developer.wordpress.org/reference/
*/

if ( ! defined( 'SALESCART_DIR' ) ) {
	define( 'SALESCART_DIR', plugin_dir_path( realpath(__FILE__) ) );
}

define('SC_PLUGURL', plugin_dir_url(__FILE__));
/* Get the plugin slug name */
$SC_Slug_File = plugin_basename( __FILE__ );
define ('SC_Slug', substr($SC_Slug_File,0,-24));

/* load files  */
require_once SALESCART_DIR . '/libs/scart_display.php';

/* plugin install and uninstall hooks */ 
register_activation_hook( __FILE__, 'scart_activate' );
register_deactivation_hook( __FILE__, 'scart_deactivate' );
register_uninstall_hook( __FILE__, 'scart_uninstall' );

/* functions */ 
function salescart_menu() {
	add_menu_page(
		__('SalesCart shopping cart settings', 'salescart-shopping-cart'),
		__('SalesCart Store', 'salescart-shopping-cart'),
		'manage_options',
		'salescart',
		'salescart_menu_page',
		SC_PLUGURL . 'images/logo.png' 
	);
}

function salescart_style() {
/* load admin styles  */
    wp_enqueue_style("salescart_landing_css",  (SC_PLUGURL . 'css/landing.css') );

/*
wp_enqueue_style("sc_landingcss", (SALESCART_DIR . '/css/landing.css') );
	if (isset($_GET['page']) && $_GET['page'] == 'salescart') {
		wp_enqueue_style("sc_landingcss", (SALESCART_DIR . '/css/landing.css') );
	}
*/
}

function salescart_menu_page() {
/* displays the admin landing page */
require_once(SALESCART_DIR . '/views/landing.php');
}

function salescart_admin_init(){
/* executes the admin_init options and group */
register_setting('salescart_options', 'scart_store_id');
}

function scart_activate() {
/* plugin activated */
add_option('scart_store_id', 0);
}

function scart_deactivate() {
/* plugin deactivated */
}

function scart_uninstall() {
/* plugin uninstall */
delete_option('scart_store_id'); 
}

/********************************/
/*	Load Scripts		*/
/********************************/

add_action('admin_enqueue_scripts', 'salescart_style');
add_action('admin_menu', 'salescart_menu');
add_action('admin_init', 'salescart_admin_init');


add_shortcode('my-salescart-store', 'salescart_shortcode');

?>