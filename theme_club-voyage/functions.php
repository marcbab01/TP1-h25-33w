<?php
/**
 * Functions and definitions.
 *
 * @package WordPress
 * @subpackage Club_de_Voyage
 * @since Club de Voyage 1.0
 */
function register_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Menu Principal'),
        'footer-menu' => __('Menu Pied de Page'),
        '404-menu' => __('Menu Error 404'),
    ));
}
add_action('after_setup_theme', 'club_de_voyage_setup');

function register_my_menu() {
    register_nav_menu('error-404-menu', __('Menu 404', 'theme_31w'));
}
add_action('after_setup_theme', 'register_my_menu');

$functions_dir = get_template_directory() . '/functions/';
include_once $functions_dir . 'customizer.php';

$function_files = array(
    'customizer.php',
    'scripts.php',
    'widgets.php',
);

foreach ($function_files as $file) {
    include_once $functions_dir . $file;
}