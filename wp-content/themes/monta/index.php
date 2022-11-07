<?php

/**
 *  The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
   <header class="page-header alignwide">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
   </header><!-- .page-header -->
<?php endif; ?>

<?php if (have_posts()) :

   // Load posts loop.
   while (have_posts()) :
      the_post();


   endwhile;



else :


endif;

get_footer();
