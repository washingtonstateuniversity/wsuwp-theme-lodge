<?php
/**
 * Template part to serve as the default for displaying post types
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WSU_WP_Lodge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/*
	* Include the shared content entry header template
	*/
	get_template_part( 'template-parts/content/content', 'entry-header' );

	/*
	* Include the post content entry meta template
	*/
	get_template_part( 'template-parts/content/content-post', 'entry-meta' );
	?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wsuwp-lodge' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wsuwp-lodge' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	/*
	* Include content entry footer
	*/
	get_template_part( 'template-parts/content/content-post', 'entry-footer' );
	?>
</article><!-- #post-<?php the_ID(); ?> -->
