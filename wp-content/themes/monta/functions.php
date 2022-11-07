<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package monta
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

/**
 * Define theme version
 */
if (!defined('MONTA_VERSION')) {
   // Replace the version number of the theme on each release.
   define('MONTA_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('monta_supports')) :
   function monta_supports() {

      /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
      load_theme_textdomain('monta', get_template_directory() . '/languages');

      /**
       * Add default posts and comments RSS feed links to head.
       * */
      add_theme_support('automatic-feed-links');

      /*
      * Let WordPress manage the document title.
      */
      add_theme_support('title-tag');

      /*
      * Enable support for Post Thumbnails on posts and pages.
      */
      add_theme_support('post-thumbnails');

      /**
       * Add post-formats support.
       */
      add_theme_support(
         'post-formats',
         array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
         )
      );

      /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
      add_theme_support(
         'html5',
         array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
         )
      );

      /**
       * Add theme support for selective refresh for widgets.
       */
      add_theme_support('customize-selective-refresh-widgets');

      // Add support for Block Styles.
      add_theme_support('wp-block-styles');

      // Add support for full and wide align images.
      add_theme_support('align-wide');

      // Add support for editor styles.
      add_theme_support('editor-styles');

      // Add support for responsive embedded content.
      add_theme_support('responsive-embeds');

      // Add support for custom line height controls.
      add_theme_support('custom-line-height');

      // Add support for experimental link color control.
      add_theme_support('experimental-link-color');

      // Add support for experimental cover block spacing.
      add_theme_support('custom-spacing');

      // Add support for custom units.
      // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
      add_theme_support('custom-units');

      // Remove feed icon link from legacy RSS widget.
      add_filter('rss_widget_feed_link', '__return_false');

      /**
       * This theme uses wp_nav_menu() in one location.
       */
      register_nav_menus(
         [
            'main-menu'   => __('Primary Menu', 'monta'),
         ]
      );
   }
endif;
add_action('after_setup_theme', 'monta_supports');


/**
 * Enqueue scripts and styles.
 */
function monta_files() {
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.2.0', 'all');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', [], '6.0.0', 'all');
   wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', [], '1.1.0', 'all');
   wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', [], '2.0.8', 'all');
   wp_enqueue_style('monta-main', get_template_directory_uri() . '/assets/css/main.css', [], MONTA_VERSION, 'all');
   wp_enqueue_style('monta-responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], MONTA_VERSION, 'all');
   wp_enqueue_style('monta-style', get_stylesheet_uri());

   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '5.2.0', true);
   wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', ['jquery'], '1.1.0', true);
   wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', ['jquery'], '2.0.8', true);
   wp_enqueue_script('zoomImage', get_template_directory_uri() . '/assets/js/zoom-image.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('monta-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], MONTA_VERSION, true);

   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
add_action('wp_enqueue_scripts', 'monta_files');


/**
 * Register Custom Post Type
 */
add_action('init', 'monta_custom_post');
function monta_custom_post() {
   // Register Custom Post for Product
   register_post_type(
      'product-page',
      array(
         'labels' => array(
            'name' => __('Products', 'monta'),
            'singular_name' => __('Product', 'monta'),
            'add_new' => __('Add New Product', 'monta'),
            'add_new_item' => __('Add New Product', 'monta'),
         ),
         'supports' => array('title', 'editor', 'custom-fields', 'thumbnail',),
         'public'       => true,
         'show_ui'      => true,
         'show_in_rest' => true,
         'menu_icon'    => 'dashicons-cart',
         'rewrite'           => array('slug' => 'product-page'),
      )
   );
}

/**
 * TGM Plugin Activator
 */
if (!class_exists('TGM_Plugin_Activation')) {
   include_once('inc/tgm-plugin-activation.php');
   include_once('inc/required-plugins.php');
}

/**
 * ACF Options
 */
if (class_exists('ACF')) {
   include_once('inc/acf/acf-option.php');
   include_once('inc/acf/acf-data.php');
}
