<?php

/**
 * Active Callbacks
 *
 * @package News_Center
 */

// Theme Options.
function news_center_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_center_enable_pagination' )->value() );
}
function news_center_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_center_enable_breadcrumb' )->value() );
}

// Header Options.
function news_center_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'news_center_enable_topbar' )->value() );
}

// Flash News Section.
function news_center_is_flash_news_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_center_enable_flash_news_section' )->value() );
}
function news_center_is_flash_news_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_flash_news_content_type' )->value();
	return ( news_center_is_flash_news_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_center_is_flash_news_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_flash_news_content_type' )->value();
	return ( news_center_is_flash_news_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Banner Slider Section.
function news_center_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_center_enable_banner_section' )->value() );
}
function news_center_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_banner_slider_content_type' )->value();
	return ( news_center_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_center_is_banner_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_banner_slider_content_type' )->value();
	return ( news_center_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}
function news_center_is_banner_grid_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_banner_grid_content_type' )->value();
	return ( news_center_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_center_is_banner_grid_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_center_banner_grid_content_type' )->value();
	return ( news_center_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}
