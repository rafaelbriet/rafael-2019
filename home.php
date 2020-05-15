<?php get_header( ); ?>

<div class="center">

<div class="blog-index-container">
    
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/postThumbnailPlaceholder.jpg'?>" alt="" class="no-post-thumbnail">
        <?php endif; ?>
        <div class="meta">
            <span class="post-date"><?php the_date('', '', ' - '); ?></span>
            <span class="post-categories"><?php the_category(', '); ?></span>
        </div>

        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more"><?php _e('Continue lendo', 'rafaelbriet') ?></a>
    </article><!-- .post -->

    <?php
            endwhile;
            else :
                get_template_part( 'templates-parts/content-none' );
        endif;
    ?>

</div><!-- blog-index-container -->

<?php get_template_part( 'templates-parts/pagination' ); ?>

</div><!-- .center -->

<?php get_footer( ); ?>