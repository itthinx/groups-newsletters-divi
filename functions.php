<?php
/**
 * functions.php
 *
 * Part of the Divi child theme that integrates with Groups Newsletters https://www.itthinx.com/shop/groups-newsletters/
 *
 * Loads the stylesheet with necessary overrides.
 *
 * @author     itthinx
 * @link       https://www.itthinx.com
 * @package    groups-newsletters-divi
 * @since      1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues the parent theme's stylesheet.
 */
function groups_newsletters_divi_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'groups_newsletters_divi_enqueue_styles' );
