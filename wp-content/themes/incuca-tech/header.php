<!doctype html>
<html lang="pt-br">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Título da página -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- Cor do tema -->
	<meta name="theme-color" content="#0F75BD">

	<!-- CSS -->
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<div id="top"></div>

	<div class="site">

		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="box-phone">
							<ul class="d-table">
								<li>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/icons/telefone.png" alt="">
								</li>
								<?php if (get_field('contato_telefone', 'options')) : while(has_sub_field('contato_telefone', 'options')) : ?>
									<li>
										<a href="tel:<?php the_sub_field('sub_numero'); ?>">
											<?php the_sub_field('sub_numero'); ?>
										</a>
									</li>
								<?php endwhile; endif; ?>
							</ul>
						</div><!--/ box-phone -->
					</div><!--/ col -->
					<div class="col-md-6">
						<div class="box-social">
							<?php if (get_field('social_facebook', 'options') != '') { ?>
								<a href="<?php the_field('social_facebook', 'options') ?>" class="facebook" target="_blank">i</a>
							<?php } ?>
							<?php if (get_field('social_twitter', 'options') != '') { ?>
								<a href="<?php the_field('social_twitter', 'options') ?>" class="twitter" target="_blank">i</a>
							<?php } ?>
							<?php if (get_field('social_linkedin', 'options') != '') { ?>
								<a href="<?php the_field('social_linkedin', 'options') ?>" class="linkedin" target="_blank">i</a>
							<?php } ?>
						</div><!--/ box-social -->
					</div><!--/ intro -->
				</div><!--/ intro -->
			</div><!--/ intro -->
		</section><!--/ intro -->

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<figure class="box-logo">
							<a href="<?php echo site_url() ?>">
								<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/law-firm.png" alt="">
							</a>
						</figure>
					</div><!--/ col -->
					<div class="col-md-9">
						<div class="d-center">
							<div class="box-contain">
								<ul class="d-table">
									<li>
										<?php
											wp_nav_menu([
												'menu'				=> 'principal',
												'container'			=> 'nav',
												'container_class'	=> 'navbar',
											])
										?>
									</li>
									<li>
										<div class="box-search">
											<button class="btn-search">i</button>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!--/ col -->
				</div><!--/ row -->
			</div><!--/ container -->
		</header>

		<section id="mobile">
			<div class="box-contain">
				<button class="btn-mobile">Fechar</button>
				<?php
					wp_nav_menu([
						'menu'				=> 'principal',
						'container'			=> 'nav',
						'container_class'	=> 'navbar',
					])
				?>
			</div><!--/ box-contain -->
		</section><!--/ mobile -->