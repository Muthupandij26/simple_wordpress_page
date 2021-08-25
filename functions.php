<?php

function load_stylesheet() 
{
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheet');



function load_js() 
{
    wp_register_script('customjs', get_template_directory_uri(). '/scripts.js', array(), false, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');

register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);