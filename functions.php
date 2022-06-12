<?php

function mijnthema_menu() {
    register_nav_menu( 'mijn_custom_menu', 'Het Hoofdmenu' );
}
add_action('init', 'mijnthema_menu');


function mijn_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'mijn-sidebar-widgets',
		// 'before_widget' => '<div class="side-widget">',
		// 'after_widget'  => '</div>',
		// 'before_title'  => '<h3 class="rounded">',
		// 'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => 'Footer widhtet gebied',
		'id'            => 'mijn-footer-widgets',
		// 'before_widget' => '<div class="side-widget">',
		// 'after_widget'  => '</div>',
		// 'before_title'  => '<h3 class="rounded">',
		// 'after_title'   => '</h3>',
	) );



}
add_action( 'widgets_init', 'mijn_widgets_init' );


add_theme_support( 'post-thumbnails' );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 605, 605 ); // Soft Crop Mode
add_image_size( 'singlepost-thumb', 590, 9999);


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


?>
