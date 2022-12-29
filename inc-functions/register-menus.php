<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'guzeldiag_register_nav_menu' ) ) {

	function guzeldiag_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'guzeldiag' ),
	    	'footer_menu'  => __( 'Footer Menu', 'guzeldiag' ),
		) );
	}
	add_action( 'after_setup_theme', 'guzeldiag_register_nav_menu', 0 );
}