<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Orbit2Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function orbit2theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'orbit2theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function orbit2theme_jetpack_setup
add_action( 'after_setup_theme', 'orbit2theme_jetpack_setup' );

function orbit2theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function orbit2theme_infinite_scroll_render