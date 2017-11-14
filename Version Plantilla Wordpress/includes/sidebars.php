<?php
/**
* Archivo para registrar los sidebars o zonas de widgets
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

function slan_sidebars(){

 register_sidebar(array(
  'name'          => __( 'Barra lateral', 'slan' ),
	'id'            => 'main-sidebar',
	'description'   => __( 'Esta es la zona de widgets principal', 'slan' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
 ));

 register_sidebar(array(
  'name'          => __( 'Pie de página zona izquierda', 'slan' ),
	'id'            => 'footer-widget-izq',
	'description'   => __( 'Esta es la zona de widgets izquierda en el pie de página', 'slan' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
 ));

 register_sidebar(array(
  'name'          => __( 'Pie de página zona central', 'slan' ),
	'id'            => 'footer-widget-centro',
	'description'   => __( 'Esta es la zona de widgets central en el pie de página', 'slan' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
 ));

 register_sidebar(array(
  'name'          => __( 'Pie de página zona derecha', 'slan' ),
	'id'            => 'footer-widget-der',
	'description'   => __( 'Esta es la zona de widgets derecha en el pie de página', 'slan' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
 ));

}
add_action('widgets_init', 'slan_sidebars');
