<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://blog.austinvernsonger.com
 * @since             1.0.0
 * @package           Songer
 *
 * @wordpress-plugin
 * Plugin Name:       Songer WP Cleanup
 * Plugin URI:        austinvernsonger.github.io
 * Description:       WordPress Cleanup and Basic Options Functions is a utility plugin, even though it's was developed with a  focus on developers as many functionalities are what you might just add to every new website you build, it's really easy to use, just check the boxes corresponding to the set up you want.
 * Version:           1.0.0
 * Author:            Austin Songer
 * Author URI:        http://blog.austinvernsonger.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       songer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-songer-activator.php
 */
function activate_songer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-songer-activator.php';
	Songer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-songer-deactivator.php
 */
function deactivate_songer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-songer-deactivator.php';
	Songer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_songer' );
register_deactivation_hook( __FILE__, 'deactivate_songer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-songer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_songer() {

	$plugin = new Songer();
	$plugin->run();

}
run_songer();
