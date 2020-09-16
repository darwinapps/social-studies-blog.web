<div class="container-fluid hero d-flex flex-wrap justify-content-center ">
    
    <?php
        $category_now = get_query_var('cat');

        $args = array(
            'numberposts' => 1,
            'orderby' => 'date',
            'category' => $category_now,
        );

        $latest_posts = get_posts( $args );
        ?>

    <?php
        if($latest_posts):
            foreach ( $latest_posts as $post ) :
                setup_postdata( $post ); ?>
            <div class="image-container">
                    <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full', array( 'class' => 'img-fluid img-post-featured'  ) );?>
            </div>
            </a>
            <div class="hero-container-inner text-center">
                <div class="font-atlas category-hero-inner"><?php the_category(',');?></div>
                <a href="<?php the_permalink();?>">
                <h1 class= "title-hero-inner"><?php the_title();?></h1>
                <div class="center-excerpt font-left35-regular"><?php $excerpt = get_the_excerpt(); $trimmed_content = wp_trim_words( $excerpt, $num_words = 10, $more = ' ' ); ;echo $trimmed_content;?></div>
                <a class="my-3 btn btn-danger btn-read-more font-left35-light" href="<?php the_permalink();?>" role="button">Read More</a>
            </div>
        
        <?php endforeach;

        wp_reset_postdata();
        endif; ?>    

    </div>
</a>