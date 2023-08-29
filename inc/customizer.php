<?php

function tarrega_customizer( $wp_customize ){
// 1 copyright section
$wp_customize->add_section(
  'sec_copyright',
  array(
    'title' => 'Copyright Settings',
    'description' => 'Copyright Settings'
  )
);

$wp_customize->add_setting(
  'set_copyright',
  array(
    'type' => 'theme_mod',
    'default' => 'Copyright X - All Rights Reserved',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_copyright',
  array(
    'label' => 'Copyright Information',
    'description' => 'Please, type your copyright here',
    'section' => 'sec_copyright',
    'type' => 'text'
  )
);

//Header section
$wp_customize->add_section(
  'sec_header',
  array(
    'title' => 'Header',
    'description' => 'Customize the settings for your header',
    'priority' => 30
  )
);

//Setting for Fixed header
$wp_customize->add_setting(
  'set_sticky_header',
  array(
    'type' => 'theme_mod',
    'default' => 0
  )
);

$wp_customize->add_control(
  'set_sticky_header',
  array(
    'label' => 'Stick to top',
    'description' => 'Fix the main header to the top of the page',
    'section' => 'sec_header',
    'type' => 'checkbox'
  )
);

//Settings for header banner text
$wp_customize->add_setting(
  'set_banner',
  array(
    'type' => 'theme_mod',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_banner',
  array(
    'label' => 'Banner Alert',
    'description' => 'Set an alert banner above the main header',
    'section' => 'sec_header',
    'type' => 'text'
  )
);

//Settings for header banner styling


}

add_action( 'customize_register', 'tarrega_customizer' );