<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Monta
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();
?>

<section class="section-padding">
   <section class="page-header alignwide text-center">
      <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'monta'); ?></h1>
   </section><!-- .page-header -->

   <div class="error-404 not-found default-max-width text-center">
      <div class="page-content">
         <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'monta'); ?></p>
      </div><!-- .page-content -->
   </div><!-- .error-404 -->
</section>

<?php
get_footer();
