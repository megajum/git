<?php
/**
 * Theme Options
 *
 * @package News_Center
 */

$wp_customize->add_panel(
	'news_center_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'news-center' ),
		'priority' => 130,
	)
);

// Topbar.
require get_template_directory() . '/inc/customizer/theme-options/header-options.php';

// Frontpage Sidebar Position.
require get_template_directory() . '/inc/customizer/theme-options/frontpage-sidebar-position.php';

// Typography.
require get_template_directory() . '/inc/customizer/theme-options/typography.php';

// Excerpt.
require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

// Breadcrumb.
require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

// Sidebar Position.
require get_template_directory() . '/inc/customizer/theme-options/sidebar-position.php';

// Post Options.
require get_template_directory() . '/inc/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/inc/customizer/theme-options/footer-options.php';
