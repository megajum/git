<?php
/**
 * Banner Section
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_banner_section',
	array(
		'panel'    => 'news_center_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'news-center' ),
		'priority' => 20,
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'news_center_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'news-center' ),
			'section'  => 'news_center_banner_section',
			'settings' => 'news_center_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'news_center_enable_banner_section',
		array(
			'selector' => '#news_center_banner_section .section-link',
			'settings' => 'news_center_enable_banner_section',
		)
	);
}

// Banner Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'news_center_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_center_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'news-center' ),
		'section'         => 'news_center_banner_section',
		'settings'        => 'news_center_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'news_center_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'news-center' ),
			'post' => esc_html__( 'Post', 'news-center' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Banner Section - Select Post.
	$wp_customize->add_setting(
		'news_center_banner_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_banner_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-center' ), $i ),
			'section'         => 'news_center_banner_section',
			'settings'        => 'news_center_banner_slider_content_post_' . $i,
			'active_callback' => 'news_center_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_post_choices(),
		)
	);

	// Banner Section - Select Page.
	$wp_customize->add_setting(
		'news_center_banner_slider_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_banner_slider_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'news-center' ), $i ),
			'section'         => 'news_center_banner_section',
			'settings'        => 'news_center_banner_slider_content_page_' . $i,
			'active_callback' => 'news_center_is_banner_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_page_choices(),
		)
	);

}

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'news_center_banner_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new News_Center_Customize_Horizontal_Line(
		$wp_customize,
		'news_center_banner_horizontal_line',
		array(
			'section'         => 'news_center_banner_section',
			'settings'        => 'news_center_banner_horizontal_line',
			'active_callback' => 'news_center_is_banner_slider_section_enabled',
			'type'            => 'hr',
		)
	)
);

// Banner Section - Banner Grid Posts Content Type.
$wp_customize->add_setting(
	'news_center_banner_grid_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_center_banner_grid_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Grid Posts Content Type', 'news-center' ),
		'section'         => 'news_center_banner_section',
		'settings'        => 'news_center_banner_grid_content_type',
		'type'            => 'select',
		'active_callback' => 'news_center_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'news-center' ),
			'post' => esc_html__( 'Post', 'news-center' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// Banner Section - Banner Grid Select Post.
	$wp_customize->add_setting(
		'news_center_banner_grid_post_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_banner_grid_post_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-center' ), $i ),
			'section'         => 'news_center_banner_section',
			'settings'        => 'news_center_banner_grid_post_content_post_' . $i,
			'active_callback' => 'news_center_is_banner_grid_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_post_choices(),
		)
	);

	// Banner Section - Banner Grid Select Page.
	$wp_customize->add_setting(
		'news_center_banner_grid_post_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_banner_grid_post_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'news-center' ), $i ),
			'section'         => 'news_center_banner_section',
			'settings'        => 'news_center_banner_grid_post_content_page_' . $i,
			'active_callback' => 'news_center_is_banner_grid_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_page_choices(),
		)
	);

}
