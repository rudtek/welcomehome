=== WeclcomeHome Contact ===
Contributors: rudtek2
Tags: API
Requires at least: 4.5
Tested up to: 6.3.1
Requires PHP: 5.6
Stable tag: 1.8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Connects WordPress to the welcomeHome API.

== Description ==

WelcomeHome Software is an online CRM software company. This plugin connects will create shortcodes to pull data from the API website.

== Changelog ==
2.1
*added Care Types endpoint (and shortcode)
*added Units endpoint (and shortcode)
*added Floor Plans endpoint (and shortcode)
2.0
*moved shortcodes (activities, exports (general), and communties) to separate files in inc/ directory
*added call to shortcode file (wh_shortcodes.php)
*renamed functions with new namespace wh instead of rt
*renamed functions that had welcome_home_ prefixes to wh_
*made shortcodes specific to endpoints of API
*fixed formatting errors
*moved endpoint path to individual shortcode function files
1.8
*added 2nd shortcode for csv handling
*fixed deubgging print_r to return instead of echo
1.6
*renamed shortcode to welcome-home
*renamed function to welcome_home
*changed wp_remote_get to wp_safe_remote_get (in case we allow users to change the URL later)
*pulled args array out of wp_safe_remote_get call.
*added misc comments to functions
*added quickbail if wp_error
1.5
*Set URL to be variable Created default_Path variable
*set custom foreach for different paths.
*pulled token out as well
1.1
*changed from cURL to wp_remote_get()
1.0
*initital version
