<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
<?php crnx_custom_header_scripts(); ?>
</head>

<body <?php body_class(); ?>  >
<div class="page">

	<header class="header bg-dark">
		<div class="overlay"></div>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">		
			<div class="container">		  		
				<a class="navbar-brand" href="/">					
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1" aria-controls="bs-main-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'decentralized' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>	

				<div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-main',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'navbar-admin-menu',
						'container_id'      => '',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					
					get_template_part( 'template-parts/search/form', 'navbar', array('id' => 'searchform-navbar')); 
					?>

					<a href="#" class="d-block d-lg-none">Become An Affiliate</a>

					<div class="navbar-utility-menu d-none d-lg-inline-block">										
						<a href="#" class="btn btn-primary">Start Now</a>
						<a href="#" class="btn btn-outline-primary px-25">Become An Affiliate</a>
					</div>

				</div>
				
				<div class="navbar-download d-flex align-items-center d-lg-none">					
					<a href="#" class="btn btn-md btn-primary">Start Now</a>					
				</div>
			</div>
		  
		</nav>			

	</header>

	<?php show_breadcrumbs(); ?>
	
	
	<div class="page__content content">
		
