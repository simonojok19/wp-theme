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
		<script>
			window.addEventListener("load", () => {
			    var email = document.querySelector("#email");
				var message = document.querySelector("#message");
				var submit = document.querySelector("#send");
				var adminemail = document.querySelector("#hidden");
				submit.addEventListener("click", (event) => {
				    event.preventDefault();
				    email_txt = email.value;
				    message_text = message.value;
				    addmin_email = adminemail.value;
				    if (Email) {
				        Email.send({
						    Host : "smtp.zoho.com",
						    Username : "accounts@techbuzzhub.org",
						    Password : "First@001",
						    To : email_txt,
						    From : addmin_email,
						    Subject : "Message From The Website",
						    Body : message_text
						    }).then(
						      message => alert(message)
						 );
				    }
				})
			}, false)
		</script>
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