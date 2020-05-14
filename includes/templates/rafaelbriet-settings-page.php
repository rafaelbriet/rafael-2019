<?php

    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    
?>
	
<div class="wrap">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

    <?php settings_errors( ); ?>
    
    <form method="post" action="options.php">

        <?php
            settings_fields( 'rafaelbriet-social-settings-group' );
            do_settings_sections( 'rafaelbriet_theme_settings' );
            submit_button();
        ?>
        
    </form>
    
</div>