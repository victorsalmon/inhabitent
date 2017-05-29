<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<iframe class="our-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d325.46095179858264!2d-123.13813380183865!3d49.26336660814232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H%2C+Canada!5e0!3m2!1sen!2sca!4v1496009337805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>

			<div class="entry-content">
				<?php echo get_the_content();?>
				<h2>We take camping very seriously.</h2>
				<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
				<h2>Send us email!</h2>
				[contact-form-7 id="231" title="Contact Us Form"]
			</div><!-- .entry-content -->
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<div>

		</div>
		</article><!-- #post-## -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>