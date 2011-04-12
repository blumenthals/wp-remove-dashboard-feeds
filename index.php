<?php
/*
Plugin Name: Remove Dashboard Boxes
Plugin URI: http://wordpress.org/#
Description: Disables dashboard Boxes.
Author: Aria Stewart
Version: 1.0
Author URI: http://blumenthals.com/
*/ 

add_action('admin_init', 'rw_remove_dashboard_widgets');
function rw_remove_dashboard_widgets() {
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // plugins
	remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');  // quick press
	remove_meta_box('dashboard_primary', 'dashboard', 'normal');   // wordpress blog
	remove_meta_box('dashboard_secondary', 'dashboard', 'normal');   // other wordpress news
}

?>
