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



<section class="channels-firstscreen block pb-0">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-25">
                    <h2><?php echo $title; ?></h2>                    
                </div> 
                <p class="mb-40 pb-10" data-aos="fade-in">
                    <?php echo $subtitle; ?>
                </p>
                <div class="text-white font-weight-bold">
                    <?php echo $inner; ?>
                </div>
            </div>
        </div>
    </div>
</section>



