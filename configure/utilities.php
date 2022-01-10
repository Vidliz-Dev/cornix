<?php

// Utilities functions here


// limit excerpt length custom
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }

 // limit content length custom  
  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    return $content;
}


//add theme class to body
function crnx_body_classes( $classes ) {
    if ( is_page() && get_field('general-settings_theme-color-overwrite') ) {
        $classes[] = get_field('general-settings_theme-color');
    } else {
        if(!isset($_COOKIE['theme'])) {
            $theme_default = get_field('theme-default', 'options');  
            if ( !empty($theme_default) ) {
                $theme = $theme_default;
            } else {
                $theme = 'theme-dark';
            }       
            $classes[] = $theme;       
        } else {        
            $classes[] = $_COOKIE['theme'];        
        } 
    }
    return $classes;
}
add_filter( 'body_class','crnx_body_classes' );


//get current color-theme
function crnx_theme_color() {
    if(!isset($_COOKIE['theme'])) {
        $theme_color_slug = substr(get_field('theme-default', 'options'), 6);
    } else {
        $theme_color_slug = substr($_COOKIE['theme'], 6);
    }
    return $theme_color_slug;
}

// get html from template part
function load_template_part($template_name, $part_name, $template_args) {
    ob_start();
    get_template_part($template_name, $part_name, $template_args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

//show breadcrumbs
function show_breadcrumbs(){
    if (  is_page() && get_field('general-settings_show-breadcrumbs') == 'true' && function_exists('dimox_breadcrumbs') ) {				
        echo '<div class="breadcrumbs-section"><div class="container">';
        dimox_breadcrumbs();
        echo '</div></div>';			
    }	elseif ( !is_page() && !is_search() && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="breadcrumbs-section"><div class="container">';
            dimox_breadcrumbs();
            echo '</div></div>';	
    }	elseif ( is_page_template( 'template-blog.php' ) && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="breadcrumbs-section"><div class="container">';
            dimox_breadcrumbs();
            echo '</div></div>';
    }
}



// //add body class for admin
// function crnx_admin_page_body_class($classes) {   	
// 	$admn_page_id = " admin-page-id-" . get_queried_object_id() . " ";
// 	$classes .= $admn_page_id;
//     return $classes;
// }
// add_filter('admin_body_class', 'crnx_admin_page_body_class');
