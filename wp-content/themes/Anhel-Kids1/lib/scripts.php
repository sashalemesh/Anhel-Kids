<?php

function my_scripts(){
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid-3.3.1.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
//    wp_enqueue_style('font', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');

//    wp_deregister_script( 'jquery' );
//    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), false, false);
//    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('jquery-2', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), false, false);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, false);
    wp_enqueue_script('snap', get_template_directory_uri() . '/js/snap.svg.js', array(), false, false);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, false);
    wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array(), false, false);

}

add_action('wp_enqueue_scripts', 'my_scripts');

