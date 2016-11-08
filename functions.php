<?php
/**
 * Vogue theme.
 *
 * @since 1.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

/**
 * Initialize theme.
 *
 * @since 1.0.0
 */
require( trailingslashit( get_template_directory() ) . 'inc/init.php' );


add_action( 'homepage_assets', 'homepage_assets' );

function homepage_assets(){
	wp_enqueue_style( 'homepage_style', get_template_directory_uri( ).'/css/homepage.css');
	wp_enqueue_style( 'homepage_font', 'https://fonts.googleapis.com/css?family=Droid+Sans:700');
	wp_enqueue_style( 'homepage_style', get_template_directory_uri( ).'/css/homepage.css');
    wp_enqueue_style('slider_style','https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
	
	wp_enqueue_script( 'homepage_style' , 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
	wp_register_script( 'homepage_script', get_template_directory_uri( ).'/js/homepage.js');
	wp_enqueue_script( 'homepage_script');
}



