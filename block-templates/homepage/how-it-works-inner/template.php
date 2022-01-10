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



<div class="col-12 col-md-6 mb-25" data-aos="fade-up">    
    <div class="card how-it-works__item">
        <div class="card-body d-flex">   
            <div class="d-flex flex-column justify-content-center align-content-center">         
                <div class="card-icon border-primary rounded">
                    <?php echo $inner; ?>
                </div>
            </div>
            <div class="d-flex flex-column align-content-center">
                <h3 class="card-title">
                    <?php echo $title; ?>
                </h3>
                <p class="card-text">
                    <?php echo $subtitle; ?>
                </p>
            </div>
        </div>
    </div>
</div>



