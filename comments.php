<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div class="comments-area">

    <div class="comments-center">

        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
                <?php
                    printf( _nx( 'Um comentário em "%2$s"', '%1$s comentários em "%2$s"', get_comments_number(), 'comments title', 'rafaelbriet' ),
                        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                ?>
            </h2>
    
            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 70,
                    ) );
                ?>
            </ol><!-- .comment-list -->
    
            <?php
                // Are there comments to navigate through?
                if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'rafaelbriet' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'rafaelbriet' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'rafaelbriet' ) ); ?></div>
            </nav><!-- .comment-navigation -->
            <?php endif; // Check for comment navigation ?>
    
            <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Os comentários estão fechados' , 'rafaelbriet' ); ?></p>
            <?php endif; ?>
    
        <?php endif; // have_comments() ?>
    
        <?php comment_form(); ?>

    </div> <!-- comments-center -->

</div><!-- .comments-area -->