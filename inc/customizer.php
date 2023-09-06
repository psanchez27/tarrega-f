<?php

function tarrega_customizer( $wp_customize ){
// 1 copyright section
$wp_customize->add_section(
  'sec_copyright',
  array(
    'title' => 'Footer',
    'description' => 'Footer Settings'
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

//Background colors
$wp_customize->add_setting(
  'set_banner_bg_color',
  array(
    'type' => 'theme_mod',
    'default' => '#333',
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_banner_bg_color_control',
    array(
      'label' => "Background color",
      'description' => 'Background color for banner alert',
      'section' => 'sec_header',
      'settings' => 'set_banner_bg_color'
) ) );

//Text color
$wp_customize->add_setting(
  'set_banner_text_color',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_banner_text_color_control',
    array(
      'label' => 'Text Color',
      'description' => 'Text color for banner alert',
      'section' => 'sec_header',
      'settings' => 'set_banner_text_color'
    )
  )
);

//Customize main theme colors

$wp_customize->add_section(
  'sec_colors',
  array(
    'title' => 'Colors',
    'description' => 'Cusomtize your themes color swatch',
    'priority' => 30
  )
);

//Primary
$wp_customize->add_setting(
  'set_color_primary',
  array(
    'type' => 'theme_mod',
    'default' => '#A1CCD1'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_primary_color',
    array(
      'label' => 'Primary Color',
      'description' => 'Primary color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_primary'
    )
  )
);

//Secondary
$wp_customize->add_setting(
  'set_color_secondary',
  array(
    'type' => 'theme_mod',
    'default' => '#7C9D96'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_seconday_color',
    array(
      'label' => 'Secondary Color',
      'description' => 'Secondary color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_secondary'
    )
  )
);

//Primary Background
$wp_customize->add_setting(
  'set_color_primary_background',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_primary_background_color',
    array(
      'label' => 'Primary Background Color',
      'description' => 'Primary background color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_primary_background'
    )
  )
);

//Secondary Background
$wp_customize->add_setting(
  'set_color_secondary_background',
  array(
    'type' => 'theme_mod',
    'default' => '#111'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_secondary_background_color',
    array(
      'label' => 'Secondary Background Color',
      'description' => 'Secondary background color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_secondary_background'
    )
  )
);

//Primary Text
$wp_customize->add_setting(
  'set_color_primary_text',
  array(
    'type' => 'theme_mod',
    'default' => '#000'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_primary_text_color',
    array(
      'label' => 'Primary Text Color',
      'description' => 'Primary text color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_primary_text'
    )
  )
);

//Secondary Text
$wp_customize->add_setting(
  'set_color_secondary_text',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_secondary_text_color',
    array(
      'label' => 'Secondary Text Color',
      'description' => 'Secondary text color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_secondary_text'
    )
  )
);

//Extra Color 1
$wp_customize->add_setting(
  'set_color_extra_1',
  array(
    'type' => 'theme_mod',
    'default' => '#E9B384'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_extra_color_1',
    array(
      'label' => 'Extra Color 1',
      'description' => 'Extra color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_extra_1'
    )
  )
);

//Extra Color 2
$wp_customize->add_setting(
  'set_color_extra_2',
  array(
    'type' => 'theme_mod',
    'default' => '#F4F2DE'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_extra_color_2',
    array(
      'label' => 'Extra Color 2',
      'description' => 'Extra color for theme',
      'section' => 'sec_colors',
      'settings' => 'set_color_extra_2'
    )
  )
);

}

add_action( 'customize_register', 'tarrega_customizer' );