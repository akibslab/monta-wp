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
<?php
$footerStyle = get_field('footer_style');
$footerTop = get_field('footer_top', 'option');
$footerBottom = get_field('footer_bottom', 'option');
$socials = get_field('socials', 'option');
?>
<footer>
   <?php if ($footerStyle == 'secondary') : ?>
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <div class="footer-logo">
                     <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php if (!empty($footerBottom['footer_logo'])) {
                                       echo esc_url($footerBottom['footer_logo']);
                                    } else {
                                       echo esc_url(get_template_directory_uri() . '/assets/img/logo/logo-white.png');
                                    } ?>" alt="<?php bloginfo('name'); ?>">
                     </a>
                  </div>

                  <?php echo $footerBottom['copyright_text']; ?>
               </div>
            </div>
         </div>
      </div>
   <?php else : ?>
      <div class="footer-top">
         <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse-1" alt="">
         <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse-2 d-none d-md-block" alt="">
         <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-1.svg'); ?>" class="rectangle-1" alt="">

         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title text-center">
                     <h2 class="heading-2 text-white"><?php if (!empty($footerTop['footer_title'])) {
                                                         echo $footerTop['footer_title'];
                                                      } else {
                                                         echo 'CONTATO';
                                                      } ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 order-2 order-md-1">
                  <div class="info-box">
                     <a href="mailto:<?php if (!empty($footerTop['footer_email'])) {
                                          echo $footerTop['footer_email'];
                                       } else {
                                          echo 'digala@monta.la';
                                       } ?>"><?php if (!empty($footerTop['footer_email'])) {
                                                echo $footerTop['footer_email'];
                                             } else {
                                                echo 'digala@monta.la';
                                             } ?></a>
                     <a href="tel:<?php if (!empty($footerTop['footer_phone'])) {
                                       echo $footerTop['footer_phone'];
                                    } else {
                                       echo '(406) 555 0120';
                                    } ?>"><?php if (!empty($footerTop['footer_phone'])) {
                                             echo $footerTop['footer_phone'];
                                          } else {
                                             echo '(406) 555 0120';
                                          } ?></a>
                  </div>

                  <div class="social-icons">
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
               <div class="col-md-6 order-1 order-md-2">
                  <div class="contact-form">
                     <?php echo do_shortcode($footerTop['footer_contact']); ?>
                     <!-- <p class="p-top">Preencha o formulário, entraremos em contato</p>
                        <form action="">
                           <div class="input-box">
                              <input type="text" class="form-control" placeholder="Nome">
                           </div>
                           <div class="input-box">
                              <input type="email" class="form-control" placeholder="E-mail">
                           </div>
                           <button class="btn button-secondary" type="submit">ENVIAR</button>
                        </form> -->
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
                     <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php if (!empty($footerBottom['footer_logo'])) {
                                       echo esc_url($footerBottom['footer_logo']);
                                    } else {
                                       echo esc_url(get_template_directory_uri() . '/assets/img/logo/logo-white.png');
                                    } ?>" alt="<?php bloginfo('name'); ?>">
                     </a>
                  </div>

                  <?php if (!empty($footerBottom['copyright_text'])) {
                     echo $footerBottom['copyright_text'];
                  }; ?>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
</footer>
<!-- Footer Area End -->
<?php wp_footer(); ?>
</body>

</html>