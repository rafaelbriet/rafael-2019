<?php get_header( ); ?>

<div class="portfolio-index-container">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <article class="post portfolio">

        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/postThumbnailPlaceholder.jpg'?>" alt="" class="no-post-thumbnail">
        <?php endif; ?>

        <div class="portfolio-overlay">
            <h2 class="portfolio-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more portfolio-read-more">Coontinue lendo</a>
        </div>

    </article><!-- .post -->

    <?php endwhile; else : echo 'Desculpa, mas nenhum post foi encontrado'; endif;?>

</div><!-- .portfolio-index-container -->

<?php get_template_part( 'templates-parts/pagination' ); ?>

<?php get_footer( ); ?>