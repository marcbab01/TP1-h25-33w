<footer>
      <div class="pieds-de-page">
        <div class="pieds-de-page__contenu">
          <div class="pieds-de-page__colonne">
            <h3>Trouvez-nous</h3>
            <ul class="colonne__contenu">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => 'footer-menu',
              ));
            ?>
            </ul>
          </div>
          <div class="pieds-de-page__colonne">
            <h3>A Propos</h3>
            <ul class="colonne__contenu">
              <li class="colonne__li"><a href="" class="colonne__a">Contact: Marc-Olivier Babin - Conseiller</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Adresse: 111 Rue Street, Mtl</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Téléphone: 1 800 111 1111</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Courriel: info@mondovoyages.com</a></li>
            </ul>
          </div>
          <div class="pieds-de-page__colonne">
            <h3>Contenu</h3>
            <ul class="colonne__contenu">
              <li class="colonne__li"><a href="" class="colonne__a">Option 1</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Option 2</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Option 3</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Option 4</a></li>
              <li class="colonne__li"><a href="" class="colonne__a">Option 5</a></li>
            </ul>
          </div>
        </div>
        <form role="search" method="get" class="recherche" action="<?php echo home_url('/'); ?>">
          <label>
            <span><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="recherche__champ" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
          </label>
          <button type="submit" class="recherche__btn"><?php echo esc_html_x('Search', 'submit button') ?></button>
        </form>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>