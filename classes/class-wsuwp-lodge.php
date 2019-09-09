<?php
/**
 * Helper class for theme functions.
 *
 * @class WSU_WP_Lodge
 */
final class WSU_WP_Lodge
{

	/**
	 * Define Theme Supports
	 */
	static public function theme_setup() {
		/**
		 * Title Tags
		 *
		 * @link https://codex.wordpress.org/Title_Tag
		 */
		add_theme_support('title-tag');

		/**
		 * Post Thumbnails
		 *
		 * @link https://codex.wordpress.org/Post_Thumbnails
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Custom Headers
		 *
		 * @link https://codex.wordpress.org/Custom_Headers
		 */
		add_theme_support( 'custom-header' );

		/**
		 * Theme Markup
		 *
		 * @link https://codex.wordpress.org/Theme_Markup
		 */
		$args = array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		);
		add_theme_support( 'html5', $args );

		/**
		 * Theme Logo
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'   => true,
			'flex-height'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		));

		/**
		 * Set Default Image Sizes
		 *
		 * @link https://codex.wordpress.org/Function_Reference/update_option
		 */
		update_option('medium_size_h', 450);
		update_option('medium_size_w', 450);
		update_option('large_size_w', 1400);
		update_option('large_size_h', 1400);

		/**
		 * Register Navigation Menus
		 *
		 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
		 */
		register_nav_menus( array(
			'primary-nav'   => esc_html__('Primary Navigation', 'wsuwp-lodge'),
			'secondary-nav' => esc_html__('Secondary Navigation', 'wsuwp-lodge'),
		));
	}

	/**
	 * Enqueues scripts and styles.
	 *
	 * @return void
	 */
	static public function enqueue_scripts()
	{
		wp_enqueue_style('wsuwp-lodge-style', get_stylesheet_uri());

		wp_enqueue_style('wsuwp-lodge-webpack-styles', get_stylesheet_directory_uri() . '/assets/dist/main.css');

		if (get_theme_mod('wsulodge_global_enable_base_styles')) {
			wp_enqueue_style('wsuwp-lodge-basic-styles', get_stylesheet_directory_uri() . '/assets/src/base-styles.css');
		}

		wp_enqueue_script('wsuwp-lodge-scripts', get_stylesheet_directory_uri() . '/assets/dist/bundle.js', '', '0.0.1', true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}

	/**
	 * Enable SVG Support in WordPress
	 *
	 * @return $mimes
	 */
	static public function enable_svg_support($mimes)
	{
		// if ( current_user_can('administrator') ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
		// }
	}

	/**
	 * Sanitize Checkboxes
	 *
	 * @return $checked
	 */
	static public function sanitize_checkbox($checked)
	{
		// Boolean check
		return ((isset($checked) && true == $checked) ? true : false);
	}








	// TODO Move to own class
	/**
	 * Initilize Widgets
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	static public function add_sidebars_to_widgets_area()
	{
		register_sidebar(array(
			'name'          => esc_html__('Sidebar', 'wsuwp-lodge'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wsuwp-lodge'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
	}
}
