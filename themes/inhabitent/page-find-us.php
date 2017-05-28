<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d325.46095179858264!2d-123.13813380183865!3d49.26336660814232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H%2C+Canada!5e0!3m2!1sen!2sca!4v1496009337805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>