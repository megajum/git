<?php
/**
 * Excerpt
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_excerpt_options',
	array(
		'panel' => 'news_center_theme_options',
		'title' => esc_html__( 'Excerpt', 'news-center' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'news_center_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'news_center_sanitize_number_range',
		'validate_callback' => 'news_center_validate_excerpt_length',
	)
);

$wp_customize->add_control(
	'news_center_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'news-center' ),
		'description' => esc_html__( 'Note: Min 1 & Max 200. Please input the valid number and save. Then refresh the page to see the change.', 'news-center' ),
		'section'     => 'news_center_excerpt_options',
		'settings'    => 'news_center_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
	)
);
