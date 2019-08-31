<?php
/**
 * shortcodes class
 *
 * @since 1.0.0
 */
final class wsuLodgeShortcodes {

	/**
	 * Add shortcodes available in theme.
	 */
	static public function init() {
		add_shortcode( 'current_year', array( 'wsuLodgeShortcodes', 'current_year' ) );
	}

	/**
	 * Return current
	 */
	static function current_year() {
        return wsuwpLodge::current_year;
    }
    
}
wsuLodgeShortcodes::init();