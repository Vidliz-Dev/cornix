<?php
// FAQ custom post type function
// function create_faq_posttype() { 
//     register_post_type( 'faq',    
//         array(
//             'labels' => array(
//                 'name' => __( 'FAQ' ),
//                 'singular_name' => __( 'faq' )
//             ),            
//             'rewrite'           => array('slug' => 'trading/faq'),
//             'show_in_rest'      => true,
//             'walk_dirs'         => false,
//             'supports'          => array( 'title','excerpt', 'editor', 'custom-fields' ),        
//             'taxonomies'        => array( 'faq_category' ),
//             'hierarchical'      => true,
//             'public'            => true,
//             'can_export'         => true,
//             'has_archive'        => true,
//             'publicly_queryable' => true,
//         )
//     );
// }
// add_action( 'init', 'create_faq_posttype' );



 
// add_action( 'init', 'create_faq_hierarchical_taxonomy', 0 ); 
// function create_faq_hierarchical_taxonomy() {
//   $labels = array(
//     'name' => _x( 'Faq Category', 'taxonomy general name' ),
//     'singular_name' => _x( 'Faq Item', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Subjects' ),
//     'all_items' => __( 'All Faq Items' ),
//     'parent_item' => __( 'Faq Category' ),
//     'parent_item_colon' => __( 'Faq Category:' ),    
//     'menu_name' => __( 'FAQ Category' ),
//   ); 
//   register_taxonomy('faq_category',array('faq'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'faq_category' ),
//     'has_archive'        => true,
//   ));
 

// }

