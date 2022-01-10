<?php 
// blank--title
// available fields
[
'title'           => $title,
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



<div class="col-6">    
    <div class="d-flex align-items-center py-40"  data-aos="fade-up">
        <i class="card-icon card-icon-md icon-ok text-white border-primary rounded mr-25"></i>
        <h3 class="mb-0">
            <?php echo $title; ?>
        </h3>
    </div>
</div>



