<?php
require_once ('lib/scripts.php');
require_once ('lib/naw_menu.php');
require_once ('lib/post_type.php');
require_once ('lib/my_woocommerce.php');


function my_kids_setup(){
    //Plug-in the possibility of transferring topics
    load_theme_textdomain('kids');
    //Allow plugins to modify the meta tag <title>
    add_theme_support('title-tag');
    //Adding support for custom log using Customizer wordpress
    add_theme_support('custom-logo', array(
        'height' => 121,
        'width' => 390,
        'flex-height' => true));
    //Support sabalow to our posts
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(226,177);



    //Support for html markup to output search forms, waste and headers
    add_theme_support('html5', array('search_form', 'comment-form',
        'comment-list', 'galleri', 'caption'));
    //Activate the support for different post formats
    add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));

}

add_action('after_setup_theme', 'my_kids_setup');

//The post cut the output by number of characters. Applies to the_excerpt()
function new_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');
//Added after cutting three points. Applies to the_excerpt()
add_filter('excerpt_more', function($more) {
    return '...';
});


//checked the size:
add_image_size( 'spec_thumb', 278, 216, true );
add_image_size( 'spec_thumb1', 329.76, 257, true );
