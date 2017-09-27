<?php get_header(); ?>
	<div class="section menu-produtos top-space-page">
		<div class="container">
			<div class="row">
					<h1><?php the_title(); ?></h1>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="col-md-3">
							<div class="cont-img cont-img-sg">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>			
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
<?php get_footer(); ?>