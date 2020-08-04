<?php
/*
 * Plugin Name: Contact form
 * Plugin URI: https://github.com/simonojok19/wp-theme
 * Description: Updates contact me form on to the website
 * Version: 1.0.0
 * Author: Ojok Simon Peter
 * Author URI: https://github.com/simonojok19
 */

function registration_form() {
	$admin_email = get_option( 'admin_email' );
	$email ='';
	$message = '';
	echo '
		<style>
			form {
				display: flex;
				flex-direction: column;
			}
			div {
			margin-bottom: 2px;
			}
			
			input {
				margin-bottom: 4px;
				width: 100%;
			}
			
			textarea {
				width: 100%;
			}
			
			#hidden {
				visibility: hidden;
			}
		</style>
	';

	echo '<input id="hidden" value="'. $admin_email.'"/>';
	echo '
		<form action="" method="POST">
			<div>
				<label for="email">Email</label>
				<br/>
				<input type="text" id="email" name="email" value="" placeholder="Your Email Address">
			</div>
			<div>
				<label for="message">Message</label>
				<br/>
				<textarea id="message" rows="10" cols="20" value="" placeholder="Your Message"></textarea>
			</div>
			<button type="submit" id="send">Send</button>
		</form>
	';
}


function loadJavaScripts() {
//	echo "<h1>loaded</h1>";
	wp_enqueue_script('contact-form', 'https://smtpjs.com/v3/smtp.js');
}
add_action('wp_enqueue_scripts', 'loadJavaScripts');
add_shortcode('cr_custom_registration', 'registration_form');

function my_script_enqueuer() {
	wp_register_script("my_voter_script", WP_PLUGIN_URL.'/contact-form/js/formload.js');
	wp_localize_script('my_voter_script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
	wp_enqueue_script('jquery');
	wp_enqueue_script('my_voter_script');
}
add_action('init', 'my_script_enqueuer');