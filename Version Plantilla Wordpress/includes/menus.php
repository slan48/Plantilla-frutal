<?php
/**
* Registrando áreas de menú
*
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

function slan_menus(){

  register_nav_menus(array(
    'main-menu' => __('Menú principal en cabecera', 'slan')
  ));

}
add_action('init', 'slan_menus');
