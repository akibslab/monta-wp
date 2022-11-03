<?php

/**
 * The template for displaying single product page.
 *
 * @package Bruno
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
						<a href="<?php echo home_url('/'); ?>"><span><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-left.png" alt=""></span> Retorna</a>
					</li>
				</ol>
			</nav>
			<!-- end breadcrumb -->
		</div>
		<div class="row">
			<div class="col-lg-6 text-md-center">
				<?php if (!empty($productImages)) : ?>
					<div class="product-details-tab d-flex justify-content-center justify-content-lg-center align-items-start">
						<div class="nav flex-md-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

							<?php
							$n = 0;
							foreach ($productImages as $image) :
								$n++;
							?>
								<button class="nav-link <?php if ($n == '1') {
																	echo 'active';
																} ?>" id="image-<?php echo $n ?>-tab" data-bs-toggle="pill" data-bs-target="#image-<?php echo $n ?>" type="button" role="tab" aria-controls="image-<?php echo $n ?>">
									<img src="<?php echo esc_url($image); ?>" alt="" />
								</button>
							<?php endforeach; ?>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<?php
							$n = 0;
							foreach ($productImages as $image) :
								$n++;
							?>
								<div class="tab-pane fade show <?php if ($n == '1') {
																				echo 'active';
																			} ?>" id="image-<?php echo $n ?>" role="tabpanel" aria-labelledby="image-<?php echo $n ?>-tab">
									<img class="zoom-1" data-zoom-image="<?php echo esc_url($image); ?>" src="<?php echo esc_url($image); ?>" alt="" class="large-img" />
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 text-center text-lg-start">
				<div class="product-contents">
					<div class="product-title">
						<h3><?php the_title(); ?></h3>
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
						<div class="product-price"><?php echo $productPrice; ?></div>
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
<section class="related-products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="heading-2"><?php esc_html_e('Veja também:', 'monta'); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php

				$args = array(
					'posts_per_page' => 5,
					'post_type' => 'product-page',
					'order' => 'DESC',
					'post__not_in' => array($post->ID),
				);
				$product = new WP_Query($args);

				if ($product->have_posts()) :
				?>
					<div class="products">
						<?php while ($product->have_posts()) : $product->the_post();  ?>
							<a href="<?php the_permalink(); ?>" class="single-product">
								<div class="product-item">
									<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
									<h4 class="heading-4"><?php the_title(); ?></h4>
								</div>
							</a>
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				<?php else :
					echo sprintf('<h6 class="alert alert-warning">%s</h6>', esc_html__('No Others Product found', 'monta'));
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<!-- end: Related Product -->


<?php get_footer(); ?>