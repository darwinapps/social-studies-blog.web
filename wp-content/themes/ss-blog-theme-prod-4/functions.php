<?php
add_filter( 'jetpack_development_mode', '__return_true' );

//Enable Title Tag in the tab page in any browser
add_theme_support( 'title-tag' );

// Enable admin bar in the site
function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );

// Enable support block styles
add_theme_support( 'wp-block-styles' );

// Enable the support of feature images in the posts
// add_theme_support( 'post-thumbnails' );

// Jquery scripts *** Not working
function my_theme_scripts() {
    // Theme Styles Stylesheet
	wp_enqueue_style( 'ss-blog-style', get_stylesheet_uri(), array(), '1.4' );
    // Theme block stylesheet.
    wp_enqueue_style( 'social-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'ss-blog-style' ), '1.0.1' );
    // Theme block-editr stylesheet.
	// wp_enqueue_style( 'social-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ), array( 'ss-blog-style' ), '1.0.2' );
    //wp_dequeue_style( 'wpsl-styles' );
    wp_register_script( 'gdgt-base', get_theme_file_uri('/js/helper.js'), array( 'jquery' ), '0', true );
    wp_enqueue_script( 'gdgt-base' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function my_theme_deregister_scripts(){
    wp_dequeue_style( 'wpsl-styles' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_deregister_scripts', 11 );

// Optimization wp_head()

// remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
// remove_action( 'in_admin_header', 'wp_admin_bar_render', 0 );

// Register a menu of Wordpress Named 'superior'
if(function_exists('register_nav_menus')){
    register_nav_menus(array('superior' => 'top principal menu'));
}

// Add the class nav-link of bootstrap in each li of ul created by nav_menu_wordpress
add_filter('nav_menu_link_attributes', 'class_menu_bootstrap', 10,3);

function class_menu_bootstrap($atts, $item, $args){
    $class = 'nav-link text-danger font-left35-regular font-size-menu-link mx-3 px-0';
    $atts['class'] = $class;
    return $atts;
}

// // This script add a custom item to <ul/> list
// function add_last_nav_item($items) {
//     return $items .=
//     '<li class="form-in-navbar">
//         <form class="form-inline my-2 my-lg-0">
//             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
//             <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
//         </form>
//     </li>';
// }

// // This script add a custom item to <ul/> list
// function add_last_nav_item($items) {
//     return $items .=
//     '<li class=" nav-item form-in-navbar">
//         <a class="nav-link text-danger">Hello Im Here</a>
//     </li>';
// }
// add_filter('wp_nav_menu_items','add_last_nav_item');

// Add feature images to card content
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'gallery' ) );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Shop Image 1',
        'id' => 'shop-image-1',
        'post_type' => 'post'
        )
    );
}
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Shop Image 2',
        'id' => 'shop-image-2',
        'post_type' => 'post'
        )
    );
}
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Shop Image 3',
        'id' => 'shop-image-3',
        'post_type' => 'post'
        )
    );
}
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Shop Image 4',
        'id' => 'shop-image-4',
        'post_type' => 'post'
        )
    );
}

// Functions that read customo variable in ithe post, and do a action with this, in this case. This use for add link to button.

function print_post_title() {
    global $post;
    $thePostID = $post->ID;
    $post_id = get_post($thePostID);
    $title = $post_id->post_title;
    $perm = get_permalink($post_id);
    $post_keys = array(); $post_val = array();
    $post_keys = get_post_custom_keys($thePostID);

    if (!empty($post_keys)) {
        foreach ($post_keys as $pkey) {
            if ($pkey=='name_product_shop') {
                $title= get_post_custom_values($pkey)[0];
            }
            if ($pkey=='external_url_shop') {
                $post_val = get_post_custom_values($pkey);
            }
        }
        if (empty($post_val)) {
            $link = $perm;
        } else {
            $link = $post_val[0];

        }
    } else {
        $link = $perm;
    }
    echo '<a class="btn btn-danger d-flex align-items-center justify-content-center font-left35-regular" style="font-size: 14px; width: 256px; border-radius: 0px" role="button" href="'.$link.'" rel="bookmark" title="'.$title.'">'.$title.'<i class=" pl-3 fas fa-arrow-right" style="color: white;"></i></a>';
}

function print_post_title_mobile() {
    global $post;
    $thePostID = $post->ID;
    $post_id = get_post($thePostID);
    $title = $post_id->post_title;
    $perm = get_permalink($post_id);
    $post_keys = array(); $post_val = array();
    $post_keys = get_post_custom_keys($thePostID);

    if (!empty($post_keys)) {
        foreach ($post_keys as $pkey) {
            if ($pkey=='name_product_shop') {
                $title= get_post_custom_values($pkey)[0];
            }
            if ($pkey=='external_url_shop') {
                $post_val = get_post_custom_values($pkey);
            }
        }
        if (empty($post_val)) {
            $link = $perm;
        } else {
            $link = $post_val[0];

        }
    } else {
        $link = $perm;
    }
    echo '<a class="btn btn-danger justify-content-between" role="button" href="'.$link.'" rel="bookmark" title="'.$title.'" style="border-radius: 0px;">'.$title. '<i class=" ml-5 pl-5 fas fa-arrow-right" style="color: white;"></i></a>';
}


add_action( 'widgets_init', 'footer_sidebars' );
function footer_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer_sidebar_social_1',
            'name'          => __( 'Footer Sidebar Social Studies Information' ),
            'description'   => __( 'For pages liks FAQs, how it works.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
    array(
        'id'            => 'footer_sidebar_social_2',
        'name'          => __( 'Footer Sidebar Social Studies Contact' ),
        'description'   => __( 'For pages like Contact, email.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_sidebar_social_3',
            'name'          => __( 'Footer Sidebar Social Studies Privacy' ),
            'description'   => __( 'For pages like a privacy, terms and conditions.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_sidebar_social_4',
            'name'          => __( 'Footer Sidebar Social Studies Social-Networks' ),
            'description'   => __( 'For pages like facebook, instagram.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_sidebar_social_5',
            'name'          => __( 'The Image of Social-Studies' ),
            'description'   => __( 'For a image.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12 d-flex justify-content-center">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );


    register_sidebar(
        array(
            'id'            => 'footer_jetpack_suscription',
            'name'          => __( 'Suscription to Social-Studies' ),
            'description'   => __( 'For add the widget from JetPack for suscriptions.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12 d-flex justify-content-center">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'content_sidebars' );
function content_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'content_sidebar_archives',
            'name'          => __( 'Sidebar From Archives' ),
            'description'   => __( 'Shows information of last posts.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'header_sidebars' );
function header_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'header_sidebar_categorize',
            'name'          => __( 'Header sidebar categories' ),
            'description'   => __( 'Shows all the categories of blog.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-1 col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<a class="widget-title">',
            'after_title'   => '</a>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}


?>