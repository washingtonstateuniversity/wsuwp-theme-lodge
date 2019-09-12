<?php
/**
 * Helper class for theme functions.
 *
 * @class WSU_WP_Lodge_Actions
 */
final class WSU_WP_Lodge_Actions
{
	/**
	 * Register Action Callbacks
	 */
	static public function init()
	{
		add_action( 'WSU_WP_Lodge_back_to_top', 'WSU_WP_Lodge_Actions::display_back_to_top' );
		add_action( 'WSU_WP_Lodge_content_width', 'WSU_WP_Lodge_Actions::content_width' );
	}

	/**
	 * Display Back to Top Button
	 */
	static public function display_back_to_top() {
		if ( get_theme_mod( 'wsulodge_global_back_to_top', true ) == TRUE ) {

			get_template_part( 'template-parts/partial', 'back-to-top' );

		}
	}

	/**
	 * Add class to control content width
	 */
	static public function content_width() {
		echo get_theme_mod( 'wsulodge_global_default_content_width', 'fixed-width' );
	}
}
WSU_WP_Lodge_Actions::init();

