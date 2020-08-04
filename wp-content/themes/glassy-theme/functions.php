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

/** Register widget area **/

function glass_theme_widget_init() {
	register_sidebar(array(
		'name' => __('Main Sidebar', 'glassy'),
		'id' => 'main-sidebar',
		'description' => __('Widgets added here will appear in all templates using', 'glassy'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after-widget' => '</section>',
		'before-title' => '<h2 class="widget-title">',
		'after-title' => '</h2>'
	));
}

add_action('widgets_init', 'glass_theme_widget_init');

function glass_theme_card() {

}