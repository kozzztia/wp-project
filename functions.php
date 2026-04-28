<?php
// Здесь будут функции темы


function debian_scripts() {
    wp_enqueue_style('debian-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.1');
//    wp_enqueue_script('zefir-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true);
//    wp_enqueue_script('zefir-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), '1.0.0', true);
//    wp_enqueue_script('zefir-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'debian_scripts');