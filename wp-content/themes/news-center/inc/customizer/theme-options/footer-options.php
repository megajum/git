<?php
/**
 * Footer Options
 *
 * @package News_Center
 */

$wp_customize->add_section(
	'news_center_footer_options',
	array(
		'panel' => 'news_center_theme_options',
		'title' => esc_html__( 'Footer Options', 'news-center' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'news-center' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'news_center_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'news_center_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'news-center' ),
		'section'  => 'news_center_footer_options',
		'settings' => 'news_center_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'news_center_scroll_top',
	array(
		'sanitize_callback' => 'news_center_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new News_Center_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_center_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'news-center' ),
			'section' => 'news_center_footer_options',
		)
	)
);
