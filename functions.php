<?php 

//Adding Featured image support to the theme
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus');

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary Menu' => __( 'Primary Menu' )
			)
		);
}

add_action( 'init', 'register_theme_menus' );

function tiffanie_theme_styles() {

wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');

}

add_action('wp_enqueue_scripts', 'tiffanie_theme_styles');

function wpt_theme_js() {
	wp_enqueue_script('modernizr.min.js', get_template_directory_uri(). '/vendor/js/modernizr.js', '', false );
	wp_enqueue_script('foundation.min.js', get_template_directory_uri(). '/js/foundation.min.js', array( 'jquery'), false );
	wp_enqueue_script('masonry.pkgd.min.js', get_template_directory_uri(). '/js/masonry.pkgd.min.js', array( 'jquery'), true );
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');



?>