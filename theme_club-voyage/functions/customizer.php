<?php

function theme_31w_customize_register($wp_customize) {
    $wp_customize->add_section('hero__section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero__titre', array(
        'default' => __("Trouver la destination de vos reves", 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('hero__titre', array(
        'label' => __('Hero Title', 'theme_31w'),
        'section' => 'hero__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero__message', array(
        'default' => __("Choisissez votre destination de rêves pour un voyage inoubliable. Que vous soyez à la recherche d'un avre de paix aux vues paradisiaques, ou à la recherche du aventure stimulante dans une contrée étrangère, nous nous engagons à vous faire vivre une expérience mémorable.", 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero__message', array(
        'label' => __('Hero Message', 'theme_31w'),
        'section' => 'hero__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero__courriel', array(
        'default' => __('myemail@gmail.com', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('hero__courriel', array(
        'label' => __('Courriel', 'theme_31w'),
        'section' => 'hero__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero__auteur', array(
        'default' => __('Marc-Olivier Babin', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('hero__auteur', array(
        'label' => __('Auteur', 'theme_31w'),
        'section' => 'hero__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero__telephone', array(
        'default' => __('514-111-1111', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero__telephone', array(
        'label' => __('Telephone', 'theme_31w'),
        'section' => 'hero__section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero__background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero__background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero__section',
    )));

    $wp_customize->add_setting('hero__couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero__couleur', array(
        'label' => __('Couleur du texte', 'theme_tp'),
        'section' => 'hero__section',
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