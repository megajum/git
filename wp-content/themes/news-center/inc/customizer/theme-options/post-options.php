<?php
/**
 * Post Options
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'news-center' ),
		'panel' => 'news_center_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'news_center_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'news-center' ),
			'section' => 'news_center_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'news_center_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'news-center' ),
			'section' => 'news_center_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'news_center_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'news-center' ),
			'section' => 'news_center_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'news_center_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'news-center' ),
			'section' => 'news_center_post_options',
		)
	)
);

// Post Options - Hide Author Info.
$wp_customize->add_setting(
	'news_center_post_hide_author_info',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_author_info',
		array(
			'label'           => esc_html__( 'Hide Author Info', 'news-center' ),
			'section'         => 'news_center_post_options',
			'active_callback' => function( $control ) {
				return ( $control->manager->get_Setting( 'news_center_post_hide_author' )->value() == false );
			},
		)
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'news_center_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'news-center' ),
			'section' => 'news_center_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'news_center_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'news-center' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_center_post_related_post_label',
	array(
		'label'           => esc_html__( 'Related Posts Label', 'news-center' ),
		'section'         => 'news_center_post_options',
		'settings'        => 'news_center_post_related_post_label',
		'type'            => 'text',
		'active_callback' => function ( $control ) {
			return ( $control->manager->get_setting( 'news_center_post_hide_related_posts' )->value() ) === false;
		},
	)
);
