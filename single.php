<?php get_header( ); ?>

<div class="post-container">

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <div class="meta">
                <span class="post-date"><?php the_date('', '', ' - '); ?></span>
                <span class="post-categories"><?php the_category(', '); ?></span>
            </div>

            <h1 class="post-title"><?php the_title(); ?></h1>
        </header>
        
        <section class="post-content">
            <?php the_content(); ?>
        </section>

        <footer class="post-footer">
        
        <div class="post-next">
            <p><?php _e('Próximo', 'rafaelbriet'); ?></p>
            <?php next_post_link('%link', '%title', 'yes'); ?> 
        </div>
        
        <div class="post-previous">
            <p><?php _e('Anterior', 'rafaelbriet'); ?></p>
            <?php previous_post_link('%link', '%title', 'yes'); ?>
        </div>
        
        </footer>
        
    </article><!-- .post -->

    <?php
            endwhile;
            else :
                get_template_part( 'templates-parts/content-none' );
        endif;
    ?>

</div><!-- .post-container -->

<?php if(comments_open() || get_comments_number()) : comments_template(); endif; ?>

<?php get_footer( ); ?>