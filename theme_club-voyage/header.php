<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Principal</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="entete global">
      <nav class="menu-navigation">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.jpg" alt="" class="entete__logo" style="width: 100px; height: 100px;">
        <?php
          wp_nav_menu(array(
            'menu' => 'principal',
            'theme_location' => 'main-menu',
            'container' => false,
            ));
        ?>
        <form role="search" method="get" class="recherche" action="<?php echo home_url('/'); ?>">
          <label>
            <span><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="recherche__champ" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
          </label>
          <button type="submit" class="recherche__btn"><?php echo esc_html_x('Search', 'submit button') ?></button>
        </form>
      </nav>
    </header>