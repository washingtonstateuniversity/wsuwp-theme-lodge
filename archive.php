<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WSU_WP_Lodge
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/*
			* Include archive page header
			*/
			get_template_part( 'template-parts/archive/archive', 'header' );
			?>

			<section class="archive-content-wrapper">

				<div class="archive-content-list">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/archive/archive', get_post_type() );

					endwhile;
					?>
				</div>

				<?php
				get_sidebar();
				?>

			</section>

			<?php

		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();
