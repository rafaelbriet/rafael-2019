<div class="pagination">
    <?php the_posts_pagination(array(
        'midsize' => 4,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próximo', 'textdomain' ),
        'screen_reader_text' => __( 'Navegação das publicações', 'textdomain' ),
    )); ?> 
</div>