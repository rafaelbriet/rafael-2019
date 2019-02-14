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
                echo 'Desculpa, mas nenhum post foi encontrado';
        endif;
    ?>

</div><!-- .post-container -->

<?php get_footer( ); ?>