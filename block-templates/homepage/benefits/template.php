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


<section class="benefits block">    
    <div class="container">
        <h2 class="block-title text-center"><?php echo $title; ?></h2>
        <h3 class="block-subtitle text-center"><?php echo $subtitle; ?></h3>
        <div class="row py-5">
            <?php echo $inner; ?>
            <!-- use benefits-inner template -->
        </div>
    </div>
</section>



