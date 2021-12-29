<?php 
// blank--title-subtitle-btn-image
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
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



<section class="what-is block">    
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-header what-is__header">
                    <h1 class="section-header__header text-center"><?php echo $title; ?></h1>
                    <p class="section-header__text text-center"><?php echo $subtitle; ?></p>
                </div> 
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="what-is__image-wrap">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>                   
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="what-is__content-wrap h-100 d-flex flex-column justify-content-around align-items-start pl-0 pl-md-5">
                    <div class="what-is__inner">
                        <?php echo $inner; ?>
                    </div>
                    <a href="<?php echo $button_link; ?>" class="btn btn-primary what-is__button"><?php echo $button_text; ?></a>
                </div>
            </div>

        </div>
    </div>
</section>



