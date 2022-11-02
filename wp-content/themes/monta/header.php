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
   <header>
      <div class="container">
         <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-between align-items-center">
               <div class="logo-box">
                  <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="">
                  </a>
               </div>
               <div class="header-menu">
                  <ul>
                     <li><a href="#">sobre nós</a></li>
                     <li><a href="#">produtos</a></li>
                     <li><a href="#">problema</a></li>
                     <li><a href="#">Parceiros</a></li>
                     <li><a href="#">FAQ</a></li>
                     <li><a href="#">CONTATO</a></li>
                     <li><a href="#">história</a></li>
                  </ul>
               </div>
               <!-- <div class="cart-box">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/cart.svg" alt="">
                  </div> -->
               <div class="mobile-toggle d-md-none">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mobile-toggle.svg" alt="">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-white.png" alt="">
         </div>

         <div class="cross-icon-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/cross.svg" class="cross" alt="">
         </div>
      </div>
      <div class="mobile-menu"></div>

      <div class="social-icons text-center">
         <ul>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.svg" alt=""></a></li>
         </ul>
      </div>
   </div>
   <!-- Sidemenu End -->

   <main>