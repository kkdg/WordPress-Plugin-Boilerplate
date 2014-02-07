<?php
/**
 * The WordPress Plugin for Gateway
 *
 * 
 *
 * @package   Homepang
 * @author    Kwag De Gi <kwag.degi@deuleum.com>
 * @license   
 * @link      https://www.homepang.com/
 * @copyright 2014 Homepang 
 *
 * @wordpress-plugin
 * Plugin Name: homepang-gateway
 * Plugin URI:        
 * Description: Gateway for woocommerce payment 
 * Version: 0.1.0
 * Author: Homepang
 * Author URI: https://www.homepang.com
 * Text Domain: homepang-gateway-locale
 * License: 
 * License URI: 
 * Domain Path: /lang
  */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/**
 * @TODO:
 *
 * 
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-homepang-gateway.php' );

/**
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 *  
 */
register_activation_hook( __FILE__, array( 'Homepang_Gateway', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Homepang_Gateway', 'deactivate' ) );

/*
 * @TODO:
 *
 * 
 */
add_action( 'plugins_loaded', array( 'Homepang_Gateway', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-homepang-gateway-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-homepang-gateway-admin.php' );
	add_action( 'plugins_loaded', array( 'Homepang_Gateway_Admin, 'get_instance' ) );

}
