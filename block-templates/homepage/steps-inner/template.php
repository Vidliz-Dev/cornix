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


<div class="steps-inner col-12 col-md-6 col-lg-3 mb-25 mb-lg-0">
    <div class="card text-center"  data-aos="fade-up">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="card-icon border-primary rounded mr-0 mb-10">
                <?php echo $inner; ?>
            </div>
            <h5 class="text-gray mb-10 pt-10">
                <?php echo $title; ?>
            </h5>
            <h3 class="card-title mb-0">
                <?php echo $subtitle; ?>
            </h3>
        </div>
    </div>
</div>

