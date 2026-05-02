<?php
// helpers
function get_version (){
    return time();
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

//function debian_register_menus() {
//    register_nav_menus(array(
//        'primary' => __('Primary Menu', 'debian'),
//    ));
//}
//add_action('after_setup_theme', 'debian_register_menus');