<?php
/**
 * Plugin Name:       Base WP Plugin
 * Plugin URI:        https://sarahjobs.com/wordpress/plugins/base-wp-plugin
 * Description:       Starter WordPress plugin.
 * Version:           1.0.0
 * Requires at least: 5.3
 * Requires PHP:      7.2
 * Author:            Sarah Siqueira
 * Author URI:        https://sarahjobs.com/about
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       base-wp-plugin
 * Domain Path:       /languages
 * Update URI:        https://sarahjobs.com/wordpress/plugins/base-wp-plugin/update
 *
 * @package BaseWpPlugin
 */

defined( 'ABSPATH' ) || exit;

/**
 * Composer Autoload
 */
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Bootstraps the plugin
 */
use BaseWpPlugin\Inc\Init;

$init = new Init();
$init->register_classes_list();
