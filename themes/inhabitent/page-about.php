<!--The about page will go here and will be a subset of pages lacking a sidebar-->

<?php
/**
 * The template for displaying all pages.
 * Template Name: About Page
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <h2> Our Story </h2>
  <?php echo CFS()->get( 'our_story' );?>
	  <h2> Our Team </h2>
  <?php echo CFS()->get( 'our_team' );?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
