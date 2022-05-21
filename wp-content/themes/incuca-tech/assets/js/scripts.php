<script type="text/javascript">

	jQuery(window).ready(function($) {

		<?php if (is_front_page()) { ?>
			// Página inicial
		<?php } else if ('post' == get_post_type()) { ?>
			// Lista do CPT
		<?php } ?>

		// Mostrar/ocultar modal de busca
		$('.btn-search').click(function(){
			$('#busca').toggleClass('show');
		})

		// Máscara do formulário
		// $('.telefone').mask('(00) 00000-0000');

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