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
              <li class="menu__li"><a href="#" class="menu__a">Promotions</a></li>
              <li class="menu__li"><a href="#" class="menu__a">Reservation</a></li>
              <li class="menu__li"><a href="#" class="menu__a">A Propos</a></li>
              <li class="menu__li"><a href="#" class="menu__a">Evenements</a></li>
              <li class="menu__li"><a href="#" class="menu__a">Contactez-nous</a></li>
            </ul>
    </nav>