<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Artisanal_Varmint
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function artisanalvarmint_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'artisanalvarmint_infinite_scroll_render',
		'footer'    => false,
	) );
} // end function artisanalvarmint_jetpack_setup
add_action( 'after_setup_theme', 'artisanalvarmint_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function artisanalvarmint_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function artisanalvarmint_infinite_scroll_render
