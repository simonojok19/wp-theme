<?php
/**
 * @package SimonsOjokPlugin
 * Plugin Name: Custom Plugin
 * Plugin URI: https://github.com/simonojok19/wp-theme
 * Description: This plugin was made to demonstrated how to create plugin in wordpress
 * Version: 1.0.0
 * Author: Simon Peter Ojok
 * Author URI: https://github.com/simonojok19
 * License: GPLv2 or later
 * Text Domain: simonojok19
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

if (!defined('ABSPATH')) {
	die;
}

//defined('ABSPATH') or die('Hey this is not a website');

//if (!function_exists('add_action')) {
//	die('No Wordpress found');
//	exit('Something wrong');
//}

class SimonPlugin {
	public function __construct() {
		add_action('init', array($this, 'custom_post_type'));
	}

	function activate() {
		$this -> custom_post_type();
		flush_rewrite_rules();
	}

	function deactivate() {
		flush_rewrite_rules();
	}

	function uninstall() {

	}

	function custom_post_type() {
		register_post_type('book', ['public' => 'true', 'label' => 'Books']);
	}
}
if ( class_exists('SimonPlugin')) {
	$simonOjokPlugin = new SimonPlugin();
}


// activation
register_activation_hook(__FILE__, array($simonOjokPlugin, 'activate'));
register_deactivation_hook(__FILE__, array($simonOjokPlugin, 'deactivate'));
// deactivation
// uninstall
