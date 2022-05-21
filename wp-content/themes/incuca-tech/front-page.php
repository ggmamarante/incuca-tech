<?php get_header(); ?>

	<section id="capa"></section><!--/ capa -->

	<section id="areas-de-atuacao"></section><!--/ areas-de-atuacao -->

	<section id="reflexao"></section><!--/ reflexao -->

	<section id="equipe"></section><!--/ equipe -->

	<section id="convite"></section><!--/ convite -->

	<section id="artigos"></section><!--/ artigos -->

	<section id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="box-info">
						<p><?php the_field('newsletter_texto') ?></p>
					</div><!--/ box-info -->
				</div><!--/ col -->
				<div class="col-md-8">
					<div class="box-form">
						<?php echo do_shortcode('[contact-form-7 id="65" title="Newsletter"]') ?>
					</div><!--/ box-form -->
				</div><!--/ col -->
			</div><!--/ row -->
		</div><!--/ container -->
	</section><!--/ newsletter -->

	<section id="onde-estamos">
		<div class="container">
			<div class="box-header">
				<h1>Onde estamos</h1>
			</div><!--/ box-header -->
			<div class="box-maps">
				<?php the_field('contato_mapa', 'options') ?>
			</div><!--/ box-maps -->
		</div><!--/ container -->
	</section><!--/ onde-estamos -->

<?php get_footer(); ?>