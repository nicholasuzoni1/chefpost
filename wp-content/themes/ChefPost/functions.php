<?php
/**
 * Enqueue scripts and styles.
 */
function chefPost_scripts() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome',  'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',  array(), 1, 'all');
    wp_enqueue_style( 'sweetAlert', get_template_directory_uri() . '/assets/css/sweetalert2.min.css',  array(), 1, 'all');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',  array(), 1, 'all');
    wp_enqueue_style( 'owl.carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',  array(), 1, 'all');
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/style.css',  array(), 1, 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css',  array(), 1, 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css',  array(), 1, 'all');


    wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js',  array(), 1);
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), 1);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js',  array(), 1, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',  array(), 1, true);
    wp_enqueue_script( 'forwowcss', get_template_directory_uri() . '/assets/js/forwowcss.js',  array(), 1, true);
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',  array(), 1, true);
    wp_enqueue_script( 'jquery.validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js',  array(), 1, true);
    wp_enqueue_script( 'moment', get_template_directory_uri() . '/assets/js/moment.min.js',  array(), 1, true);
    wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/assets/js/sweetalert2.min.js',  array(), 1, true);
    wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js',  array(), 1, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/web.js',  array(), 1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'chefPost_scripts' );



if ( ! function_exists( 'theme_menu' ) ) {
    function theme_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
            'support_menu'  => __( 'Support Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'theme_menu', 0 );
}


//Home page Banner section function

function create_banners_post_type() {
    register_post_type( 'banners',
        array(
            'labels' => array(
                'name' => __( 'Banner' ),
                'singular_name' => __( 'Banner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banners'),
        )
    );

}
add_action( 'init', 'create_banners_post_type' );


//services section function

function create_services_post_type() {
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
        )
    );
}
add_action( 'init', 'create_services_post_type' );




function create_featured_chefs_post_type() {
    register_post_type( 'Featured Chefs',
        array(
            'labels' => array(
                'name' => __( 'Featured Chefs' ),
                'singular_name' => __( 'Featured Chefs' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Featured Chefs'),
        )
    );
}
add_action( 'init', 'create_featured_chefs_post_type' );


function create_how_it_work_post_type() {
    register_post_type( 'How It Works',
        array(
            'labels' => array(
                'name' => __( 'How It Works' ),
                'singular_name' => __( 'How It Works' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'How It Works'),
        )
    );
}
add_action( 'init', 'create_how_it_work_post_type' );


function create_our_story_post_type() {
    register_post_type( 'Our Story',
        array(
            'labels' => array(
                'name' => __( 'Our Story' ),
                'singular_name' => __( 'Our Story' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Our Story'),
        )
    );
}
add_action( 'init', 'create_our_story_post_type' );


function create_cuisines_post_type() {
    register_post_type( 'Cuisines',
        array(
            'labels' => array(
                'name' => __( 'Cuisines' ),
                'singular_name' => __( 'Cuisines' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Cuisines'),
        )
    );
}
add_action( 'init', 'create_cuisines_post_type' );

function create_testimonials_post_type() {
    register_post_type( 'Testimonials',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonials' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Testimonials'),
        )
    );
}
add_action( 'init', 'create_testimonials_post_type' );


function join_post_type() {
    register_post_type( 'join us',
        array(
            'labels' => array(
                'name' => __( 'Join us' ),
                'singular_name' => __( 'Join us' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Join us'),
        )
    );
}
add_action( 'init', 'join_post_type' );

function logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'logo_setup');


//Adds thumbnail to post
add_theme_support('post-thumbnails'); 

//Adds Menus
add_theme_support('menus'); 

//Register right sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));

?>