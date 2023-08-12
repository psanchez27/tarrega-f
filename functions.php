<?php

function tarrega_enqueue_scripts(){
  //load frontend styles
  wp_enqueue_style( 'tarrega-frontend-styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'tarrega_enqueue_scripts' );