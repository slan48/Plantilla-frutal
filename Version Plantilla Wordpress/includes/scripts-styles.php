<?php
/**
* Archivo de estilos y scripts
*
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

/*
* Registrando y cargando hojas de estilo
*/

function slan_theme_styles(){

  // Registrar hojas de estilo
  wp_register_style('font-awesome', RUTATEMA . '/css/font-awesome.min.css', '', '4.7.0', 'all');
  wp_register_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700', '', '', 'all');
  wp_register_style('ideal-image-slider', RUTATEMA . '/css/ideal-image-slider.css', '', '1.5.1', 'all');
  wp_register_style('slan-styles', get_stylesheet_uri(), array('font-awesome', 'poppins-font', 'ideal-image-slider'), '1.0', 'all');

  // Cargar hojas de estilo
  wp_enqueue_style('slan-styles');

}
add_action('wp_enqueue_scripts', 'slan_theme_styles');



/*
* Registrando y cargando scripts
*/

function slan_theme_scripts(){

  // Registrar scripts
  wp_register_script('slider', RUTATEMA . '/js/ideal-image-slider.min.js', array('jquery'), '1.5.1', true);
  wp_register_script('slan-scripts', RUTATEMA . '/js/functions.js', array('jquery', 'slider'), '1.0', true);

  // Cargar scripts
  wp_enqueue_script('slan-scripts');

}
add_action('wp_enqueue_scripts', 'slan_theme_scripts');
