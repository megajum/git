<?php
/**
 * Breadcrumb
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'news-center' ),
		'panel' => 'news_center_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'news_center_enable_breadcrumb',
	array(
		'sanitize_callback' => 'news_center_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'news-center' ),
			'section' => 'news_center_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'news_center_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'news_center_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'news-center' ),
		'active_callback' => 'news_center_is_breadcrumb_enabled',
		'section'         => 'news_center_breadcrumb',
	)
);
