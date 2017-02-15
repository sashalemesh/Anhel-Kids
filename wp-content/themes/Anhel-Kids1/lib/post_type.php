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