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
?>



<section class="all-channels block pt-50">    
    <div class="container">

        <div class="row mb-10">
            <div class="col-12">
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Exchanges</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Exchange1</a>
                            <a class="dropdown-item" href="#">Exchange2</a>
                            <a class="dropdown-item" href="#">Exchange3</a>                           
                            <a class="dropdown-item" href="#">Exchange4</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Spot/Margin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All Exchanges</a>    
                            <a class="dropdown-item" href="#">Spot Exchanges</a>
                            <a class="dropdown-item" href="#">Margin Exchanges</a>                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Free/Paid</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All Signals</a>    
                            <a class="dropdown-item" href="#">Free Signals</a>
                            <a class="dropdown-item" href="#">Paid Signals</a>                            
                        </div>
                    </li>                   
                </ul>
            </div>
        </div>


        <div class="row">
            <?php
            $query = new WP_Query( array(
                'post_type' => 'channels',   
                'posts_per_page' => -1   
            ) );
            while ( $query->have_posts() ) : $query->the_post();
            ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3" data-exchange="" data-spot="" data-signal="">
                    <div class="card channel py-40 px-40 text-center" onclick="window.location.href='<?php the_field('link'); ?>'">
                        <img class="channel__logo mb-40" src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>">
                        <h3 class="channel__title card-title mb-0"><?php the_title(); ?></h3>
                    </div>
                </div>   
            <?php
            endwhile;				
            wp_reset_query();
            ?>                     
        </div>

    </div>
</section>



