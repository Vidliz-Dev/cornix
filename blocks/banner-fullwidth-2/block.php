<?php 
    $args = get_field('homepage-banner-1', 'options');

    if(!empty(block_value('title'))){
        $title = block_value('title');
    }else{
        $title = $args['title'];
    }
    
    if(!empty(block_value('button-link'))){
        $link = block_value('button-link');
    }else{
        $link = $args['link'];
    }

    if(!empty(block_value('button-text'))){
        $button_text = block_value('button-text');
    }else{
        $button_text = $args['button_text'];
    }

    if(!empty(block_value('image'))){
        $banner_image = block_value('image');
    } else {
        $banner_image = $args['banner-image'];
    }
?>

<section class="banner-fullwidth-2 <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <h2><?php echo $title; ?></h2>
                <a href="<?php echo $link; ?>" class="btn btn-secondary"><?php echo $button_text; ?></a>
                <div class="buy-links">
                    <a href="<?php the_field('app-links_apple-download-link', 'options'); ?>" class="btn-app -store"></a>
                    <a href="<?php the_field('app-links_google-download-link', 'options'); ?>" class="btn-app -google"></a>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <img class="banner-fullwidth-2__image" src="<?php echo $banner_image; ?>" alt="">
            </div>
        </div>
    </div>    
</section>