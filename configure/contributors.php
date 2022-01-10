<?php

// Admin functions for contributors here

//Styles and scripts
function crnx_contributor_admin_scripts() {
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false); 	
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array(), null, false);	
}
add_action( 'admin_enqueue_scripts', 'crnx_contributor_admin_scripts' );

function crnx_contributor_admin_styles() {
	wp_enqueue_style('contributor-admin', get_template_directory_uri() . '/css/contributor-admin.css', array(), null, 'all' );		
}
add_action( 'admin_enqueue_scripts', 'crnx_contributor_admin_styles' );





//Change the Footer in WordPress Admin Panel
function remove_footer_admin () { 
  echo '';
  }   
  add_filter('admin_footer_text', 'remove_footer_admin');


  // One column dashboard
function single_column( $columns ) {
  $columns['dashboard'] = 1;
  return $columns;
}
add_filter( 'screen_layout_columns', 'single_column' );

function one_column_dashboard(){
return 1;
}
add_filter( 'get_user_option_screen_layout_dashboard', 'one_column_dashboard' );


//Remove the widgets
function remove_dashboard_meta() {
  remove_meta_box( 'dashboard_primary','dashboard','side' ); // WordPress.com Blog
	remove_meta_box( 'dashboard_plugins','dashboard','normal' ); // Plugins
	remove_meta_box( 'dashboard_right_now','dashboard', 'normal' ); // Right Now
	remove_action( 'welcome_panel','wp_welcome_panel' ); // Welcome Panel
	remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel'); // Try Gutenberg
	remove_meta_box('dashboard_quick_press','dashboard','side'); // Quick Press widget
	remove_meta_box('dashboard_recent_drafts','dashboard','side'); // Recent Drafts
	remove_meta_box('dashboard_secondary','dashboard','side'); // Other WordPress News
	remove_meta_box('dashboard_incoming_links','dashboard','normal'); //Incoming Links
	remove_meta_box('rg_forms_dashboard','dashboard','normal'); // Gravity Forms
	remove_meta_box('dashboard_recent_comments','dashboard','normal'); // Recent Comments
	remove_meta_box('icl_dashboard_widget','dashboard','normal'); // Multi Language Plugin
	remove_meta_box('dashboard_activity','dashboard', 'normal'); // Activity
  remove_menu_page('wpcf7');
  remove_menu_page('cornix');
  remove_menu_page( 'tools.php' );
  remove_menu_page( 'edit-comments.php' );
}
add_action('admin_init', 'remove_dashboard_meta');


// Remove Site Health from the Dashboard
add_action(
  'wp_dashboard_setup',
  function () {
      global $wp_meta_boxes;
      unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'] );
  }
);


//remove settings
add_filter( 'screen_options_show_screen', 'crnx_remove_screen_options' );
function crnx_remove_screen_options() { 
  if(!current_user_can('manage_options')) {
  return false;
  }
  return true; 
  }

//remove help
function crnx_remove_help_tabs() {
  $screen = get_current_screen();
  $screen->remove_help_tabs();
}
add_action( 'admin_head', 'crnx_remove_help_tabs' );


//remove_admin_bar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {  
  if ( !is_admin() ) { 
    show_admin_bar(false);  
  }
}


//Let Contributor Role to Upload Media
if ( current_user_can('contributor') && !current_user_can('upload_files') ){
    add_action('admin_init', 'allow_contributor_uploads');
}
    
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}


// Dashboard title
function my_custom_dashboard_name(){
	if ( $GLOBALS['title'] != 'Dashboard' ){
		return;
	}
  global $current_user; wp_get_current_user();
  $new_title = 'Weclome, ' . $current_user->display_name . '';
	$GLOBALS['title'] =  __( $new_title ); 
}
add_action( 'admin_head', 'my_custom_dashboard_name' );




//add a custom dashboard widget for admins
add_action('wp_dashboard_setup', 'crnx_contributor_posts_widget');  
function crnx_contributor_posts_widget() {
    global $wp_meta_boxes; 
    wp_add_dashboard_widget('contributor_posts_widget', 'Your Posts', 'crnx_contributor_posts_loop');
} 
function crnx_contributor_posts_loop() {
  global $current_user; wp_get_current_user();    
    
    $total_posts = count_user_posts($current_user->ID);

    //posts loop 
    $query = new WP_Query( array(
      'posts_per_page' => 7,
      'author'    =>  $current_user->ID,
      'post_type' => 'post',
      'orderby' => 'date',
      'order'   => 'DESC'
    ));
    ?>

<div class="row">
  <div class="col">
    <h5 class="dashboard-widget-title"><?php echo $total_posts; ?> posts published</h5>    
  </div>
</div>
 <div class="row contributor-posts">

  <div class="col-12 col-md-6 col-lg-4 col-xl-3 contributor-post add-post">
    <div class="add-post__inner" onclick="window.location.href='/wp-admin/post-new.php';">
      <div class="add-post__icon">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36 0V72M72 36L0 36" stroke="#2350F0"/>
        </svg>
      </div>      
      <div class="add-post__text">
        Write a new post
      </div>
    </div>
  </div> 

<?php
    if ($query->have_posts()){     
      while ( $query->have_posts() ) {
          $query->the_post();
          $post_id = get_the_ID();          
          $views = get_field( "views_count", $post_id );
          if ($views == ""){ $views = '0'; } 
          $post_status = get_post_status( $post_id );
          if ($post_status == "publish"){ $post_status = 'published'; } 
          ?>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3 contributor-post"> 
        <div class="contributor-post__inner">

           

        <div class="contributor-post__status <?php echo $post_status; ?>"><?php echo $post_status; ?></div>
          <div class="contributor-post__image article-image" onclick="window.location.href='<?php the_permalink(); ?>';">
            <div class="article-image__thumbnail">
                <?php the_post_thumbnail( 'medium' ); ?>                                     
            </div>    
          </div> 

          <h3 class="contributor-post__title">
            <?php the_title(); ?>
          </h3> 
          
          <div class="contributor-post__icons">
            <div class="contributor-post__info">
              <div class="contributor-post__views">
                <i class="icon">
                  <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.8387 5.97071C17.764 5.86021 15.9829 3.237 13.5249 1.44393C12.2505 0.512571 10.6431 0 8.99966 0C7.35714 0 5.74972 0.512571 4.47261 1.44393C2.01468 3.237 0.235353 5.86021 0.160652 5.97071C-0.0535507 6.28921 -0.0535507 6.71171 0.160652 7.03021C0.235353 7.14071 2.01468 9.76393 4.47261 11.557C5.74972 12.4874 7.35714 13 8.99966 13C10.6431 13 12.2505 12.4874 13.5249 11.5561C15.9829 9.763 17.764 7.13979 17.8387 7.02929C18.0538 6.71171 18.0538 6.28829 17.8387 5.97071ZM8.99966 9.75C7.25904 9.75 5.84962 8.29214 5.84962 6.5C5.84962 4.70414 7.25904 3.25 8.99966 3.25C10.7367 3.25 12.1497 4.70414 12.1497 6.5C12.1497 8.29214 10.7367 9.75 8.99966 9.75Z" fill="#D7D7D7"/>
                  </svg>
                </i>
                <?php echo $views; ?>
              </div>
              <div class="contributor-post__comments">
                <i class="icon">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 0.75H3C1.35 0.75 0 2.1 0 3.75V11.25C0 12.9 1.35 14.25 3 14.25V16.5C3 17.175 3.825 17.475 4.275 17.025L7.05 14.25H15C16.65 14.25 18 12.9 18 11.25V3.75C18 2.1 16.65 0.75 15 0.75ZM10.5 9.75H6C5.55 9.75 5.25 9.45 5.25 9C5.25 8.55 5.55 8.25 6 8.25H10.5C10.95 8.25 11.25 8.55 11.25 9C11.25 9.45 10.95 9.75 10.5 9.75ZM12 6.75H6C5.55 6.75 5.25 6.45 5.25 6C5.25 5.55 5.55 5.25 6 5.25H12C12.45 5.25 12.75 5.55 12.75 6C12.75 6.45 12.45 6.75 12 6.75Z" fill="#D7D7D7"/>
                  </svg>
                </i>
                <?php echo get_comments_number(); ?>
              </div>
            </div>

            <?php if ( $post_status == 'pending' || $post_status == 'draft' ) { ?>
            <div class="contributor-post__edit">
              <a class="contributor-post__edit-post" href="<?php echo '/wp-admin/post.php?post=' . $post_id . '&action=edit'; ?>">
                <i class="icon">
                  <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.37507 15.7504H0V12.3754L3.37507 15.7504Z" fill="#C6C6C6"/>
                    <path d="M4.50041 14.6254L15.7504 3.37537L12.3755 0.00044081L1.12548 11.2505L4.50041 14.6254Z" fill="#C6C6C6"/>
                    <path d="M0 18.0005V16.8755H12.3753V18.0005H0Z" fill="#C6C6C6"/>
                  </svg>
                </i>               
              </a>
              <a class="contributor-post__delete-post" href="<?php echo get_delete_post_link($post_id); ?>">
                <i class="icon">
                  <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.977143 16C0.977143 17.1 1.85657 18 2.93143 18H10.7486C11.8234 18 12.7029 17.1 12.7029 16V4H0.977143V16ZM3.3858 8.88L4.76846 7.465L6.84 9.585L8.91154 7.465L10.2942 8.88L8.22266 11L10.2942 13.12L8.91154 14.535L6.84 12.415L4.76846 14.535L3.3858 13.12L5.45734 11L3.3858 8.88ZM10.26 1L9.28286 0H4.39714L3.42 1H0V3H13.68V1H10.26Z" fill="#C6C6C6"/>
                  </svg>
                </i>
              </a>
            </div>
            <?php } ?>

          </div>

        </div>
        </div>

          <?php

      }   
      wp_reset_postdata();      
    } 

    echo '</div>'; //row

    // echo '<div class="add-post-row">
    //   <a href="/wp-admin/post-new.php" class="add-post-row__button btn btn-flat"> Add post + </a>
    // </div>
    // ';
}




//Gutenberg settings
add_filter( 'allowed_block_types_all', 'crnx_allowed_block_types', 10, 2 ); 
function crnx_allowed_block_types( $allowed_blocks, $post ) { 
	$allowed_blocks = array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list'
	); 
  /*
	if( $post->post_type === 'page' ) {
		$allowed_blocks[] = 'core/shortcode';
	}
 */
	return $allowed_blocks; 
}

//automatically disable Fullscreen Mode, permalink, comments
add_action( 'enqueue_block_editor_assets', 'crnx_disable_fullscreen' );
function crnx_disable_fullscreen() {
  wp_add_inline_script( 'wp-blocks', "jQuery( window ).load(function() {
    wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'post-link' );
    wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'discussion-panel' );
    const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' );
    if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); }
   });" );
  wp_add_inline_script( 'wp-blocks', "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });" );
}