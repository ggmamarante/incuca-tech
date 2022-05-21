		<footer id="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-2">
						<div class="d-center">
							<figure class="box-logo">
								<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/law-firm.png" alt="">
							</figure>
						</div><!--/ d-center -->
					</div><!--/ col -->
					<div class="col-md-3">
						<div class="box-contain">
							<div class="box-title">
								<h5>Law Firm</h5>
							</div><!--/ box-title -->
							<div class="box-info">
								<p><?php the_field('contato_endereco', 'options') ?></p>
								<?php if (get_field('contato_telefone', 'options')) : while(has_sub_field('contato_telefone', 'options')) : ?>
									<p><a href="tel:<?php the_sub_field('sub_numero'); ?>">
										<?php the_sub_field('sub_numero'); ?>
									</a></p>
								<?php endwhile; endif; ?>
								<p><a href="mailto:<?php the_field('contato_email', 'options') ?>">
									<?php the_field('contato_email', 'options') ?>
								</a></p>
							</div><!--/ box-info -->
							<div class="box-title">
								<h5>Redes sociais</h5>
							</div><!--/ box-title -->
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
						</div><!--/ box-contain -->
					</div><!--/ col -->
					<div class="col-md-4">
						<div class="box-title">
							<h5>Redes sociais</h5>
						</div><!--/ box-title -->
						<div class="box-form">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]') ?>
						</div><!--/ box-form -->
					</div><!--/ col -->
				</div><!--/ row -->
			</div><!--/ container -->
		</footer>

		<section id="footer-link">
			<div class="container">
				<?php
					wp_nav_menu([
						'menu'				=> 'principal',
						'container'			=> 'nav',
						'container_class'	=> 'navbar',
					])
				?>
			</div><!--/ container -->
		</section><!--/ footer-link -->

		<section id="busca">
			<span class="btn-search"></span>
			<div class="box-contain">
				<button class="btn-search">i</button>
				<h1>O que deseja encontrar?</h1>
				<?php get_search_form() ?>
			</div><!--/ box-contain -->
		</section><!--/ busca -->

		<div class="box-return">
			<a href="#top">Voltar</a>
		</div><!--/ box-return -->
	</div><!--/ site -->

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-2.0.0.min.js"></script>
	<?php wp_footer(); ?>
	<?php include 'assets/js/scripts.php'; ?>

</body>
</html>