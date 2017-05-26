<?php
/**
 * The template for displaying the main (archives) shop (custom post called product) page.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1 class="page-title"> Shop Stuff </h1>
					<?php 
						$product_types = get_terms( 'product-type' ); 
						if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
								<?php foreach ( $product_types as $product_type ) : ?>
									<div class="list-product-type">
										<a href="<?php echo get_term_link($product_type);?>">
											<h3><?php echo $product_type->name;?></h3>
										</a>
									</div>
								<?php endforeach; ?>
					<?php endif; ?>
			</header> <!--Page Header-->

			<?php if ( have_posts() ) : ?>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<div class="product-gallery">
					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="product-panel">
							<?php	get_template_part( 'template-parts/content', 'product-small' ); ?>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
