<?php
/**
 * Sidebar Position
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'news-center' ),
		'panel' => 'news_center_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'news_center_sidebar_position',
	array(
		'sanitize_callback' => 'news_center_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_center_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'news-center' ),
		'section' => 'news_center_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-center' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-center' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-center' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'news_center_post_sidebar_position',
	array(
		'sanitize_callback' => 'news_center_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_center_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'news-center' ),
		'section' => 'news_center_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-center' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-center' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-center' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'news_center_page_sidebar_position',
	array(
		'sanitize_callback' => 'news_center_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_center_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'news-center' ),
		'section' => 'news_center_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-center' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-center' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-center' ),
		),
	)
);
