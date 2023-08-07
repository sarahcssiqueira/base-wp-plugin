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
class Init {
	/**
	 * Store the classes inside an array
	 *
	 * @return array Full list of classes
	 */
	public static function classes_list() {
		return [
			Plugin::class,
		];
	}

	/**
	 * Loop through the classes list, initialize them,
	 * and call the initialize() method if it exists
	 */
	public static function register_classes_list() {
		foreach ( self::classes_list() as $class ) {
			$classname = self::instantiate( $class );
			if ( method_exists( $classname, 'initialize' ) ) {
				$classname->initialize();
			}
		}
	}

	/**
	 * Initialize the class
	 *
	 * @param  class $class    class from the services array.
	 * @return class instance  new instance of the class
	 */
	private static function instantiate( $class ) {
		$classname = new $class();
		return $classname;
	}
};
