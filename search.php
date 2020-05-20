<?php get_header( ); ?>

<div class="center">

<div class="blog-index-container">

    <h2 class="post-title search-title">
        <?php 
            global $wp_query;

            $results = $wp_query->found_posts;
            $query = get_search_query();

            /* translators: %1$s is replaced with the number of search results. %2$s is replaced with the search query */
            printf( _nx('Foi encontrado %1$s resultado para o termo "%2$s":', 'Foram encontrados %1$s resultados para o termo "%2$s":', $results, 'search result', 'rafaelbriet'), $results, $query );
        ?>
    </h2>

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/postThumbnailPlaceholder.jpg'?>" alt="" class="no-post-thumbnail">
        <?php endif; ?>
        <div class="meta">
            <span class="post-date"><?php the_date('', '', ' - '); ?></span>
            <span class="post-categories"><?php the_category(', '); ?></span>
        </div>

        <h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more"><?php _e('Continue lendo', 'rafaelbriet'); ?></a>
    </article><!-- .post -->

    <?php
        endwhile;
        endif;
    ?>

</div><!-- blog-index-container -->

<?php get_template_part( 'templates-parts/pagination' ); ?>

</div><!-- .center -->

<?php get_footer( ); ?>