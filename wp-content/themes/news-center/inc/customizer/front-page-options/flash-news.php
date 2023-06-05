<?php
/**
 * Flash News Section
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_flash_news_section',
	array(
		'panel'    => 'news_center_front_page_options',
		'title'    => esc_html__( 'Flash News Section', 'news-center' ),
		'priority' => 10,
	)
);

// Flash News Section - Enable Section.
$wp_customize->add_setting(
	'news_center_enable_flash_news_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_center_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_enable_flash_news_section',
		array(
			'label'    => esc_html__( 'Enable Flash News Section', 'news-center' ),
			'section'  => 'news_center_flash_news_section',
			'settings' => 'news_center_enable_flash_news_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'news_center_enable_flash_news_section',
		array(
			'selector' => '#news_center_flash_news_section .section-link',
			'settings' => 'news_center_enable_flash_news_section',
		)
	);
}

// Flash News Section - Section Title.
$wp_customize->add_setting(
	'news_center_flash_news_title',
	array(
		'default'           => __( 'Flash News', 'news-center' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_center_flash_news_title',
	array(
		'label'           => esc_html__( 'Section Title', 'news-center' ),
		'section'         => 'news_center_flash_news_section',
		'settings'        => 'news_center_flash_news_title',
		'type'            => 'text',
		'active_callback' => 'news_center_is_flash_news_section_enabled',
	)
);

// Flash News Section - Speed Controller.
$wp_customize->add_setting(
	'news_center_flash_news_speed_controller',
	array(
		'default'           => 600,
		'sanitize_callback' => 'news_center_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'news_center_flash_news_speed_controller',
	array(
		'label'           => esc_html__( 'Speed Controller', 'news-center' ),
		'description'     => esc_html__( 'Note: Default speed value is 600.', 'news-center' ),
		'section'         => 'news_center_flash_news_section',
		'settings'        => 'news_center_flash_news_speed_controller',
		'type'            => 'number',
		'input_attrs'     => array(
			'min' => 1,
		),
		'active_callback' => 'news_center_is_flash_news_section_enabled',
	)
);

// Flash News Section - Content Type.
$wp_customize->add_setting(
	'news_center_flash_news_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'news_center_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_center_flash_news_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'news-center' ),
		'section'         => 'news_center_flash_news_section',
		'settings'        => 'news_center_flash_news_content_type',
		'type'            => 'select',
		'active_callback' => 'news_center_is_flash_news_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'news-center' ),
			'post' => esc_html__( 'Post', 'news-center' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Flash News Section - Select Post.
	$wp_customize->add_setting(
		'news_center_flash_news_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_flash_news_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-center' ), $i ),
			'section'         => 'news_center_flash_news_section',
			'settings'        => 'news_center_flash_news_content_post_' . $i,
			'active_callback' => 'news_center_is_flash_news_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_post_choices(),
		)
	);

	// Flash News Section - Select Page.
	$wp_customize->add_setting(
		'news_center_flash_news_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_center_flash_news_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'news-center' ), $i ),
			'section'         => 'news_center_flash_news_section',
			'settings'        => 'news_center_flash_news_content_page_' . $i,
			'active_callback' => 'news_center_is_flash_news_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => news_center_get_page_choices(),
		)
	);

}
