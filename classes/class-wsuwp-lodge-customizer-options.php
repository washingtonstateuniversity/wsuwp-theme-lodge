<?php

class WSUWP_Lodge_Customizer_Options {



	public static $WSU_WP_Lodge_content_width = 'fixed-width';


	public static function get_wsu_wp_lodge_content_width( $return_default = false ) {

		if ( $return_default ) {
			return self::$WSU_WP_Lodge_content_width;
		} else {
			return get_theme_mod( 'WSU_WP_Lodge_content_width', self::$WSU_WP_Lodge_content_width );
		}
	}
}
