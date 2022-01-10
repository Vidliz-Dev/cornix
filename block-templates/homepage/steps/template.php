<?php 
// blank--title-subtitle
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
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



<section class="steps block">    
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="section-title mb-25">
                    <h2><?php echo $title; ?></h2>                   
                </div>
                <p class="w-75 mb-50">
                    <?php echo $subtitle; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php echo $inner; ?>
        </div>
    </div>
</section>



