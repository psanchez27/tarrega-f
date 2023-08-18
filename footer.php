<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="footer-main">
    <p class="copyright"><?php echo get_theme_mod( 'set_copyright', 'Powered by Pablo!!' ); ?></p>
    <div class="footer-menu">
      <nav>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'tarrega_footer_menu'
            )
          );
        ?>
      </nav>
    </div>
  </div>
</footer>
</body>
</html>