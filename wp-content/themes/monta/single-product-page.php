<?php

/**
 * The template for displaying single product
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

get_header();

global $post;

$productImages = get_field('product_gallery');
$productDimension = get_field('product_dimension');
$productPrice = get_field('product_price');
$productButton = get_field('product_button');
$selectRelatedProducts = get_field('select_related_products');
$productInstagram = get_field('product_instagram');
$productSocialShare = get_field('social_share');
?>

<!-- start: Product Details -->
<section class="product-details">
	<div class="container">
		<div class="row">
			<nav class="breadcrumbs" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo home_url('/product-page'); ?>"><span><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-left.png" alt=""></span>Retorna</a>
					</li>
				</ol>
			</nav>
			<!-- end breadcrumb -->
		</div>
		<div class="row">
			<div class="col-lg-6">
				<?php if (!empty($productImages)) : ?>
					<div class="product-details-gallery">

						<div class="monta-product show" href="<?php the_post_thumbnail_url(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" id="show-img">
						</div>

						<div class="small-img">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class="icon-left" alt="" id="prev-img">
							<div class="small-container">
								<div id="small-img-roll">
									<?php foreach ($productImages as $image) : ?>
										<img src="<?php echo esc_url($image); ?>" class="show-small-img" alt="<?php the_title(); ?>">
									<?php endforeach; ?>
								</div>
							</div>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/arrow-right.svg'); ?>" class=" icon-right" alt="" id="next-img">
						</div>

					</div>

				<?php endif; ?>
			</div>

			<div class="col-lg-6 text-center text-lg-start">
				<div class="product-contents">
					<div class="product-title">
						<h2 class="heading-2"><?php the_title(); ?></h2>
					</div>
					<div class="product-content">
						<?php the_content(); ?>
					</div>
					<div class="product-dimension">
						<?php if (!empty($productDimension)) :
							echo sprintf('<span>O %s </span>%s', 'tamanho:', $productDimension);
						endif; ?>
					</div>
					<?php if (!empty($productPrice)) : ?>
						<h2 class="heading-2 product-price"><?php echo $productPrice; ?></h2>
					<?php endif; ?>
					<div class="product-button">
						<?php if (!empty($productButton['button_text'])) : ?>
							<a href="<?php echo esc_url($productButton['button_link']); ?>" class="btn button-primary"><?php esc_html_e($productButton['button_text'], 'monta'); ?></a>
						<?php endif;
						if (!empty($productButton['button_description'])) :
							echo sprintf('<span>' . $productButton['button_description'] . '</span>');
						else :
						?>
							<span><?php esc_html_e('Você será redirecionado para outro site para concluir a compra.', 'monta') ?></span>
						<?php endif; ?>
					</div>
					<div class="socials">
						<div class="social-instagram">
							<li><a href="<?php echo esc_url($productInstagram['instagram_link']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/instagram-black.svg'); ?>" alt="">
									<span><?php if (!empty($productInstagram['instagram_label'])) {
												esc_html_e($productInstagram['instagram_label'], 'monta');
											} else {
												esc_html_e('Os nossos clientes têm este produto no Instagram', 'monta');
											}; ?>
									</span>
								</a></li>
						</div>

						<div class="social-share">
							<li>
								<a href="<?php echo esc_url($productSocialShare['instagram']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/instagram-gray.svg'); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo esc_url($productSocialShare['facebook']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/facebook-gray.svg'); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo esc_url($productSocialShare['twitter']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/twitter-gray.svg'); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo esc_url($productSocialShare['youtube']); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/youtube-gray.svg'); ?>" alt=""></a>
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
<?php if (!empty($selectRelatedProducts)) : ?>
	<section class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="heading-2"><?php esc_html_e('Veja também:', 'monta'); ?></h2>
					</div>
				</div>
			</div>
			<div class="products-box">
				<div class="row">

					<?php
					$n = 0;
					foreach ($selectRelatedProducts as $product) :
						$n++;

						$permalink = get_permalink($product->ID);
						$productImage = get_the_post_thumbnail_url($product->ID, 'full');
						$title = get_the_title($product->ID);
						$largeImage = get_field('product_large_image', $product->ID);
					?>
						<div class="item-<?php echo $n; ?> <?php if ($largeImage == 'yes') {
																			echo 'col-md-6';
																		} else {
																			echo 'col-md-3 col-6';
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
		</div>
	</section>
<?php endif; ?>
<!-- end: Related Product -->


<?php get_footer(); ?>