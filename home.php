<?php get_header( ); ?>

<div class="blog-index-container">
    


    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else : ?>
            <div class="no-post-thumbnail"></div>
        <?php endif; ?>
        <div class="meta">
            <span class="post-date"><?php the_date('', '', ' - '); ?></span>
            <span class="post-categories"><?php the_category(', '); ?></span>
        </div>

        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more">Coontinue lendo</a>
    </article><!-- .post -->

    <?php
            endwhile;
            else :
                echo 'Desculpa, mas nenhum post foi encontrado';
        endif;
    ?>

</div><!-- blog-index-container -->

<div class="pagination">
    <?php the_posts_pagination(array(
        'midsize' => 4,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próximo', 'textdomain' ),
        'screen_reader_text' => __( 'Navegação das publicações', 'textdomain' ),
    )); ?> 
</div>

<?php get_footer( ); ?>