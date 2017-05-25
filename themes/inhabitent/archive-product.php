<?php
/**
 * The template for displaying the main (archives) shop (custom post called product) page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> Shop Stuff </h1>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="product-gallery">
				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="product-panel">
						<?php
							get_template_part( 'template-parts/content', 'product' );
							echo CFS()->get ( 'price' );
						?>
					</div>

				<?php endwhile; ?>
			</div>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
