<?php get_header( ); ?>

<div class="center">

<div class="portfolio-index-container">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <article class="post portfolio">

        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/postThumbnailPlaceholder.jpg'?>" alt="" class="no-post-thumbnail">
        <?php endif; ?>

        <div class="portfolio-overlay">
            <h2 class="portfolio-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more portfolio-read-more"><?php _e('Continue lendo', 'rafaelbriet'); ?></a>
        </div>

    </article><!-- .post -->

    <?php endwhile; else : _e('Desculpa, mas nenhuma publicação foi encontrado.', 'rafaelbriet'); endif;?>

</div><!-- .portfolio-index-container -->

<?php get_template_part( 'templates-parts/pagination' ); ?>

</div><!-- .center -->

<?php get_footer( ); ?>