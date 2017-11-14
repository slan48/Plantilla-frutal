<?php
/**
* Formulario de búsqueda personalizado para el tema Slan Frutal
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/
?>

<form class="" action="<?php echo home_url(); ?>" method="get">
  <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Buscar">
  <button type="submit" name="enviar">
    <i class="fa fa-search" aria-hidden="true"></i>
  </button>
</form>
