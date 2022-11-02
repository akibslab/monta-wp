<?php

/**
 * The template for displaying the footer
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
?>

</main><!-- #main -->

<!-- Footer Area Start -->
<footer>
   <div class="footer-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ellipse.svg" class="ellipse-1" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ellipse.svg" class="ellipse-2 d-none d-md-block" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/rectangle-1.svg" class="rectangle-1" alt="">

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title text-center">
                  <h2 class="heading-2 text-white">CONTATO</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 order-2 order-md-1">
               <div class="info-box">
                  <a href="mailto:digala@monta.la">digala@monta.la</a>
                  <a href="tel:(406) 555 0120">(406) 555 0120</a>
               </div>

               <div class="social-icons">
                  <ul>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg" alt=""></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg" alt=""></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg" alt=""></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.svg" alt=""></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
               <div class="contact-form">
                  <p class="p-top">Preencha o formulário, entraremos em contato</p>
                  <form action="">
                     <div class="input-box">
                        <input type="text" class="form-control" placeholder="Nome">
                     </div>
                     <div class="input-box">
                        <input type="email" class="form-control" placeholder="E-mail">
                     </div>
                     <button class="btn button-secondary" type="submit">ENVIAR</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="footer-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-white.png" alt=""></a>
               </div>

               All rights reserved 2022
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->
<?php wp_footer(); ?>
</body>

</html>