<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version ;
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), $css_version );
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), $css_version );

		//sass 
		
		
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'j1', get_template_directory_uri() . '/js/portfolio.js', array(), $js_version, true );
		wp_enqueue_script( 'j2', get_template_directory_uri() . '/js/isotope.min.js', array(), $js_version, true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), $js_version, true );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
