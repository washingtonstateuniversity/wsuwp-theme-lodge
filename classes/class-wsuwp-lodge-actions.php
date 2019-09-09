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
		add_action( 'back_to_top', 'WSU_WP_Lodge_Actions::display_back_to_top' );
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
WSU_WP_Lodge_Actions::init();

