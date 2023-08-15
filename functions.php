<?php

function tarrega_enqueue_scripts(){
  //load frontend styles
  wp_enqueue_style( 'tarrega-frontend-styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
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
}

add_action( 'after_setup_theme', 'tarrega_config' );