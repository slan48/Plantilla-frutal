<?php
/**
* Nuevas opciones customizador
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

function slan_customize_register($wp_customize){

  /*-------------------------------------
  Panel Encabezado
  --------------------------------------*/
  $wp_customize->add_panel('slan_header_panel', array(
    'title' => __('Encabezado', 'slan'),
    'description' => __('Opciones del encabezado', 'slan'),
    'priority' => 35
  ));

  /***************************************
  Encabezado superior
  ****************************************/
  $wp_customize->add_section('slan_header_top', array(
    'title' => __('Encabezado superior', 'slan'),
    'description' => __('Opciones del encabezado superior', 'slan'),
    'priority' => 10,
    'panel' => 'slan_header_panel'
  ));

  // Texto en top header
  $wp_customize->add_setting('slan_settings[top_header_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('top_header_text', array(
    'label' => __('Texto en top header', 'slan'),
    'description' => __('Texto que se muestra en la barra superior', 'slan'),
    'section' =>'slan_header_top',
    'settings' => 'slan_settings[top_header_text]'
  ));

  // Enlace Facebook
  $wp_customize->add_setting('slan_settings[facebook_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('facebook_link', array(
    'label' => __('Enlace a página de Facebook', 'slan'),
    'section' =>'slan_header_top',
    'settings' => 'slan_settings[facebook_link]'
  ));

  // Enlace Twitter
  $wp_customize->add_setting('slan_settings[twitter_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('twitter_link', array(
    'label' => __('Enlace a página de Twitter', 'slan'),
    'section' =>'slan_header_top',
    'settings' => 'slan_settings[twitter_link]'
  ));

  // Enlace Instagram
  $wp_customize->add_setting('slan_settings[instagram_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('instagram_link', array(
    'label' => __('Enlace a página de Instagram', 'slan'),
    'section' =>'slan_header_top',
    'settings' => 'slan_settings[instagram_link]'
  ));


  /***************************************
  Encabezado normal
  ****************************************/
  $wp_customize->add_section('slan_header', array(
    'title' => __('Encabezado normal', 'slan'),
    'description' => __('Opciones del encabezado normal', 'slan'),
    'priority' => 11,
    'panel' => 'slan_header_panel'
  ));

  // Logo
  $wp_customize->add_setting('slan_settings[logo]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
    'label' => __('Subir logo', 'slan'),
    'section' =>'slan_header',
    'settings' => 'slan_settings[logo]'
  )));

  // Checkbox mostrar título y descripción en encabezado
  $wp_customize->add_setting('slan_settings[show_page_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('show_page_title', array(
    'label' => __('Mostrar título y descripción de la web', 'slan'),
    'section' =>'slan_header',
    'settings' => 'slan_settings[show_page_title]',
    'type' => 'checkbox'
  ));



  /*-------------------------------------
  Panel Pie de página
  --------------------------------------*/
  $wp_customize->add_panel('slan_footer_panel', array(
    'title' => __('Pie de página', 'slan'),
    'description' => __('Opciones del pie de página', 'slan'),
    'priority' => 125
  ));

  /***************************************
  Llamada a la acción
  ****************************************/
  $wp_customize->add_section('slan_call_to_action', array(
    'title' => __('Llamada a la acción', 'slan'),
    'priority' => 10,
    'panel' => 'slan_footer_panel'
  ));

  // Texto llamada a la acción
  $wp_customize->add_setting('slan_settings[call_to_action_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('call_to_action_text', array(
    'label' => __('Texto llamada a la acción', 'slan'),
    'section' =>'slan_call_to_action',
    'settings' => 'slan_settings[call_to_action_text]'
  ));

  // Texto Botón llamada a la acción
  $wp_customize->add_setting('slan_settings[call_to_action_btn_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('call_to_action_btn_text', array(
    'label' => __('Texto de botón llamada a la acción', 'slan'),
    'section' =>'slan_call_to_action',
    'settings' => 'slan_settings[call_to_action_btn_text]'
  ));

  // Enlace Botón llamada a la acción
  $wp_customize->add_setting('slan_settings[call_to_action_btn_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('call_to_action_btn_link', array(
    'label' => __('Enlace de botón de llamada a la acción', 'slan'),
    'section' =>'slan_call_to_action',
    'settings' => 'slan_settings[call_to_action_btn_link]'
  ));

  /***************************************
  Pie inferior
  ****************************************/
  $wp_customize->add_section('slan_bottom_footer', array(
    'title' => __('Pie de página inferior', 'slan'),
    'priority' => 11,
    'panel' => 'slan_footer_panel'
  ));

  // Texto llamada a la acción
  $wp_customize->add_setting('slan_settings[bottom_footer_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('bottom_footer_text', array(
    'label' => __('Texto de pie de página inferior', 'slan'),
    'section' =>'slan_bottom_footer',
    'settings' => 'slan_settings[bottom_footer_text]'
  ));



  /***************************************
  Banner
  ****************************************/
  $wp_customize->add_section('slan_banner', array(
    'title' => __('Banner principal', 'slan'),
    'priority' => 36
  ));

  // Banner
  $wp_customize->add_setting('slan_settings[banner]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner', array(
    'label' => __('Subir imagen de banner principal', 'slan'),
    'section' =>'slan_banner',
    'settings' => 'slan_settings[banner]'
  )));



  /*-------------------------------------
  Opciones Homepage
  --------------------------------------*/
  $wp_customize->add_panel('slan_homepage_panel', array(
    'title' => __('Homepage', 'slan'),
    'description' => __('Opciones de la plantilla de página de inicio', 'slan'),
    'priority' => 37
  ));

  /***************************************
  Seccion de anuncios o blurbs
  ****************************************/
  $wp_customize->add_section('slan_blurbs_section', array(
    'title' => __('Sección de anuncios o blurbs', 'slan'),
    'priority' => 10,
    'panel' => 'slan_homepage_panel'
  ));

  // Checkbox mostrar sección de anuncios o blurbs
  $wp_customize->add_setting('slan_settings[show_blurbs_section]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('show_blurbs_section', array(
    'label' => __('Mostrar sección de anuncios o blurbs', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[show_blurbs_section]',
    'type' => 'checkbox'
  ));

  // Título sección de anuncios o blurbs
  $wp_customize->add_setting('slan_settings[blurbs_section_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('blurbs_section_title', array(
    'label' => __('Título sección de anuncios o blurbs', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[blurbs_section_title]'
  ));

  // Subtítulo sección de anuncios o blurbs
  $wp_customize->add_setting('slan_settings[blurbs_section_subtitle]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('blurbs_section_subtitle', array(
    'label' => __('Subtítulo sección de anuncios o blurbs', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[blurbs_section_subtitle]'
  ));

  /*-------------------------------------------*/

  // Imagen primer anuncio
  $wp_customize->add_setting('slan_settings[first_blurb_image]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'first_blurb_image', array(
    'label' => __('Subir imagen de primer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[first_blurb_image]'
  )));

  // Título primer anuncio
  $wp_customize->add_setting('slan_settings[first_blurb_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('first_blurb_title', array(
    'label' => __('Título de primer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[first_blurb_title]'
  ));

  // Texto primer anuncio
  $wp_customize->add_setting('slan_settings[first_blurb_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('first_blurb_text', array(
    'label' => __('Texto de primer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[first_blurb_text]'
  ));

  /*-------------------------------------------*/

  // Imagen segundo anuncio
  $wp_customize->add_setting('slan_settings[second_blurb_image]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_blurb_image', array(
    'label' => __('Subir imagen de segundo anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[second_blurb_image]'
  )));

  // Título segundo anuncio
  $wp_customize->add_setting('slan_settings[second_blurb_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('second_blurb_title', array(
    'label' => __('Título de segundo anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[second_blurb_title]'
  ));

  // Texto segundo anuncio
  $wp_customize->add_setting('slan_settings[second_blurb_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('second_blurb_text', array(
    'label' => __('Texto de segundo anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[second_blurb_text]'
  ));

  /*-------------------------------------------*/

  // Imagen tercer anuncio
  $wp_customize->add_setting('slan_settings[third_blurb_image]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'third_blurb_image', array(
    'label' => __('Subir imagen de tercer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[third_blurb_image]'
  )));

  // Título primer anuncio
  $wp_customize->add_setting('slan_settings[third_blurb_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('third_blurb_title', array(
    'label' => __('Título de tercer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[third_blurb_title]'
  ));

  // Texto primer anuncio
  $wp_customize->add_setting('slan_settings[third_blurb_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('third_blurb_text', array(
    'label' => __('Texto de tercer anuncio', 'slan'),
    'section' =>'slan_blurbs_section',
    'settings' => 'slan_settings[third_blurb_text]'
  ));



  /***************************************
  Seccion de artículos más recientes
  ****************************************/
  $wp_customize->add_section('slan_last_posts_section', array(
    'title' => __('Sección de últimos artículos', 'slan'),
    'priority' => 11,
    'panel' => 'slan_homepage_panel'
  ));

  // Checkbox mostrar sección de últimos artículos
  $wp_customize->add_setting('slan_settings[show_last_posts_section]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('show_last_posts_section', array(
    'label' => __('Mostrar sección de últimos artículos', 'slan'),
    'section' =>'slan_last_posts_section',
    'settings' => 'slan_settings[show_last_posts_section]',
    'type' => 'checkbox'
  ));

  // Título sección de últimos artículos
  $wp_customize->add_setting('slan_settings[last_posts_section_title]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('last_posts_section_title', array(
    'label' => __('Título de sección de últimos artículos', 'slan'),
    'section' =>'slan_last_posts_section',
    'settings' => 'slan_settings[last_posts_section_title]'
  ));

  // Subtítulo sección de últimos artículos
  $wp_customize->add_setting('slan_settings[last_posts_section_subtitle]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('last_posts_section_subtitle', array(
    'label' => __('Subtítulo de sección de últimos artículos', 'slan'),
    'section' =>'slan_last_posts_section',
    'settings' => 'slan_settings[last_posts_section_subtitle]'
  ));


}
add_action('customize_register', 'slan_customize_register');
