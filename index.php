<?php
/*
Plugin Name: Remove Dashboard Boxes
Plugin URI: http://wordpress.org/#
Description: Disables dashboard Boxes.
Author: Aria Stewart
Version: 1.0
Author URI: http://blumenthals.com/
*/ 

add_action('wp_network_dashboard_setup', 'bl_remove_network_dashboard_widgets', 100);
add_action('wp_user_dashboard_setup', 'bl_remove_dashboard_widgets', 100);
add_action('wp_dashboard_setup', 'bl_remove_dashboard_widgets', 100);
function bl_remove_dashboard_widgets() {
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_secondary', 'dashboard', 'side'); 
}
function bl_remove_network_dashboard_widgets() {
	remove_meta_box('dashboard_plugins', 'dashboard-network', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard-network', 'normal');
	remove_meta_box('dashboard_primary', 'dashboard-network', 'side');
	remove_meta_box('dashboard_secondary', 'dashboard-network', 'side'); 
}

?>
