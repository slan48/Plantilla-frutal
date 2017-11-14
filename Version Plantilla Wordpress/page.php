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

      <section class="predeterminada">
        <div class="contenedor">

            <article <?php post_class('pagina'); ?> id="post-<?php the_ID(); ?>">

                <?php the_content(); ?>

  					</article>	<!-- /.article -->

    <?php endwhile; endif; ?>

          <?php get_sidebar(); ?>

        </div>
      </section> <!-- /Blog -->

<?php get_footer(); ?>
