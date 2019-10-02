<?php
/**
 * Class for theme setup
 *
 * @class WSU_WP_Lodge_Sidebars
 */
final class WSU_WP_Lodge_Sidebars
{
	/**
	 * Register Sidebars
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	static public function add_sidebars_to_widgets_area()
	{
		// Default Sidebar
		register_sidebar( array(
			'name'          => esc_html__('Sidebar', 'wsuwp-lodge'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wsuwp-lodge'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
