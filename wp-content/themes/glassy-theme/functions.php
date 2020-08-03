<?php
if (!function_exists('glass_theme_setup')) {
	function glass_theme_setup() {
		// let wordpress generate title tag
		add_theme_support('title-tag');
	}
}

add_action('after_setup_theme', 'glass_theme_setup');

/* Register menus */

function register_glass_theme_menu() {
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
		)
	);
}

add_action('init', 'register_glass_theme_menu');

/** add stylesheets **/
function glass_theme_scripts() {
	// enqueue the main stylesheets
	wp_enqueue_style('glass_theme_styles', get_stylesheet_uri());
	wp_enqueue_style('glass_theme_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}

add_action('wp_enqueue_scripts', 'glass_theme_scripts');