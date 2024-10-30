<?php 
/*
* Plugin Name: Contact Form 7 Manager
* Plugin URI: http://alborotado.com
* Description: Customize aesthetics on Contact Form 7 and manage config options in an easy way.
* Version: 1.0
* Author: Miguras
* Author URI: http://alborotado.com
* License: GPLv2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/
if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}
define("MIGCONTACTMANAGER", plugin_dir_url( __FILE__ ));
	
	
		/*======================== FUNCTIONS ==============================*/
		
		if ( file_exists( dirname( __FILE__ ) . '/inc/functions.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/functions.php' );
		}
		
		// ========================== REDUX FRAMEWORK =========================================
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/admin/contact-form-manager-options.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/contact-form-manager-options.php' );
		}
		
		
		/*====================== TGM =========================*/
		//if ( file_exists( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' ) ) {
		//	require_once( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' );
		//}
		
			
		/*=========================== METABOXES ===================*/
		//if ( file_exists( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' ) ) {
		//	require_once( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' );
		//}
		

		
		/*=========================== DYNAMIC CSS ===================*/
		if ( file_exists( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' ) ) {
			require_once( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' );
		}
		
		if(!is_admin() && function_exists('wp_register_script')){
					add_action('wp_head', 'migcontactmaganer_dynamic_styles');
		};
		
		//===================== STYLES AND SCRIPTS ===========================
		add_action( 'wp_enqueue_scripts', 'mig_proteam_front_styles' );
		function mig_proteam_front_styles(){
			wp_enqueue_script( 'jquery');
			wp_enqueue_style( 'basic-migcontactmaganer', plugin_dir_url( __FILE__ ) . 'assets/css/basic-styles.css', rand(0, 100));
			wp_enqueue_script( 'migcontactmaganer-front-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/front-scripts.js', rand(0, 100));
			wp_enqueue_style( 'fontawesome', plugin_dir_url( __FILE__ ) . 'assets/css/font-awesome.min.css');
		};
	
	

?>