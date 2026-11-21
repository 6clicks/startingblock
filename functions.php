<?php

add_action('after_setup_theme', function () {
    add_editor_style('style.css');
});

add_action('wp_enqueue_scripts', function () {
    $path = get_stylesheet_directory() . '/style.css';
    wp_enqueue_style('startingblock', get_stylesheet_uri(), [], filemtime($path));
});
