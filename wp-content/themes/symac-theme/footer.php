<div class="section rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if ( dynamic_sidebar('rodape_widgets') ) : else : endif; ?>
				</div>
				<div class="col-md-8">
					<?php if ( dynamic_sidebar('rodape_widgets-2') ) : else : endif; ?>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate-1.4.1.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>