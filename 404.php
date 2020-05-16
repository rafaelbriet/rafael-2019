<?php get_header(); ?>

<div class="post-container">

    <h1><?php _e('Ops! A Página não foi encontrada.', 'rafaelbriet'); ?></h1>

    <p><?php _e('Infelizmente a página que você está tentando acessar não está aqui. Se você tem certeza que o endereço está correto, talvez a página tenha sido renomeada, movida ou apagada.', 'rafaelbriet'); ?></p>
    <p><?php _e('Você pode usar um dos links no menu ou o campo de pesquisa abaixo para continuar navegando:', 'rafaelbriet'); ?></p>

    <?php get_search_form(); ?>

</div>

<?php get_footer(); ?>