
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title><!--Título da página-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" /><!--Dinamismo do charset UTF-8 automático-->
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<!--Menu tela celular-->

	<div class="section navegacao-mobile">
		<div class="container">
				<button class="busca"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button>
			<div class="row">
				<div class="campo_busca">
					<div class="col-md-10 btn-resp">
						<div class="posicao">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<!--Menu tela computadores-->

	<div class="section navegacao-desktop">
		<div class="container">
			<div class="row">
				<div class="col-md-2" id="logo">
					<a href="<?php echo get_option('home') ?>">
						<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Symac Systema">
					</a>
				</div>
				<div class="campo_busca">
					<div class="col-md-10">
						<div class="posicao">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>