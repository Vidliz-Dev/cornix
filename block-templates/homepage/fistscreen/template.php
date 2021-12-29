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
           
            <div class="col-12 col-md-6">
                <h1 class="block__title"><?php echo $title; ?></h1>
                <p class="block__subtitle"><?php echo $subtitle; ?></p>
                <div class="block__inner">
                    <?php echo $inner; ?>
                </div>
                <a href="<?php echo $button_link; ?>" class="btn btn-primary block__button"><?php echo $button_text; ?></a>
            </div>

            <div class="col-12 col-md-6">
                <div class="block__image-wrap">
                    <img src="<?php echo $image; ?>" alt="" class="block__image">
                </div>
            </div>

        </div>
    </div>
</section>



