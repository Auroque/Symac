<?php get_header(); ?>
	<div class="section menu-produtos">
		<div class="container">
			<div class="row">
				<div class="col-md-3" id="sidbar">
					<?php if ( dynamic_sidebar('widgets-categoria') ) : else : endif; ?>
				</div>
				<div class="col-md-9">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="col-md-4">
							<div class="cont-img">
								<?php the_post_thumbnail(); ?>								
							</div>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>							
						</div>
					<?php endwhile;
						 else:
					?>
					<p>Nenhum post publicado!</p>
					<?php
						endif; 
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>