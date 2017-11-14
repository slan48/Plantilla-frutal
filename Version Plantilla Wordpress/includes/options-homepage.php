<?php

  $options = get_theme_mod('slan_settings');

  /********************************
  Sección de anuncios o blurbs
  *********************************/

  // Mostrar u ocultar sección
  if ( isset($options['show_blurbs_section']) ) {
    $show_blurbs_section = $options['show_blurbs_section'];
  } else{
    $show_blurbs_section = false;
  }

  // Título Sección de anuncios o blurbs
  if ( !empty($options['blurbs_section_title']) ) {
    $blurbs_section_title = $options['blurbs_section_title'];
  }
  // Subtítulo Sección de anuncios o blurbs
  if ( !empty($options['blurbs_section_subtitle']) ) {
    $blurbs_section_subtitle = $options['blurbs_section_subtitle'];
  }

  // Primer anuncio o blurb
  if ( !empty($options['first_blurb_image']) ) {
    $first_blurb_image = $options['first_blurb_image'];
  } else{
    $first_blurb_image = IMAGENES . '/blurb-cosechando.jpg';
  }

  if ( !empty($options['first_blurb_title']) ) {
    $first_blurb_title = $options['first_blurb_title'];
  } else{
    $first_blurb_title = __('Primer anuncio', 'slan');
  }
  if ( !empty($options['first_blurb_text']) ) {
    $first_blurb_text = $options['first_blurb_text'];
  } else{
    $first_blurb_text = __('Esto es un texto de prueba, por favor ingresa un texto real en el personalizador', 'slan');
  }

  // Segundo anuncio o blurb
  if ( !empty($options['second_blurb_image']) ) {
    $second_blurb_image = $options['second_blurb_image'];
  } else{
    $second_blurb_image = IMAGENES . '/blurb-preparando.jpg';
  }

  if ( !empty($options['second_blurb_title']) ) {
    $second_blurb_title = $options['second_blurb_title'];
  } else{
    $second_blurb_title = __('Segundo anuncio', 'slan');
  }
  if ( !empty($options['second_blurb_text']) ) {
    $second_blurb_text = $options['second_blurb_text'];
  } else{
    $second_blurb_text = __('Esto es un texto de prueba, por favor ingresa un texto real en el personalizador', 'slan');
  }

  // Tercero anuncio o blurb
  if ( !empty($options['third_blurb_image']) ) {
    $third_blurb_image = $options['third_blurb_image'];
  } else{
    $third_blurb_image = IMAGENES . '/blurb-terminando.jpg';
  }

  if ( !empty($options['third_blurb_title']) ) {
    $third_blurb_title = $options['third_blurb_title'];
  } else{
    $third_blurb_title = __('Tercer anuncio', 'slan');
  }
  if ( !empty($options['third_blurb_text']) ) {
    $third_blurb_text = $options['third_blurb_text'];
  } else{
    $third_blurb_text = __('Esto es un texto de prueba, por favor ingresa un texto real en el personalizador', 'slan');
  }


  /********************************
  Sección de últimos artículos
  *********************************/

  // Mostrar u ocultar sección
  if ( isset($options['show_last_posts_section']) ) {
    $show_last_posts_section = $options['show_last_posts_section'];
  } else{
    $show_last_posts_section = false;
  }

  // Título Sección de anuncios o blurbs
  if ( !empty($options['last_posts_section_title']) ) {
    $last_posts_section_title = $options['last_posts_section_title'];
  }
  // Subtítulo Sección de anuncios o blurbs
  if ( !empty($options['last_posts_section_subtitle']) ) {
    $last_posts_section_subtitle = $options['last_posts_section_subtitle'];
  }

 ?>
