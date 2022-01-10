<div class="search-results__item row mb-large">    
    <div class="col-12">
        <div class="search-result">
            <h4 class="search-result__title">
                <?php the_title(); ?>
            </h4>
            <div class="search-result__text text-blog--dark text-gray--light">
                <p><?php echo excerpt(30); ?></p>
            </div>
            <a href="<?php echo get_post_permalink(); ?>" class="search-result__readmore text-gradient">
                <?php echo get_permalink(); ?>
            </a>
        </div>	
    </div>
</div>