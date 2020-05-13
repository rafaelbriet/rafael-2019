<form action="/" method="get">
    <label for="search-field"></label>
    <input type="text" id="search-field" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e('Digite aqui o que você deseja procurar', 'rafaelbriet'); ?>">
</form>