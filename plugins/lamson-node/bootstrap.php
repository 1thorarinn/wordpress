<?php
namespace WRDSB\Lamson;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link    https://github.com/wrdsb
 * @since   1.0.0
 * @package WRDSB_Lamson
 *
 * @wordpress-plugin
 * Plugin Name:       Lamson Node
 * Plugin URI:        https://github.com/wrdsb/wordpress
 * Description:       Configures this WordPress site/install as a Lamson Node
 * Version:           1.0.0
 * Author:            WRDSB
 * Author URI:        https://github.com/wrdsb
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wrdsb-lamson
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}