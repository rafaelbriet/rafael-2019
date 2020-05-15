<?php get_header( ); ?>

<div class="post-container">

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </header>
        
        <section class="post-content">
            <?php the_content(); ?>
        </section>
        
    </article><!-- .post -->

    <?php
            endwhile;
            else :
                _e('Desculpa, mas nenhuma publicação foi encontrado.', 'rafaelbriet');
        endif;
    ?>

</div><!-- .post-container -->

<?php if(comments_open() || get_comments_number()) : comments_template(); endif; ?>

<?php get_footer( ); ?>