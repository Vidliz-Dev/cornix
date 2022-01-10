<?php

//register SCRIPTS first!!!
function crnx_register_scripts() {
	//core
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
	wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, false);    	
	wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), null, false);
	wp_register_script( 'theme-functions', get_template_directory_uri() . '/js/theme-functions.js', array('bootstrap'), '1.0.0', true);	
	wp_register_script( 'swiper', get_template_directory_uri() . '/vendor/swiper-master/dist/swiper-bundle.min.js', array('jquery'), null, true);
	wp_register_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);			
	wp_register_script( 'search-page', get_template_directory_uri() . '/js/search-page.js', array('jquery', 'theme-functions'), null, true);
	wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('theme-functions', 'AOS', 'bootstrap'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'crnx_register_scripts' );

//load scripts on front end
function crnx_add_javascript() {	
	wp_enqueue_script( 'theme');	
}
add_action('wp_enqueue_scripts', 'crnx_add_javascript', 100);




//register STYLES
add_action('wp_enqueue_scripts', 'crnx_register_stylesheets');
function crnx_register_stylesheets() {		
	$version = '1.0.0';
	//core
	wp_register_style('theme', get_template_directory_uri() . '/css/style.css', array('AOS','cornix-icons'), $version, 'all' );	
	wp_register_style('cornix-icons', get_template_directory_uri() . '/fonts/cornix-icons/css/cornix.css', array(), '1.0.0', 'all' );
	//tools
	wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
	wp_register_style('swiper', get_template_directory_uri() . '/vendor/swiper-master/dist/swiper-bundle.min.css', array(), null, 'all' );
}

//load styles on front end
add_action('wp_enqueue_scripts', 'crnx_add_stylesheets');
function crnx_add_stylesheets(){
	wp_enqueue_style('theme');	
}
	




//admin styles
add_action('admin_head', 'crnx_admin_styles');
function crnx_admin_styles() {
	wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin-styles.css', array(), null, 'all' );
}


//login page
function crnx_login_logo() { 
	wp_enqueue_style('login-register', get_template_directory_uri() . '/css/login-register.css', array(), null, 'all' );
 }
function crnx_login_logo_url() {
    return home_url();
} 
function crnx_login_logo_url_title() {
    return 'Cornix';
}
add_action( 'login_enqueue_scripts', 'crnx_login_logo' );
add_filter( 'login_headerurl', 'crnx_login_logo_url' );
add_filter( 'login_headertext', 'crnx_login_logo_url_title' );




