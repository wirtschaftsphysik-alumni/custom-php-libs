<?php
/*
 * Plugin Name:       Custom PHP Libraries
 * Description:       Compilation of manually installed PHP libraries with a simple wrapper to make all functions accessible in wordpress. This will still work even if the main theme changes.
 * Requires at least: 5.5
 * Requires PHP:      7.0
 * Author:            Neverhorst
 * Author URI:        https://github.com/Neverhorst
 * Version:           0.0.1
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( plugin_dir_path( __FILE__ ) . 'php-iban/php-iban.php');

?>
