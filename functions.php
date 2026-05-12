<?php
// helpers
function get_version (){
    return time();
}

function get_svg_code($filename) {
    $path = get_template_directory() . '/assets/svg/' . $filename . '.svg';

    if (file_exists($path)) {
        return file_get_contents($path);
    } else {
        return null;
    }
}

function get_project_field($fieldName, $default = null) {
    $field = get_field($fieldName);

    if (is_object($field)) {
        $field = (array)$field;
    }

    if (is_array($field)) {
        return array_values($field);
    }

    return $field !== null && $field !== ''
        ? $field
        : $default;
}

function get_slide_count($index){
    switch ($index % 4) {
        case 1: return 'slide-2';
        case 2: return 'slide-3';
        case 3: return 'slide-4';
        default: return 'slide-1';
    }
}

function get_sprite($icon){
    return "/wp-content/themes/debian/assets/svg/sprite.svg" . "?v=" . get_version() . "#" . $icon ;
}
function debian_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'debian_setup');

// scripts
function debian_scripts() {
    wp_enqueue_style('debian-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), get_version() );
    wp_enqueue_script('debian-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), get_version(), true);
    wp_enqueue_script('debian-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), get_version(), true);
    wp_enqueue_script('debian-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), get_version(), true);
}
add_action('wp_enqueue_scripts', 'debian_scripts');