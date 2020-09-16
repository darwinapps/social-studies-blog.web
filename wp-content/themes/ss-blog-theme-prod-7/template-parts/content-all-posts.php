<div class="container-fluid my-3 ">
    <div class="row d-flex flex-nowrap scrolling-wrapper align-items-start" >
        <?php 
        // Get all post but exclude of most recent
        $category_now = get_query_var('cat');
        $query = new WP_Query( array( 'offset' => 1 ) );
                        
        if ( $query->have_posts() ) :  
            while ( $query->have_posts() ) : $query->the_post();?>       
        
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="card">
                    <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array( 'class' => 'size-overflow-thumbnails card-img-top img-fluid' ) );
                        }?></a>
                    <div class="card-body px-0">
                        <div class="text-muted font-atlas mb-3 "> <?php the_category(', ');?></div>
                        <a class="" href=" <?php the_permalink();?>"><h3 class="card-title mt-1 font-weidemann"> <?php the_title();?> </h3></a>
                        
                    </div>
                    <!-- <div class="card-footer">
                        <small class="text-muted"> <?php echo get_the_date();?> / <?php the_category(', '); ?>/ <?php the_author();?></small>
                    </div> -->
                </div>
            </div>
            <?php endwhile; 
        endif; ?>                   
    </div>
</div>