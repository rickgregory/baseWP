<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );

register_nav_menu( 'Main', __( 'Main', 'base' ) );
register_nav_menu( 'Footer', __( 'Footer', 'base' ) );
register_nav_menu( 'Secondary', __( 'Secondary', 'base' ) );

/*  Enqueue css
/* ------------------------------------ */
function blueprint_styles()
{
  wp_register_style( 'screen', get_template_directory_uri().'/style.css', array(), filemtime( get_template_directory().'/style.css' ) );
	wp_enqueue_style( 'screen' );
}
add_action( 'wp_enqueue_scripts', 'blueprint_styles' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


?>
