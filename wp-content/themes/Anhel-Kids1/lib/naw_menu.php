<?php
function kids_setup()
{
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'menu_1' => 'Menu 1',
                //'menu_2' => 'Menu 2'
            )
        );
    }
}
    add_action('after_setup_theme', 'kids_setup');