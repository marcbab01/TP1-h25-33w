<?php

function theme_31w_customize_register($wp_customize) {
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Marc-Olivier Babin', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('514-111-1111', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Telephone', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero_section',
    )));

    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_tp'),
        'section' => 'hero_section',
    )));
}
add_action('customize_register', 'theme_31w_customize_register');