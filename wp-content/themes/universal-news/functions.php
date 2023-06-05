<?php
/**
 * Universal News functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Universal News
 */

if ( ! function_exists( 'universal_news_setup' ) ) :
	function universal_news_setup() {
		/*
		* Make child theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
		load_child_theme_textdomain( 'universal-news', get_stylesheet_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'register_block_pattern' );

		add_theme_support( 'register_block_style' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'universal_news_setup' );

if ( ! function_exists( 'universal_news_enqueue_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function universal_news_enqueue_styles() {
		$parenthandle = 'news-center-style';
		$theme        = wp_get_theme();

		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(
				'news-center-slick-style',
				'news-center-fontawesome-style',
				'news-center-google-fonts',
			),
			$theme->parent()->get( 'Version' )
		);

		wp_enqueue_style(
			'universal-news-style',
			get_stylesheet_uri(),
			array( $parenthandle ),
			$theme->get( 'Version' )
		);

	}

endif;

add_action( 'wp_enqueue_scripts', 'universal_news_enqueue_styles' );

// Custom Controls
require get_theme_file_path() . '/inc/custom-controls.php';

// Customizer Section
require get_theme_file_path() . '/inc/customizer.php';

// Widgets.
require get_theme_file_path() . '/inc/widgets/widgets.php';

/**
 * One Click Demo Import after import setup.
 */
if ( class_exists( 'OCDI_Plugin' ) ) {
	require get_theme_file_path() . '/inc/ocdi.php';
}

function admin_style() {
	?>
	<style type="text/css">
		.notice.notice-info.news-center-demo-data {
			display: none !important;
		}
	</style>
	<?php
}
add_action( 'admin_enqueue_scripts', 'admin_style' );

function universal_news_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'news_center_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '1b8415',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'news_center_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'universal_news_custom_header_setup' );

/**
 * Renders customizer section link
 */
function universal_news_section_link( $section_id ) {
	$section_name      = str_replace( 'universal_news_', ' ', $section_id );
	$section_name      = str_replace( '_', ' ', $section_name );
	$starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $starting_notation . $section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}
