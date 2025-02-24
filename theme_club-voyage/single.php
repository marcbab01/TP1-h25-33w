<?php get_header(); ?>

<main class="contenu">
    <?php
    
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article class="destination">
                <header>
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-principale"> 
                    <?php } ?>
                    <h1><?php the_title(); ?></h1> 
                </header>
                <div class="destination__description">
                    <?php the_content(); ?> 
                </div>

                <?php
                
                if (have_rows('gallerie_images')) : ?>
                    <div class="gallerie">
                        <h2>Gallerie d'images</h2>
                        <div class="galleries__contenu">
                            <?php while (have_rows('gallerie_images')) : the_row(); ?>
                                <?php $image = get_sub_field('image'); ?>
                                <div class="gallerie__image">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile;
    else : ?>
        <p><?php _e('A ucune destination trouvée.', 'textdomain'); ?></p> 
    <?php endif; ?>
</main>

<?php get_footer(); ?>