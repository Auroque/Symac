<?php get_header(); ?>
	<div class="section menu-produtos top-space-page">
		<div class="container">
			<div class="row">
				<div class="col-md-3" id="sidbar">
					<?php if ( dynamic_sidebar('sidbar') ) : else : endif; ?>
				</div>
				<div class="col-md-9">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="col-md-6">
							<div class="cont-img cont-img-sg">
								<h3><?php the_title(); ?></h3>
								<?php the_post_thumbnail(); ?>								
							</div>							
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