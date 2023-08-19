<?php

//Load theme customizer
require get_template_directory() . '/inc/customizer.php';


function tarrega_enqueue_scripts(){
  //load info stylesheet (style.css in root)
  wp_enqueue_style( 'tarrega-thee-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
  //load nain styles stysheet
  wp_enqueue_style( 'tarrega-main-styles', get_template_directory_uri() . '/style-main.css', array(), wp_get_theme()->get( 'version' ), 'all' );
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

  //Block editor support
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'editor-styles' );
  add_editor_style( '/assets/css/style-editor.css' );
}

add_action( 'after_setup_theme', 'tarrega_config' );