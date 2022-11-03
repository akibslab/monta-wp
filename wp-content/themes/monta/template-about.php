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

get_header(); ?>


<!-- start: About Content -->
<section class="about-section">
	<div class="container">
		<div class="row align-items-center  margin-bottom">
			<div class="col-lg-6 order-1 order-lg-0">
				<div class="about-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about.png" alt="" />
				</div>
			</div>
			<div class="col-lg-6 order-0 order-lg-1 ">
				<div class="about-contents">
					<div class="section-title">
						<h2 class="heading-2">Sobre nós</h2>
					</div>
					<div class="section-subtitle">
						<h3 class="heading-3">Fazer produtos em casa é coisa de família.</h3>
					</div>
					<div class="about-content">
						<p>
							Fazer produtos em casa é coisa de família. Sempre que
							vasculhamos em fotos antigas, encontramos lindas imagens de
							nossos antepassados, orgulhosos de seus feitos, ha muitas
							gerações. Cresci aprendendo a arrumar e a construir coisas
							com o meu pai. De móveis a molduras de quadros, passando por
							viveiros para bichos, abatjours e muito mais. Minha mãe
							entrou com a noção estética associada á capacidade de
							realização com as mãos. Cresci vendo lindas esculturas,
							quadros e peças nascendo em casa, até começar com as minhas
							próprias. Crescendo numa família assim sempre foi difícil de
							entender por quê outras pessoas compravam coisas que elas
							poderiam fazer com as próprias mãos. Você pode fazer tudo o
							que você quiser.
						</p>

						<h5 class="heading-5">você pode fazer tudo o que você quiser.</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin-bottom ">
			<div class="col-lg-6 padding-right">
				<div class="section-subtitle">
					<h3 class="heading-3">
						eu precisava descobrir como ajudar as outras pessoas a fazerem
						o mesmo
					</h3>
				</div>
				<div class="about-content">
					<p>
						Como passar o conhecimento. A sensação de ter em casa algo
						feito por vc. Aquilo que você fez é parte de você. É um
						orgulho inexplicável. Realizar algo, aprender durante a
						execução, superar problemas, decidir, realizar e por fim
						deixar um pedaço de você em algo. Uma experiência
						transcendental. <br>Até hoje na família dezenas de objetos "feitos
						em casa" habitam nossos lares. Móveis, quadros, esculturas,
						obras de arte e objetos.
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-subtitle">
					<h3 class="heading-3">
						nosso modelo ajudará milhares de pessoas a terem a mesma
						sensação
					</h3>
				</div>
				<div class="about-content">
					<p>
						A deixar suas marcas no mundo. A morar e viverem orgulhosas de
						suas criações, que as rodeiam em suas casas, e nas casas de
						amigos e parentes.
					</p>
				</div>
			</div>
		</div>
		<div class="row margin-bottom">
			<div class="col-12">
				<div class="about-wide-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-wide.png" alt="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="about-bottom-section">
					<div class="content-title">
						<h2 class="heading-2">Eu sempre pensei em como passar isso para o resto do mundo.
							<h2 class="heading-2">Agora eu descobri.
							</h2>
					</div>
					<div class="section-subtitle">
						<h3 class="heading-3">Luiz Camara Lopes <br>
							Criador da Monta lá
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end: About Content -->

<?php get_footer(); ?>