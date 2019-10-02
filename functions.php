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
require_once 'classes/class-wsuwp-lodge-helpers.php';
require_once 'classes/class-wsuwp-lodge-actions.php';
require_once 'classes/class-wsuwp-lodge-customizer.php';
require_once 'classes/class-wsuwp-lodge-shortcodes.php';
require_once 'classes/class-wsuwp-lodge-sidebars.php';

/**
 * Actions
 */
add_action('after_setup_theme', 'WSU_WP_Lodge::theme_setup');
add_action('wp_enqueue_scripts', 'WSU_WP_Lodge::enqueue_scripts');
add_action('widgets_init', 'WSU_WP_Lodge_Sidebars::add_sidebars_to_widgets_area');

/**
 * Filters
 */
add_filter('upload_mimes', 'WSU_WP_Lodge::enable_svg_support', 10, 1);
