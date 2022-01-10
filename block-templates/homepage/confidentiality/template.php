<?php 
// blank--title-subtitle-image
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



<section class="confidentiality block">
    <div class="bg bg-dark-1 bg-grid">
        <div class="gradient gradient-left"></div>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="block_image-wrap px-40 px-lg-0 pr-lg-50">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2 mb-50 mb-lg-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-40 pb-10">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php echo $inner; ?>
                </div>
            </div>

        </div>
    </div>
</section>



