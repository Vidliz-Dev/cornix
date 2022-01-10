<?php

add_action( 'widgets_init', 'crnx_widgets_init' );
function crnx_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Single Post sidebar ', 'cornix' ),
        'id'            => 'single_post',
        'before_widget' => '<aside class="widget">',
        'after_widget'  => '</aside>'        
    ) ); 
    
}