<?php
/*
Plugin Name: Support by 9Arrows
Plugin URI: https://9arrows.io
Description: Automatically displays a slide up donation call to action.
Version: 1.0.0
Author: Tyler Johnson
Author URI: https://9arrows.io
Copyright: 9Arrows
Text Domain: supportnine
Copyright © 2019 9Arrows. All Rights Reserved.
*/

/**
Disallow Direct Access to Plugin File
**/
if( ! defined( 'WPINC' ) ) { die; }

/**
Constants
**/
define( 'SUPPORTNINE_BASE_VERSION', '1.0.0' );
define( 'SUPPORTNINE_BASE_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'SUPPORTNINE_BASE_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
Includes
**/
// Functions
require_once( SUPPORTNINE_BASE_PATH . 'includes/functions.php' );
