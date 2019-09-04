<?php
/**
 * WSU WP Lodge functions and definitions
 *
 * @package WSU_WP_Lodge
 */

/**
 * Classes
 */
require_once 'classes/class-wsuwp-lodge.php';
require_once 'classes/class-wsuwp-lodge-actions.php';
require_once 'classes/class-wsuwp-lodge-shortcodes.php';

/**
 * Actions
 */
add_action('after_setup_theme', 'WSU_WP_Lodge::theme_setup');
add_action('widgets_init', 'WSU_WP_Lodge::add_sidebars_to_widgets_area');
add_action('customize_register', 'WSU_WP_Lodge::add_social_to_customizer');
add_action('customize_register', 'WSU_WP_Lodge::add_global_options_to_customizer');
add_action('wp_enqueue_scripts', 'WSU_WP_Lodge::enqueue_scripts');
add_action('back_to_top', 'WSU_WP_Lodge::display_back_to_top');

/**
 * Filters
 */
add_filter('upload_mimes', 'WSU_WP_Lodge::enable_svg_support', 10, 1);
