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



<section class="homepage-firstscreen block bg-dark">    
    <div class="container">
        <div class="row">
           
            <div class="col-12 col-md-6 order-2 order-md-1">
                
                <div class="section-header block__header pb-4">
                    <h1 class="section-header__header"><?php echo $title; ?></h1>
                    <p class="section-header__text"><?php echo $subtitle; ?></p>
                </div> 
                
                <div class="block__content-wrap">
                    <div class="block__inner mb-4">
                        <?php echo $inner; ?>
                    </div>
                    <a href="<?php echo $button_link; ?>" class="btn btn-primary block__button"><?php echo $button_text; ?></a>
                </div>               
                
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2 mb-5 mb-md-0">
                <div class="block__image-wrap">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>                   
                </div>
            </div>

        </div>
    </div>
</section>



