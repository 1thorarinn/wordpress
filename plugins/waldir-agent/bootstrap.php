<?php
namespace WRDSB\WALDIR;

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
 * @package WRDSB_WALDIR
 *
 * @wordpress-plugin
 * Plugin Name:       WALDIR Agent
 * Plugin URI:        https://github.com/wrdsb/wordpress
 * Description:       Connects this WordPress site/install to the WALDIR service
 * Version:           1.0.0
 * Author:            WRDSB
 * Author URI:        https://github.com/wrdsb
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wrdsb-waldir
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}