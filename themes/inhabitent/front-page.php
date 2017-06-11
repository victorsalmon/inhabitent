<?php
/**
 * The front-page template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<section class="hero">
  <div class="logo-full">
  </div>
</section>

<!--The Shop Section-->
<h4>Shop Stuff</h4>
<section class="product-info container">
    <?php 
      $product_types = get_terms( 'product-type' ); 
      if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
          <?php foreach ( $product_types as $product_type ) : ?>
            <div class="single-product-type">
              <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $product_type->slug; ?>.svg">
              <span class="description"><?php echo $product_type->description;?></h3></span>
              <a href="<?php echo get_term_link($product_type);?>">
                <h3 class="grn-btn"><?php echo $product_type->name;?> Stuff</h3>
              </a>
            </div>
          <?php endforeach; ?>
    <?php endif; ?>
              <!--<pre><?php print_r ($product_type); ?></pre>-->

</section>

<!--The Journal Section-->
<h4>Inhabitent Journal</h4>
<section class="latest-entries container">
  <?php $args = array(
    // 'order' => 'ASC',
    'numberposts' => 3,
    'post_type' => 'post',
  );?>
  <?php $journal_posts = get_posts( $args ); // returns an array of posts
    foreach ( $journal_posts as $post ) : setup_postdata( $post );?>
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="single-journal">
        <div class="image-container" style="background-image: url('<?php echo $thumb['0'];?>')">
        </div>
        <p>
          <?php echo get_the_time( "j F Y", $post->ID) ?> 
          / 
          <?php echo $post->comment_count; ?> Comments
        </p>
        <a href="<?php echo $post->guid; ?>">
          <h2><?php echo $post->post_title; ?></h2>
        </a>
        <div>
          <a class="blk-btn" href="<?php echo $post->guid; ?>">
            <span>Read Entry</span>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
</section>

<!--The Adventures Section-->
<h4>Latest Adventures</h4>
<section class="adventure container">
  <?php $args = array(
    'order' => 'ASC',
    'numberposts' => 4,
    'post_type' => 'adventure',
  );?>
  <?php $adventure_counter = 1;?>
  <?php $adventure_posts = get_posts( $args ); // returns an array of posts?>
  <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post );?>
    <?php if ( $adventure_counter == 2 ) {
      echo '<div class="flex-2to4">';
    } elseif ( $adventure_counter == 3 ) {
      echo '<div class="flex-3to4">';
    } ?>

    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    
    <div class="single-adventure-<?php echo $adventure_counter;?>" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .35) 0%, rgba(0, 0, 0, .35) 100%), url('<?php echo $thumb['0'];?>')">
      <a href="<?php echo $post->guid; ?>">
        <h2><?php echo $post->post_title; ?></h2>
      </a>
      <div class="blk-btn">
        <a href="<?php echo $post->guid; ?>">
          <span>Read Entry</span>
        </a>
      </div>
    </div>

    <?php if ( $adventure_counter == 4 ) {
      echo '</div></div>';
    } ?>
    <?php $adventure_counter++; ?>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</section>
<section class="container">
  <a href="<?php echo get_site_url() . '/adventure';?>">
    <h3 class="grn-btn adventures">More Adventures</h3>
  </a>
</section>












<?php get_footer(); ?>
