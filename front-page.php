<?php get_header(); ?>

<div class="center">
    
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="home-content">
                <?php the_content(); ?>
            </section>        
        </article>

    <?php
        endwhile;
        else :
            get_template_part( 'templates-parts/content-none' );
        endif;
    ?>

</div>

<?php get_footer(); ?>