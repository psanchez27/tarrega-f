<?php

//Load theme customizer
require get_template_directory() . '/inc/customizer.php';


function tarrega_enqueue_scripts(){
  //load info stylesheet (style.css in root)
  wp_enqueue_style( 'tarrega-thee-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
  //load nain styles stysheet
  wp_enqueue_style( 'tarrega-main-styles', get_template_directory_uri() . '/style-main.css', array(  ), wp_get_theme()->get( 'version' ), 'all' );

  //Load Font Awesome
  wp_enqueue_script( 'fa', 'https://kit.fontawesome.com/f323f1d940.js', array(), '6.4.2' );
  //Load main scripts
  wp_enqueue_script( 'tarrega-main-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), wp_get_theme()->get( 'version' ), true );
  //Load fixed header script
  wp_enqueue_script( 'tarrega-fixed-header-script', get_template_directory_uri() . '/assets/js/header-shrink.js', array(), wp_get_theme()->get( 'version' ), true );
}

add_action( 'wp_enqueue_scripts', 'tarrega_enqueue_scripts' );



// config function
function tarrega_config(){
  // Register nav menus
  register_nav_menus(
    array(
      'tarrega_primary_menu' => 'Main Menu',
      'tarrega_footer_menu' => 'Footer Menu'
    )
  );


  // Add theme support
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  // add_theme_support( 'editor-color-palette' );

  //Block editor support
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'editor-styles' );
  add_editor_style( '/assets/css/style-editor.css' );
}

add_action( 'after_setup_theme', 'tarrega_config' );



//WP Sidebars
function tarrega_sidebars(){
  register_sidebar(
    array(
      'name' => 'Blog Post Sidebar',
      'id' => 'blog-sidebar',
      'description' => 'The sidebar for the individual post page.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgets-title">',
      'after_title' => '</h4>'
    )
  );
}

add_action( 'widgets_init', 'tarrega_sidebars' );










// Customizer API css options ********************************************************************************
function tarrega_customize_css(){
  //Sticky header styles
  //Check if sticky header option is enabled in the customizer
  if ( get_theme_mod( 'set_sticky_header' )  == 1 ) : ?>

    <script>
      header.classList.add('fixed')
    </script>

    <?php else : ?>

    <script>
      fixedHeader = document.getElementById('header')
      header.classList.remove('fixed')
    </script>


  <?php endif; ?>



  <!-- Banner alert styles  -->

  <style>
    .header-top{
      background-color: <?php echo get_theme_mod( 'set_banner_bg_color' ); ?>;
      color: <?php echo get_theme_mod( 'set_banner_text_color' ); ?>;
    }

  /* Footer Style */
    footer{
      background-color: <?php echo get_theme_mod( 'set_footer_background_color' ); ?>;
      color: <?php echo get_theme_mod( 'set_footer_text_color' ); ?>;
    }
    footer ul li a{
      color: <?php echo get_theme_mod( 'set_footer_text_color' ); ?>;
    }

  </style>


  <?php
}

add_action( 'wp_footer', 'tarrega_customize_css' );