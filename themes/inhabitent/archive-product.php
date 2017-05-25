<!--Shop/Products' archive will go here-->

<?php
/**
 * The template for displaying the main (archives) shop (custom post called product) page.
 *
 * @package RED_Starter_Theme
 */

/* You will need to use pre_get_posts () to modify the query object before it runs the 
main loop so you can change the number of posts and the order. Price will get echoed the
usual CFS() way */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-product' );
					
					//Displays value of custom field 'price' from Products
		      echo CFS()->get ( 'price' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
