<?php
/*
 *
 * Plugin Name: My Plugin
 * Plugin URI: http://webdevstudio.com/
 * Description: This is my plugin description.
 * Author: Simon Peter Ojok
 * Version: 1.0.0
 * Author URI: http://simonojok19.me
 * License: GPLv2 or later
 */

function my_plugin_wp_footer() {
    echo 'I read Building Web Apps with WordPress
    and now I am a WordPress Genius!';
}

add_action('wp_footer', 'my_plugin_wp_footer');