<?php
/**
 * Post Carousel Section
 *
 * @package Universal News Pro
 */

$wp_customize->add_section(
	'universal_news_post_carousel_section',
	array(
		'panel'    => 'news_center_front_page_options',
		'title'    => esc_html__( 'Post Carousel Section', 'universal-news' ),
		'priority' => 30,
	)
);

// Post Carousel Section - Enable Section.
$wp_customize->add_setting(
	'universal_news_enable_post_carousel_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'universal_news_enable_post_carousel_section',
		array(
			'label'    => esc_html__( 'Enable Post Carousel Section', 'universal-news' ),
			'section'  => 'universal_news_post_carousel_section',
			'settings' => 'universal_news_enable_post_carousel_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'universal_news_enable_post_carousel_section',
		array(
			'selector' => '#universal_news_post_carousel_section .section-link',
			'settings' => 'universal_news_enable_post_carousel_section',
		)
	);
}

// Post Carousel Section - Section Title.
$wp_customize->add_setting(
	'universal_news_post_carousel_title',
	array(
		'default'           => __( 'Post Carousel', 'universal-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'universal_news_post_carousel_title',
	array(
		'label'           => esc_html__( 'Section Title', 'universal-news' ),
		'section'         => 'universal_news_post_carousel_section',
		'settings'        => 'universal_news_post_carousel_title',
		'type'            => 'text',
		'active_callback' => 'universal_news_is_post_carousel_section_enabled',
	)
);

// Post Carousel Section - Content Type.
$wp_customize->add_setting(
	'universal_news_post_carousel_content_type',
	array(
		'default'           => 'category',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'universal_news_post_carousel_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'universal-news' ),
		'section'         => 'universal_news_post_carousel_section',
		'settings'        => 'universal_news_post_carousel_content_type',
		'type'            => 'select',
		'active_callback' => 'universal_news_is_post_carousel_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'universal-news' ),
			'category' => esc_html__( 'Category', 'universal-news' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// Post Carousel Section - Select Post.
	$wp_customize->add_setting(
		'universal_news_post_carousel_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'universal_news_post_carousel_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'universal-news' ), $i ),
			'section'         => 'universal_news_post_carousel_section',
			'settings'        => 'universal_news_post_carousel_content_post_' . $i,
			'active_callback' => 'universal_news_is_post_carousel_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_post_choices(),
		)
	);

}

// Post Carousel Section - Select Category.
$wp_customize->add_setting(
	'universal_news_post_carousel_content_category',
	array(
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'universal_news_post_carousel_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'universal-news' ),
		'section'         => 'universal_news_post_carousel_section',
		'settings'        => 'universal_news_post_carousel_content_category',
		'active_callback' => 'universal_news_is_post_carousel_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => news_center_get_post_cat_choices(),
	)
);

// Post Carousel Section - Button Label.
$wp_customize->add_setting(
	'universal_news_post_carousel_button_label',
	array(
		'default'           => __( 'View All', 'universal-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'universal_news_post_carousel_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'universal-news' ),
		'section'         => 'universal_news_post_carousel_section',
		'settings'        => 'universal_news_post_carousel_button_label',
		'type'            => 'text',
		'active_callback' => 'universal_news_is_post_carousel_section_enabled',
	)
);

// Post Carousel Section - Button Link.
$wp_customize->add_setting(
	'universal_news_post_carousel_button_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'universal_news_post_carousel_button_link',
	array(
		'label'           => esc_html__( 'Button Link', 'universal-news' ),
		'section'         => 'universal_news_post_carousel_section',
		'settings'        => 'universal_news_post_carousel_button_link',
		'type'            => 'url',
		'active_callback' => 'universal_news_is_post_carousel_section_enabled',
	)
);
