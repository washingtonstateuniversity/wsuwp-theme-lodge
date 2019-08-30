<?php

/**
 * Helper class for theme functions.
 *
 * @class wsuLodge
 */
final class wsuLodge {

		
  /**
  * Enqueues scripts and styles.
  *
  * @return void
  */
  static public function enqueue_scripts()
  {
    // wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/style.css' );
    // wp_enqueue_style( 'bb-child-theme-dexlue-styles', FL_CHILD_THEME_URL . '/scss/dist/deluxe-styles.css', array(), time() );

    // wp_enqueue_script( 'bb-child-theme-dexlue-scripts', FL_CHILD_THEME_URL . '/js/scripts.js', array(), time() );
  }

  /**
  * Enable SVG Support in WordPress
  *
  * @return $mimes
  */
  static public function enable_svg_support($mimes)
  {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }

  /**
  * Enable Filter to only Display Child Pages of Posts Module
  *
  * @return $args
  */
  static public function enable_filter_only_display_child_pages($args)
  { 
    if ( FLBuilderModel::is_builder_enabled() && strpos($args['settings']->class, 'only-show-child-pages') !== false ) {
      $current_post_id = get_the_id();
      $args['post_parent'] = $current_post_id;
      return $args;
    } else {
      return $args;
    }
  }
    
  /**
  * Return Current year
  *
  * @return $current_year
  */
  static public function current_year()
  {
    return date('Y');
  }

  /**
  * Add Social Media links to customizer
  *
  * @return $args
  */
  static public function add_social_to_customizer( $wp_customize )
  { 

    //
    // Create Section
    //
    $wp_customize->add_section( 'wsulodge_social_media' , array(
        'title'      => __( 'Social Media', 'wsuwp-lodge' ),
        'priority'   => 100,
        'description'    => __( 'Include social media links to be used throughout the website.', 'wsuwp-lodge')
    ) );

    //
    // Facebook
    //
    $wp_customize->add_setting( 'wsulodge_social_media_facebook' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'wsulodge_social_media_facebook', array(
        'label'         => __( 'Facebook', 'wsuwp-lodge' ),
        'section'       => 'wsulodge_social_media',
        'settings'      => 'wsulodge_social_media_facebook',
        'type'          => 'text',
        'input_attrs'   => array( 
            'placeholder'   => __( 'https://facebook.com/WSUPullman', 'wsuwp-lodge')
        )
    ) );

    //
    // Twitter
    //
    $wp_customize->add_setting( 'wsulodge_social_media_twitter' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'wsulodge_social_media_twitter', array(
        'label'         => __( 'Twitter', 'wsulodge_social_media' ),
        'section'       => 'wsulodge_social_media',
        'settings'      => 'wsulodge_social_media_twitter',
        'type'          => 'text',
        'input_attrs'   => array( 
            'placeholder'   => __( 'https://twitter.com/WSUPullman', 'wsuwp-lodge')
        )
    ) );

    //
    // YouTube
    //
    $wp_customize->add_setting( 'wsulodge_social_media_youtube' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'wsulodge_social_media_youtube', array(
        'label'         => __( 'YouTube', 'wsulodge_social_media' ),
        'section'       => 'wsulodge_social_media',
        'settings'      => 'wsulodge_social_media_youtube',
        'type'          => 'text',
        'input_attrs'   => array( 
            'placeholder'   => __( 'https://www.youtube.com/user/washingtonstateuniv', 'wsuwp-lodge')
        )
    ) );

    //
    // Instagram
    //
    $wp_customize->add_setting( 'wsulodge_social_media_instagram' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'wsulodge_social_media_instagram', array(
        'label'         => __( 'Instagram', 'wsulodge_social_media' ),
        'section'       => 'wsulodge_social_media',
        'settings'      => 'wsulodge_social_media_instagram',
        'type'          => 'text',
        'input_attrs'   => array( 
            'placeholder'   => __( 'https://www.instagram.com/wsupullman/', 'wsuwp-lodge')
        )
    ) );
  }
}
