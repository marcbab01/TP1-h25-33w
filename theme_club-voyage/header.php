<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Principal</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="entete global">
        <div class="entete__dessus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.jpg" alt="" class="entete__logo" style="width: 100px; height: 100px;">
          <div class="entete__recherche">
            <input type="text" class="recherche__input" placeholder="Search...">
          </div>
        </div>
      </div>
    </header>
    <nav class="menu">
            <ul class="menu__contenu">
            <?php
            wp_nav_menu(array(
              'menu' => 'principal',
              'theme_location' => 'main-menu',
              'container' => false,
            ));
            ?>
            </ul>

            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
              <label>
                <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
              </label>
              <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button') ?></button>
            </form>
    </nav>