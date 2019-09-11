<?php
/**
 * Helper class for theme functions
 *
 * @class WSU_WP_Lodge_Helpers
 */
final class WSU_WP_Lodge_Helpers
{

	/**
	 * Sanitize Checkboxes
	 *
	 * @return bool $checked
	 */
	static public function sanitize_checkbox($checked)
	{
		// Boolean check
		return ( ( isset($checked) && true == $checked ) ? true : false );
	}

	/**
	 * Get social media url
	 *
	 * @param string $source Name of social media platform to get URL for.
	 * @return string URL for social media platform.
	 */
	static public function get_social_media_url($source)
	{
		return get_theme_mod( 'wsulodge_social_media_' . $source );
	}

	/**
	 * Get social media
	 *
	 * Currently supports Facebook, Twitter, Youtube, Instagram.
	 *
	 * @return array All social media platforms.
	 */
	static public function get_social_media()
	{
		$icons = array();

		if ( !empty( WSU_WP_Lodge_Helpers::get_social_media_url('facebook') ) ) {
			$icons['facebook'] = WSU_WP_Lodge_Helpers::get_social_media_url('facebook');
		}

		if ( !empty( WSU_WP_Lodge_Helpers::get_social_media_url('twitter') ) ) {
			$icons['twitter'] = WSU_WP_Lodge_Helpers::get_social_media_url('twitter');
		}

		if ( !empty( WSU_WP_Lodge_Helpers::get_social_media_url('youtube') ) ) {
			$icons['youtube'] = WSU_WP_Lodge_Helpers::get_social_media_url('youtube');
		}

		if ( !empty( WSU_WP_Lodge_Helpers::get_social_media_url('instagram') ) ) {
			$icons['instagram'] = WSU_WP_Lodge_Helpers::get_social_media_url('instagram');
		}

		return $icons;
	}
}

