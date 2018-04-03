<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */  
 add_action( 'wp_enqueue_scripts', 'type_child_style' );
  function type_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}
function social_widget_init() {
register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4 class="widget-title">',
        'name' => __( 'Social Widget Area', 'type-child' ),
        'id' => 'social-widget-area',
        'description' => __( 'The Social widget area', 'type-child' )
]);
}
add_action( 'widgets_init', 'social_widget_init' );