
  <?php get_header()?>

  <!-- Begin the single.php -->

  <?php

  global $more;

  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
      global $thumbnail_post;
      $thumbnail_post = get_the_post_thumbnail_url(get_the_ID(),'full');
     
      $more = 1;
      ?>
    <!-- Feature Image  -->
    <div class="hero container-fluid d-flex justify-content-center hero-outer">
      <div class="hero-image d-flex justify-content-center">
      <div class="image-container-single-post">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid img-post-featured' ) );

        }?>
        </div>
      </div>
    </div>
    <!-- Begin Content of Post -->

    <div class="container-fluid my-1 my-lg-5 pt-4 pt-lg-5 px-0">
      <div class="row mx-0 mx-lg-5 px-lg-5 my-5 px-0 content-single-header-post" >
        <div class="col-12 col-lg-7  ml-lg-0 pl-lg-0">
          <div class="col-12 px-0">
            <h1 class="title-post"><?php the_title();?> </h1>
          </div>
          <div class="col-12 px-0 mb-5 text-excerpt font-left35-regular">

            <?php  the_excerpt();?>

          </div>
        </div>
        <div class="col-12 col-lg-5 mr-lg-0 px-lg-0">
          <div class="row px-lg-0" >
            <div class="col-4">
              <span class="font-left35-medium" style="font-size: 10px;">CATEGORY</span>
            </div>
            <div class="col-8">
              <span class="font-atlas"><?php the_category(', ');?></span>
            </div>
            <div class="col-12 py-2 py-md-3">
              <hr />
            </div>
            <div class="col-4">
              <span class="font-left35-medium" style="font-size: 10px;">DATE</span>
            </div>
            <div class="col-8">
              <span class="font-atlas"><?php echo get_the_date();?></span>
            </div>
            <div class="col-12 py-2 py-md-3">
              <hr />
            </div>
            <div class="col-4">
              <span class="font-left35-medium" style="font-size: 10px;">WORDS BY</span>
            </div>
            <div class="col-8">
              <?php
              global $post;
              $thePostID = $post->ID;
              $post_id = get_post($thePostID);
              $title = $post_id->post_title;
              $perm = get_permalink($post_id);
              $post_keys = array(); $post_val = array();
              $post_keys = get_post_custom_keys($thePostID);
              $post_key_flag = false;
              if (!empty($post_keys)) :
                foreach ($post_keys as $pkey) :
                    if ($pkey=='words_by') :
                      $post_key_flag = true;
                      $title= get_post_custom_values($pkey)[0];
                      echo '<span class="font-atlas">'.$title.'</span>';
                    endif;
                endforeach;
                if($post_key_flag == false):?>
                  <span class="font-atlas"><?php the_author();?></span>
              <?php endif;
            endif;?>
            </div>
            <div class="col-12 py-2 py-md-3">
              <hr />
            </div>
            <div class="col-4">
              <span class="font-left35-medium" style="font-size: 10px;">SHARE</span>
            </div>
            <div class="col-8">
              <div id="fb-root"></div>
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
              <div class="font-atlas" style="font-size: 12px;cursor: pointer; margin: 0 0;" data-href="https://socialstudies578844844.wpcomstaging.com/" data-layout="button" data-size="small">              
                <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>','_blank', 'width=700,height=800');">FB</a>
                <a onclick="window.open('https://co.pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $thumbnail_post;?>')">PIN</a> 
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row d-flex mx-3 mx-lg-5 px-lg-5">
        <div class="col-12 px-0">
          <div class="container-single-ss text-left">
            <?php the_content();?>
            <hr class="line-mobile-single"/>
            <div></div>
          </div>
        </div>
      </div>

      <!-- section desktop and mobile-->
      <div class="row mx-0 my-5 d-flex justify-content-center">
        <div class="col-12 d-flex justify-content-center justify-content-lg-end align-items-center col-lg-4 ">
          <span class="mx-3 w-50 w-lg-0 text-right text-lg-right font-left35-medium" style="font-size: 10px;">WORDS BY</span>
          <div class="mx-0 mx-md-3 w-50 w-md-25 w-lg-0 text-left text-lg-right font-atlas" style="font-size: 12px;">
            <?php
              $post_key_flag = false;
              if (!empty($post_keys)) :
                foreach ($post_keys as $pkey) :
                    if ($pkey=='words_by') :
                      $post_key_flag = true;
                      $title= get_post_custom_values($pkey)[0];
                      echo $title;
                    endif;
                endforeach;
                if($post_key_flag == false):?>
                <?php the_author();?>
              <?php endif;?>
            <?php endif;?>
          </div>
          <div class="d-none d-lg-block mx-3 vl"></div>
        </div>
        <div class="col-12 px-lg-0 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center ">
          <span class="mx-3 w-50 w-lg-0 text-right text-lg-left ml-lg-0 font-left35-medium" style="font-size: 10px;">SHARE</span>
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
          <div class="mx-0 mx-md-3 mr-lg-0 w-50 w-lg-0 d-flex justify-content-start justify-content-lg-end">
            <div class="font-atlas" style="font-size: 12px;cursor: pointer;margin: 0 0;" data-href="https://social-studies.blog/" data-layout="button" data-size="small"><a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>','_blank', 'width=700,height=800');">FB</a></div>
            <div class="font-atlas" style="font-size: 12px;cursor: pointer;margin: 0 0 0 1rem;" data-href="https://social-studies.blog/" data-layout="button" data-size="small"><a onclick="window.open('https://co.pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $thumbnail_post;?>')">PIN</a></div>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center justify-content-lg-start align-items-center col-lg-4 ">
          <div class="d-none d-lg-block mx-3 vl"></div>
          <span class="mx-3 w-50 w-md-25 w-lg-0 text-right text-lg-left font-left35-medium" style="font-size: 10px;" >PHOTOS BY</span>
          <div class="mx-0 mx-md-3 w-50 w-lg-0 text-left text-lg-left font-atlas" style="font-size: 12px;" >
          <?php
            $post_key_flag = false;
            if (!empty($post_keys)) :
              foreach ($post_keys as $pkey) :
                if ($pkey=='photos_by') :
                  $post_key_flag = true;
                  $title= get_post_custom_values($pkey)[0];
                  echo $title;
                endif;
              endforeach;
              if($post_key_flag == false):?>
                <?php the_author();?>
              <?php endif;?>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>

    <?php
    global $post;
    $thePostID = $post->ID;
    $post_id = get_post($thePostID);
    $title = $post_id->post_title;
    $perm = get_permalink($post_id);
    $post_keys = array(); $post_val = array();
    $post_keys = get_post_custom_keys($thePostID);

    if (!empty($post_keys)) :
      foreach ($post_keys as $pkey) :
          if ($pkey=='name_product_shop') : ?>
            <!-- Shop this party desktop-->
            <div class="container-fluid header-colors my-4 section-shop-desktop">
              <div class="row mx-5 px-5 mt-5">
                <div class="col-12 my-4 d-flex justify-content-between">
                  <h2>Shop this party</h2>
                  <!-- <a href="" role="button" class="btn btn-danger d-flex align-items-center">Rent the Doppio</a> -->
                  <?php print_post_title()?>
                </div>
                <div class="col-12 my-4 mb-5 pb-5 d-flex justify-content-between flex-wrap">
                  <!-- <?php // Use shortcode in a PHP file (outside the post editor).
                  ?>-->
                  <!-- Block of Shop Images Desktop-->
                    <?php
                    // Dynamic Feature Image
                    if( class_exists('Dynamic_Featured_Image') ) {
                      global $dynamic_featured_image;
                      $featured_images = $dynamic_featured_image->get_featured_images($post);
                      foreach ($featured_images as $featured_image) {
                        ?>
                        <div class="col-3">
                          <img class="shop-image-post" src=<?php echo $featured_image['full'];?>>
                        </div>                      
                    <?php 
                        }
                      }
                    ?>                  
                  <!-- End Block of Shop Image Desktop-->
                </div>
              </div>
            </div>
            <!-- Shop this party version mobile -->
            <div class="container-fluid header-colors my-4 section-shop-mobile">
              <div class="row mx-0 px-0 my-5 py-0">
                <div class="col-12 my-0 d-flex justify-content-center px-0">
                  <h1>Shop this party</h1>
                </div>
                <!-- Block of Shop Images Mobile-->
                <div class="col-12 d-flex flex-wrap justify-content-center my-4 pb-0 px-0">
                  <div class="col-12 d-flex justify-content-center ">
                    <?php
                      // Dynamic Feature Image
                      if( class_exists('Dynamic_Featured_Image') ) {
                        global $dynamic_featured_image;
                        $featured_images = $dynamic_featured_image->get_featured_images($post);
                        for ($x = 0; $x <= 1; $x++){
                    ?>                          
                      <div class="col-6 my-2 mx-2 px-0 d-flex justify-content-center">
                        <img class="shop-image-post" src=<?php echo $featured_images[$x]['full'];?>>
                      </div>                        
                    <?php                         
                      }
                    }                      
                    ?>
                  </div>
                  <div class="col-12 d-flex justify-content-center ">
                    <?php
                      // Dynamic Feature Image
                      if( class_exists('Dynamic_Featured_Image') ) {
                        global $dynamic_featured_image;
                        $featured_images = $dynamic_featured_image->get_featured_images($post);
                      for ($x = 2; $x <= 3; $x++){
                    ?>                          
                      <div class="col-6 my-2 mx-2 px-0 d-flex justify-content-center">
                        <img class="shop-image-post" src=<?php echo $featured_images[$x]['full'];?>>
                      </div>                        
                    <?php
                      }                         
                    }                      
                    ?>
                  </div>
                  <div class="col-12 d-flex w-100 text-center mt-2 justify-content-center px-0">
                    <?php print_post_title_mobile()?>
                  </div>
                </div>
                <!-- End Block of Shop Images Mobile-->
              </div>
            </div>
        <?php else: ?>

      <?php endif;
     endforeach;
    else : ?>
        <!-- Empty -->
    <?php endif; ?>

      <?php endwhile;
  endif; ?>
  <!-- End Content of Post -->


  <!-- Related stories -->
  <hr class="line-index"/>

 <?php get_template_part('template-parts/content', 'from-archives')?>

 <hr class="line-index line-hidden-mobile" />

  <!-- Begin footer -->
  <?php get_footer();?>


  <script>
    const maxSizeScreenMobile = '991.98';
    if($(window).width() <= maxSizeScreenMobile){
      $('.wp-block-pullquote.is-style-default p').text('Im a son thern belle from Houston Texas is cool now but from the second I was born I wanted to leave and live here');
      $('.wp-block-pullquote.is-style-default p').css('font-family',`'BeyondInfinity-Demo', cursive`);
    }
    $('p').css('overflow-wrap', 'break-word');
    $('div.container-single-ss').children('p').addClass('p-without-class');
  </script>