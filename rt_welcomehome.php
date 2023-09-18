<?php
/*
Plugin Name: API Interactions - Welcome Home
Description: A Plugin to create a custom API pull from WelcomeHome (welcomehomesoftware.com) (use this short code: welcome-home)
Author: Rudtek, LLC
Version: 2.1
Author URI: https://www.rudtek.com
Text Domain: rt-cascadia
*/
// If this file is called directly, abort.
defined('WPINC') || die();

// Set custom path for future files
define( 'RTAPIFILES_DIR', plugin_dir_path( __FILE__ ) );

// Inclusion of additional functions
require_once( RTAPIFILES_DIR . 'wh_shortcodes.php' );

const WH_API_URL = 'https://crm.welcomehomesoftware.com/api/';  //don't forget to add the slash at the end
const ENABLE_DEBUG = false;
const TOKEN = '';