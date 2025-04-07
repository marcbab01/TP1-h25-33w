<?php get_header(); ?>
    <main class="error-404">
    <?php
        $error_404_background = get_theme_mod('error-404__background', '');
        $error_404_title = get_theme_mod('error-404__titre', __("Oops, vous avez échoué sur l'île 404 !", 'theme_31w'));
        $error_404_message = get_theme_mod('error-404__message', __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !", 'theme_31w'));
        $error_404_homeLink = get_theme_mod('error-404__homeLink', home_url());
    ?>
    <section class="error-404__section" style="background-image: url('<?php echo $error_404_background ?>');">
            <div class="error-404__conteneur">
                <h1 class="error-404__titre"><?php echo $error_404_titre ?></h1>
                <p class="error-404__message"><?php echo $error_404_message ?></p>
                <a href="<?php echo $error_404_homeLink ?>" class="error-404__link">Retour a l'accueil</a>
                <?php
                    wp_nav_menu(array(
                    'menu' => 'principal',
                    'theme_location' => '404-menu',
                    'menu_class' => 'error-404__boutons',
                    'container' => false,
                    ));
                ?>
                <form action="" class="error-404__form">
                  <input type="search" class="error-404__search" placeholder="Rechercher...">
                </form>
            </div>
        </section>
    </main>
<?php get_footer(); ?>