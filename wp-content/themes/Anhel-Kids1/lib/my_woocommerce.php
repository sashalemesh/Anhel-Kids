<?php
//WooCommerce
//First unhook the WooCommerce wrappers:
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Then hook in your own functions to display the wrappers your theme requires:
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

//Declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//products thumbnail
//function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
//    global $post;
//    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
//
//    if ( has_post_thumbnail() ) {
//        $props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
//        return '<div class="img" style="background-image:url('.get_the_post_thumbnail_url().');"></div>';
//
//    } elseif ( wc_placeholder_img_src() ) {
//        return wc_placeholder_img( $image_size );
//    }
//}

// define the woocommerce_product_add_to_cart_text callback
function filter_woocommerce_product_add_to_cart_text( $text, $instance ) {
    $text = 'Купить';
    return $text;
};

// add the filter
add_filter( 'woocommerce_product_add_to_cart_text', 'filter_woocommerce_product_add_to_cart_text', 10, 2 );


/**
 * Show the product title in the product loop. By default this is an H3.
*/
function woocommerce_template_loop_product_title() {
    echo '<h5>' . get_the_title() . '</h5>';
}

