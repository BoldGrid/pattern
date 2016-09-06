<?php
/**
 * This is where child-theme specific code should be ran.
 *
 * @package Starter
 */

function boldgrid_pattern_library() {
	wp_enqueue_style( 'boldgrid-pattern-library', get_stylesheet_directory_uri() . '/css/pattern.css' );
}
 
add_action( 'wp_enqueue_scripts', 'boldgrid_pattern_library' );
