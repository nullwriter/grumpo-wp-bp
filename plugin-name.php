<?php
// phpcs:disable

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Grumpo Plugin Boilerplate
 * Plugin URI:        https://github.com/nullwriter/grumpo-wp-bp
 * Description:       Description
 * Version:           1.0.0
 * Author:            nullwriter
 * Author URI:        http://nullwriter.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

require plugin_dir_path(__FILE__).'vendor/autoload.php';

use includes\PluginName;
use includes\PluginNameActivator;
use includes\PluginNameDeactivator;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('PLUGIN_NAME_VERSION', '1.0.0');
define('PLUGIN_NAME', 'plugin-name');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-name-activator.php';
    PluginNameActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-name-deactivator.php';
    PluginNameDeactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_plugin_name');
register_deactivation_hook(__FILE__, 'deactivate_plugin_name');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name()
{
    $plugin = new PluginName();
    $plugin->run();
}
run_plugin_name();
// phpcs:enable
