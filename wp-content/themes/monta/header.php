<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monta
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <!-- Header Area Start -->
   <?php
   $headerStyle = get_field('header_style');
   $desktopLogo = get_field('desktop_logo', 'option');
   $mobileLogo = get_field('mobile_logo', 'option');

   $socials = get_field('socials', 'option');
   ?>


   <header <?php if ($headerStyle == 'secondary') {
               echo 'class="header-white"';
            } ?>>
      <div class="container">
         <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-between align-items-center">
               <div class="logo-box">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                     <img src="<?php if (!empty($desktopLogo)) {
                                    echo esc_url($desktopLogo);
                                 } else {
                                    echo esc_url(get_template_directory_uri() . '/assets/img/logo/logo.png');
                                 } ?>" alt="<?php bloginfo('name'); ?>">
                  </a>
               </div>
               <div class="header-menu">
                  <?php
                  wp_nav_menu(array(
                     'theme_location' => 'main-menu',
                     'menu_class'    => 'main-menu',
                  ));
                  ?>
               </div>
               <!-- <div class="cart-box">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/cart.svg" alt="">
                  </div> -->
               <div class="mobile-toggle d-md-none">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/mobile-toggle.svg'); ?>" alt="">
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header Area End -->


   <!-- Sidemenu Start -->
   <div class="side-menu d-md-none">
      <div class="top-area d-flex flex-wrap justify-content-between align-items-center">
         <div class="logo-box">
            <a href="<?php echo esc_url(home_url('/')); ?>">
               <img src="<?php if (!empty($mobileLogo)) {
                              echo esc_url($mobileLogo);
                           } else {
                              echo esc_url(get_template_directory_uri() . '/assets/img/logo/logo-white.png');
                           } ?>" alt="<?php bloginfo('name'); ?>">
            </a>
         </div>

         <div class="cross-icon-box">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/cross.svg'); ?>" class="cross" alt="">
         </div>
      </div>
      <div class="mobile-menu"></div>

      <div class="social-icons text-center">
         <ul>
            <?php if (!empty($socials['instagram'])) : ?>
               <li><a target="_blank" href="<?php echo esc_url($socials['instagram']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/instagram.svg'); ?>" alt=""></a></li>
            <?php endif;
            if (!empty($socials['facebook'])) : ?>
               <li><a target="_blank" href="<?php echo esc_url($socials['facebook']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/fb.svg'); ?>" alt=""></a></li>
            <?php endif;
            if (!empty($socials['twitter'])) : ?>
               <li><a target="_blank" href="<?php echo esc_url($socials['twitter']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/twitter.svg'); ?>" alt=""></a></li>
            <?php endif;
            if (!empty($socials['youtube'])) : ?>
               <li><a target="_blank" href="<?php echo esc_url($socials['youtube']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/youtube.svg'); ?>" alt=""></a></li>
            <?php endif; ?>
         </ul>
      </div>
   </div>
   <!-- Sidemenu End -->

   <main>