<?php
/**
* The admin-specific functionality of the plugin.
*
* @link       https://wonkasoft.com
* @since      1.0.0
*
* @package    Wonkasoft_Logout
* @subpackage wonkasoft-logout/admin/partials
*/

/**
* The admin-specific functionality of the plugin.
*
* Defines the plugin name, version, and two examples hooks for how to
* enqueue the admin-specific stylesheet and JavaScript.
*
* @package    Wonkasoft_Logout
* @subpackage wonkasoft-logout/admin/partials
* @author     Wonkasoft <info@wonkasoft.com>
*/

add_filter( 'plugin_action_links_'. WONKASOFT_LOGOUT_BASENAME, 'wonkasoft_logout_add_settings_link_filter' , 10, 1);

function wonkasoft_logout_add_settings_link_filter( $links ) { 
	global $wonkasoft_logout_page;
	$links_addon = '<a href="' . menu_page_url( $wonkasoft_logout_page, 0 ) . '" target="_self">Settings</a>';
	array_unshift($links, $links_addon);
	$links[] = '<a href="https://paypal.me/Wonkasoft" target="blank"><img src="' . plugins_url( '../img/wonka-logo.svg', __FILE__ ) . '" style="width: 20px; height: 20px; display: inline-block;
    vertical-align: text-top; float: none;" /></a>';
 return $links; 
}

add_filter( 'plugin_row_meta', 'wonkasoft_logout_add_description_link_filter', 10, 2);

function wonkasoft_logout_add_description_link_filter( $links, $file ) {
	global $wonkasoft_logout_page;
	if ( strpos($file, 'wonkasoft-logout.php') !== false ) {
		$links[] = '<a href="' . menu_page_url( $wonkasoft_logout_page, 0 ) . '" target="_self">Settings</a>';
		$links[] = '<a href="https://paypal.me/Wonkasoft" target="blank">Donate <img src="' . plugins_url( '../img/wonka-logo.svg', __FILE__ ) . '" style="width: 20px; height: 20px; display: inline-block;
    vertical-align: text-top;" /></a>';
	}
 return $links; 
}