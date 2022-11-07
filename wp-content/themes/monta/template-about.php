<?php

/**
 * Template Name: About Template
 * The template for displaying about pages.
 *
 * @package Monta
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$topSection = get_field('top_section');
$middleSection = get_field('middle_section');
$middleColum1 = $middleSection["column_1"];
$middleColum2 = $middleSection["column_2"];
$bigImage = get_field('about_big_image');
$bottomSection = get_field('bottom_section');
?>
<!-- start: About Content -->
<section class="about-section">
	<div class="container">
		<div class="row align-items-center  margin-bottom">
			<div class="col-lg-6 order-1 order-lg-0">
				<div class="about-img">
					<img src="<?php if (!empty($topSection['section_image'])) {
										esc_url($topSection['section_image']);
									} else {
										echo get_template_directory_uri() . '/assets/img/about/about.png';
									} ?>" alt="" />
				</div>
			</div>
			<div class="col-lg-5 order-0 order-lg-1 ">
				<div class="about-contents">
					<div class="section-title">
						<?php if (!empty($topSection['section_title'])) : ?>
							<h2 class="heading-2"><?php echo $topSection['section_title']; ?></h2>
						<?php endif; ?>
					</div>
					<div class="section-subtitle">
						<?php if (!empty($topSection['section_subtitle'])) : ?>
							<h3 class="heading-3"><?php echo $topSection['section_subtitle']; ?></h3>
						<?php endif; ?>
					</div>
					<div class="about-content">
						<?php if (!empty($topSection['section_content'])) : ?>
							<p><?php echo $topSection['section_content']; ?></p>
						<?php endif;
						if (!empty($topSection['content_for_mobile'])) : ?>
							<h5 class="heading-5"><?php echo $topSection['content_for_mobile']; ?></h5>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin-bottom ">
			<div class="col-lg-5 mb-3 mb-md-0">
				<div class="section-subtitle">
					<?php if (!empty($middleColum1['section_title'])) : ?>
						<h3 class="heading-3"><?php echo $middleColum1['section_title']; ?></h3>
					<?php endif; ?>
				</div>
				<div class="about-content">
					<?php if (!empty($middleColum1['section_content'])) : ?>
						<p><?php echo $middleColum1['section_content']; ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="section-subtitle">
					<?php if (!empty($middleColum2['section_title'])) : ?>
						<h3 class="heading-3"><?php echo $middleColum2['section_title']; ?></h3>
					<?php endif; ?>
				</div>
				<div class="about-content">
					<?php if (!empty($middleColum2['section_content'])) : ?>
						<p><?php echo $middleColum2['section_content']; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row margin-bottom">
			<div class="col-12">
				<div class="about-wide-image">
					<?php if (!empty($bigImage)) : ?>
						<img src="<?php echo esc_url($bigImage); ?>" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="about-bottom-section">
					<div class="content-title">
						<?php if (!empty($bottomSection['section_title_1'])) : ?>
							<h2 class="heading-2"><?php echo $bottomSection['section_title_1']; ?></h2>
						<?php endif;
						if (!empty($bottomSection['section_title_2'])) : ?>
							<h2 class="heading-2"><?php echo $bottomSection['section_title_2']; ?></h2>
						<?php endif; ?>
					</div>
					<div class="section-subtitle">
						<?php if (!empty($bottomSection['signature'])) : ?>
							<h4 class="heading-4 line-height gray"><?php echo $bottomSection['signature']; ?></h4>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end: About Content -->

<?php get_footer(); ?>