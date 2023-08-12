<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="footer-main">
    <div class="copyright">Copyright 2023 - Tarrega - All Rights Reserved.</div>
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