<script type="text/javascript">

	jQuery(window).ready(function($) {

		<?php if (is_front_page()) { ?>
			
			// Informações da equipe
			$('#equipe .box-item').click(function(){
				$('#equipe .box-item').removeClass('show');
				$('#equipe .box-info').removeClass('show');
			})
			$('#equipe .box-item-1').click(function(){
				$('#equipe .box-item-1').addClass('show');
				$('#equipe .box-info-1').addClass('show');
			})
			$('#equipe .box-item-2').click(function(){
				$('#equipe .box-item-2').addClass('show');
				$('#equipe .box-info-2').addClass('show');
			})
			$('#equipe .box-item-3').click(function(){
				$('#equipe .box-item-3').addClass('show');
				$('#equipe .box-info-3').addClass('show');
			})
			$('#equipe .box-item-4').click(function(){
				$('#equipe .box-item-4').addClass('show');
				$('#equipe .box-info-4').addClass('show');
			})

		<?php } ?>

		// Mostrar/ocultar modal de busca
		$('.btn-search').click(function(){
			$('#busca').toggleClass('show');
		})

		// Máscara do formulário
		$('input[name="telefone"]').mask('(00) 00000-0000');

		// Menu mobile
		$('.btn-mobile').click(function() {
			$('#mobile').toggleClass('active');
		});
		$('#mobile a').click(function() {
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