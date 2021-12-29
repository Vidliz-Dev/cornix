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



<section class="cta-left block bg-dark">    
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="cta-left__content-wrap">
                    <div class="section-header">
                        <h1 class="section-header__header"><?php echo $title; ?></h1>
                        <p class="section-header__text"><?php echo $subtitle; ?></p>
                    </div>
                    <a href="<?php echo $button_link; ?>" class="btn btn-primary"><?php echo $button_text; ?></a>
                </div>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2 mb-5 mb-md-0">
                <div class="cta-left__image-wrap my-md-n5 w-100">
                    <?php echo $inner; ?>
                </div>                
            </div>

        </div>
    </div>
</section>



