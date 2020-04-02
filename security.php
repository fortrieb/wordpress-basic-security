<?php
/**
 * * Plugin Name: Basic Security
 * * Plugin URI: https://github.com/fortrieb/wordpress-basic-security
 * * Description: Change default Wordpress setting for more security
 * * Author: Benji 
 * * Author URI: http://fortrieb.org
 * * Version: 0.1.1
 * * License: MIT License
 * */

/* remove xml-rpc function, generators link and wlw manifest */
add_filter('the_generator', create_function('', 'return "";'));
/* Disable Ressource discovery protocol link */
remove_action('wp_head', 'rsd_link');
/* Disable Link to Windows Live Write manifest file */
remove_action('wp_head', 'wlwmanifest_link');

/* remove menu item "links" */
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	remove_menu_page('link-manager.php');
}

?>
