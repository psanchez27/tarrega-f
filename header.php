<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Start -->
<header>
  <div class="header-main">
    <div class="branding">
      <!-- Logo or site title -->
      <?php
        if ( has_custom_logo() ) :
          the_custom_logo();
        else: ?>
          <a href="<?php esc_url( bloginfo( 'url' ) ); ?>">
            <div class="site-title"><?php bloginfo( 'title' ); ?></div>
          </a>
        <?php endif; ?>
    </div>

    <!-- Mobile menu toggle -->
    <button id="mobile-menu-toggle" class="mobile-menu-toggle"><i class="fa-solid fa-bars"></i></button>

    <!-- Nav menu -->
    <nav id="main-menu" class="main-menu">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'tarrega_primary_menu'
          )
        );
      ?>
    </nav>
  </div>
</header>