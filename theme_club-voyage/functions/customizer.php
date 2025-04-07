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

    $wp_customize->add_section('error-404__section', array(
        'title' => __('Section Error-404', 'theme_31w'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('error-404__titre', array(
        'default' => __("Oops, vous avez échoué sur l'île 404 !", 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('error-404__titre', array(
        'label' => __('Error 404 Title', 'theme_31w'),
        'section' => 'error-404__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('error-404__message', array(
        'default' => __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !", 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('error-404__message', array(
        'label' => __('Error 404 Message', 'theme_31w'),
        'section' => 'error-404__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('error-404__background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'error-404__background', array(
        'label' => __('Error-404 Background Image', 'theme_31w'),
        'section' => 'error-404__section',
    )));

    $wp_customize->add_setting('error-404__homeLink', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('error-404__homeLink', array(
        'label' => __('Error 404 Button', 'theme_31w'),
        'section' => 'error-404__section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'theme_31w_customize_register');