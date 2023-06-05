<?php

// Posts Grid Widget.
require get_template_directory() . '/inc/widgets/posts-grid-widget.php';

// Posts List Widget.
require get_template_directory() . '/inc/widgets/posts-list-widget.php';

// Posts Small List Widget.
require get_template_directory() . '/inc/widgets/posts-small-list-widget.php';

// Posts Tile Widget.
require get_template_directory() . '/inc/widgets/posts-tile-widget.php';

// Posts Tile and List Widget.
require get_template_directory() . '/inc/widgets/posts-tile-and-list-widget.php';

// Posts Carousel Widget.
require get_template_directory() . '/inc/widgets/posts-carousel-widget.php';

// Posts Tabs Widget.
require get_template_directory() . '/inc/widgets/posts-tabs-widget.php';

// Social Icons Widget.
require get_template_directory() . '/inc/widgets/social-icons-widget.php';

/**
 * Register Widgets
 */
function news_center_register_widgets() {

	register_widget( 'News_Center_Posts_Grid_Widget' );

	register_widget( 'News_Center_Posts_List_Widget' );

	register_widget( 'News_Center_Posts_Small_List_Widget' );

	register_widget( 'News_Center_Posts_Tile_Widget' );

	register_widget( 'News_Center_Posts_Tile_And_List_Widget' );

	register_widget( 'News_Center_Posts_Carousel_Widget' );

	register_widget( 'News_Center_Posts_Tabs_Widget' );

	register_widget( 'News_Center_Social_Icons_Widget' );

}
add_action( 'widgets_init', 'news_center_register_widgets' );
