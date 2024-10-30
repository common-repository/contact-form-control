<?php 

function migcontactmaganer_admin_styles(){
	global $mig_migcontactmaganer;
	
	wp_enqueue_style( 'migcontactmaganer-admin-styles', MIGCONTACTMANAGER .'assets/css/admin-styles.css');
	wp_enqueue_script( 'migcontactmaganer-admin-scripts', MIGCONTACTMANAGER .'assets/js/admin-scripts.js');
	wp_enqueue_style( 'wp-color-picker');
	wp_enqueue_script( 'wp-color-picker');
}

add_action('admin_enqueue_scripts', 'migcontactmaganer_admin_styles');

?>
