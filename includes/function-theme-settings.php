<?php

function rafaelbriet_add_settings_page() {
    add_submenu_page( 'themes.php', __( 'Configurações do tema' ), __( 'Configurações do tema' ), 'manage_options', 'rafaelbriet_theme_settings', 'rafaelbriet_create_settings_page_html' );

    add_action( 'admin_init', 'rafaelbriet_settings_init' );
}

add_action( 'admin_menu', 'rafaelbriet_add_settings_page' );

function rafaelbriet_create_settings_page_html() {
	require_once( get_template_directory(  ) . '/includes/templates/rafaelbriet-settings-page.php');
}

function rafaelbriet_settings_init() {
	register_setting( 'rafaelbriet-social-settings-group', 'facebook_url' );
	register_setting( 'rafaelbriet-social-settings-group', 'instagram_url' );
	register_setting( 'rafaelbriet-social-settings-group', 'linkedin_url' );
	register_setting( 'rafaelbriet-social-settings-group', 'twitter_url' );
	register_setting( 'rafaelbriet-social-settings-group', 'github_url' );
	register_setting( 'rafaelbriet-social-settings-group', 'behance_url' );

	add_settings_section( 'rafaelbriet-social-media', __( 'Redes Sociais' ), 'rafaelbriet_create_social_media_section_html','rafaelbriet_theme_settings' );
	
	add_settings_field( 'facebook-url', 'Facebook URL', 'rafaelbriet_create_facebook_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
	add_settings_field( 'instagram-url', 'Instagram URL', 'rafaelbriet_create_instagram_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
	add_settings_field( 'linkedin-url', 'LinkedIn URL', 'rafaelbriet_create_linkedin_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
	add_settings_field( 'twitter-url', 'Twitter URL', 'rafaelbriet_create_twitter_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
	add_settings_field( 'github-url', 'Github URL', 'rafaelbriet_create_github_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
	add_settings_field( 'behance-url', 'Behance URL', 'rafaelbriet_create_behance_field_html', 'rafaelbriet_theme_settings', 'rafaelbriet-social-media' );
}

function rafaelbriet_create_social_media_section_html() {
	echo '<p>' . __( 'Digite nos campos abaixo os links para as redes sociais. Os campos que estiverem em branco serão ignorados.' ) . '</p>';
}

function rafaelbriet_create_facebook_field_html() {
	$setting = esc_attr( get_option( 'facebook_url' ) );
	echo '<input type="text" name="facebook_url" value="' . $setting . '">';
}

function rafaelbriet_create_instagram_field_html() {
	$setting = esc_attr( get_option( 'instagram_url' ) );
	echo '<input type="text" name="instagram_url" value="' . $setting . '">';
}

function rafaelbriet_create_linkedin_field_html() {
	$setting = esc_attr( get_option( 'linkedin_url' ) );
	echo '<input type="text" name="linkedin_url" value="' . $setting . '">';
}

function rafaelbriet_create_twitter_field_html() {
	$setting = esc_attr( get_option( 'twitter_url' ) );
	echo '<input type="text" name="twitter_url" value="' . $setting . '">';
}

function rafaelbriet_create_github_field_html() {
	$setting = esc_attr( get_option( 'github_url' ) );
	echo '<input type="text" name="github_url" value="' . $setting . '">';
}

function rafaelbriet_create_behance_field_html() {
	$setting = esc_attr( get_option( 'behance_url' ) );
	echo '<input type="text" name="behance_url" value="' . $setting . '">';
}