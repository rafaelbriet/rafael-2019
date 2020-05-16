<div class="search-form-container">
    <form action="/" method="get" class="search-form">
        <input type="text" id="search-field" class="search-form-input" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e('Digite aqui o que você deseja procurar', 'rafaelbriet'); ?>">
        <button type="submit" id="searchsubmit" class="search-form-button"><i class="fas fa-search"></i></button>
        <label for="search-field" class="search-form-label"><i class="fas fa-search"></i></label>
    </form>
</div>