  <?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
    if ( has_post_thumbnail() ) :	
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$thumb = $thumb['0'];
		endif;
    ?>
	<header class="entry-header" style="background-image: url('<?php echo $thumb;?>')">
		<?php if (is_home()) : ?>
			<a href="<?php echo get_permalink(get_the_ID());?>"> 
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</a>
		<?php endif;?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

