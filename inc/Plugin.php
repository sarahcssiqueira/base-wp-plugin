<?php
/**
 * Main plugin class
 *
 * @package BaseWPPlugin
 */

namespace BaseWpPlugin\Inc;

/**
 * Main class
 */
class Plugin {
	/**
	 * Custom constructor for handle WordPress Hooks
	 */
	public static function initialize() {

		$self = new self();
		add_action( 'admin_notices', [ $self, 'display_hello_world' ] );
		register_activation_hook( __FILE__, [ $self, 'base_wp_plugin_activate' ] );
		register_deactivation_hook( __FILE__, [ $self, 'base_wp_plugin_deactivate' ] );
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

	/**
	 * Performs actions when plugin is activated.
	 *
	 * @return void
	 */
	public function base_wp_plugin_activate() {
		// End process if PHP version does not meet requirements.
		if ( version_compare( PHP_VERSION, BASEWPPLUGIN_PHP_MINIMUM, '<' ) ) {
			wp_die(
			/* translators: %s: version number */
				esc_html( sprintf( __( 'Base WP Plugin requires PHP version %s or higher', 'base-wp-plugin' ), BASEWPPLUGIN_PHP_MINIMUM ) ),
				esc_html( __( 'Error Activating', 'base-wp-plugin' ) )
			);
		}

		// End process if WordPress version does not meet requirements.
		if ( version_compare( get_bloginfo( 'version' ), BASEWPPLUGIN_WP_MINIMUM, '<' ) ) {
			wp_die(
			/* translators: %s: version number */
				esc_html( sprintf( __( 'Base WP Plugin requires WordPress version %s or higher', 'base-wp-plugin' ), BASEWPPLUGIN_WP_MINIMUM ) ),
				esc_html( __( 'Error Activating', 'base-wp-plugin' ) )
			);
		}
	}


	/**
	 * Performs actions when plugin is deactivated.
	 *
	 * @return void
	 */
	public function base_wp_plugin_deactivate() {
		// Don't run code if PHP version does not meet requirements.
		if ( version_compare( PHP_VERSION, BASEWPPLUGIN_PHP_MINIMUM, '<' ) ) {
			return;
		}
	}
}
