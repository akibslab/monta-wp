<?php

/**
 * monta option page
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package monta
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


/**
 * Option Page
 */
add_action('acf/init', 'monta_acf_op_init');
function monta_acf_op_init() {

   // Check function exists.
   if (function_exists('acf_add_options_page')) {

      // Add parent.
      $parent = acf_add_options_page(array(
         'page_title'   => __('Monta Theme Options', 'monta'),
         'menu_title'  => __('Monta Options', 'monta'),
         'menu_slug'   => 'monta-settings',
         'capability'  => 'edit_posts',
         'redirect'    => true
      ));
   }
}


// ACF Jason Save
add_filter('acf/settings/save_json', 'monta_acf_json_save_point');
function monta_acf_json_save_point($path) {

   // update path
   $path = get_stylesheet_directory() . '/inc/acf/acf-jason';


   // return
   return $path;
}


// ACF Jason Load
add_filter('acf/settings/load_json', 'monta_acf_json_load_point');
function monta_acf_json_load_point($paths) {

   // remove original path (optional)
   unset($paths[0]);


   // append path
   $paths[] = get_stylesheet_directory() . '/inc/acf/acf-jason';


   // return
   return $paths;
}
