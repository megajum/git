<?php
/**
 * Frontpage Sidebar Position
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_frontpage_sidebar',
	array(
		'panel' => 'news_center_theme_options',
		'title' => esc_html__( 'Frontpage Sidebar Position', 'news-center' ),
	)
);

// Frontpage Sidebar Position - Frontpage Sidebar Position.
$wp_customize->add_setting(
	'news_center_frontpage_sidebar_position',
	array(
		'default'           => 'frontpage-right-sidebar',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_center_frontpage_sidebar_position',
	array(
		'label'    => esc_html__( 'Frontpage Sidebar Position', 'news-center' ),
		'section'  => 'news_center_frontpage_sidebar',
		'settings' => 'news_center_frontpage_sidebar_position',
		'type'     => 'select',
		'choices'  => array(
			'frontpage-left-sidebar'  => __( 'Left', 'news-center' ),
			'frontpage-right-sidebar' => __( 'Right', 'news-center' ),
		),
	)
);
