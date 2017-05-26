<!--Do, Eat, Sleep, Wear archives all feed here-->
<!--get_the_archive_title-->
<!--if ( is_post_type_archive( array( 'product' ) ) || $query0>is_tax( 'product-type' ) )

This is used to modify archive queries on 

-->

<?php get_header(); ?>
	<div id="primary" class="content-area">
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'product-small' );
			
			endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>