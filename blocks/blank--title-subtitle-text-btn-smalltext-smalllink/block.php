<?php

if ( !empty( block_value('template')) ) {

    $template = str_replace(array("cornix\\", "\\", ".php"), array("", "/", ""), block_value('template')); 
    $template_id = str_replace(array('block-templates/', '/template', '/'), array("", "", "-"), $template );
    $template_path = get_template_directory_uri() . "/" . $template;

    if ( is_file($_SERVER['DOCUMENT_ROOT']."/wp-content/themes/cornix/".$template.".css") ) {        
        wp_enqueue_style( $template_id, $template_path.'.css', array(), null, 'all');
    } 
    
    get_template_part( $template, null, array(
        'title' => block_value('title'),
        'subtitle' => block_value('subtitle'),
        'text' => block_value('text'),
        'button_link' => block_value('button-link'),
        'button_text' => block_value('button-text'),
        'small_text' => block_value('small-text'),
        'small_link_url' => block_value('small-link-url'),
        'small_link_text' => block_value('small-link-text'), 
        'some_class' => block_value('add-class'),
        'some_id' => block_value('id'),
        'inner' => block_value('inner'),
        'template_path' => $template_path,
        'template_id' => $template_id
    ) );    
}
?>

