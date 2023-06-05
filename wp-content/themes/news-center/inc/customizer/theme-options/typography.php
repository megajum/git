<?php
/**
 * Typography
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_typography',
	array(
		'panel' => 'news_center_theme_options',
		'title' => esc_html__( 'Typography', 'news-center' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'news_center_site_title_font',
	array(
		'default'           => 'Rubik',
		'sanitize_callback' => 'news_center_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_center_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'news-center' ),
		'section'  => 'news_center_typography',
		'settings' => 'news_center_site_title_font',
		'type'     => 'select',
		'choices'  => news_center_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'news_center_site_description_font',
	array(
		'default'           => 'Volkhov',
		'sanitize_callback' => 'news_center_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_center_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'news-center' ),
		'section'  => 'news_center_typography',
		'settings' => 'news_center_site_description_font',
		'type'     => 'select',
		'choices'  => news_center_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'news_center_header_font',
	array(
		'default'           => 'Volkhov',
		'sanitize_callback' => 'news_center_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_center_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'news-center' ),
		'section'  => 'news_center_typography',
		'settings' => 'news_center_header_font',
		'type'     => 'select',
		'choices'  => news_center_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'news_center_body_font',
	array(
		'default'           => 'Oxygen',
		'sanitize_callback' => 'news_center_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_center_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'news-center' ),
		'section'  => 'news_center_typography',
		'settings' => 'news_center_body_font',
		'type'     => 'select',
		'choices'  => news_center_get_all_google_font_families(),
	)
);
