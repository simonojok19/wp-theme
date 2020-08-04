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

add_action('wp_ajax_my_user_vote', "my_user_vote");
add_action('wp_ajax_nopriv_my_user_vote', 'my_must_login');

function my_user_vote() {
	echo '<p>Voting the user</p>';
	if (!wp_verify_nonce($_REQUEST['nonce'], "my_user_vote_nonce")) {
		exit("No naughty business please");
	}
	$vote_count = get_post_meta($_REQUEST["post_id"], "votes", true);
	$vote_count = ($vote_count == '')? 0 : $vote_count;
	$new_vote_count = $vote_count + 1;
	$vote = update_post_meta($_REQUEST["post_id"], "votes", $new_vote_count);
	if ($vote === false) {
		$result['type'] = "error";
		$result["vote_count"] = $new_vote_count;
	}

	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		$result = json_encode($result);
		echo $result;
	} else {
		header("Location: ".$_SERVER["HTTP_REFERER"]);
	}

	die();
}

function my_must_login() {
	echo "You must log in to vote";
	die();
}

add_action('wp_ajax_sendemail', 'sendemail');

function sendemail() {
	echo '<script> console.log("recieved")</script>';
}

function load_instructor_card($atts) {
	extract(shortcode_atts(array(
		'name' => "Simon Peter",
		'imageurl' => null,
		'description' => "No Provided"
	), $atts));
	echo '<div class="featured-instructor featured-instructor-pink">';
	echo '<img src="'.$imageurl.'" alt="">';
	echo '<h3>'.$name.'</h3>';
	echo '<p>'.$description.'</p>';
	echo '<button class="button"><a href="">Read More</a></button>';
	echo '</div>';
}

add_shortcode('load_instructor_card', 'load_instructor_card');