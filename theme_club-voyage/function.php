<?php
function charger_scripts_et_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . 'style.css', array(), filemtime(get_template_directory() . '/css/style.css'));
    wp_enqueue_script('mon-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'charger_scripts_et_styles' );