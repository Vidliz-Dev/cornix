<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
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



<div class="col-lg-4 col-md-6 mb-5">
    <div class="block-card d-flex flex-column justify-content-center p-5">
        <div class="block-card-icon mb-5 text-center">
            <img src="<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>" alt="" class="block__image">
        </div>
        <h4 class="block-card-title text-center"><?php echo $title; ?></h4>
    </div>
</div>



