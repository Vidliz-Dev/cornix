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



<section class="how-it-works block">
    <div class="gradient gradient-left"></div>
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-title mb-25">
                    <h2><?php echo $title; ?></h2>                    
                </div> 
                <p class="mb-40 pb-10" data-aos="fade-in">
                    <?php echo $subtitle; ?>
                </p>
            </div>
        </div>

        <div class="row">
            <?php echo $inner; ?>
        </div>

    </div>
</section>



