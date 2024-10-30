<?php

/*
Plugin Name: WP Logout Link Plugin
Plugin URI: http://kshitijahuja.com/
Description: A simple wordpress plugin to add log out link on the left side in the Wordpress Administration panel
Version: 1.0
Author: Kshitij Ahuja
Author URI: http://kshitijahuja.com
License:
*/

//IF IT IS THE ADMIN AREA
if(is_admin()) {

	//ADD NAVIGATION ITEM
	add_action('admin_menu', 'add_link_menu_llp');
	function add_link_menu_llp ()
	{
		$fulllink = '../wp-login.php?action=logout&_wpnonce='.wp_create_nonce('log-out');
		add_menu_page( 'Log out', 'Log Out', 'manage_options', $fulllink, '', '');

	}

}

?>