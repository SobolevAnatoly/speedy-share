<?php
/**
 * Speedy Share
 * Test task for Web4Pro company.
 *
 * @category WordPress_Plugin
 * @package  Speedy_Share
 * @author   Anatolii S. <sobbelev.anatoly@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @version  1.0.0
 * @link     https://github.com/SobolevAnatoly/speedy-share
 * @since    1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Speedy Share
 * Plugin URI:        https://github.com/SobolevAnatoly/speedy-share
 * Description:       The WordPress plugin registers a shortcode for submitting a CV.
 * Author:            Anatolii S.
 * Author URI:        https://github.com/SobolevAnatoly
 * Text Domain:       speedy-share
 * Domain Path:       /languages
 * Version:           1.0.0
 * Requires at least: 6.4.1
 * Tested up to:      6.4.5
 * Requires PHP:      8.2
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace SSHARE;

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'SSHARE_PLUGIN_FILE' ) ) {
	define( 'SSHARE_PLUGIN_FILE', __FILE__ );}
if ( ! defined( 'SSHARE_PLUGIN_DIR' ) ) {
	define( 'SSHARE_PLUGIN_DIR', __DIR__ . '/' );}

if ( ! defined( 'SSHARE_AUTOLOAD' ) ) {
	require_once SSHARE_PLUGIN_DIR . 'includes/autoload.php';
}
new \SSHARE\Classes\Admin\Register_Shortcode();
