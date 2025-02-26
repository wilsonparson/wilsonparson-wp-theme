<?php

function enqueue_global_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('global', get_template_directory_uri() . '/css/style.css', array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'enqueue_global_styles');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_filter('comment_form_default_fields', 'remove_comment_fields');

function remove_comment_fields($fields)
{
    unset($fields['url']);
    unset($fields['cookies']);
    return $fields;
}
