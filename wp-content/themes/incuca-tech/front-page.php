<?php get_header(); ?>

	<section id="capa">
		<div class="box-contain">
			<div class="container">
				<div class="box-content">
					<div class="d-center">
						<div class="box-info">
							<h1><?php the_field('capa_titulo') ?></h1>
							<hr>
							<p><?php the_field('capa_texto') ?></p>
							<a href="<?php the_field('capa_link') ?>">Conhecer</a>
						</div><!--/ box-info -->
					</div><!--/ d-center -->
				</div><!--/ box-content -->
			</div><!--/ container -->
		</div><!--/ box-contain -->
		<figure class="box-image d-none d-md-block">
			<img src="<?php echo get_field('capa_img_desktop')['url'] ?>" alt="<?php echo get_field('capa_img_desktop')['alt']; ?>" title="<?php echo get_field('capa_img_desktop')['title']; ?>">
		</figure>
		<figure class="box-image d-block d-md-none">
			<img src="<?php echo get_field('capa_img_mobile')['url'] ?>" alt="<?php echo get_field('capa_img_mobile')['alt']; ?>" title="<?php echo get_field('capa_img_mobile')['title']; ?>">
		</figure>
	</section><!--/ capa -->

	<section id="areas-de-atuacao">
		<div class="container">
			<div class="box-header">
				<h1><?php the_field('atuacao_titulo') ?></h1>
			</div><!--/ box-header -->
			<div class="row">
				<?php if (get_field('atuacao_cards')) : while(has_sub_field('atuacao_cards')) : ?>
					<div class="col-lg-3 col-md-6">
						<div class="box-item">
							<img src="<?php echo get_sub_field('sub_icone')['url'] ?>" alt="<?php echo get_sub_field('sub_icone')['alt']; ?>" title="<?php echo get_sub_field('sub_icone')['title']; ?>">
							<h2><?php the_sub_field('sub_titulo') ?></h2>
							<p><?php the_sub_field('sub_texto') ?></p>
						</div><!--/ box-item -->
					</div><!--/ col -->
				<?php endwhile; endif; ?>
			</div><!--/ row -->
			<div class="box-link">
				<a href="<?php the_field('atuacao_link') ?>">Conhecer</a>
			</div><!--/ box-link -->
		</div><!--/ container -->
	</section><!--/ areas-de-atuacao -->

	<section id="reflexao" style="background-image: url(<?php echo get_field('reflexao_img')['url'] ?>)">
		<div class="container">
			<div class="box-content">
				<h1><?php the_field('reflexao_texto') ?></h1>
				<p><?php the_field('reflexao_autor') ?></p>
			</div><!--/ box-content -->
		</div><!--/ container -->
	</section><!--/ reflexao -->

	<section id="equipe">
		<div class="container">
			<div class="box-header">
				<h1><?php the_field('sobre_titulo') ?></h1>
			</div><!--/ box-header -->
			<div class="box-contain">
				<div class="row">
					<div class="col-lg-8">
						<ul class="d-table">
							<?php
								if (get_field('sobre_equipe')) : $i = 0;
								while(has_sub_field('sobre_equipe')) : $i++;
							?>
								<li>
									<div class="box-item box-item-<?php echo $i; ?> <?php if ($i == 1) { echo 'show'; } ?>">
										<img src="<?php echo get_sub_field('sub_foto')['url'] ?>" alt="<?php echo get_sub_field('sub_foto')['alt']; ?>" title="<?php echo get_sub_field('sub_foto')['title']; ?>">
										<p><?php the_sub_field('sub_nome') ?></p>
									</div><!--/ box-item -->
								</li>
							<?php endwhile; endif; ?>
						</ul>
					</div><!--/ col -->
					<div class="col-lg-4">
						<div class="box-content">
							<?php
								if (get_field('sobre_equipe')) : $i = 0;
								while(has_sub_field('sobre_equipe')) : $i++;
							?>
								<div class="box-info box-info-<?php echo $i; ?> <?php if ($i == 1) { echo 'show'; } ?>">
									<h2><?php the_sub_field('sub_nome') ?></h2>
									<p><?php the_sub_field('sub_texto') ?></p>
								</div><!--/ box-info -->
							<?php endwhile; endif; ?>
						</div><!--/ box-content -->
					</div><!--/ col -->
				</div><!--/ row -->
			</div><!--/ box-contain -->
		</div><!--/ container -->
	</section><!--/ equipe -->

	<section id="convite">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6 col-md-8">
					<div class="box-info">
						<h2><?php the_field('convite_titulo') ?></h2>
						<p><?php the_field('convite_texto') ?></p>
					</div><!--/ box-info -->
				</div><!--/ col -->
				<div class="col-lg-3 col-md-4">
					<div class="d-center">
						<div class="box-link">
							<a href="<?php the_field('convite_link') ?>">Consulte agora</a>
						</div><!--/ box-link -->
					</div><!--/ d-center -->
				</div><!--/ col -->
			</div><!--/ row -->
		</div><!--/ container -->
	</section><!--/ convite -->

	<section id="artigos">
		<div class="container">
			<div class="box-header">
				<h1>Artigos</h1>
			</div><!--/ box-header -->
			<div class="row">
				<?php
					$args = new WP_Query([
						'post_type'			=> 'post',
						'post_status'		=> 'publish',
						'order'				=> 'DESC',
						'posts_per_page'	=> 2,
					]);
					if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
				?>
					<div class="col-lg-4 col-md-6">
						<div class="box-item">
							<a href="<?php the_permalink() ?>">
								<figure class="item-image">
									<img src="<?php echo get_field('preview_foto')['url'] ?>" alt="<?php echo get_field('preview_foto')['alt']; ?>" title="<?php echo get_field('preview_foto')['title']; ?>">
								</figure>
								<div class="item-title">
									<h2><?php the_title() ?></h2>
								</div><!--/ item-title -->
								<div class="item-info">
									<span><?php echo get_the_date() ?> às <?php echo get_the_time() ?></span>
									<p><?php $content = wp_trim_words(get_field('preview_texto'), 30); echo $content; ?></p>
								</div><!--/ item-info -->
							</a>
						</div><!--/ box-item -->
					</div><!--/ col -->
				<?php endwhile; endif; wp_reset_postdata(); ?>
				<?php
					$args = new WP_Query([
						'post_type'			=> 'post',
						'post_status'		=> 'publish',
						'order'				=> 'DESC',
						'offset'			=> 2,
						'posts_per_page'	=> 1,
					]);
					if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
				?>
					<div class="col-lg-4 d-none d-lg-block">
						<div class="box-item">
							<a href="<?php the_permalink() ?>">
								<figure class="item-image">
									<img src="<?php echo get_field('preview_foto')['url'] ?>" alt="<?php echo get_field('preview_foto')['alt']; ?>" title="<?php echo get_field('preview_foto')['title']; ?>">
								</figure>
								<div class="item-title">
									<h2><?php the_title() ?></h2>
								</div><!--/ item-title -->
								<div class="item-info">
									<span><?php echo get_the_date() ?> às <?php echo get_the_time() ?></span>
									<p><?php $content = wp_trim_words(get_field('preview_texto'), 30); echo $content; ?></p>
								</div><!--/ item-info -->
							</a>
						</div><!--/ box-item -->
					</div><!--/ col -->
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div><!--/ row -->
			<div class="box-link">
				<a href="<?php echo site_url() ?>/404">Ver mais artigos</a>
			</div><!--/ box-link -->
		</div><!--/ container -->
	</section><!--/ artigos -->

	<section id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5 col-md-6">
					<div class="box-info">
						<p><?php the_field('newsletter_texto') ?></p>
					</div><!--/ box-info -->
				</div><!--/ col -->
				<div class="col-xl-8 col-lg-7 col-md-6">
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