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

		<section id="intro"></section><!--/ intro -->

		<header id="header"></header>

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