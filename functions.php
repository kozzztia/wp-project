<?php


function get_version (){
    return time();
}

function debian_scripts() {
    wp_enqueue_style('debian-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), get_version() );
}
add_action('wp_enqueue_scripts', 'debian_scripts');