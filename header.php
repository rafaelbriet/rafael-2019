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
                <div class="menu-header-toggle"></div>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'menu-header',
                    ));
                ?>
            </nav>
        </div><!-- .site-header-center -->
    </header><!-- .site-header -->

    <section class="blog-nav">
        <div class="blog-nav-center">
            <nav class="blog-categories-nav">
                <div class="blog-nav-toggle">
                    <div>Categorias</div>
                    <div class="down-arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/arrowDown.svg'; ?>" alt=""></div>
                </div>

                <?php 
                    if(is_post_type_archive()) { 
                        wp_nav_menu( array(
                            'theme_location' => 'portfolio-menu',
                            'container' => false,
                            'menu_class' => 'blog-categories-list',
                        ));
                    } else {
                        wp_nav_menu( array(
                            'theme_location' => 'blog-menu',
                            'container' => false,
                            'menu_class' => 'blog-categories-list',
                        ));
                    }
                ?>
                
            </nav>

            <div class="search-form-container">
                    <?php get_search_form(); ?>
            </div>
        </div><!-- .blog-nav-center -->
    </section><!-- blog-nav -->

<main class="site-content">