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
         'page_title'   => __('Monta Theme Settings', 'monta'),
         'menu_title'  => __('Monta Settings', 'monta'),
         'menu_slug'   => 'monta-settings',
         'capability'  => 'edit_posts',
         'redirect'    => true
      ));

      // Top Header Setting
      $child = acf_add_options_sub_page(array(
         'page_title'   => __('Top Header Settings', 'monta'),
         'menu_title'  => __('Top Header', 'monta'),
         'parent_slug'  => $parent['menu_slug'],
      ));

      // //  Header Logo
      // $child = acf_add_options_sub_page(array(
      //    'page_title'   => __('Header Logo', 'monta'),
      //    'menu_title'  => __('Header Logo', 'monta'),
      //    'parent_slug'  => $parent['menu_slug'],
      // ));


      // // Footer
      // $child = acf_add_options_sub_page(array(
      //    'page_title'   => __('Footer Settings', 'monta'),
      //    'menu_title'  => __('Footer', 'monta'),
      //    'parent_slug'  => $parent['menu_slug'],
      // ));
   }
}
