<?php
/**
 * Pagination
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_pagination',
	array(
		'panel' => 'news_center_theme_options',
		'title' => esc_html__( 'Pagination', 'news-center' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'news_center_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'news-center' ),
			'section'  => 'news_center_pagination',
			'settings' => 'news_center_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'news_center_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_center_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'news-center' ),
		'section'         => 'news_center_pagination',
		'settings'        => 'news_center_pagination_type',
		'active_callback' => 'news_center_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'news-center' ),
			'numeric' => __( 'Numeric', 'news-center' ),
		),
	)
);
