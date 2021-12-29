<?php
// ACF functions here

//refiste and add to admin sidebar
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'Cornix Theme Settings',
		'menu_title'	=> 'Cornix Theme',
		'menu_slug' 	=> 'Cornix',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	

    // Add sub page.
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Banners Settings',
		'menu_title'	=> 'Banners',
		'parent_slug'	=> 'Cornix',
	));  

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Reviews Settings',
		'menu_title'	=> 'Reviews',
		'parent_slug'	=> 'Cornix',
	));
	
}


// header styles and scripts from ACF
function crnx_custom_header_scripts(){
    $page_id = get_queried_object_id();
    $tracking_code = get_field('theme-js_header-js', 'options');
    if ( is_page() ) {        
		$custom_css = get_field('css_custom-css', $page_id);
		$custom_css_link = get_field('css_custom-css-link', $page_id);
        if (!empty($custom_css_link)) {
            echo '<link rel="stylesheet" id="custom-page-css" href="' . $custom_css_link . '" media="all">';			
		}	
		if (!empty($custom_css)) {
			echo '<style id="inline-page-css">' . $custom_css . '</style>';
		}		
	}
    if (!empty($tracking_code)) {
        echo '<script id="theme-custom-header-script">' . $tracking_code . '</script>';
    }
}

// footer styles and scripts from ACF
function crnx_custom_footer_scripts(){
    $page_id = get_queried_object_id();
    $tracking_code = get_field('theme-js_footer-js', 'options');
    if ( is_page() ) {
        $custom_js_link = get_field('javascript_custom-js-link', $page_id);
        $custom_js = get_field('javascript_custom-js', $page_id);		
        if (!empty($custom_js_link)) {
            echo '<script src="' . $custom_js_link .'" id="custom-page-js"></script>';			
		}	
		if (!empty($custom_js)) {
			echo '<script id="inline-page-js">' . $custom_js . '</script>';
		}		
	}
    if (!empty($tracking_code)) {
        echo '<script id="theme-custom-footer-script">' . $tracking_code . '</script>';
    }
}



//views count
function crnx_track_post_views ( $post_id ) {
    if ( !is_single() ) return;        
    $count = (int) get_field('views_count', $post_id);
    $count++;
    update_field('views_count', $count, $post_id);   
}

//get user avatar
function crnx_get_author_avatar ( $auth_id ) {
    $auth_id_string = 'user_' . $auth_id;  
    $auth_img = get_field( 'avatar', $auth_id_string );
    if (empty($auth_img)) {
        $auth_img  = get_avatar_url( $auth_id , array(
            'size' => 80,
            'default'=>'mystery',
        ));
    } 
    return $auth_img;      
}
