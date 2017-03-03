<?php
require_once ('lib/scripts.php');
require_once ('lib/naw_menu.php');
require_once ('lib/post_type.php');
require_once ('lib/my_woocommerce.php');
require_once ('lib/template_woocommerce.php');
//require_once ('lib/themeoptions.php');
//require_once ('lib/adminajax.php');

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
add_image_size( 'spec_thumb1', 329, 257, true );





/* Добавляем блоки в основную колонку на страницах постов и пост. страниц */
function myplugin_add_custom_box() {
    $screens = array( 'post', 'page' );
    foreach ( $screens as $screen ) {
        add_meta_box('myplugin_sectionid', 'Название мета блока', 'myplugin_meta_box_callback', $screen, 'side');
    }
}
add_action('add_meta_boxes', 'myplugin_add_custom_box');

/* HTML код блока */
function myplugin_meta_box_callback() {
    // Используем nonce для верификации
    wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );
    $post_meta = get_post_meta( get_the_ID(), '_my_meta_value_key', 1 );
    if($post_meta == '')
        $post_meta = 'default';

    // Поля формы для введения данных
//    echo '<label for="myplugin_new_field">' . __("Description for this field", 'myplugin_textdomain' ) . '</label> ';
//    echo '<input type="text" id= "myplugin_new_field" name="myplugin_new_field" value="'.$post_meta.'" size="25" />';
    
    echo"<select name='book'>
            <option>Html</option>
            <option>css</option>
            </select>";
}

/* Сохраняем данные, когда пост сохраняется */
function myplugin_save_postdata( $post_id ) {
    // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
    if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
        return $post_id;

    // проверяем, если это автосохранение ничего не делаем с данными нашей формы.
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    // проверяем разрешено ли пользователю указывать эти данные
    if ( 'page' == $_POST['post_type'] && ! current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    } elseif( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    // Убедимся что поле установлено.
    if ( ! isset( $_POST['myplugin_new_field'] ) )
        return;

    // Все ОК. Теперь, нужно найти и сохранить данные
    // Очищаем значение поля input.
    $my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

    // Обновляем данные в базе данных.
    update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'myplugin_save_postdata' );


//
