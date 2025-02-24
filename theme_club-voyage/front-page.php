<?php get_header(); ?>

<main>
      <section class="hero">
        <div class="hero__conteneur">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-landscape.jpg" alt=""class="hero__image">
          <h1 class="hero__texte">
            Trouver la destination de vos reves
          </h1>
        </div>
      </section>
      <section class="gallerie">
        <div class="medaillon">
          <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo1.jpg" alt="" class="medaillon_img"></div>
          <h2 class="medaillon__titre">Destination</h2>
          <p class="medaillon__texte">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam illum laboriosam a labore saepe harum provident quam, accusamus vitae sunt sint, hic laborum voluptates velit adipisci, culpa eum repellat! Cupiditate facere suscipit tenetur aliquid pariatur aliquam, ex vitae sed illum dignissimos animi mollitia, molestias asperiores? Ipsa aliquid sapiente voluptatem provident.</p>
        </div>
        <div class="medaillon">
          <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo2.jpg" alt="" class="medaillon_img"></div>
          <h2 class="medaillon__titre">Destination</h2>
          <p class="medaillon__texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tenetur perferendis a tempora, ratione fugit placeat aut error, ipsa at ducimus doloribus totam illo reiciendis? Fuga voluptatibus vel sint voluptates placeat consectetur inventore iusto, ab est amet maxime ea aliquam molestias nulla similique delectus dicta! Ex fugit consequuntur expedita quisquam!</p>
        </div>
        <div class="medaillon">
          <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_promo3.jpg" alt="" class="medaillon_img"></div>
          <h2 class="medaillon__titre">Destination</h2>
          <p class="medaillon__texte">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam culpa dolor iste perspiciatis nulla a, iusto inventore veniam fuga reprehenderit laudantium porro, animi repellat libero architecto sint quisquam, reiciendis hic sequi! Iusto sunt non quisquam dolorum cum voluptas vero qui perspiciatis optio nemo. Et cupiditate ex molestias eius nisi incidunt?</p>
        </div>
      </section>
      <section class="destinations-populaires">
        <div class="destinations-populaires__tableau">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="destinations-populaires__post">
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