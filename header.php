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
		
		<nav class="navbar navbar-expand-lg navbar-<?php echo crnx_theme_color(); ?>" role="navigation">		
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

					<div class="navbar-utility-menu">										
						<a class="btn btn-secondary btn-nav-download btn-black--light" href="#">Download App</a>		
						<button class="btn btn-theme-toggle btn-toggle-<?php echo crnx_theme_color(); ?>" id="theme-toggler-checkbox">
							<div class="btn-theme-toggle__icons">
								<div>
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.1 21.2C12.687 21.2 14.183 20.8238 15.5188 20.1711C12.158 18.5311 9.8375 15.0908 9.8375 11.1C9.8375 7.10924 12.158 3.66892 15.5188 2.02894C14.183 1.37622 12.687 1 11.1 1C5.52227 1 1 5.52227 1 11.1C1 16.6777 5.52227 21.2 11.1 21.2Z" fill="#F4F4F4"/>
										<path d="M18.6734 4.78735C18.6734 6.18242 17.5435 7.31235 16.1484 7.31235C17.5435 7.31235 18.6734 8.44229 18.6734 9.83735C18.6734 8.44229 19.8034 7.31235 21.1984 7.31235C19.8034 7.31235 18.6734 6.18242 18.6734 4.78735Z" fill="#F4F4F4"/>
										<path d="M13.6266 8.57495C13.6266 9.97001 12.4966 11.1 11.1016 11.1C12.4966 11.1 13.6266 12.2299 13.6266 13.625C13.6266 12.2299 14.7565 11.1 16.1516 11.1C14.7565 11.1 13.6266 9.97001 13.6266 8.57495Z" fill="#F4F4F4"/>
										<path d="M17.4117 17.4125C17.4117 16.0175 18.5417 14.8875 19.9367 14.8875C18.5417 14.8875 17.4117 13.7576 17.4117 12.3625C17.4117 13.7576 16.2818 14.8875 14.8867 14.8875C16.2818 14.8875 17.4117 16.0175 17.4117 17.4125Z" fill="#F4F4F4"/>
									</svg>
								</div>
								<div>
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.3125 1.375H11.6875V4.8125H10.3125V1.375Z" fill="white"/>
										<path d="M14.9102 6.11883L17.3205 3.70776L18.2927 4.68058L15.8823 7.09095L14.9102 6.11883Z" fill="white"/>
										<path d="M17.1875 10.3125H20.625V11.6875H17.1875V10.3125Z" fill="white"/>
										<path d="M14.9102 15.8813L15.8823 14.9092L18.2927 17.3196L17.3205 18.2924L14.9102 15.8813Z" fill="white"/>
										<path d="M10.3125 17.1875H11.6875V20.625H10.3125V17.1875Z" fill="white"/>
										<path d="M3.70703 17.3196L6.11741 14.9092L7.08953 15.882L4.67916 18.2924L3.70703 17.3196Z" fill="white"/>
										<path d="M1.375 10.3125H4.8125V11.6875H1.375V10.3125Z" fill="white"/>
										<path d="M3.70703 4.68058L4.67916 3.70776L7.08953 6.11883L6.11741 7.09095L3.70703 4.68058Z" fill="white"/>
										<path d="M11 6.875C10.1842 6.875 9.38663 7.11693 8.70827 7.57019C8.02992 8.02345 7.50121 8.66769 7.189 9.42143C6.87679 10.1752 6.7951 11.0046 6.95426 11.8047C7.11343 12.6049 7.50629 13.3399 8.08319 13.9168C8.66008 14.4937 9.39508 14.8866 10.1953 15.0457C10.9954 15.2049 11.8248 15.1232 12.5786 14.811C13.3323 14.4988 13.9766 13.9701 14.4298 13.2917C14.8831 12.6134 15.125 11.8158 15.125 11C15.125 9.90598 14.6904 8.85677 13.9168 8.08318C13.1432 7.3096 12.094 6.875 11 6.875Z" fill="white"/>
									</svg>
								</div>								
							</div>
						</button>
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								EN
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">English</a>
								<a class="dropdown-item" href="#">Spanish</a>
								<a class="dropdown-item" href="#">Arabic</a>								
							</div>
						</div>
					</div>

				</div>
				
				<div class="navbar-download d-flex align-items-center">					
					<a class="btn btn-secondary btn-nav-download btn-black--light" href="#">Download App</a>
				</div>
			</div>
		  
		</nav>			

	</header>

	<?php show_breadcrumbs(); ?>
	
	
	<div class="page__content content">
		
