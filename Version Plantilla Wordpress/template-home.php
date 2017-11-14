<?php
/**
* Template name: Página de inicio
*
* Plantilla de página de inicio
*
* Plantilla con slider y secciones adicionales como una sección
* de blurbs y otra de últimos artículos presentados de forma diferente.
*
* @package Slan
* @subpackage Slan Frutal
* @since 1.0
*/
?>

<?php get_header(); ?>

      <!-- Slider -->
      <section class="slider-principal">
        <div class="slider" id="slider">

          <?php $slides = new WP_Query(array(
            'post_type' => 'slides',
            'order' => 'ASC'
          )); ?>
          <?php if ( $slides->have_posts() && $slides->post_count > 1 ) : while ( $slides->have_posts() ) : $slides->the_post(); ?>
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
          <?php endwhile; else: ?>
            <img src="<?php echo IMAGENES; ?>/slide1.jpg" alt="">
            <img src="<?php echo IMAGENES; ?>/slide2.jpg" alt="">
            <img src="<?php echo IMAGENES; ?>/slide3.jpg" alt="">
            <img src="<?php echo IMAGENES; ?>/slide4.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="overlay-slider"></div>
        <div class="texto-slider">
          <?php

            $titulo_destacado = get_post_meta( $post->ID, 'titulo_destacado', true );
            $subtitulo_destacado = get_post_meta( $post->ID, 'subtitulo_destacado', true );
            $texto_boton_destacado = get_post_meta( $post->ID, 'texto_boton_destacado', true );
            $link_boton_destacado = get_post_meta( $post->ID, 'link_boton_destacado', true );

            if ( empty($titulo_destacado) ) {
              $titulo_destacado = get_bloginfo('name');
            }

            if ( empty($subtitulo_destacado) ) {
              $subtitulo_destacado = get_bloginfo('description');
            }

            if ( empty($texto_boton_destacado) ) {
              $texto_boton_destacado = __('Ver más', 'slan');
            }

           ?>
          <h3><?php echo $titulo_destacado; ?></h3>
          <p><?php echo $subtitulo_destacado; ?></p>
          <?php if ( !empty($link_boton_destacado) ): ?>
            <a href="<?php echo esc_url($link_boton_destacado); ?>"><?php echo $texto_boton_destacado; ?></a>
          <?php endif; ?>
        </div>
      </section> <!-- Slider -->


      <?php
      // Obteniendo valor de opciones del personalizador
      require_once('includes/options-homepage.php');
      ?>

       <?php if ( $show_blurbs_section == true ): ?>
         <section class="blurbs" id="blurbs">
           <div class="contenedor">

             <?php if ( isset($blurbs_section_title) || isset($blurbs_section_subtitle) ): ?>
               <div class="titulo-seccion">
                 <?php if (isset($blurbs_section_title)): ?>
                   <h3><?php echo $blurbs_section_title; ?></h3>
                 <?php endif; ?>

                 <?php if (isset($blurbs_section_subtitle)): ?>
                   <p><?php echo $blurbs_section_subtitle; ?></p>
                 <?php endif; ?>
               </div>
             <?php endif; ?>

             <div class="contenido-seccion">

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $first_blurb_image; ?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo $first_blurb_title; ?></h4>
                   <p><?php echo $first_blurb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $second_blurb_image; ?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo $second_blurb_title; ?></h4>
                   <p><?php echo $second_blurb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $third_blurb_image; ?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo $third_blurb_title; ?></h4>
                   <p><?php echo $third_blurb_text; ?></p>
                 </div>
               </article>

             </div>  <!-- /Contenido sección -->
           </div>
         </section> <!-- /Blurbs -->
       <?php endif; ?>

       <?php if ($show_last_posts_section == true): ?>
         <section class="ultimos-articulos">
           <div class="contenedor">

             <?php if ( isset($last_posts_section_title) || isset($last_posts_section_subtitle) ): ?>
               <div class="titulo-seccion">
                 <?php if (isset($last_posts_section_title)): ?>
                   <h3><?php echo $last_posts_section_title; ?></h3>
                 <?php endif; ?>

                 <?php if (isset($last_posts_section_subtitle)): ?>
                   <p><?php echo $last_posts_section_subtitle; ?></p>
                 <?php endif; ?>
               </div>
             <?php endif; ?>

             <div class="contenedor-articulos">

               <?php $post_home = new WP_Query(array(
                 'post_type' => 'post',
                 'posts_per_page' => 3
               )); ?>
               <?php if ( $post_home->have_posts() ) : while ( $post_home->have_posts() ) : $post_home->the_post(); ?>

                 <article class="article">

                   <?php if ( has_post_thumbnail() ): ?>
                     <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail('blog-size-image'); ?>
                     </a>
                   <?php endif; ?>


                   <div class="article-content">
                     <div class="article-header">
         							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                       <p class="article-date"><?php the_time( get_option('date_format') ); ?></p>
         						</div><!-- /.blog-entry-header -->

                     <?php echo slan_custom_excerpt(20); ?>

                     <p class="read-more-container"><a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Leer más', 'slan'); ?></a></p>
                   </div> <!-- /.article-content -->

       					</article>	<!-- /.article -->

               <?php endwhile; else: ?>
               <?php endif; ?>

             </div>

           </div>
         </section> <!-- /.ultimos-articulos -->
       <?php endif; ?>

<?php get_footer(); ?>
