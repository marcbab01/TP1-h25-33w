<?php
/**
 * Functions and definitions.
 *
 * @package WordPress
 * @subpackage Club_de_Voyage
 * @since Club de Voyage 1.0
 */

function club_de_voyage_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Menu Principal', 'club-de-voyage'),
        'footer-menu' => __('Menu Pied de Page', 'club-de-voyage'),
    ));
}
add_action('after_setup_theme', 'club_de_voyage_setup');

function add_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');