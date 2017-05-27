<?php
/**
 * Template part for displaying single product thumbnails with only name and price.
 *
 * @package Inhabitent_Theme
 */
?>
<div id="post-<?php the_ID(); ?>" class="entry-content <?php post_class(); ?>">
  <?php if ( has_post_thumbnail() ) : ?> 
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
    <?php $thumb = $thumb['0']; ?>
    <!--<a href="<?php get_permalink($post->post_name);?>"> -->
      <div class="product-image" style="background-image: url('<?php echo $thumb;?>')">
      </div>
    </a>
  <?php endif; ?>
    
  <div class="product-meta">
    <span class="dots"><?php the_title(); ?></span>
    <?php echo CFS()->get( 'price' ); ?>
  </div>
</div><!-- .entry-content -->