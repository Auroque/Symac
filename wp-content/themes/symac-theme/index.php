<?php get_header(); ?>

<div class="section fundo-cinza">
 	<div class="container principais-produtos">
 		<div class="row">	
 			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'diferenciais',
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
			<h1>Diferenciais</h1>
			<?php if ($sections->have_posts()): ?>
				<?php while ($sections->have_posts()) : $sections->the_post(); ?>
				<div class="col-md-4 altura">
					<div class="cont-img">
						<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;" />
					</div>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
 		</div>
 	</div>
 </div>

<?php get_footer(); ?>