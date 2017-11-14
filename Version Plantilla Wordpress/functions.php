<?php
/**
* Slan Frutal Funciones y definiciones
*
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

/**
* Definiendo constantes
*
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

define('RUTATEMA', get_stylesheet_directory_uri() );

define('IMAGENES', RUTATEMA . '/img');




/**
* Definiendo características del tema
*
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1200;

// Register Theme Features
function slan_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'F1F4F6',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'slan', get_template_directory() . '/languages' );

  // Añadir un tamaño de imagen personalizado
  add_image_size('blog-size-image', 820, 615, true);
}
add_action( 'after_setup_theme', 'slan_custom_theme_features' );


/*
* Cargando estilos y scripts
*/

require_once('includes/scripts-styles.php');

/*
* Añadiendo zonas de menus
*/

require_once('includes/menus.php');

/*
* Registrando sidebars
*/

require_once('includes/sidebars.php');


/*
* Limitando the_excerpt
*/

// function slan_custom_the_excerpt( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'slan_custom_the_excerpt' );



function slan_custom_excerpt($limite){

	$extracto = explode(' ', get_the_excerpt(), $limite);

	if ( count($extracto) >= $limite ) {

		array_pop($extracto);
		$extracto = implode(' ', $extracto ) . '...' ;

	} else{

		$extracto = implode(' ', $extracto );

	}

	$extracto = preg_replace('`\[[^\]]*\]`', '', $extracto);
	return $extracto;

}

/*
* Nuevos campos en Inicio
*/

require_once('includes/nuevoscampos-inicio.php');

/*
* Añadiendo nuevas opciones al personalizador
*/

require_once('includes/personalizador-tema.php');


/*
* Añadiendo nuevas taxonomias
*/

require_once('includes/nuevas-taxonomias.php');

remove_action('shutdown', 'wp_ob_end_flush_all', 1);
