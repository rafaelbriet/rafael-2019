<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="site-header-center">
            <div class="site-branding">
                <?php if(has_custom_logo()) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

                <?php $blog_info = get_bloginfo( 'name' ); ?>

                <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                <?php endif; ?>

                <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                        ?>
                            <p class="site-description">
                                <?php echo $description; ?>
                            </p>
                    <?php endif;
                ?>
            </div>
            
            <nav class="main-nav">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                    ))                
                ?>
            </nav>
        </div><!-- .site-header-center -->
    </header><!-- .site-header -->

    <section class="blog-nav">
        <div class="blog-nav-center">
            <nav class="blog-categories-nav">
                <ul class="blog-categories-list">
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Design</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Marketing</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Art</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Music</a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer">Games</a></li>
                </ul>
            </nav>

            <div class="search-form-container">
                <form action="">
                    <label for="search-field"></label>
                    <input type="text" id="search-field" placeholder="Digite aqui o que você deseja procurar">
                </form>
            </div>
        </div><!-- .blog-nav-center -->
    </section><!-- blog-nav -->

<main class="site-content">
    <div class="site-content-center">