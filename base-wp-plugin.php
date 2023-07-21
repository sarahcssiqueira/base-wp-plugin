<?php
/**
 * Plugin Name:       Base WP Plugin
 * Plugin URI:        https://sarahjobs.com/wordpress/plugins/base-wp-plugin
 * Description:       Starter WordPress plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sarah Siqueira
 * Author URI:        https://sarahjobs.com/about
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       base-wp-plugin
 * Domain Path:       /languages
 * Update URI:        https://sarahjobs.com/wordpress/plugins/base-wp-plugin/update
 */

/**
 * Bootstrap the plugin.
 */
require_once plugin_dir_path( __FILE__ ) . '/inc/class-plugin.php';

use BaseWpPlugin\Inc\Plugin;

$the_plugin = new Plugin();
