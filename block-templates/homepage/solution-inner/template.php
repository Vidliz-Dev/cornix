<?php 
// blank--title-subtitle-btn
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<div class="solution-inner col-12 col-md-6 mb-5 mb-md-0">    
    <div class="card">
        <div class="card-body bg-dark">
            <h3 class="h3 text-center mb-0 text-white"><?php echo $title; ?></h3>
        </div>
        <div class="card-body">
            <?php echo $inner; ?>
        </div>
        <?php if (!empty($button_text)) { ?>
            <a href="<?php echo $button_link; ?>" class="btn btn-block btn-primary"><?php echo $button_text; ?></a> 
        <?php } ?>               
    </div>
</div>



