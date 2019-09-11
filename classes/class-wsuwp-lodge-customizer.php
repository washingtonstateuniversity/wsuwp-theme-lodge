<?php
/**
 * Helper class for theme functions.
 *
 * @class WSU_WP_Lodge_Customizer
 */
final class WSU_WP_Lodge_Customizer
{
	/**
	 * Add shortcodes available in theme.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_shortcode
	 */
	static public function init()
	{
		add_action('customize_register', 'WSU_WP_Lodge_Customizer::add_social_to_customizer');
		add_action('customize_register', 'WSU_WP_Lodge_Customizer::add_global_options_to_customizer');

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
		// Create Global Options Section
		//
		$wp_customize->add_section('wsulodge_global_options', array(
			'title'       => __('Global Options', 'wsuwp-lodge'),
			'priority'    => 100,
			'description' => __('Various site-wide configuration settings that can be modified.', 'wsuwp-lodge')
		));

		//
		// Back to Top
		//
		$wp_customize->add_setting('wsulodge_global_back_to_top', array(
			'default'           => true,
			'sanitize_callback' => 'WSU_WP_Lodge_Helpers::sanitize_checkbox',

		));

		$wp_customize->add_control('wsulodge_global_back_to_top', array(
			'type'     => 'checkbox',
			'label'    => __('Display Back to Top Button', 'wsuwp-lodge'),
			'section'  => 'wsulodge_global_options',
			'settings' => 'wsulodge_global_back_to_top',
		));

		//
		// Enable Base Theme Styles
		//
		$wp_customize->add_setting('wsulodge_global_enable_base_styles', array(
			'default'           => true,
			'sanitize_callback' => 'WSU_WP_Lodge_Helpers::sanitize_checkbox',
		));

		$wp_customize->add_control('wsulodge_global_enable_base_styles', array(
			'type'     => 'checkbox',
			'label'    => __('Enable Lodge Base Styles', 'wsuwp-lodge'),
			'section'  => 'wsulodge_global_options',
			'settings' => 'wsulodge_global_enable_base_styles',
		));

		//
		// Default Page Template Options
		//
		$wp_customize->add_setting('wsulodge_global_default_content_width', array(
			'default' => 'fixed-width'
		));

		$wp_customize->add_control('wsulodge_global_default_content_width', array(
			'type'     => 'select',
			'label'    => __('Default Content Width', 'wsuwp-lodge'),
			'section'  => 'wsulodge_global_options',
			'settings' => 'wsulodge_global_default_content_width',
			'choices'  => array(
				'full-width' => 'Full Width',
				'fixed-width' => 'Fixed Width',
			)
		));
	}
}
WSU_WP_Lodge_Customizer::init();

