<?php get_header();?>

    <?php get_template_part('template-parts/content','newest-post')?>

    <hr class="line-index line-mobile"/>

    <div class="container-content-ss">
        <div class="container-fluid my-5">
            <div class="row">

            <?php 
            // Get all post by category but exclude of most recent
            $category_now = get_query_var('cat');
            $query = new WP_Query( array( 'cat' => $category_now, 'offset' => 1 ) );
            
            // By default this loop to shows the post by order of date (from more recent since antique)
            if ( $query->have_posts() ) :  
                while ( $query->have_posts() ) : $query->the_post();?>     
            
                <div class="col-12 col-md-6 d-flex align-items-start">
                    <div class="card my-0 mx-0 my-md-2 mx-md-2 ">
                    <!-- card-img-top img-fluid -->
                        <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array( 'class' => 'size-overflow-thumbnails card-img-top img-fluid' ) );
                            }?></a>
                        <div class="card-body text-danger px-0 mb-5">
                        
                            <div class="row">
                                <!-- version desktop -->
                                <div class="col-8 ver-card-desktop">
                                    <a href=" <?php the_permalink();?>"><h2 class="card-title"> <?php the_title();?> </h2></a>                                                                 
                                </div>
                                <div class="col-4 text-right ver-card-desktop">
                                    <div class="text-muted text-danger font-atlas" ><?php the_category(',');?> </div>       
                                </div>

                                <!-- version mobiles -->
                                <div class="col-12 mb-2 text-left ver-card-mobile">
                                    <div class="text-muted text-danger" ><?php the_category(',');?> </div>       
                                </div>
                                <div class="col-12 ver-card-mobile">
                                    <a href=" <?php the_permalink();?>"><h3 class="card-title font-weidemann"> <?php the_title();?> </h3></a>                                                                 
                                </div>
                            </div>                                                         
                            <div class="card-text card-the-excerpt font-left35-light"> <?php  the_excerpt();?></div>
                        </div>
                        <!-- <div class="card-footer">
                            <small class="text-muted"> <?php echo get_the_date();?> / <?php the_category(','); ?>/ <?php the_author();?></small>
                        </div> -->
                    </div>
                </div>
                <?php endwhile; 
            endif; ?>                         
            </div>
        </div>
        <!-- Start Pagination -->
        <div class="card-body">
            <?php get_template_part('template-parts/content','pagination')?>
        </div>
        <!-- End Pagination -->

    </div>

    <div class="container-fluid py-5 widget-area ">
        <div class="row d-flex">
            <div class="col-12 text-center text-danger">
                <span class="font-atlas">Pop Quiz with ...</span>
            </div>
            <div class="col-12 py-4 px-md-0 text-center text-danger px-0">
                <h2 class="text-special px-md-0 mx-md-0">Sometimes I will draw my invite and then take a photo of the drawing and text that around Efficient and eco friendly</h2>
            </div>
            <div class="col-12 text-center text-danger">
                <h5>- Cleo Wade</h5>
            </div>
        </div>
    </div>

      

    <?php get_template_part('template-parts/content','all-posts')?>

    <hr class="line-index" />
    
    <?php get_template_part('template-parts/content','from-archives')?>
    
    <hr class="line-index line-hidden-mobile"/>    
    
<?php get_footer();?>