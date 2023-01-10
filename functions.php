<?php

require_once 'inc-functions/cpt.php';
require_once 'inc-functions/register-menus.php';
require_once 'inc-functions/register-styles.php';
require_once 'inc-functions/register-scripts.php';


/**
 * Essential theme supports
 * */
add_action('after_setup_theme','guzeldiag_theme_setup');
function guzeldiag_theme_setup(){
    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post-thumnails **/
	add_theme_support( 'post-thumbnails' );

	/** editor-styles **/
	add_theme_support( 'editor-styles' );

	/** editor-styles-css **/
	add_editor_style( 'editor.css' );

	/** Load block styles on frontend **/
	add_theme_support( 'wp-block-styles' );

	/** Align wide **/
	add_theme_support( 'align-wide' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}
function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Diagnostics', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Diagnostic', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Diagnostics'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Touts les diagnostics'),
		'view_item'           => __( 'Voir le diagnostic'),
		'add_new_item'        => __( 'Ajouter un nouveau diagnostic'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer'),
		'update_item'         => __( 'Modifier'),
		'search_items'        => __( 'Rechercher'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Diagnostics'),
		'description'         => __( 'Tous les diagnostics'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'diagnostics'),
		'menu_icon'      => 'dashicons-clipboard',


	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Diagnostics', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );