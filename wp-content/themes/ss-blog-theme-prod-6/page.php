<?php get_header();?>

<div class="container-fluid my-5">
  <?php   
    global $more;

    if ( have_posts() ) :  
        while ( have_posts() ) : the_post();

        $more = 1;
        ?>

        <h2><?php the_title();?></h2>
        <div class="text-justify">
          <?php the_content();?>
        </div>

  <?php endwhile; 
    endif; ?>
</div>


<?php get_footer();?>