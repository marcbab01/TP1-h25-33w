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
    ));
}
add_action('after_setup_theme', 'club_de_voyage_setup');