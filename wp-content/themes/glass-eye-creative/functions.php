<?php
if (!function_exists('glasseye-setup')) {
	function glasseye_setup() {
		add_theme_support('title-tag');
	}
}

add_action('after_setup_theme', 'glasseye_setup');

function register_glasseye_menu() {
	register_nav_menu( array('primary' => __('Primary Menu'), 'footer' => __('footer Menu')));
}

add_action('init', 'register_glasseye_menu');

function glasseye_scripts() {
	wp_enqueue_style('glasseye_styles', get_stylesheet_uri());
	wp_enqueue_style('glasseye_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}

add_action('wp_enqueue_scripts', 'glasseye_scripts');