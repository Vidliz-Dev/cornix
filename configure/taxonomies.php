<?php



// Telegram chanels custom post type function
add_action( 'init', 'create_channels_posttype' );
function create_channels_posttype() { 
    register_post_type( 'channels',    
        array(
            'labels' => array(
                'name' => __( 'Channels' ),
                'singular_name' => __( 'Channel' ),                 
                'add_new'  => __( 'Add New Channel' ),
                'new_item'  => __( 'New Channel' ),
                'edit_item'  => __( 'Edit Channel' )
            ),            
            'rewrite'           => array('slug' => 'channels'),
            'show_in_rest'      => true,
            'walk_dirs'         => false,
            'supports'          => array( 'title', 'custom-fields' ),        
            'taxonomies'        => array( 'exchange', 'spot', 'signals' ),
            'hierarchical'      => false,
            'public'            => true,
            'can_export'         => true,
            'has_archive'        => false,
            'publicly_queryable' => true,
        )
    );
}


add_action( 'init', 'create_chanels_taxonomy', 0 ); 
function create_chanels_taxonomy() {

  register_taxonomy('exchange',array('channels'), array(
    'hierarchical' => false,
    'labels' => array(
        'name' => _x( 'Exchange', 'taxonomy general name' ),
        'singular_name' => _x( 'Exchange', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Exchanges' ),
        'all_items' => __( 'All Exchanges' ),
        'parent_item' => __( 'Exchange' ),
        'parent_item_colon' => __( 'Exchange:' ),    
        'menu_name' => __( 'Exchanges' ),
      ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'exchange' ),
    'has_archive' => false,
  ));
 
  register_taxonomy('spot',array('channels'), array(
    'hierarchical' => false,
    'labels' => array(
        'name' => _x( 'Spot/Margin Exchanges', 'taxonomy general name' ),
        'singular_name' => _x( 'Spot/Margin', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Exchanges' ),
        'all_items' => __( 'All Spot/Margin Exchanges' ),
        'parent_item' => __( 'Spot/Margin Exchanges' ),
        'parent_item_colon' => __( 'Spot/Margin Exchanges:' ),    
        'menu_name' => __( 'Spot/Margin Exchanges' ),
      ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'spot' ),
    'has_archive' => false,
  ));


  register_taxonomy('signals',array('channels'), array(
    'hierarchical' => false,
    'labels' => array(
        'name' => _x( 'Free/Paid Signals', 'taxonomy general name' ),
        'singular_name' => _x( 'Free/Paid Signals', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Signals' ),
        'all_items' => __( 'All Signals' ),
        'parent_item' => __( 'Free/Paid' ),
        'parent_item_colon' => __( 'Free/Paid Signals:' ),    
        'menu_name' => __( 'Free/Paid Signals' ),
      ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'signals' ),
    'has_archive' => false,
  ));

}


