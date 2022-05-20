<!doctype html>
<html lang="pt-br">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Título da página -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- Cor do tema -->
	<meta name="theme-color" content="#000">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

	<!-- CSS -->
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<div id="top"></div>

	<section id="preloader">
		<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/icons/load.svg" alt="" title="">
	</section><!--/ pre-load -->

	<div class="site">
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