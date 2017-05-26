<?php
/**
 * The template for displaying the main (archives) shop (custom post called product) page.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<header class="gallery-header">
			<h1 class="page-title"> Shop Stuff </h1>
			<ul class="product-types">
				<?php 
					$product_types = get_terms( 'product-type' ); 
					if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
							<?php foreach ( $product_types as $product_type ) : ?>
								<li class="list-product-type">
									<a href="<?php echo get_term_link($product_type);?>">
										<h3><?php echo $product_type->name;?></h3>
									</a>
								</li>
							<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</header> <!--Page Header-->

		<?php if ( have_posts() ) : ?>
			<div class="product-gallery">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php	get_template_part( 'template-parts/content', 'product-small' ); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
