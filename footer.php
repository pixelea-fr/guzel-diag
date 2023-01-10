		<a href="#page" class="back-top hide"><span></span></a>
		</main><!-- /#main-content -->
		<? $fields = get_fields('option');
		extract($fields); ?>

		<div class="pre-footer">
			<div class="presentation">
				<span class="photo"><?= wp_get_attachment_image($photo, 'full'); ?></span>
				<span class="certification">
					<div><?= wp_get_attachment_image($certification, $size); ?></div>
				</span>
			</div>
			<div class="formulaire">
				<h2><?= $titre; ?></h2>
				<?= do_shortcode($cc_formulaire); ?>
			</div>
		</div>
		<footer role="contentinfo">
			<div class="bottom-bar">
				<p>&copy; Studio Pixelea - <?php echo date("Y"); ?></p>
			</div>
		</footer>
		<?php wp_footer(); ?>
		</body>

		</html>