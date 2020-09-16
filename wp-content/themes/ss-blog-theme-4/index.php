<?php get_header();?>

    <?php get_template_part('template-parts/content','newest-post')?>

    <hr class="line-index line-mobile"/>

    <div class="container-content-ss">
        <div class="container-fluid my-5">
            <div class="row">

            <?php if ( have_posts() ) :  
                while ( have_posts() ) : the_post();?>     
            
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <div class="card my-0 mx-0 my-md-2 mx-md-2 ">
                    <!-- card-img-top img-fluid -->
                        <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );
                            }?></a>
                        <div class="card-body text-danger px-0 mb-5">
                        
                            <div class="row">
                                <!-- version desktop -->
                                <div class="col-8 ver-card-desktop">
                                    <a class="text-danger"  href=" <?php the_permalink();?>"><h2 class="card-title"> <?php the_title();?> </h2></a>                                                                 
                                </div>
                                <div class="col-4 text-right ver-card-desktop">
                                    <div class="text-muted text-danger font-atlas" ><?php the_category(',');?> </div>       
                                </div>

                                <!-- version mobiles -->
                                <div class="col-12 mb-2 text-left ver-card-mobile">
                                    <div class="text-muted text-danger" ><?php the_category(',');?> </div>       
                                </div>
                                <div class="col-12 ver-card-mobile">
                                    <a class="text-danger"  href=" <?php the_permalink();?>"><h3 class="card-title font-weidemann"> <?php the_title();?> </h3></a>                                                                 
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
    </div>

    <div class="container-fluid py-5 widget-area ">
        <div class="row d-flex">
            <div class="col-12 text-center text-danger">
                <span class="font-atlas">19 Questions with ...</span>
            </div>
            <div class="col-12 py-4 px-md-0 text-center text-danger px-0">
                <h2 class="text-special px-md-0 mx-md-0">Im a southern belle from Houston Texas is cool now but from the second I was born I wanted to leave a
                    live here</h2>
            </div>
            <div class="col-12 text-center text-danger">
                <h5>-Cat Cohen, Comedia</h5>
            </div>
        </div>
    </div>

      

    <?php get_template_part('template-parts/content','all-posts')?>

    <hr class="line-index" />
    
    <?php get_template_part('template-parts/content','from-archives')?>
    
    <hr class="line-index line-hidden-mobile"/>    
    
<?php get_footer();?>