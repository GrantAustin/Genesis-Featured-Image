<?php
/**
 * Plugin Name: Lazy Featured Image
 * Plugin URI: http://GrantAustin.org
 * Description: Don't need to add the featured image twice in Genesis themes.
 * Version: 1.0.0
 * Author: Grant Austin
 * Author URI: http://GrantAustin.org
 * License: GPL2
 */

function featured_post_image()  {
	if ( ! is_singular( 'post' ) )  return;
		the_post_thumbnail('post-image');
	}
add_action( 'genesis_before_entry', 'featured_post_image', 10 );