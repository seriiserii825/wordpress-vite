<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Enqueue scripts and styles.
 */
function ar_starter_scripts()
{
	wp_enqueue_style('ar-starter-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('ar-starter-style', 'rtl', 'replace');

	wp_deregister_script('jquery');
	// wp_enqueue_script( 'ar-starter-custom-jquery', get_template_directory_uri() . '/assets/js/custom-jquery.js', ['jquery'], null, true );
	// wp_enqueue_script('ar-starter-masonry', get_template_directory_uri() . '/assets/libs/masonry.min.js', null, true);


}
add_action('wp_enqueue_scripts', 'ar_starter_scripts');

function dequeue_jquery_migrate($scripts)
{
	if (!is_admin() && !empty($scripts->registered['jquery'])) {
		$scripts->registered['jquery']->deps = array_diff(
			$scripts->registered['jquery']->deps,
			['jquery-migrate']
		);
	}
}
add_action('wp_default_scripts', 'dequeue_jquery_migrate');