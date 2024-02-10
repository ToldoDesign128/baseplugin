<?php

/*
 * Plugin Name:       Base Plugin
 * Plugin URI:         https://federicotoldo.com/
 * Description:       Funzionalità personalizate
 * Version:           1.0.0
 * Requires at least: 6.2
 * Requires PHP:      7.2
 * Author:            Federico Toldo
 * Author URI:        https://federicotoldo.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       bsp
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Proper way to enqueue scripts and styles
 */
function bsp_plugin_style_scripts() {
	wp_enqueue_style( 'bsp-style', plugins_url('assets/style.css', __FILE__));
	wp_enqueue_script( 'bsp-scripts', plugins_url('assets/scripts.js', __FILE__), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'bsp_plugin_style_scripts' );

// Banner
function bsp_banner() {
	echo 	'<div class="banner">
				<p>Aperti dal Lunedì al Venerdì dalle 9.00 - 13.00 e dalle 15.00 - 19.00</p> <a href="tel:064403860" target="_blank">064403860</a>
			</div>';
}

add_action( 'wp_body_open', 'bsp_banner' );