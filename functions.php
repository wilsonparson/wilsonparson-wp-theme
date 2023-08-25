<?php

function enqueue_global_styles()
{
    wp_enqueue_style('global', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_global_styles');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');
