<div class="container-fluid ">
    <div class="row mx-1">
        <div class="col-12 text-center my-5">
            
            <?php if(is_single()):?>
                <h2>Related Stories</h2>
            <?php else :?>
                <h2>From the Archive</h2>
            <?php endif?>
        </div>
        <?php query_posts('posts_per_page=4'); ?>
        <?php if ( have_posts() ) :  
            while ( have_posts() ) : the_post();?>     
            
            <div class="col-12 col-md-3 content-from-archives-desktop">
                <div class="card mx-3">
                <!-- card-img-top img-fluid -->
                    <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );
                        }?></a>
                    <div class="card-body px-0">
                        <small class="text-muted"> <?php the_category(', ');?></small>
                        <a href=" <?php the_permalink();?>"><h5 class="card-title text-title-archives"> <?php the_title();?> </h5></a>
                        
                    </div>
                    <!-- <div class="card-footer">
                        <small class="text-muted"> <?php echo get_the_date();?> / <?php the_category(', '); ?>/ <?php the_author();?></small>
                    </div> -->
                </div>
            </div>
            
           
            <div class="card mb-3 content-from-archives-mobile">
                <div class="row no-gutters">
                    <div class="col-4">
                        <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img img-fluid thumbnail-from-archives' ) );
                            }?></a>
                    </div>
                    <div class="col-8">
                        <div class="h-100 card-body py-0 px-3 d-flex flex-column justify-content-between align-items-stretch">
                            <div>
                                <a href=" <?php the_permalink();?>"><h5 class="card-title"> <?php the_title();?> </h5></a>
                            </div>
                            <div>
                                <i class="fas fa-arrow-right"></i>
                            </div>                            
                        </div>
                    </div>
                </div>
                <hr class="general"/>
            </div>
 
            <?php endwhile; 
        endif; ?>            
    </div>
</div>