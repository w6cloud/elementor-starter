<?php
/**
 * Elementor Starter
 *
 * @package     W6\ElementorStarter
 * @author      w6cloud
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Elementor Starter
 * Plugin URI:  https://github.com/w6cloud/elementor-starter
 * Description: WEB6's Elementor Starter plugin.
 * Version:     1.0.0
 * Author:      w6cloud
 * Author URI:  https://www.web6.cloud
 * Text Domain: elementor-starter
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace W6\ElementorStarter;

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
	return __DIR__;
}

/**
 * Gets this plugin's URL.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_url() {
	static $plugin_url;

	if ( empty( $plugin_url ) ) {
		$plugin_url = plugins_url( null, __FILE__ );
	}

	return $plugin_url;
}

/**
 * Checks if this plugin is in development mode.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return bool
 */
function _is_in_development_mode() {
	return defined( WP_DEBUG ) && WP_DEBUG === true;
}

/**
 * Autoload the plugin's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload_files() {
	$files = array(// add the list of files to load here.
	);

	foreach ( $files as $file ) {
		require __DIR__ . '/src/' . $file;
	}
}

/**
 * Launch the plugin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	autoload_files();
}

launch();
