<?php
/**
 * WP Standard Project
 *
 * @package     PluginPackage
 * @author      Your Name
 * @copyright   2016 Your Name or Company Name
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: WP Standard Project
 * Plugin URI:  https://example.com/plugin-name
 * Description: Description of the plugin.
 * Version:     1.0.0
 * Author:      Rafael Angeline
 * Author URI:  https://example.com
 * Text Domain: plugin-name
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Echo a sample translatable string.
 *
 * @return void
 */
function new_fn() {
	esc_html_e( 'WP Standard Project', 'plugin-name' );
}
