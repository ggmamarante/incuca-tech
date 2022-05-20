<script type="text/javascript">

	jQuery(window).load(function () {
		$('#preloader').addClass('disabled');
	});

	jQuery(window).ready(function($) {

		<?php if (is_front_page()) { ?>
			// Página inicial
		<?php } else if (is_page_template('pasta/nome.php')) { ?>
			// Modelo de página
		<?php } else if (is_page('slug')) { ?>
			// Página
		<?php } else if ('slug' == get_post_type()) { ?>
			// Lista do CPT
		<?php } else if (is_tax('slug')) { ?>
			// Lista de taxonomia
		<?php } else if (is_singular('slug')) { ?>
			// Interna do CPT
		<?php } ?>

		// Configurações do slide
		/* $('.slug').flickity({
			// fade: true,
			contain: true,
			autoPlay: 3000,
			pageDots: true,
			wrapAround: true,
			cellAlign: 'left',
			prevNextButtons: false,
		}); */

		// Máscara do formulário
		// $('.telefone').mask('(00) 00000-0000');

		// Validando formulário
		/* $(".form-contato").validate({
			rules: {
				nome: {
					required: true,
				},
				telefone: {
					required: true,
					minlength: 14,
				},
			},
			messages: {
				nome: {
					required: "Informe o seu nome.",
				},
				telefone: {
					required: "Você precisa informar um telefone válido.",
					minlength: "Você precisa informar um telefone válido."
				},
			}
		}); */

		// Menu mobile
		$('.btn-mobile').click(function() {
			$('#mobile').toggleClass('active');
		});

		// Add/remove classe com rolagem
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 100) {
				$('.box-return').addClass("active");
			} else {
				$('.box-return').removeClass("active");
			}
		});

	});
</script>