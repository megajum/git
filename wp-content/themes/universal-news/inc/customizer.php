<?php
/**
 * Theme Customizer
 *
 * @package Universal_News
 */

function universal_news_customize_register( $wp_customize ) {

	require get_theme_file_path() . '/inc/customizer/post-carousel.php';

	// Upsell Section.
	$wp_customize->add_section(
		new Universal_News_Upsell_Section(
			$wp_customize,
			'upsell_sections',
			array(
				'title'            => __( 'Universal News Pro', 'universal-news' ),
				'button_text'      => __( 'Buy Pro', 'universal-news' ),
				'url'              => 'https://ascendoor.com/themes/universal-news-pro/',
				'background_color' => '#1b8415',
				'text_color'       => '#fff',
				'priority'         => 0,
			)
		)
	);

}
add_action( 'customize_register', 'universal_news_customize_register' );

function universal_news_customize_preview_js() {
	wp_enqueue_script( 'universal-news-customizer', get_stylesheet_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview', 'news-center-customizer' ), NEWS_CENTER_VERSION, true );
}
add_action( 'customize_preview_init', 'universal_news_customize_preview_js' );

function universal_news_custom_control_scripts() {
	wp_enqueue_style( 'universal-news-custom-controls-css', get_stylesheet_directory_uri() . '/assets/css/custom-controls.css', array( 'news-center-custom-controls-css' ), '1.0', 'all' );
	wp_enqueue_script( 'universal-news-custom-controls-js', get_stylesheet_directory_uri() . '/assets/js/custom-controls.js', array( 'news-center-custom-controls-js', 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'universal_news_custom_control_scripts' );

/*=====================Active Callback=================*/

// Posts Carousel section.
function universal_news_is_post_carousel_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'universal_news_enable_post_carousel_section' )->value() );
}
function universal_news_is_post_carousel_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'universal_news_post_carousel_content_type' )->value();
	return ( universal_news_is_post_carousel_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function universal_news_is_post_carousel_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'universal_news_post_carousel_content_type' )->value();
	return ( universal_news_is_post_carousel_section_enabled( $control ) && ( 'category' === $content_type ) );
}
