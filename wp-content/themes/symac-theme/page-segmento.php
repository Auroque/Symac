<?php get_header();

//Template Name: Segmento

 ?>

 <div class="section top-space-page">
 	<div class="container principais-produtos">
 		<div class="row">	
 			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'segmentos',
					'ignore_sticky_posts' => true,
					'showposts' => -1,
					'orderby' => array(
        				'date'          => 'DESC',
        				'comment_count' => 'DESC',
   					 ),
					'order' => 'ASC'
					)
			);
			?>
			<h1><?php the_title(); ?></h1><hr>
			<?php if ($sections->have_posts()): ?>
				<?php while ($sections->have_posts()) : $sections->the_post(); ?>
					<div class="col-md-3 altura">
						<div class="cont-img cont-img-sg">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<a href="<?php the_permalink(); ?>"><img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;" /></a>
						</div>
						<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
 		</div>
 	</div>
 </div>

 <?php get_footer(); ?>