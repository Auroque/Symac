<?php get_header(); ?>

<!-- Início do Slider -->
<?php 
$sections = new WP_Query(
	array(
		'post_type' => 'slider',
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
<div class="slides top-space">
	<ul>
		<?php if ($sections->have_posts()): ?>
		<?php while ($sections->have_posts()) : $sections->the_post(); ?>
			<li>
		  		<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
			</li>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</ul>
	<p class="arrow">
		<a href="#" id="previous"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		<a href="#" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
	</p>
</div>

 <div class="section fundo-cinza">
 	<div class="container principais-produtos">
			<div class="row">
					<h1>SEGMENTOS</h1><hr>
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

 <!-- início de Diferenciais -->
 <div class="section">
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
				<div class="col-md-4 altura dif">
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