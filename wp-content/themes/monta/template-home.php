<?php

/**
 * Template Name: Home Template
 * The template for displaying archive pages.
 *
 * @package Monta
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Slider Section Start -->
<?php
$slides = get_field('slides');
?>
<section class="slider-section" id="slider-section">

   <div id="sliderIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#sliderIndicators" class="active" data-bs-slide-to="0" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#sliderIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#sliderIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <?php

         if (!empty($slides)) :
            $n = 0;
            foreach ($slides as $slide) : $n++; ?>
               <div class="carousel-item <?php if ($n == '1') { ?> active <?php } ?>">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-5">
                           <div class="text-box">
                              <h1 class="heading-1"><?php echo $slide['title']; ?></h1>
                              <p> <?php esc_html_e($slide['description'], 'monta'); ?></p>
                              <?php if (!empty($slide['button_text'])) : ?>
                                 <a href="<?php echo esc_url($slide['button_link']); ?>" class="btn button-primary"><?php esc_html_e($slide['button_text'], 'monta'); ?></a>
                              <?php endif; ?>
                           </div>
                        </div>
                        <div class="col-md-7">
                           <div class="image-box">
                              <img src="<?php echo esc_url($slide['image']); ?>" class="main" alt="">

                              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/polygon.svg'); ?>" class="polygon" alt="">
                              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-1.svg'); ?>" class="rectangle-1" alt="">
                              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-2.svg'); ?>" class="rectangle-2" alt="">
                           </div>
                        </div>
                     </div>
                     <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse" alt="">
                  </div>
               </div>
            <?php endforeach;
         else : ?>
            <div class="carousel-item active">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="text-box">
                           <h1 class="heading-1"><?php echo 'Móveis <br> únicos'; ?></h1>
                           <p><?php echo 'Simplificamos todos os passos da produção de um móvel para você realizar os modelos como se fosse mágica. Escolha os modelos e controle tudo partir de agora.'; ?></p>
                           <a href="#" class="btn button-primary"><?php echo 'Catálogo'; ?></a>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="image-box">
                           <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/slider/1.png'); ?>" class="main" alt="">
                           <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/polygon.svg'); ?>" class="polygon" alt="">
                           <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-1.svg'); ?>" class="rectangle-1" alt="">
                           <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-2.svg'); ?>" class="rectangle-2" alt="">
                        </div>
                     </div>
                  </div>
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse" alt="">
               </div>
            </div>

         <?php endif;
         ?>


         <!-- <div class="carousel-item">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="text-box">
                        <h1 class="heading-1">Móveis <br> únicos</h1>
                        <p> Simplificamos todos os passos da produção de um móvel para você realizar os modelos como se fosse mágica. Escolha os modelos e controle tudo partir de agora.</p>
                        <a href="#" class="btn button-primary">Catálogo</a>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/2.png" class="main" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/polygon.svg" class="polygon" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/rectangle-1.svg" class="rectangle-1" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/rectangle-2.svg" class="rectangle-2" alt="">
                     </div>
                  </div>
               </div>
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ellipse.svg" class="ellipse" alt="">
            </div>
         </div>

         <div class="carousel-item">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="text-box">
                        <h1 class="heading-1">Móveis <br> únicos</h1>
                        <p> Simplificamos todos os passos da produção de um móvel para você realizar os modelos como se fosse mágica. Escolha os modelos e controle tudo partir de agora.</p>
                        <a href="#" class="btn button-primary">Catálogo</a>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/3.png" class="main" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/polygon.svg" class="polygon" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/rectangle-1.svg" class="rectangle-1" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/rectangle-2.svg" class="rectangle-2" alt="">
                     </div>
                  </div>
               </div>
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ellipse.svg" class="ellipse" alt="">
            </div>
         </div> -->

      </div>
   </div>
</section>
<!-- Slider Section End -->


<!-- Intro Section Start -->
<?php
$introSectionTitle = get_field('intro_section_title');
$introDesktopImage = get_field('intro_image_for_desktop');
$introColumnOne = get_field('intro_column_1');
$introColumnTwo = get_field('intro_column_2');
$introColumnThree = get_field('intro_column_3');
?>
<section class="intro-section" id="intro-section">
   <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/polygon.svg'); ?>" class="polygon d-none d-md-block" alt="">
   <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse d-none d-md-block" alt="">

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2">
                  <?php if (!empty($introSectionTitle)) :
                     echo $introSectionTitle;
                  else :
                     echo 'Fácil, transparente e inteligente';
                  endif;
                  ?>
               </h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="image-box d-none d-md-block">
               <img src="<?php if (!empty($introDesktopImage)) : echo esc_url($introDesktopImage);
                           else : echo esc_url(get_template_directory_uri() . '/assets/img/intro/intro.png');
                           endif; ?>" alt="">

            </div>
         </div>
      </div>

      <div class="intro-box">
         <div class="row">
            <div class="col-md-4">
               <div class="intro-item item-1">
                  <div class="image-mobile">
                     <img src="<?php echo esc_url($introColumnOne['column_image']); ?>" class="d-md-none" alt="">
                     <h4 class="heading-4"><?php echo $introColumnOne['column_title']; ?></h4>
                  </div>
                  <div class="text-box">
                     <p><?php echo $introColumnOne['column_description']; ?></p>
                     <?php if ($introColumnOne['button_text']) : ?>
                        <a href="<?php echo $introColumnOne['button_link']; ?>" class="link  d-none d-md-block"><?php echo $introColumnOne['button_text']; ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class="icon-right" alt=""></a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>

            <div class="plus-icon d-md-none text-center">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/plus.png'); ?>" alt="">
            </div>

            <div class="col-md-4">
               <div class="intro-item item-2">
                  <div class="image-mobile">
                     <img src="<?php echo esc_url($introColumnTwo['column_image']); ?>" class="d-md-none" alt="">
                     <h4 class="heading-4"><?php echo $introColumnTwo['column_title']; ?></h4>
                  </div>
                  <div class="text-box">
                     <p><?php echo $introColumnTwo['column_description']; ?></p>
                     <?php if ($introColumnTwo['button_text']) : ?>
                        <a href="<?php echo $introColumnTwo['button_link']; ?>" class="link"><?php echo $introColumnTwo['button_text']; ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class="icon-right" alt=""></a>
                     <?php endif; ?>
                  </div>
               </div>

               <div class="intro-item">
                  <?php if ($introColumnTwo['column_title_2']) : ?>
                     <h4 class="heading-4"><?php echo $introColumnTwo['column_title_2']; ?></h4>
                  <?php endif;
                  if ($introColumnTwo['column_description_2']) : ?>
                     <p><?php echo $introColumnTwo['column_description_2']; ?></p>
                  <?php endif;
                  if ($introColumnTwo['button_text_2']) : ?>
                     <a href="<?php echo $introColumnTwo['button_link_2']; ?>" class="link"><?php echo $introColumnTwo['button_text_2']; ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class="icon-right" alt=""></a>
                  <?php endif; ?>
               </div>
            </div>

            <div class="equal-icon d-md-none text-center">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/equal.png'); ?>" alt="">
            </div>

            <div class="col-md-4">
               <div class="intro-item item-3">
                  <div class="image-mobile">
                     <img src="<?php echo esc_url($introColumnThree['column_image']); ?>" class="d-md-none" alt="">
                     <h4 class="heading-4"><?php echo $introColumnThree['column_title']; ?></h4>
                  </div>
                  <div class="text-box">
                     <p><?php echo $introColumnThree['column_description']; ?></p>
                     <?php if (!empty($introColumnThree['button_text'])) : ?>
                        <a href="<?php echo $introColumnThree['button_link']; ?>" class="link"><?php echo $introColumnThree['button_text']; ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class="icon-right" alt=""></a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Features box -->
      <?php $features = get_field('features'); ?>
      <div class="row">
         <div class="col-md-12">
            <?php if (!empty($features)) : ?>
               <div class="features-box d-flex flex-wrap flex-md-nowrap">
                  <?php
                  $n = 0;
                  foreach ($features as $feature) :
                     $n++;
                  ?>
                     <div class="feature-item text-center item-<?php echo $n; ?> d-flex flex-wrap flex-column justify-content-center align-items-center">
                        <h4 class="heading-4"><?php echo $feature['feature_title']; ?></h4>
                        <p><?php echo $feature['feature_description']; ?></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!-- Intro Section End -->


<!-- Gallery Section Start -->
<?php
$images = get_field('galleries')
?>
<section class="gallery-section" id="gallery-section">
   <div id="galleryControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <?php
         if (!empty($images)) :
            $n = 0;
            foreach ($images as $image) :
               $n++;
         ?>
               <div class="carousel-item <?php if ($n == '1') { ?>active<?php } ?>" data-bs-interval="50000">
                  <img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="...">
               </div>

            <?php endforeach;
         else : ?>
            <div class="carousel-item active" data-bs-interval="50000">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/gallery/1.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
         <?php endif; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#galleryControls" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden"><?php esc_html_e('Previous', 'monta'); ?></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#galleryControls" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden"><?php esc_html_e('Next', 'monta'); ?></span>
      </button>
   </div>
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/zoom.png" class="zoom-icon d-md-none" alt="">
</section>
<!-- Gallery Section End -->


<!-- Product Section Start -->
<?php
$productSectionTitle = get_field('product_section_title');
$selectProducts = get_field('select_products');
?>
<section class="product-section" id="product-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2"><?php if (!empty($productSectionTitle)) {
                                          echo $productSectionTitle;
                                       } else {
                                          echo 'produtos';
                                       }; ?></h2>
            </div>
         </div>
      </div>

      <?php

      if ($selectProducts) :
      ?>
         <div class="products-box">
            <div class="row">

               <?php
               $n = 0;
               foreach ($selectProducts as $product) :
                  $n++;

                  $permalink = get_permalink($product->ID);
                  $productImage = get_the_post_thumbnail_url($product->ID, 'full');
                  $title = get_the_title($product->ID);
                  $largeImage = get_field('product_large_image', $product->ID);
               ?>
                  <div class="item-<?php echo $n; ?>  <?php if ($largeImage == 'yes') {
                                                         echo 'col-md-8';
                                                      } else {
                                                         echo 'col-md-4 col-6';
                                                      } ?>">
                     <a href="<?php echo esc_url($permalink); ?>">
                        <div class="product-item">
                           <img src="<?php echo esc_url($productImage); ?>" alt="<?php esc_html_e($title, 'monta'); ?>">
                           <h4 class="heading-4"><?php esc_html_e($title, 'monta'); ?></h4>
                        </div>
                     </a>
                  </div>

               <?php endforeach; ?>

            </div>
         </div>
      <?php else :
         echo sprintf('<h6 class="alert alert-warning">%s</h6>', esc_html__('No Product found', 'monta'));
      endif;
      ?>

   </div>
</section>
<!-- Product Section End -->


<!-- Problems Section Start -->
<?php
$problemSectionTitle = get_field('prblem_section_title');
$problemContent = get_field('problem_section_content');
?>
<section class="problems-section" id="problems-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2"><?php if (!empty($problemSectionTitle)) {
                                          echo $problemSectionTitle;
                                       } else {
                                          echo 'ame os problemas';
                                       }; ?></h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="problems-box d-flex flex-wrap">
               <div class="text-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="d-md-none ellipse-1" alt="">

                  <h3 class="heading-3"><?php if (!empty($problemContent['content_title'])) {
                                             echo $problemContent['content_title'];
                                          } else {
                                             echo 'Tudo que envolve trabalho, envolve situações inesperadas';
                                          }; ?></h3>

                  <p><?php if (!empty($problemContent['content_description'])) {
                        echo $problemContent['content_description'];
                     } else {
                        echo 'Nós sabemos disso e criamos uma seção com as soluções dos principais problemas que encontramos ao por a mão na massa.';
                     }; ?></p>
                  <?php if (!empty($problemContent['button_text'])) : ?>
                     <a href="<?php echo esc_url($problemContent['button_link']); ?>" class="btn button-primary lg"><?php esc_html_e($problemContent['button_text'], 'monta'); ?></a>
                  <?php endif; ?>
               </div>
               <div class="image-box d-flex flex-wrap justify-content-center align-items-center">
                  <img src="<?php if (!empty($problemContent['content_image'])) : echo esc_url($problemContent['content_image']);
                              else : echo esc_url(get_template_directory_uri() . '/assets/img/problems/problems.jpg');
                              endif; ?>" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Problems Section End -->


<!-- Contact Section Start -->
<?php
$contactSectionTitle = get_field('contact_section_title');
$formShortCode = get_field('form_shortcode');
?>
<section class="contact-section" id="contact-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2"><?php if (!empty($contactSectionTitle)) {
                                          echo $contactSectionTitle;
                                       } else {
                                          echo 'Se indentificou com algo disso tudo? torne-se um parceiro';
                                       } ?></h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-6 d-none d-md-block">
            <div class="arrow-animation">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/contact/polygon-yellow.svg'); ?>" class="polygon-yellow" alt="">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/contact/polygon-blue.svg'); ?>" class="polygon-blue" alt="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-form">
               <?php echo do_shortcode($formShortCode); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Section End -->


<!-- FAQ Section Start -->
<?php
$faqSectionTitle = get_field('faq_section_title');
$faqAccordions = get_field('faq_accordions');
$faqButton = get_field('faq_button');
?>
<section class="faq-section" id="faq-section">
   <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-1.svg'); ?>" class="rectangle-1 d-none d-md-block" alt="">
   <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse d-none d-md-block" alt="">
   <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/polygon-2.svg'); ?>" class="polygon d-none d-md-block" alt="">

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2"><?php if (!empty($faqSectionTitle)) {
                                          echo $faqSectionTitle;
                                       } else {
                                          echo 'FAQ';
                                       }; ?></h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <?php
               if (!empty($faqAccordions)) :
                  $n = 0;
                  foreach ($faqAccordions as $accordion) :
                     $n++;
               ?>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $n; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $n; ?>">
                              <?php echo $accordion['heding']; ?>
                           </button>
                        </h2>
                        <div id="flush-collapse-<?php echo $n; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                           <div class="accordion-body">
                              <p><?php echo $accordion['body']; ?></p>
                           </div>
                        </div>
                     </div>

                  <?php endforeach;
               else : ?>
                  <div class="accordion-item">
                     <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false" aria-controls="flush-collapse-1">
                           <?php esc_html_e('Onde compro o material na medida necessária para os projetos?', 'monta'); ?>
                        </button>
                     </h2>
                     <div id="flush-collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           <p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus harum vitae accusamus praesentium beatae quae et ex aliquam nulla ipsa reiciendis eius incidunt libero, commodi! Culpa voluptate nihil hic repellendus!', 'monta'); ?></p>
                        </div>
                     </div>
                  </div>

               <?php endif; ?>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12 text-center">
            <?php if (!empty($faqButton['button_text'])) : ?>
               <a href="<?php echo esc_url($faqButton['button_link']); ?>" class="btn button-primary"><?php esc_html_e($faqButton['button_text'], 'monta'); ?></a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!-- FAQ Section End -->


<!-- Instagram Section Start -->
<?php
$instagramFeed = get_field('instagram_feed_shortcode');
?>
<section class="instagram-section" id="instagram-section">
   <div class="container">
      <?php if (!empty($instagramFeed)) : ?>
         <div class="row">
            <?php echo do_shortcode($instagramFeed); ?>
         </div>
      <?php else : ?>
         <div class="row">
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/1.jpg'); ?>" alt="">
               </div>
            </div>
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/2.jpg'); ?>" alt="">
               </div>
            </div>
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/3.jpg'); ?>" alt="">
               </div>
            </div>
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/4.jpg'); ?>" alt="">
               </div>
            </div>
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/5.jpg'); ?>" alt="">
               </div>
            </div>
            <div class="col-6 col-md-4">
               <div class="image-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram/6.jpg'); ?>" alt="">
               </div>
            </div>
         </div>
      <?php endif; ?>
   </div>
</section>
<!-- Instagram Section End -->

<?php get_footer(); ?>