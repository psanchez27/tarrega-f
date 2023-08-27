<?php

//Load theme customizer
require get_template_directory() . '/inc/customizer.php';


function tarrega_enqueue_scripts(){
  //load info stylesheet (style.css in root)
  wp_enqueue_style( 'tarrega-thee-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
  //load nain styles stysheet
  wp_enqueue_style( 'tarrega-main-styles', get_template_directory_uri() . '/style-main.css', array(), wp_get_theme()->get( 'version' ), 'all' );

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



//Add css from customizer API
function tarrega_customize_css(){ ?>

<script>
  console.log(<?php echo get_theme_mod( 'set_sticky_header' )
 ?>);
</script>


  
<?php }

add_action( 'wp_head', 'tarrega_customize_css' );