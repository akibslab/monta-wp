<?php

/**
 * Template Name: Problem Template
 * The template for displaying problem pages.
 *
 * @package Monta
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$sectionTitle = get_field('section_title');
$accordions = get_field('accordions');
$buttonText = get_field('button_text');
$buttonLink = get_field('button_link');
?>


<!-- FAQ Section Start -->
<section class="faq-section">
	<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/rectangle-1.svg'); ?>" class="rectangle-1 d-none d-md-block" alt="" />
	<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/ellipse.svg'); ?>" class="ellipse d-none d-md-block" alt="" />
	<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/polygon-2.svg'); ?>" class="polygon d-none d-md-block" alt="" />

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2 class="heading-2"><?php if (!empty($sectionTitle)) {
														echo $sectionTitle;
													} else {
														echo 'ame os problemas';
													} ?></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 offset-md-1">
				<?php if (!empty($accordions)) : ?>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php
						$n = 0;
						foreach ($accordions as $accordion) :
							$n++;
						?>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $n; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $n; ?>"><?php echo $accordion['accordion_heading']; ?></button>
								</h2>
								<div id="flush-collapse-<?php echo $n; ?>" class="accordion-collapse collapse <?php if ($n == '1') {
																																			echo 'show';
																																		} ?>" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<p><?php echo $accordion['accordion_body']; ?></p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php if (!empty($buttonText)) : ?>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo esc_url($buttonLink); ?>" class="btn button-primary"><?php esc_html_e($buttonText, 'monta'); ?></a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- FAQ Section End -->

<?php get_footer(); ?>