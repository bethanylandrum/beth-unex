<?php

/**
 * Contains all the filters and actions hooked.
 */


/*==============================
          ACTIONS
===============================*/

//Removing the post format meta box
add_action('after_setup_theme', 'powen_remove_formats', 100);

function powen_remove_formats()
{
   remove_theme_support('post-formats');
}

/*==============================
          FILTERS
===============================*/

/**
 * Changes the tag cloud font sizes, so it better fits with the theme
 */
function powen_set_tag_cloud_sizes($args)
{
	 $args['smallest'] = 8;
	 $args['largest'] = 22;

	 return $args;
}

add_filter('widget_tag_cloud_args', 'powen_set_tag_cloud_sizes');


/**
 * Adds Read More button
 */
function powen_change_read_more( $more )
{
	global $post;
	return '<div class="powen-continue-reading"><a class="moretag" href="' . get_permalink($post->ID) . '">'.esc_textarea( powen_mod( 'continue_reading_textbox', 'Continue Reading' ), 'powen-lite' ) . '</a></div>';
}

add_filter('excerpt_more', 'powen_change_read_more');

//Excerpt Range

function powen_custom_excerpt_length( $length )
{
	return ( powen_mod('excerpt_range') && intval( powen_mod('excerpt_range') ) > 49 ) ? powen_mod('excerpt_range') : $length;
}
add_filter( 'excerpt_length', 'powen_custom_excerpt_length', 999 );