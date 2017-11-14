</section> <!-- /Main -->

  <?php
    $options = get_theme_mod('slan_settings');

    if ( !empty($options['call_to_action_text']) ) {
      $call_to_action_text = $options['call_to_action_text'];
    }

    if ( !empty($options['call_to_action_btn_text']) ) {
      $call_to_action_btn_text = $options['call_to_action_btn_text'];
    }

    if ( !empty($options['call_to_action_btn_link']) ) {
      $call_to_action_btn_link = $options['call_to_action_btn_link'];
    }

    if ( !empty($options['bottom_footer_text']) ) {
      $bottom_footer_text = $options['bottom_footer_text'];
    }
   ?>

<!-- Footer -->
<footer>

  <section class="llamada-accion">
    <div class="contenedor">

      <?php if ( isset($call_to_action_text) ): ?>
        <div class="texto">
          <p><?php echo $call_to_action_text; ?></p>
        </div>
      <?php endif; ?>
      <?php if ( isset($call_to_action_btn_link) ): ?>
        <div class="boton">
          <a href="<?php echo esc_url($call_to_action_btn_link); ?>"><?php echo $call_to_action_btn_text; ?></a>
        </div>
      <?php endif; ?>


    </div>

  </section> <!-- /.llamada-accion -->

  <section class="footer-widgets">
    <div class="contenedor">

      <div class="contenedor-widget">
        <?php if ( is_active_sidebar('footer-widget-izq') ) {

          dynamic_sidebar('footer-widget-izq');

        } ?>
      </div>

      <div class="contenedor-widget">
        <?php if ( is_active_sidebar('footer-widget-centro') ) {

          dynamic_sidebar('footer-widget-centro');

        } ?>
      </div>

      <div class="contenedor-widget">
        <?php if ( is_active_sidebar('footer-widget-der') ) {

          dynamic_sidebar('footer-widget-der');

        } ?>
      </div>

    </div>
  </section> <!-- /.footer-widgets -->

  <?php if ( isset($bottom_footer_text) ): ?>
    <section class="bottom-footer">
      <div class="contenedor">
        <p><?php echo $bottom_footer_text; ?></p>
      </div>
    </section> <!-- /.bottom-footer -->
  <?php endif; ?>

</footer> <!-- /Footer -->

<?php wp_footer(); ?>

</body>
</html>
