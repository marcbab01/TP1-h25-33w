<?php get_header(); ?>

<main>
<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
?>
<style>
    .hero__couleur {
        color: <?php echo get_theme_mod('hero_couleur', '#000000'); ?>;
    }
</style>
      <section class="hero" style="background-image: url('<?php echo $hero_background; ?>')">
        <div class="hero__conteneur">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-landscape.jpg" alt=""class="hero__image">
          <div class="hero__texte">
            <h1>Trouver la destination de vos reves</h1>
            <p>Choisissez votre destination de rêves pour un voyage inoubliable. Que vous soyez à la recherche d'un avre de paix aux vues paradisiaques, ou à la recherche du aventure stimulante dans une contrée étrangère, nous nous engagons à vous faire vivre une expérience mémorable.</p>
            <br>
            <p>info@mondovoyages.com</p>
            <br>
            <p class="hero__auteur">Auteur: <?php echo $hero_auteur; ?></p>
            <br>
            <p class="hero__auteur">Telephone: <?php echo $hero_telephone; ?></p>
            <br>
            <p>111 Rue Street, Montréal H1Z 2Z4</p>
            <section class="hero__sociaux">
              <?php get_template_part("gabarits/icone-sociaux"); ?>
            </section>
          </div>
        </div>
      </section>
      <section class="gallerie">
        <h1 class="gallerie__titre">Gallerie</h1>
        <div class="gallerie__contenu">
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
        </div>
        <button><a href="https://gftnth00.mywhc.ca/33w2/?page_id=92">Gallerie</a></button>
      </section>

      <section class="populaire">
      <h1 class="gallerie__titre">Nos Destinations Populaires</h1>
        <div class="grille">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="carte">
                    <header>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-mise-en-avant"> 
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p> 
                    <a href="<?php the_permalink(); ?>">Explorez les options</a>
                </article>
            <?php endwhile; endif; ?>
        </div>
      </section>
    </main>

<?php get_footer(); ?>