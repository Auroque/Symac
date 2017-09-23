<?php get_header(); ?>

	<div class="section top-space-page">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-10 col-md-offset-1">
						<h1><?php the_title(); ?></h1><hr>
						<?php the_content(); ?>					
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>