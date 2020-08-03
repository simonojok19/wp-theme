<?php
/**
 * @package SimonsOjokPlugin
 * Plugin Name: Custom Plugin Form
 * Plugin URI: https://github.com/simonojok19/wp-theme
 * Description: This plugin was made to demonstrated how to create plugin in wordpress
 * Version: 1.0.0
 * Author: Simon Peter Ojok
 * Author URI: https://github.com/simonojok19
 * License: GPLv2 or later
 * Text Domain: simonojok19 0701713575
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

function html_form_code() {
	echo '
	<form action="" method="post">
		<input type="email">
	</form>
	';
}

function deliver_email() {
	if (isset($_POST['cf-submitted'])) {
		$email = sanitize_email($_POST['cf-email']);
		$to = get_option('admin_email');
		$headers = "From: $email";
		if (wp_mail($to, 'some text', 'message', $headers)) {
			echo '
				<div>
					<p>Thanks the email was sent</p>
				</div>
			';
		} else {
			echo '
				<h1>Something went youth</h1>
			';
		}
	}
}

function cf_shortcode() {
	ob_start();
	deliver_email();
	html_form_code();
	return ob_get_clean();
}

add_shortcode('sitepoint_contact_form', 'cf_shortcode');
