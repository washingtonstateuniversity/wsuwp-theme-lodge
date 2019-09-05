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
		add_action( 'back_to_top', 'WSU_WP_Lodge::display_back_to_top' );
	}
}
WSU_WP_Lodge_Actions::init();

