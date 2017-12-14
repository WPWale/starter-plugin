<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes all of the dependencies used by
 * the plugin, registers the activation and deactivation functions, and defines
 * a function that starts the plugin.
 *
 * @since             0.0.1
 * @package           plugin_slug
 *
 * @wordpress-plugin
 * 
 * Plugin Name: 
 * Description: 
 * Version: 
 * Author: 
 * Author URI:  
 * Text Domain: 
 * Domain Path: 
 * License: 
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) exit();

if ( !defined( 'PLUGIN_SLUG_PATH' ) ) {
	/**
	 * Path to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'PLUGIN_SLUG_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( !defined( 'PLUGIN_SLUG_URL' ) ) {
	/**
	 * URL to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'PLUGIN_SLUG_URL', trailingslashit( plugin_dir_url(  __FILE__ ) ) );
}
