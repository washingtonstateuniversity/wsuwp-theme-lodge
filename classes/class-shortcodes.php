<?php
/**
 * shortcodes class
 *
 * @since 1.0.0
 */
final class WSU_Lodge_Shortcodes
{

	/**
	 * Add shortcodes available in theme.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_shortcode
	 */
	static public function init()
	{
		add_shortcode('current_year', array('WSU_Lodge_Shortcodes', 'get_current_year'));
	}

	/**
	 * Get Current year
	 *
	 * @return $current_year
	 */
	static public function get_current_year()
	{
		return date('Y');
	}

}
WSU_Lodge_Shortcodes::init();
