<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent_Theme
 */

?>

	<!--<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<header class="entry-header" style="background-image: url('<?php echo $thumb['0'];?>')">-->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) :	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		$thumb = $thumb['0'];
	endif; ?>
	<div class="product-image" style="background-image: url('<?php echo $thumb;?>')">
	</div>
	
	<div class="entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span class="price"><?php echo CFS()->get('price');?></span>
		<?php the_content(); ?>
		<?php get_template_part( 'template-parts/content', 'social-buttons' ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php  foreach (get_comments() as $comment): ?>
			<div><?php echo $comment->comment_author; ?> said: "<?php echo $comment->comment_content; ?>".</div>
			<?php endforeach; ?>
	<?php comments_template(); ?>      
	
</article><!-- #post-## -->
