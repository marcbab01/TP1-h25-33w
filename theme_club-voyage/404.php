<?php get_header(); ?>
    <main class="error-404">
    <?php
        $error_404_background = get_theme_mod('error-404__background', '');
        $error_404_title = get_theme_mod('error-404__titre', __("Oops, vous avez échoué sur l'île 404 !", 'theme_31w'));
        $error_404_message = get_theme_mod('error-404__message', __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !", 'theme_31w'));
        $error_404_homeLink = get_theme_mod('error-404__homeLink', home_url());
    ?>
    <section class="error-404__section" style='background-image: url("assets/img/ilepalmier.jpg");'>
            <div class="error-404__conteneur">
                <h1 class="error-404__titre">Oops, vous avez échoué sur l'île 404 !</h1>
                <p class="error-404__message">Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !</p>
                <a href="" class="error-404__link">Retour a l'accueil</a>
                <div class="error-404__boutons">
                  <a href="" class="error-404__link _bouton">Alaska</a>
                  <a href="" class="error-404__link _bouton">Haiti</a>
                  <a href="" class="error-404__link _bouton">Egypte</a>
                  <a href="" class="error-404__link _bouton">France</a>
                </div>
                <form action="" class="error-404__form">
                  <input type="search" class="error-404__search" placeholder="Rechercher...">
                </form>
            </div>
        </section>
    </main>
<?php get_footer(); ?>