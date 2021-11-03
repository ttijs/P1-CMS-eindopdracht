<?php

function mijnthema_menu() {
    register_nav_menu( 'hoofdmenu', 'Het Hoofdmenu' );
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


?>
