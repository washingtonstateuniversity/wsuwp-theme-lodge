<?php
/**
 * Shortcodes class
 *
 * @since 1.0.0
 */
final class WSU_WP_Lodge_Shortcodes
{

	/**
	 * Add shortcodes available in theme.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_shortcode
	 */
	static public function init()
	{
		add_shortcode('current_year', array('WSU_WP_Lodge_Shortcodes', 'get_current_year'));
		add_shortcode('social_media_icons', array('WSU_WP_Lodge_Shortcodes', 'social_media_icons'));
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

	/**
	 * Display Social Media Icon
	 *
	 * @return $icons
	 */
	static public function social_media_icons()
	{
		$social_media = WSU_WP_Lodge_Helpers::get_social_media();

		ob_start();

		?>

		<div class="social-media-icons">

			<?php foreach ($social_media as $key => $value) : ?>
				<a href="<?php echo $value; ?>"><?php echo $key; ?></a>
			<?php endforeach; ?>

		</div>

		<?php
		return ob_get_clean();

	}

}
WSU_WP_Lodge_Shortcodes::init();
