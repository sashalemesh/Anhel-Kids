<?php

add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('reviews', array(
        'labels'             => array(
            'name'               => 'NewPost', // Основное название типа записи
            'singular_name'      => 'Отзыв', // отдельное название записи типа reviews
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый отзыв',
            'edit_item'          => 'Редактировать отзыв',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Посмотреть отзыв',
            'search_items'       => 'Найти отзыв',
            'not_found'          =>  'Отзыв не найден',
            'not_found_in_trash' => 'В корзине отзывов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Новый отзыв'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
}

//my_theme_options
add_action('init', 'my_chea_custom_init');
function my_chea_custom_init(){
    register_post_type('chair', array(
        'labels'             => array(
            'name'               => 'Новый стульчик', // Основное название типа записи
            'singular_name'      => 'Опция', // отдельное название записи типа reviews
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый стульчик',
            'edit_item'          => 'Редактировать стульчик',
            'new_item'           => '',
            'view_item'          => 'Посмотреть стульчик',
            'search_items'       => 'Найти стульчик',
            'not_found'          =>  'Стульчик не найден',
            'not_found_in_trash' => 'В корзине не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Стульчики'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
}




//    do_action( 'woocommerce_register_post_type' );
//
//    $permalinks = get_option( 'woocommerce_permalinks' );
//    $product_permalink = empty( $permalinks['product_base'] ) ? _x( 'product1', 'slug', 'woocommerce' ) : $permalinks['product_base'];
//
//    register_post_type( 'product1',
//        apply_filters( 'woocommerce_register_post_type_product',
//            array(
//                'labels'              => array(
//                    'name'                  => __( 'Products', 'woocommerce' ),
//                    'singular_name'         => __( 'Product', 'woocommerce' ),
//                    'menu_name'             => _x( 'Products', 'Admin menu name', 'woocommerce' ),
//                    'add_new'               => __( 'Add Product', 'woocommerce' ),
//                    'add_new_item'          => __( 'Add New Product', 'woocommerce' ),
//                    'edit'                  => __( 'Edit', 'woocommerce' ),
//                    'edit_item'             => __( 'Edit Product', 'woocommerce' ),
//                    'new_item'              => __( 'New Product', 'woocommerce' ),
//                    'view'                  => __( 'View Product', 'woocommerce' ),
//                    'view_item'             => __( 'View Product', 'woocommerce' ),
//                    'search_items'          => __( 'Search Products', 'woocommerce' ),
//                    'not_found'             => __( 'No Products found', 'woocommerce' ),
//                    'not_found_in_trash'    => __( 'No Products found in trash', 'woocommerce' ),
//                    'parent'                => __( 'Parent Product', 'woocommerce' ),
//                    'featured_image'        => __( 'Product Image', 'woocommerce' ),
//                    'set_featured_image'    => __( 'Set product image', 'woocommerce' ),
//                    'remove_featured_image' => __( 'Remove product image', 'woocommerce' ),
//                    'use_featured_image'    => __( 'Use as product image', 'woocommerce' ),
//                    'insert_into_item'      => __( 'Insert into product', 'woocommerce' ),
//                    'uploaded_to_this_item' => __( 'Uploaded to this product', 'woocommerce' ),
//                    'filter_items_list'     => __( 'Filter products', 'woocommerce' ),
//                    'items_list_navigation' => __( 'Products navigation', 'woocommerce' ),
//                    'items_list'            => __( 'Products list', 'woocommerce' ),
//                ),
//                'description'         => __( 'This is where you can add new products to your store.', 'woocommerce' ),
//                'public'              => true,
//                'show_ui'             => true,
//                'capability_type'     => 'product',
//                'map_meta_cap'        => true,
//                'publicly_queryable'  => true,
//                'exclude_from_search' => false,
//                'hierarchical'        => false, // Hierarchical causes memory issues - WP loads all records!
//                'rewrite'             => $product_permalink ? array( 'slug' => untrailingslashit( $product_permalink ), 'with_front' => false, 'feeds' => true ) : false,
//                'query_var'           => true,
//                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'publicize', 'wpcom-markdown' ),
//                'has_archive'         => ( $shop_page_id = wc_get_page_id( 'shop' ) ) && get_post( $shop_page_id ) ? get_page_uri( $shop_page_id ) : 'shop',
//                'show_in_nav_menus'   => true
//            )
//        )
//    );
//
//    register_post_type( 'product_variation',
//        apply_filters( 'woocommerce_register_post_type_product_variation',
//            array(
//                'label'        => __( 'Variations', 'woocommerce' ),
//                'public'       => false,
//                'hierarchical' => false,
//                'supports'     => false,
//                'capability_type' => 'product'
//            )
//        )
//    );
//
//    wc_register_order_type(
//        'shop_order',
//        apply_filters( 'woocommerce_register_post_type_shop_order',
//            array(
//                'labels'              => array(
//                    'name'                  => __( 'Orders', 'woocommerce' ),
//                    'singular_name'         => _x( 'Order', 'shop_order post type singular name', 'woocommerce' ),
//                    'add_new'               => __( 'Add Order', 'woocommerce' ),
//                    'add_new_item'          => __( 'Add New Order', 'woocommerce' ),
//                    'edit'                  => __( 'Edit', 'woocommerce' ),
//                    'edit_item'             => __( 'Edit Order', 'woocommerce' ),
//                    'new_item'              => __( 'New Order', 'woocommerce' ),
//                    'view'                  => __( 'View Order', 'woocommerce' ),
//                    'view_item'             => __( 'View Order', 'woocommerce' ),
//                    'search_items'          => __( 'Search Orders', 'woocommerce' ),
//                    'not_found'             => __( 'No Orders found', 'woocommerce' ),
//                    'not_found_in_trash'    => __( 'No Orders found in trash', 'woocommerce' ),
//                    'parent'                => __( 'Parent Orders', 'woocommerce' ),
//                    'menu_name'             => _x( 'Orders', 'Admin menu name', 'woocommerce' ),
//                    'filter_items_list'     => __( 'Filter orders', 'woocommerce' ),
//                    'items_list_navigation' => __( 'Orders navigation', 'woocommerce' ),
//                    'items_list'            => __( 'Orders list', 'woocommerce' ),
//                ),
//                'description'         => __( 'This is where store orders are stored.', 'woocommerce' ),
//                'public'              => false,
//                'show_ui'             => true,
//                'capability_type'     => 'shop_order',
//                'map_meta_cap'        => true,
//                'publicly_queryable'  => false,
//                'exclude_from_search' => true,
//                'show_in_menu'        => current_user_can( 'manage_woocommerce' ) ? 'woocommerce' : true,
//                'hierarchical'        => false,
//                'show_in_nav_menus'   => false,
//                'rewrite'             => false,
//                'query_var'           => false,
//                'supports'            => array( 'title', 'comments', 'custom-fields' ),
//                'has_archive'         => false,
//            )
//        )
//    );
//
//    wc_register_order_type(
//        'shop_order_refund',
//        apply_filters( 'woocommerce_register_post_type_shop_order_refund',
//            array(
//                'label'                            => __( 'Refunds', 'woocommerce' ),
//                'capability_type'                  => 'shop_order',
//                'public'                           => false,
//                'hierarchical'                     => false,
//                'supports'                         => false,
//                'exclude_from_orders_screen'       => false,
//                'add_order_meta_boxes'             => false,
//                'exclude_from_order_count'         => true,
//                'exclude_from_order_views'         => false,
//                'exclude_from_order_reports'       => false,
//                'exclude_from_order_sales_reports' => true,
//                'class_name'                       => 'WC_Order_Refund'
//            )
//        )
//    );
//
//    if ( 'yes' == get_option( 'woocommerce_enable_coupons' ) ) {
//        register_post_type( 'shop_coupon',
//            apply_filters( 'woocommerce_register_post_type_shop_coupon',
//                array(
//                    'labels'              => array(
//                        'name'                  => __( 'Coupons', 'woocommerce' ),
//                        'singular_name'         => __( 'Coupon', 'woocommerce' ),
//                        'menu_name'             => _x( 'Coupons', 'Admin menu name', 'woocommerce' ),
//                        'add_new'               => __( 'Add Coupon', 'woocommerce' ),
//                        'add_new_item'          => __( 'Add New Coupon', 'woocommerce' ),
//                        'edit'                  => __( 'Edit', 'woocommerce' ),
//                        'edit_item'             => __( 'Edit Coupon', 'woocommerce' ),
//                        'new_item'              => __( 'New Coupon', 'woocommerce' ),
//                        'view'                  => __( 'View Coupons', 'woocommerce' ),
//                        'view_item'             => __( 'View Coupon', 'woocommerce' ),
//                        'search_items'          => __( 'Search Coupons', 'woocommerce' ),
//                        'not_found'             => __( 'No Coupons found', 'woocommerce' ),
//                        'not_found_in_trash'    => __( 'No Coupons found in trash', 'woocommerce' ),
//                        'parent'                => __( 'Parent Coupon', 'woocommerce' ),
//                        'filter_items_list'     => __( 'Filter coupons', 'woocommerce' ),
//                        'items_list_navigation' => __( 'Coupons navigation', 'woocommerce' ),
//                        'items_list'            => __( 'Coupons list', 'woocommerce' ),
//                    ),
//                    'description'         => __( 'This is where you can add new coupons that customers can use in your store.', 'woocommerce' ),
//                    'public'              => false,
//                    'show_ui'             => true,
//                    'capability_type'     => 'shop_coupon',
//                    'map_meta_cap'        => true,
//                    'publicly_queryable'  => false,
//                    'exclude_from_search' => true,
//                    'show_in_menu'        => current_user_can( 'manage_woocommerce' ) ? 'woocommerce' : true,
//                    'hierarchical'        => false,
//                    'rewrite'             => false,
//                    'query_var'           => false,
//                    'supports'            => array( 'title' ),
//                    'show_in_nav_menus'   => false,
//                    'show_in_admin_bar'   => true
//                )
//            )
//        );
//    }
//
//    register_post_type( 'shop_webhook',
//        apply_filters( 'woocommerce_register_post_type_shop_webhook',
//            array(
//                'labels'              => array(
//                    'name'               => __( 'Webhooks', 'woocommerce' ),
//                    'singular_name'      => __( 'Webhook', 'woocommerce' ),
//                    'menu_name'          => _x( 'Webhooks', 'Admin menu name', 'woocommerce' ),
//                    'add_new'            => __( 'Add Webhook', 'woocommerce' ),
//                    'add_new_item'       => __( 'Add New Webhook', 'woocommerce' ),
//                    'edit'               => __( 'Edit', 'woocommerce' ),
//                    'edit_item'          => __( 'Edit Webhook', 'woocommerce' ),
//                    'new_item'           => __( 'New Webhook', 'woocommerce' ),
//                    'view'               => __( 'View Webhooks', 'woocommerce' ),
//                    'view_item'          => __( 'View Webhook', 'woocommerce' ),
//                    'search_items'       => __( 'Search Webhooks', 'woocommerce' ),
//                    'not_found'          => __( 'No Webhooks found', 'woocommerce' ),
//                    'not_found_in_trash' => __( 'No Webhooks found in trash', 'woocommerce' ),
//                    'parent'             => __( 'Parent Webhook', 'woocommerce' )
//                ),
//                'public'              => false,
//                'show_ui'             => true,
//                'capability_type'     => 'shop_webhook',
//                'map_meta_cap'        => true,
//                'publicly_queryable'  => false,
//                'exclude_from_search' => true,
//                'show_in_menu'        => false,
//                'hierarchical'        => false,
//                'rewrite'             => false,
//                'query_var'           => false,
//                'supports'            => false,
//                'show_in_nav_menus'   => false,
//                'show_in_admin_bar'   => false
//            )
//        )
//    );




