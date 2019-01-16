<?php

function homestyle_theme_setup(){
    //featured image support
    add_theme_support('post-thumbnails');

    //Nav Menus
    register_nav_menus(array(
        'primary'  => __('Primary Menu'),
        'footer'   => __('Footer Menu') 
    ));

    
    
}

add_action('after_setup_theme', 'homestyle_theme_setup');

