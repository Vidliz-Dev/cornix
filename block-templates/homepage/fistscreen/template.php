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



<section class="homepage-firstscreen block clip-bottom">
    <div class="bg bg-dark-2 bg-grid">
        <div class="gradient-lg gradient-bottom-right"></div>
    </div>
    
    <div class="container">
        <div class="row">
           
            <div class="col-12 col-lg-6">
                
                <h1 class="section-title mb-40">
                   <?php echo $title; ?>
                </h1> 

                <p class="section-subtitle font-weight-bolder text-white mb-40" data-aos="fade-in" data-aos-delay="100">
                    <?php echo $subtitle; ?>
                </p>
                
                <div class="mb-40" data-aos="fade-right" data-aos-delay="500">
                    <?php echo $inner; ?>
                </div>

                <a href="<?php echo $button_link; ?>" class="btn btn-primary btn-lg"><?php echo $button_text; ?></a>                             
                
            </div>

            <div class="col-12 col-lg-6 block__image-col">
                <div class="block__image-wrap" data-aos="fade-left" data-aos-duration="1600">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>                   
                </div>
            </div>

        </div>
    </div>
</section>



