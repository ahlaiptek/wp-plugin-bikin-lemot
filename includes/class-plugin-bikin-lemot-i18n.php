<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/ahlaiptek/
 * @since      1.0.0
 *
 * @package    Plugin_Bikin_Lemot
 * @subpackage Plugin_Bikin_Lemot/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Bikin_Lemot
 * @subpackage Plugin_Bikin_Lemot/includes
 * @author     Ahla Iptek <iptekahla@gmail.com>
 */
class Plugin_Bikin_Lemot_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-bikin-lemot',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
