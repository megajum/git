<?php
/**
 * Front Page Options
 *
 * @package News Center
 */

$wp_customize->add_panel(
	'news_center_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'news-center' ),
		'priority' => 130,
	)
);

// Flash News Section.
require get_template_directory() . '/inc/customizer/front-page-options/flash-news.php';

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';
