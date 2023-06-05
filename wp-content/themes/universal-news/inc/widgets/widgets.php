<?php

// Posts Grid Widgets.
require get_theme_file_path() . '/inc/widgets/posts-grid-widget.php';

// Tile and List Widgets.
require get_theme_file_path() . '/inc/widgets/posts-tile-and-list-widget.php';

// Post List Widgets.
require get_theme_file_path() . '/inc/widgets/posts-tile-widget.php';

/**
 * Register Widgets
 */
function universal_news_register_widgets() {

	register_widget( 'News_Center_Posts_Grid_Widget' );

	register_widget( 'News_Center_Posts_Tile_And_List_Widget' );

	register_widget( 'News_Center_Posts_Tile_Widget' );

}
add_action( 'widgets_init', 'universal_news_register_widgets' );
