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



<section class="benefits block clip-top mb-0">
    <div class="bg bg-dark-1">
        <div class="gradient-lg gradient-top-right"></div>
    </div>
       
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6 mb-40 mb-lg-0">
                <div class="section-title mb-25">
                    <h2><?php echo $title; ?></h2>                    
                </div> 
                <p class="mb-40 pb-10" data-aos="fade-in">
                    <?php echo $subtitle; ?>
                </p>
                <a href="<?php echo $button_link; ?>" class="btn btn-primary btn-lg"><?php echo $button_text; ?></a>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                    <?php echo $inner; ?>
                </div>                
            </div>

        </div>
    </div>
</section>



