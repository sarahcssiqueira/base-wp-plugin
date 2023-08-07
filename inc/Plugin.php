<?php
/**
 * Class to bootstrap the plugin
 *
 * @package BaseWPPlugin
 */

namespace BaseWpPlugin\Inc;

/**
 * Bootstrap the plugin.
 */
class Plugin {
	/**
	 * Custom constructor for handle WordPress Hooks
	 */
	public static function initialize() {

		$self = new self();
		add_action( 'admin_notices', [ $self, 'display_hello_world' ] );
	}
	/**
	 * Display 'Hello from the Base WP Plugin!' message on admin panel
	 */
	public function display_hello_world() {
		?>
		<div class="notice notice-success is-dismissible">
			<p><?php esc_html_e( 'Hello from the Base WP Plugin!', 'base-wp-theme' ); ?></p>
		</div>
		<?php
	}
};


Plugin::initialize();