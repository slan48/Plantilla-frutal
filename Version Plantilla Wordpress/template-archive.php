<?php
/**
* Template name: Archivo
*
* Plantilla de archivo
*
* Plantilla de ancho completo que muestra el archivo de nuestro sitio de forma organizada en distintas listas.
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/
 ?>

 <?php get_header(); ?>

     <?php
        $options = get_theme_mod('slan_settings');

        if ( !empty($options['banner']) ) {
          $banner = $options['banner'];
        } else{
          $banner = IMAGENES . '/slide1.jpg';
        }

      ?>

     <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
       <!-- Banner -->
       <section class="banner-principal">
         <?php if ( has_post_thumbnail() ): ?>
           <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
           <div class="banner" style="background-image: url('<?php echo $banner_article[0]; ?>');"></div>
         <?php else: ?>
           <div class="banner" style="background-image: url('<?php echo $banner; ?>');"></div>
         <?php endif; ?>


         <div class="overlay-banner"></div>
         <div class="texto-banner">
           <h3><?php the_title(); ?></h3>
         </div>
       </section> <!-- Banner -->

       <section class="fullwidth">
         <div class="contenedor">

             <article <?php post_class('pagina'); ?> id="post-<?php the_ID(); ?>">

               <div class="contenedor-archivo">

                 <div class="listado-archivo">
                  <h3><?php _e('Últimos artículos', 'slan'); ?></h3>
                  <ul>
                    <?php wp_get_archives(array(
                      'type' => 'postbypost',
                      'limit' => 8
                    )); ?>
                  </ul>
                </div>

                 <div class="listado-archivo">
                  <h3><?php _e('Artículos por año', 'slan'); ?></h3>
                  <ul>
                    <?php wp_get_archives(array(
                      'type' => 'yearly',
                      'limit' => 8
                    )); ?>
                  </ul>
                </div>

                 <div class="listado-archivo">
                  <h3><?php _e('Artículos por mes', 'slan'); ?></h3>
                  <ul>
                    <?php wp_get_archives(array(
                      'type' => 'monthly',
                      'limit' => 8
                    )); ?>
                  </ul>
                </div>

                 <div class="listado-archivo">
                  <h3><?php _e('Artículos por semana', 'slan'); ?></h3>
                  <ul>
                    <?php wp_get_archives(array(
                      'type' => 'weekly',
                      'limit' => 8
                    )); ?>
                  </ul>
                </div>

                 <div class="listado-archivo">
                  <h3><?php _e('Artículos por día', 'slan'); ?></h3>
                  <ul>
                    <?php wp_get_archives(array(
                      'type' => 'daily',
                      'limit' => 8
                    )); ?>
                  </ul>
                </div>

                 <div class="listado-archivo">
                  <h3><?php _e('Artículos por autor', 'slan'); ?></h3>
                  <ul>
                    <?php wp_list_authors(array(
                      'orderby' => 'name',
                      'number' => 8
                    )); ?>
                  </ul>
                </div>

               </div> <!-- /contenedor-archivo -->

   					</article>	<!-- /.article -->

     <?php endwhile; endif; ?>

         </div>
       </section> <!-- /Blog -->

 <?php get_footer(); ?>
