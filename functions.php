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