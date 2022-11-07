<?php

/**
 * Template Name: Product Template
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monta
 */
if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();
?>


<!-- start: Related Product -->
<?php if (have_posts()) : ?>
   <section class="related-products">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title text-center">
                  <h2 class="heading-2"><?php echo 'produtos'; ?></h2>
               </div>
            </div>
         </div>
         <div class="products-box">
            <div class="row">
               <?php
               $args = array(
                  'posts_per_page' => -1,
                  'post_type' => 'product-page',
                  'order' => 'DESC'
               );
               $product = new WP_Query($args);
               $n = 0;
               while ($product->have_posts()) : $product->the_post();
                  $largeImage = get_field('product_large_image');
                  $n++;
               ?>

                  <div class="item-<?php echo $n; ?> <?php if ($largeImage == 'yes') {
                                                         echo 'col-md-6';
                                                      } else {
                                                         echo 'col-md-3 col-6';
                                                      } ?>">
                     <a href="<?php the_permalink(); ?>">
                        <div class="product-item">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                           <h4 class="heading-4"><?php the_title(); ?></h4>
                        </div>
                     </a>
                  </div>
               <?php endwhile;
               wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
   </section>
<?php else :
   echo sprintf('<h6 class="alert alert-warning">%s</h6>', esc_html__('No Product found', 'monta'));
endif;

get_footer();
