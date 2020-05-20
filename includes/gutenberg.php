<?php

function rafaelbriet_gutenberg_defaults() {
    add_theme_support(
        'editor-color-palette', 
        array(
            array(
                'name' => 'Rafael Briet Amarelo',
                'slug' => 'rafael-briet-yellow',
                'color' => '#FDB913',
            ),
            array(
                'name' => 'Rafael Briet Azul',
                'slug' => 'rafael-briet-blue',
                'color' => '#1B243A',
            ),
        )
    );
}

add_action( 'init', 'rafaelbriet_gutenberg_defaults' );

function rafaelbriet_gutenberg_blocks() {
    wp_enqueue_script( 'home-block-js', get_template_directory_uri() . '/assets/build/blocks.js', array( 'wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n' ) );

    register_block_type( 'rafaelbriet/home-page', array(
        'editor-script' => 'home-block-js',
    ) );
}

add_action( 'init', 'rafaelbriet_gutenberg_blocks' );