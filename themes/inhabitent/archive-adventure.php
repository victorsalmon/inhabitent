<?php
/**
 * The template for displaying the main (archives) shop (custom post called product) page.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<h4>Latest Adventures</h4>

<section class="adventure-container">
  <?php $args = array(
    'order' => 'ASC',
    'numberposts' => 4,
    'post_type' => 'adventure',
  );?>
  <?php $adventure_posts = get_posts( $args ); // returns an array of posts?>
  <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post );?>

    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="single-adventure-panel" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .35) 0%, rgba(0, 0, 0, .35) 100%), url('<?php echo $thumb['0'];?>')">
      <a href="<?php echo $post->guid; ?>">
        <h2><?php echo $post->post_title; ?></h2>
      </a>
      <div class="blk-btn">
        <a href="<?php echo $post->guid; ?>">
          <span>Read More</span>
        </a>
      </div>
    </div>
  <?php endforeach; ?>

  <?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>