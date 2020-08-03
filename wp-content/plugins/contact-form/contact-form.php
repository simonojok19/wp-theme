<?php
/*
 * Plugin Name: Contact form
 * Plugin URI: https://github.com/simonojok19/wp-theme
 * Description: Updates contact me form on to the website
 * Version: 1.0.0
 * Author: Ojok Simon Peter
 * Author URI: https://github.com/simonojok19
 */

function registration_form($message, $email) {
	echo '
		<style>
			div {
			margin-bottom: 2px;
			}
			
			input {
				margin-bottom: 4px;
			}
		</style>
	';

	echo '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="POST">
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" value="'.(isset($_POST['email']) ? $email :null ).'" placeholder="Your Email Address">
			</div>
			<div>
				<label for="message">Message</label>
				<textarea rows="10" cols="20" value="'.(isset($_POST['message']) ? $message : null).'" placeholder="Your Message"/>
			</div>
			<input type="submit" name="submit" value="Send">
		</form>
	';
}

function registration_validation($email, $message) {
	global $contact_error;
	$contact_error = new WP_Error();
	if (empty($email) || empty($message)) {
		$contact_error -> add('Email and Message are required');
	}

	if (is_wp_error($contact_error)) {
		foreach ($contact_error -> get_error_messages() as $error) {
			echo '
				<div>
					<strong>Error</strong>
					<br/>
				</div>
			';
		}
	}
}

function complete_registration() {
	global  $contact_error, $email, $message;
	if ( 1 > count($contact_error -> get_error_messages())) {
		// send email
		echo 'Email was sent successfully';
	}
}

function custom_registration_function() {
	if (isset($_POST['submit'])) {
		registration_validation(
			$_POST['email'],
			$_POST['message']
		);
		global  $email, $message;
		$email = sanitize_email($_POST['email']);
		$message = esc_textarea($_POST['message']);

		complete_registration();
		registration_form($email, $message);
	}
}

add_shortcode('cr_custom_registration', '');