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



<section class="solution block">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header what-is__header">
                    <h1 class="section-header__header text-center"><?php echo $title; ?></h1>
                    <p class="section-header__text text-center"><?php echo $subtitle; ?></p>
                </div> 
            </div>
            <?php echo $inner; ?>
        </div>
    </div>
</section>



