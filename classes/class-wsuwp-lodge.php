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

		wp_enqueue_script('wsuwp-lodge-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

		wp_enqueue_script('wsuwp-lodge-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

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

	/**
	 * Add Social Media links to customizer
	 *
	 * @return $args
	 */
	static public function add_social_to_customizer($wp_customize)
	{

		//
		// Create Section
		//
		$wp_customize->add_section('wsulodge_social_media', array(
			'title'       => __('Social Media', 'wsuwp-lodge'),
			'priority'    => 100,
			'description' => __('Include social media links to be used throughout the website.', 'wsuwp-lodge')
		));

		//
		// Facebook
		//
		$wp_customize->add_setting('wsulodge_social_media_facebook', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control('wsulodge_social_media_facebook', array(
			'label'       => __('Facebook', 'wsuwp-lodge'),
			'section'     => 'wsulodge_social_media',
			'settings'    => 'wsulodge_social_media_facebook',
			'type'        => 'text',
			'input_attrs' => array(
				'placeholder' => __('https://facebook.com/WSUPullman', 'wsuwp-lodge')
			)
		));

		//
		// Twitter
		//
		$wp_customize->add_setting('wsulodge_social_media_twitter', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control('wsulodge_social_media_twitter', array(
			'label'         => __('Twitter', 'wsulodge_social_media'),
			'section'       => 'wsulodge_social_media',
			'settings'      => 'wsulodge_social_media_twitter',
			'type'          => 'text',
			'input_attrs'   => array(
				'placeholder' => __('https://twitter.com/WSUPullman', 'wsuwp-lodge')
			)
		));

		//
		// YouTube
		//
		$wp_customize->add_setting('wsulodge_social_media_youtube', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control('wsulodge_social_media_youtube', array(
			'label'       => __('YouTube', 'wsulodge_social_media'),
			'section'     => 'wsulodge_social_media',
			'settings'    => 'wsulodge_social_media_youtube',
			'type'        => 'text',
			'input_attrs' => array(
				'placeholder' => __('https://www.youtube.com/user/washingtonstateuniv', 'wsuwp-lodge')
			)
		));

		//
		// Instagram
		//
		$wp_customize->add_setting('wsulodge_social_media_instagram', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control('wsulodge_social_media_instagram', array(
			'label'       => __('Instagram', 'wsulodge_social_media'),
			'section'     => 'wsulodge_social_media',
			'settings'    => 'wsulodge_social_media_instagram',
			'type'        => 'text',
			'input_attrs' => array(
				'placeholder' => __('https://www.instagram.com/wsupullman/', 'wsuwp-lodge')
			)
		));
	}

	/**
	 * Add Global Options Customizer Settings
	 *
	 * @return $args
	 */
	static public function add_global_options_to_customizer($wp_customize)
	{

		//
		// Create Section
		//
		$wp_customize->add_section('wsulodge_global_options', array(
			'title'       => __('Global Options', 'wsuwp-lodge'),
			'priority'    => 100,
			'description' => __('Various site-wide configuration settings that can be modified.', 'wsuwp-lodge')
		));

		//
		// Back to Top Button
		//
		$wp_customize->add_setting('wsulodge_global_back_to_top', array(
			'default'           => 'false',
			'sanitize_callback' => 'WSU_WP_Lodge::sanitize_checkbox',

		));

		$wp_customize->add_control('wsulodge_global_back_to_top', array(
			'type'     => 'checkbox',
			'label'    => __('Display Back to Top Button', 'wsuwp-lodge'),
			'section'  => 'wsulodge_global_options',
			'settings' => 'wsulodge_global_back_to_top',
		));
	}

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

	/**
	 * Display Back to Top Button
	 */
	static public function display_back_to_top() {
		if ( get_theme_mod('wsulodge_global_back_to_top') == TRUE ) {

			get_template_part( 'template-parts/partial', 'back-to-top' );

		}
	}
}
