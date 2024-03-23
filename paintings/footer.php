<footer class="footer">
	<div class="container">
		<div class="footer__row">
		<?php the_custom_logo(); ?>
			<nav class="footer__nav">
				<a href="#reproduction" class="footer__btn">Репродукции</a>
				<a href="#collection" class="footer__btn">Новинки</a>
				<a href="#team" class="footer__btn">О нас</a>
			</nav>
			<a href="<?= CFS()->get('footer_phone-href') ?>" class="footer__tel"><?= CFS()->get('footer_phone') ?></a>

		</div>	
	</div>
</footer>

		<?php wp_footer() ?>
		
	</body>
    
</html>
