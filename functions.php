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



// Add second featured image
add_action( 'add_meta_boxes', 'listing_image_add_metabox' );
function listing_image_add_metabox () {
    add_meta_box( 'listingimagediv', __( 'Listing Image', 'text-domain' ), 'listing_image_metabox', 'page', 'side', 'low');
}

function listing_image_metabox ( $post ) {
    global $content_width, $_wp_additional_image_sizes;

    $image_id = get_post_meta( $post->ID, '_listing_image_id', true );

    $old_content_width = $content_width;
    $content_width = 254;

    if ( $image_id && get_post( $image_id ) ) {

        if ( ! isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
            $thumbnail_html = wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
        } else {
            $thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
        }

        if ( ! empty( $thumbnail_html ) ) {
            $content = $thumbnail_html;
            $content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_listing_image_button" >' . esc_html__( 'Remove listing image', 'text-domain' ) . '</a></p>';
            $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="' . esc_attr( $image_id ) . '" />';
        }

        $content_width = $old_content_width;
    } else {

        $content = '<img src="" style="width:' . esc_attr( $content_width ) . 'px;height:auto;border:0;display:none;" />';
        $content .= '<p class="hide-if-no-js"><a title="' . esc_attr__( 'Set listing image', 'text-domain' ) . '" href="javascript:;" id="upload_listing_image_button" id="set-listing-image" data-uploader_title="' . esc_attr__( 'Choose an image', 'text-domain' ) . '" data-uploader_button_text="' . esc_attr__( 'Set listing image', 'text-domain' ) . '">' . esc_html__( 'Set listing image', 'text-domain' ) . '</a></p>';
        $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="" />';

    }

    echo $content;
}

add_action( 'save_post', 'listing_image_save', 10, 1 );
function listing_image_save ( $post_id ) {
    if( isset( $_POST['_listing_cover_image'] ) ) {
        $image_id = (int) $_POST['_listing_cover_image'];
        update_post_meta( $post_id, '_listing_image_id', $image_id );
    }
}


function wpdocs_selectively_enqueue_admin_script( $hook ) {
    if ( 'post.php' != $hook ) {
        return;
    }
    wp_enqueue_script( 'secondimage', get_template_directory_uri() . '/js/secondimage.js', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );


?>


