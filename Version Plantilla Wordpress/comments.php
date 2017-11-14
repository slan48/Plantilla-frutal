<?php
/**
* Plantilla comentarios
*
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/
?>

<?php if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( $_SERVER['SCRIPT_FILENAME'] ) == 'comments.php' ):

   die();

endif; ?>

<?php if ( post_password_required() ): ?>
  <p><?php _e('Se necesita contraseña para visualizar este contenido', 'slan'); ?></p>
  <?php return; ?>
<?php endif; ?>

<div id="comments">
  <?php if ( get_comments_number() ): ?>
    <h3 class="comments-title"><?php comments_number(__('Escribe el primer comentario', 'slan'), __('Hay 1 comentario', 'slan'), __('Hay % comentarios', 'slan')); ?></h3>
    <ol id="comments-list">
      <?php wp_list_comments(); ?>
    </ol><!-- /#comments-list -->
  <?php endif; ?>

  <?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ): ?>

    <div class="navegacion-comentarios">
      <?php if ( get_previous_comments_link() ): ?>
        <div class="anterior">
          <?php previous_comments_link( __('<i class="fa fa-arrow-left" aria-hidden="true"></i> Comentarios antiguos', 'slan') ); ?>
        </div>
      <?php endif; ?>

      <?php if ( get_next_comments_link() ): ?>
        <div class="siguiente">
          <?php next_comments_link( __('Comentarios recientes <i class="fa fa-arrow-right" aria-hidden="true"></i>', 'slan') ); ?>
        </div>
      <?php endif; ?>
      
    </div>

  <?php endif; ?>

  <?php comment_form(); ?>

</div><!-- /#comments -->
