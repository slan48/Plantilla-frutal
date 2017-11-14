<?php
/**
* Crear campos adicionales
*
* En este archivo creamos nuevos campos para
* utilizar en la plantilla de página de inicio del tema.
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/

function slan_new_metabox_home(){

  add_meta_box('datos-home', __('Datos en la página de inicio', 'slan'), 'slan_metabox_home', 'page', 'normal', 'high');

}
add_action('add_meta_boxes', 'slan_new_metabox_home');

$slan_custom_fields_home = array(

  array(
    'label' => __('Título destacado', 'slan'),
    'description' => __('Ingresa el título destacado del sitio', 'slan'),
    'id' => 'titulo_destacado',
    'type' => 'text'
  ),

  array(
    'label' => __('Subtítulo destacado', 'slan'),
    'description' => __('Ingresa el subtítulo destacado del sitio', 'slan'),
    'id' => 'subtitulo_destacado',
    'type' => 'text'
  ),

  array(
    'label' => __('Texto del botón', 'slan'),
    'description' => __('Ingresa el texto que tendrá el botón bajo el subtítulo destacado', 'slan'),
    'id' => 'texto_boton_destacado',
    'type' => 'text'
  ),

  array(
    'label' => __('Enlace del botón', 'slan'),
    'description' => __('Ingresa el enlace que tendrá el botón bajo el subtítulo destacado', 'slan'),
    'id' => 'link_boton_destacado',
    'type' => 'text'
  )

);



function slan_metabox_home(){
  global $slan_custom_fields_home, $post;

  wp_nonce_field('slan_metabox_home_nonce', 'meta_box_nonce');


  foreach($slan_custom_fields_home as $campo){

    //Obtener el valor del campo
    $meta = get_post_meta($post->ID, $campo['id'], true);

    ?>
      <p>
        <label for="<?php echo $campo['id']; ?>"><?php echo $campo['label']; ?></label><br>
        <input class="widefat" id="<?php echo $campo['id']; ?>" type="text" name="<?php echo $campo['id']; ?>" value="<?php echo $meta; ?>">
        <span class="howto"><?php echo $campo['description']; ?></span>
      </p>
    <?php

  }


}


function save_slan_metabox_home( $post_id ){

  global $slan_custom_fields_home;

  // Verificamos envío del nonce
  if ( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'slan_metabox_home_nonce' ) ) {
    return;
  }

  // Verificamos que se hace un autoguardado y le indicamos que no haga nada en ese caso
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return;
  }

  // Verificamos que lo guardado sea una página y que el usuario tenga permisos de edición
  if ( $_POST['post_type'] == 'page' ) {

    if ( !current_user_can('edit_page', $post_id) ) {
      return;
    }

  }

  //Hacemos un recorrido por los campos

  foreach($slan_custom_fields_home as $campo){

    //Obtenemos el valor anterior del campo
    $antiguo = get_post_meta($post_id, $campo['id'], true);

    $nuevo = $_POST[$campo['id']];

    if ( $nuevo && $nuevo != $antiguo ) {
      update_post_meta($post_id, $campo['id'], $nuevo);
    } elseif ( $nuevo == '' && $antiguo ) {
      delete_post_meta($post_id, $campo['id'], $antiguo);
    }

  }


}
add_action('save_post', 'save_slan_metabox_home');



function show_hide_slan_metabox_home(){
?>

  <style media="screen">
    #datos-home{
      display: none;
    }
  </style>

  <script type="text/javascript">

    jQuery(document).ready(function ($) {

      function showhide_datoshome(){

        if ( $('#page_template').attr('value') == 'template-home.php' ) {
          $('#datos-home').slideDown();
        } else{
          $('#datos-home').slideUp();
        }

        $('#datos-home-hide').parent().remove();

      }

      showhide_datoshome();

      $('#page_template').on('change', function () {
        showhide_datoshome();
      });

    });

  </script>

<?php
}
add_action('admin_head', 'show_hide_slan_metabox_home');
