<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- WP HEAD -->
    <?php wp_head()?>

    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/editor-blocks.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/blocks.css"> -->

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Gelasio:400,700|Nothing+You+Could+Do|Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cousine&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/184e73a288.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/helper.js"></script> -->
    <script type="text/javascript">
        window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
        heap.load("YOUR_APP_ID");
    </script>
</head>

<body>

<?php
    if(is_single()):?>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between section-shop-desktop">
            <a class="form-out-navbar navbar-brand text-danger logo-social py-0 pb-2" href="https://social-studies.com/"><img class="style-svg" loading="eager" src="<?php get_home_url();?>/wp-content/uploads/2020/02/logo-social-studies.svg" /> </a>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="search();"><i class="fas fa-search"></i></button>
            </form> -->
            <button class="form-in-navbar btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-search"></i></button>
            <a href="<?php get_home_url();?>/?cat=0" style="text-decoration: none;"><h1 class="form-in-navbar brand-name-single mb-0">The Social</h1></a>

            <button class="navbar-toggler text-danger font-left35-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none; padding: 10px 10px">
                Menu
            </button>

                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'superior',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'items_wrap'      => '<ul class="d-flex navbar-nav mr-auto">%3$s</ul>',
                        'menu_class'      => 'nav-item',
                    ));?>
                <button class="form-out-navbar  btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-search"></i></button>
                <a class="form-out-navbar " href="<?php get_home_url();?>/?cat=0" style="text-decoration: none;"><h1 class="brand-name-single mb-0 ml-auto">The Social</h1></a>

            </div>
        </nav>


    </div>

    <?php else : ?>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex ">
            <a class="navbar-brand text-danger logo-social py-0 pb-2" href="https://social-studies.com/"><img class="style-svg" loading="eager" src="<?php get_home_url();?>/wp-content/uploads/2020/02/logo-social-studies.svg" /></a>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="search();"><i class="fas fa-search"></i></button>
            </form> -->
            <button class="form-in-navbar ml-auto btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-search"></i></button>
            <button class="navbar-toggler text-danger font-left35-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none; padding: 10px 10px">
                Menu
            </button>

                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'superior',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'items_wrap'      => '<ul class="d-flex navbar-nav mr-auto">%3$s</ul>',
                        'menu_class'      => 'nav-item',
                    ));?>
                <button class="form-out-navbar ml-auto btn my-2 my-sm-0" type="submit"  data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-search"></i></button>
            </div>
        </nav>
    </div>
    <?php endif;?>

        <?php get_template_part('template-parts/modal-search')?>

    <div class="container-fluid header-colors ">
        <div class="row my-0 py-0">
            <?php if(is_single()):?>
                <!-- Empty -->
            <?php else :?>
                <div class="col-12 header-title  d-flex flex-column justify-content-center align-items-center">
                    <a href="<?php home_url();?>/?cat=0" style="text-decoration: none;"><h1 class="brand-name mb-0 ">The Social</h1></a>
                    <span class="brand-name-mission my-0 py-0 font-left35-light">(For people who like being with people)</span>
                </div>
            <?php endif?>

            <!-- Bar of categories -->
            <!-- <div class="col-12 d-flex justify-content-around scroll-bar-category"> -->
            <div class="d-flex flex-nowrap flex-lg-wrap justify-content-lg-around col-lg-12 scroll-bar-category">
                <!-- <a href="http://localhost:8000/?cat=0">All</a> -->
                    <?php
                     $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'parent' => 0
                    );   
                    $categories = get_categories($args);

                    // With this line get the original order of categories,
                    // by default is by alphabetic order descendent,
                    // if it is requires a new order, uncomment the next line. ==>

                    // echo "<script>console.log('" . json_encode($categories) . "');</script>";

                    // Function to move a element of an array, from a index to other
                    function moveElement(&$array, $a, $b) {
                        $out = array_splice($array, $a, 1);
                        array_splice($array, $b, 0, $out);
                    }

                    // Movements made to re-order the array categories 
                    // if only whether in the wild is empty and Extra credit empty
                    // moveElement($categories, 4, 0);
                    // moveElement($categories, 5, 1);
                    // moveElement($categories, 4, 2);
                    // moveElement($categories, 6, 5);
			
					// Movements made to re-order the array categories
					// if Extra 'Credit' has posts and 'In the wild' is empty
					// moveElement($categories, 5, 0);
                    // moveElement($categories, 6, 1);
                    // moveElement($categories, 5, 2);
                    // moveElement($categories, 6, 5);

                    // Movements made to re-order the array categories
                    // If only render the categories parents
                    moveElement($categories, 0, 2);

                    // Get category parent, id and slug name in the index.php page
                    $category_now_byslug = get_query_var('category_name');
                    $category_now = get_query_var('cat');
                    $category_now_object = get_category($category_now);
                    $parent_caregory_index = $category_now_object->category_parent;

                    // Get category_parent inside single.php page
                    $cats = get_the_category($post->ID);
                    $parent_caregory_single = $cats[0]->category_parent;
                    // echo "<script>console.log('" . json_encode($cats) . "');</script>";
                    // echo "<script>console.log('" .$cats[0]->term_id. "');</script>";
                    // echo "<script>console.log('Catergory now: " .$category_now. "');</script>";
                    // echo "<script>console.log('Catergory now by slug: " .$category_now_byslug. "');</script>";
                    // echo "<script>console.log('Catergory now the parent index: " .$parent_caregory_index. "');</script>";
                    // echo "<script>console.log('Catergory now the parent single: " .$parent_caregory_single. "');</script>";
                    //global $wp;
                    //echo "<script>console.log('Home-site" .site_url(). "');</script>";

                    // function to get the url showed in the bar address of your browser
                    function getAddress() {
                        $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
                        return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    }

                    //echo "<script>console.log('Address: " .getAddress(). "');</script>";
                    if($category_now === '0' || getAddress() === site_url().'/' || strpos(getAddress(), '?utm_campaign') == true ){
                        if(is_single()){
                            printf( '<div class="mt-4 scroll-category" ><a class="font-atlas font-atlas-scroll-category" href="'.get_site_url().'/?cat=0">All</a><hr class="select mt-3"/></div>');

                        }else{
                            printf( '<div class="scroll-category"><a class="font-atlas font-atlas-scroll-category" href="'.get_site_url().'/?cat=0">All</a><hr class="select"/></div>');

                        }
                    }else{
                        if(is_single()){
                            printf('<div class="mt-4 scroll-category"><a class="font-atlas font-atlas-scroll-category" href="'.get_site_url().'/?cat=0">All</a></div>');
                        }else{
                            printf('<div class="scroll-category"><a class="font-atlas font-atlas-scroll-category" href="'.get_site_url().'/?cat=0">All</a></div>');
                        }
                    }

                    foreach ( $categories as $category ) {
                        if($category_now === $category->term_id || $category->term_id ===  $parent_caregory_index){
                            printf( '<div class=" scroll-category"><a class="font-atlas font-atlas-scroll-category" href="%1$s">%2$s</a><hr class="select mt-3"/></div>',
                                esc_url( get_category_link( $category->term_id ) ),
                                esc_html( $category->name )
                            );
                        }else{
                            if(is_single()){
                                if($cats[0]->term_id == $category->term_id || $category->term_id ===  $parent_caregory_single){
                                    printf( '<div class="mt-4 scroll-category"><a class="font-atlas font-atlas-scroll-category" href="%1$s">%2$s</a><hr class="select"/></div>',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_html( $category->name )
                                    );
                                }else{
                                    printf( '<div class="mt-4 scroll-category"><a  class="font-atlas font-atlas-scroll-category" href="%1$s">%2$s</a></div>',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_html( $category->name )
                                    );
                                }
                            }else{
                                printf( '<div class="scroll-category"><a class="font-atlas font-atlas-scroll-category" href="%1$s">%2$s</a></div>',
                                    esc_url( get_category_link( $category->term_id ) ),
                                    esc_html( $category->name )
                                );
                            }

                        }
                    }
                    ?>
            </div>
        </div>

    </div>
