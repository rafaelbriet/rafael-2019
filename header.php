<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
    <header class="site-header">
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
    </header><!-- .site-header -->

    <main class="site-content">