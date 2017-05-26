<?php
/**
 * Template part for displaying single product thumbnails with only name and price.
 *
 * @package Inhabitent_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<div class="entry-content">

    <?php if ( has_post_thumbnail() ) : ?> 
 			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
			<?php $thumb = $thumb['0']; ?>
      <div class="product-image" style="background-image: url('<?php echo $thumb;?>')">
      </div>
    <?php endif; ?>
    
    <div class="product-meta">
      <?php the_title(); ?>
      <span class="dots"></span>
      <?php echo CFS()->get( 'price' ); ?>
    </div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
