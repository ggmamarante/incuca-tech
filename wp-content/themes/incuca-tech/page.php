<?php get_header(); ?>

	<div class="template-default">
		<main id="content">
			<div class="container">
				<div class="box-header">
					<h1><?php the_title() ?></h1>
				</div><!--/ box-header -->
				<div class="box-content">
					<?php the_content() ?>
				</div><!--/ box-content -->
			</div><!--/ container -->
		</main>
	</div><!--/ template-default -->

<?php get_footer(); ?>