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
<section class="slider-section">

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
<section class="intro-section">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/polygon.svg" class="polygon d-none d-md-block" alt="">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ellipse.svg" class="ellipse d-none d-md-block" alt="">

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2">Fácil, transparente e inteligente</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="image-box d-none d-md-block">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro/intro.png" alt="">
            </div>
         </div>
      </div>

      <div class="intro-box">
         <div class="row">
            <div class="col-md-4">
               <div class="intro-item item-1">
                  <div class="image-mobile">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro/mobile-1.png" class="d-md-none"  alt="">
                     <h4 class="heading-4">Tubo que você precisa para montar</h4>
                  </div>
                  <div class="text-box">
                     <p>Dentro de cada tubo, tudo o que você precisa para montar o móvel. Projeto de furação para colocar sobre cada peça de madeira com a posição de cada furo. As tampas se juntam e formam um gabarito que garantirá furos perfeitos e precisos. Cavilhas, parafusos, minifix,...já incluídos você só precisará dos itens que não fazem parte do móvel como parafusadeira com broca 8mm, chave alen 6 e pouco mais. A partir daqui, falta escolher as chapas</p>
                     <a href="#" class="link  d-none d-md-block">Catálogo <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-right.svg" class="icon-right" alt=""></a>
                  </div>
               </div>
            </div>

            <div class="plus-icon d-md-none text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/plus.png" alt="">
            </div>

            <div class="col-md-4">
               <div class="intro-item item-2">
                  <div class="image-mobile">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro/mobile-2.png" class="d-md-none" alt="">
                     <h4 class="heading-4">Sem intermediários</h4>
                  </div>
                  <div class="text-box">
                     <p>Escolha o fornecedor que quiser para comprar as chapas já nas medidas corretas. Oferecemos uma lista de alguns, mas sinta-se livre para achar novos se preferir. Basta escolher o material e fazer o pedido sem intermediários.</p>
                     <a href="#" class="link">chapas <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-right.svg" class="icon-right" alt=""></a>
                  </div>
               </div>

               <div class="intro-item">
                  <h4 class="heading-4">como assim?</h4>
                  <p>Postamos no nosso canal de <a href="#">YouTube</a> cada detalhe da montagem dos modelos. De como colar uma cavilha até dicas de acabamento e muito mais</p>
                  <a href="#" class="link">Mais <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-right.svg" class="icon-right" alt=""></a>
               </div>
            </div>

            <div class="equal-icon d-md-none text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/equal.png" alt="">
            </div>

            <div class="col-md-4">
               <div class="intro-item item-3">
                  <div class="image-mobile">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro/mobile-3.png" class="d-md-none" alt="">
                     <h4 class="heading-4">Mais lindo ainda!</h4>
                  </div>
                  <div class="text-box">
                     <p>Depois de pronto o móvel, basta fazer o acabamento. Escolha as cores, vernizes e tudo mais o que você precisa. Se você quiser, pode se inspirar no nosso <a href="#">Instagram</a> com diversas variações feitas por nós e por nossos clientes orgulhosos de seus móveis.</p>
                     <a href="#" class="link">inspire <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-right.svg" class="icon-right" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="features-box d-flex flex-wrap flex-md-nowrap">
               <div class="feature-item text-center item-1 d-flex flex-wrap flex-column justify-content-center align-items-center">
                  <h4 class="heading-4">liberdade</h4>
                  <p>Não vendemos móveis, mas sim a inteligência por trás deles, deixando você livre para decidir tudo a partir de agora</p>
               </div>
               <div class="feature-item text-center item-2 d-flex flex-wrap flex-column justify-content-center align-items-center">
                  <h4 class="heading-4">fortalecimento</h4>
                  <p>com cada decisão, erros e acertos farão de você melhor</p>
               </div>
               <div class="feature-item text-center item-3 d-flex flex-wrap flex-column justify-content-center align-items-center">
                  <h4 class="heading-4">pessoal</h4>
                  <p>O orgulho de ter realizado é algo transcendental.</p>
               </div>
               <div class="feature-item text-center item-4 d-flex flex-wrap flex-column justify-content-center align-items-center">
                  <h4 class="heading-4">independência</h4>
                  <p>agora você tem mais confiança e iniciou uma jornada infinita. Parabéns!</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Intro Section End -->


<!-- Gallery Section Start -->
<?php
$images = get_field('galleries')
?>
<section class="gallery-section">
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
$productLargeImage = get_field('product_large_image');
?>
<section class="product-section">
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

      $args = array(
         'posts_per_page' => 13,
         'post_type' => 'product-page',
         'order' => 'DESC'
      );
      $product = new WP_Query($args);

      if ($product->have_posts()) :
      ?>
         <div class="products-box">
            <div class="row">

               <?php
               $n = 0;
               while ($product->have_posts()) : $product->the_post();
                  $n++;

                  $productLargeImage = get_field('product_large_image');
               ?>

                  <div class="item-<?php echo $n; ?>  col-md-4 <?php if ($productLargeImage == 'yes') {
                                                                  echo 'col-md-8';
                                                               } else {
                                                                  echo 'col-6';
                                                               } ?>">
                     <a href="<?php the_permalink(); ?>">
                        <div class="product-item">
                           <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                           <h4 class="heading-4"><?php the_title(); ?></h4>
                        </div>
                     </a>
                  </div>

               <?php endwhile;
               wp_reset_postdata(); ?>

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
<section class="problems-section">
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
                     <a href="<?php echo esc_url($problemContent['button_text']); ?>" class="btn button-primary lg"><?php esc_html_e($problemContent['button_text'], 'monta'); ?></a>
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
<section class="contact-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <h2 class="heading-2">Se indentificou com algo disso tudo? torne-se um parceiro</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-6 d-none d-md-block">
            <div class="arrow-animation">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/polygon-yellow.svg" class="polygon-yellow" alt="">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/polygon-blue.svg" class="polygon-blue" alt="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-form">
               <p class="p-top">Preencha o formulário, entraremos em contato</p>
               <form action="">
                  <div class="input-box">
                     <input type="text" class="form-control" placeholder="Nome">
                  </div>
                  <div class="input-box">
                     <input type="text" class="form-control" placeholder="Telefone">
                  </div>
                  <div class="input-box">
                     <input type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="input-box">
                     <textarea class="form-control" placeholder="Sua mensagem"></textarea>
                  </div>
                  <button class="btn button-primary" type="submit">ENVIAR</button>
               </form>
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
<section class="faq-section">
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
               <a href="<?php esc_url($faqButton['button_link']); ?>" class="btn button-primary"><?php esc_html_e($faqButton['button_text'], 'monta'); ?></a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!-- FAQ Section End -->


<!-- Instagram Section Start -->
<section class="instagram-section">
   <div class="container">
      <div class="row">
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/1.jpg" alt="">
            </div>
         </div>
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/2.jpg" alt="">
            </div>
         </div>
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/3.jpg" alt="">
            </div>
         </div>
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/4.jpg" alt="">
            </div>
         </div>
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/5.jpg" alt="">
            </div>
         </div>
         <div class="col-6 col-md-4">
            <div class="image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/6.jpg" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Instagram Section End -->

<?php get_footer(); ?>