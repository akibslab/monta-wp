<?php

/**
 * Template Name: Product Template
 * The template for displaying product pages.
 *
 * @package Monta
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- start: Product Details -->
<section class="product-details">
	<div class="container">
		<div class="row">
			<nav class="breadcrumbs" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html"><span><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-left.png" alt=""></span>
							Retorna</a>
					</li>
				</ol>
			</nav>
			<!-- end breadcrumb -->
		</div>
		<div class="row">
			<div class="col-lg-6 text-md-center">
				<div class="product-details-tab d-flex justify-content-center justify-content-lg-center align-items-start">
					<div class="nav flex-md-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="image-1-tab" data-bs-toggle="pill" data-bs-target="#image-1" type="button" role="tab" aria-controls="image-1" aria-selected="true">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/1.jpg" alt="" />
						</button>
						<button class="nav-link" id="image-2-tab" data-bs-toggle="pill" data-bs-target="#image-2" type="button" role="tab" aria-controls="image-2" aria-selected="false">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/2.jpg" alt="" />
						</button>
						<button class="nav-link" id="image-3-tab" data-bs-toggle="pill" data-bs-target="#image-3" type="button" role="tab" aria-controls="image-3" aria-selected="false">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/3.jpg" alt="" />
						</button>
						<button class="nav-link" id="image-4-tab" data-bs-toggle="pill" data-bs-target="#image-4" type="button" role="tab" aria-controls="image-4" aria-selected="false">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/4.jpg" alt="" />
						</button>
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="image-1" role="tabpanel" aria-labelledby="image-1-tab">
							<img class="zoom-1" data-zoom-image="<?php echo get_template_directory_uri() ?>/assets/img/products/1.jpg" src="<?php echo get_template_directory_uri() ?>/assets/img/products/1.jpg" alt="" class="large-img" />
						</div>
						<div class="tab-pane fade" id="image-2" role="tabpanel" aria-labelledby="image-2-tab">
							<img class="zoom-1" data-zoom-image="<?php echo get_template_directory_uri() ?>/assets/img/products/2.jpg" src="<?php echo get_template_directory_uri() ?>/assets/img/products/2.jpg" alt="" class="large-img" />
						</div>
						<div class="tab-pane fade" id="image-3" role="tabpanel" aria-labelledby="image-3-tab">
							<img class="zoom-1" data-zoom-image="<?php echo get_template_directory_uri() ?>/assets/img/products/3.jpg" src="<?php echo get_template_directory_uri() ?>/assets/img/products/3.jpg" alt="" class="large-img" />
						</div>
						<div class="tab-pane fade" id="image-4" role="tabpanel" aria-labelledby="image-4-tab">
							<img class="zoom-1" data-zoom-image="<?php echo get_template_directory_uri() ?>/assets/img/products/4.jpg" src="<?php echo get_template_directory_uri() ?>/assets/img/products/4.jpg" alt="" class="large-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-start">
				<div class="product-contents">
					<div class="product-title">
						<h3>Criado-mudo Buonabitácolo</h3>
					</div>
					<div class="product-content">
						<p>
							Criado-mudo de linhas retas, faz parte da linha
							Buonabitácolo. Estilo contemporâneo, com referências
							minimalistas do mobiliário japonês. Produzido com excelência
							em seus materiais e projeto estrutural, simples de montar e
							com ampla liberdade de personalização.
						</p>
					</div>
					<div class="product-dimension">
						<span>O tamanho: </span>h: 62,8cm; l: 80cm; p: 45cm
					</div>
					<div class="product-price">$350</div>
					<div class="product-button">
						<a href="#" class="btn button-primary">Escolher</a>
						<span>Você será redirecionado para outro site para concluir a
							compra.</span>
					</div>
					<div class="socials">
						<div class="social-instagram">
							<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/instagram-black.svg" alt=""> <span>Os nossos
										clientes
										têm este produto no Instagram</span></a></li>
						</div>
						<div class="social-share">
							<li>
								<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/instagram-gray.svg" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/facebook-gray.svg" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/twitter-gray.svg" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/youtube-gray.svg" alt=""></a>
							</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end: Product Details -->

<!-- start: Related Product -->
<section class="related-products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="heading-2">Veja também:</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="products">
					<a href="#" class="single-product">
						<div class="product-item">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/1.jpg" alt="">
							<h4 class="heading-4">Cadeira 01</h4>
						</div>
					</a>
					<a href="#" class="single-product">
						<div class="product-item">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/2.jpg" alt="">
							<h4 class="heading-4">Mesa Caboclo</h4>
						</div>
					</a>
					<a href="#" class="single-product">
						<div class="product-item">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/3.jpg" alt="">
							<h4 class="heading-4">Escrivaninha Luneta
							</h4>
						</div>
					</a>
					<a href="#" class="single-product">
						<div class="product-item">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/6.jpg" alt="">
							<h4 class="heading-4">Cadeira 01</h4>
						</div>
					</a>
					<a href="#" class="single-product">
						<div class="product-item">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/products/5.jpg" alt="">
							<h4 class="heading-4">Mesa Caboclo</h4>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end: Related Product -->


<?php get_footer(); ?>