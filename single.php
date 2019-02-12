<?php get_header( ); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="meta">
            <span class="post-date"><?php the_date('', '', ' - '); ?></span>
            <span class="post-categories"><?php the_category(', '); ?></span>
        </div>

        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    </article><!-- .post -->

    <?php
            endwhile;
            else :
                echo 'Desculpa, mas nenhum post foi encontrado';
        endif;
    ?>

<?php get_footer( ); ?>