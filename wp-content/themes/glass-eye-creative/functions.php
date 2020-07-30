<?php
if (!function_exists('glasseye-setup')) {
	function glasseye_setup() {
		add_theme_support('title-tag');
	}
}

add_action('after_setup_theme', 'glasseye_setup');