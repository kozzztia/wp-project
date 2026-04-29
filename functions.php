<?php


function get_version (){
    return time();
}

function debian_scripts() {
    wp_enqueue_style('debian-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), get_version() );
    wp_enqueue_script('zefir-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), get_version(), true);
    wp_enqueue_script('zefir-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), get_version(), true);
    wp_enqueue_script('zefir-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), get_version(), true);
}
add_action('wp_enqueue_scripts', 'debian_scripts');