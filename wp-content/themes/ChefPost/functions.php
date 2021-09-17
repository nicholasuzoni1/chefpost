<?php
/**
 * Enqueue scripts and styles.
 */
function chefPost_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('sweetAlert', get_template_directory_uri() . '/assets/css/sweetalert2.min.css', array(), 1, 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('owl.carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('Bootstrap-datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css', array(), 1, 'all');
    wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 1, 'all');


    wp_enqueue_script('jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), 1, true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), 1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('forwowcss', get_template_directory_uri() . '/assets/js/forwowcss.js', array(), 1, true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('jquery.validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), 1, true);
    wp_enqueue_script('moment', get_template_directory_uri() . '/assets/js/moment.min.js', array(), 1, true);
    wp_enqueue_script('sweetalert', get_template_directory_uri() . '/assets/js/sweetalert2.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js', array(), 1, true);
//    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), 1, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/web.js', array(), null, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'chefPost_scripts');


if (!function_exists('theme_menu')) {
    function theme_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu' => __('Footer Menu', 'text_domain'),
            'support_menu' => __('Support Menu', 'text_domain'),
        ));
    }

    add_action('after_setup_theme', 'theme_menu', 0);
}


//Home page Banner section function

function create_banners_post_type()
{
    register_post_type('banners',
        array(
            'labels' => array(
                'name' => __('Banner'),
                'singular_name' => __('Banner')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banners'),
        )
    );

}

add_action('init', 'create_banners_post_type');


//services section function

function create_services_post_type()
{
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
        )
    );
}

add_action('init', 'create_services_post_type');


function create_featured_chefs_post_type()
{
    register_post_type('Featured Chefs',
        array(
            'labels' => array(
                'name' => __('Featured Chefs'),
                'singular_name' => __('Featured Chefs')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Featured Chefs'),
        )
    );
}

add_action('init', 'create_featured_chefs_post_type');


function create_how_it_work_post_type()
{
    register_post_type('How It Works',
        array(
            'labels' => array(
                'name' => __('How It Works'),
                'singular_name' => __('How It Works')
            ),
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'How It Works'),
        )
    );
}

add_action('init', 'create_how_it_work_post_type');

//function how_it_work_post_type_arg() {
//    $labels = array(
//        'name'                => _x( 'How It Works', 'Post Type General Name', 'ChefPost' ),
//        'singular_name'       => _x( 'How It Works', 'Post Type Singular Name', 'ChefPost' ),
//        'menu_name'           => __( 'How It Works', 'ChefPost' ),
//        'parent_item_colon'   => __( 'Parent How It Works', 'ChefPost' ),
//        'all_items'           => __( 'All How It Works', 'ChefPost' ),
//        'view_item'           => __( 'View How It Works', 'ChefPost' ),
//        'add_new_item'        => __( 'Add New How It Works', 'ChefPost' ),
//        'add_new'             => __( 'Add New', 'ChefPost' ),
//        'edit_item'           => __( 'Edit How It Works', 'ChefPost' ),
//        'update_item'         => __( 'Update How It Works', 'ChefPost' ),
//        'search_items'        => __( 'Search How It Works', 'ChefPost' ),
//        'not_found'           => __( 'Not Found', 'ChefPost' ),
//        'not_found_in_trash'  => __( 'Not found in Trash', 'ChefPost' ),
//    );
//
//    $args = array(
//        'label'               => __( 'How It Works', 'ChefPost' ),
//        'description'         => __( 'How It Works of the company', 'ChefPost' ),
//        'labels'              => $labels,
//        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//        'taxonomies'          => array( 'genres' ),
//        'hierarchical'        => false,
//        'public'              => true,
//        'show_ui'             => true,
//        'show_in_menu'        => true,
//        'show_in_nav_menus'   => true,
//        'show_in_admin_bar'   => true,
//        'menu_position'       => 5,
//        'can_export'          => true,
//        'has_archive'         => true,
//        'exclude_from_search' => false,
//        'publicly_queryable'  => true,
//        'capability_type'     => 'page',
//    );
//    register_post_type( 'How It Works', $args );
//}
//add_action( 'init', 'how_it_work_post_type_arg', 0 );
$base_url = 'https://dev.chefpost.com/api/';
function shortcode_getChefs()
{
    $response = wp_remote_retrieve_body(wp_remote_get('https://dev.chefpost.com/api/wordpress/get-all-chefs'));
    $response = json_decode($response, true);
    $options = $response['data'];
    $result = '<div id="owl-example-second" class="owl-carousel">';
    foreach ($options as $key => $chef) {
        $result .= '<a href="#">
            <div class="col-md-12">
                <div class="chef-image">
                    <img class="img-fluid" src="' . $chef['profile_pic'] . '" alt="' . $chef['first_name'] . ' ' . $chef['last_name'] . '">
                </div>
                <h4 class="text-center">' . 'Chef ' . $chef['first_name'] . '</h4>
            </div>
        </a>';
    }
    $result .= '</div>';
    return $result;
}

add_shortcode('show-chefs', 'shortcode_getChefs');

function shortcode_getCountriesCodes()
{
    $response = wp_remote_retrieve_body(wp_remote_get('https://dev.chefpost.com/api/wordpress/get-countries'));
    $response = json_decode($response, true);
    $options = $response['countries'];
    $result = '';
    foreach ($options as $key => $country) {
        $result .= '<option value="' . $country['phone_code'] . '">+' . $country['phone_code'] . '</option>';
    }
    return $result;
}

add_shortcode('show-countries-codes', 'shortcode_getCountriesCodes');

function create_our_story_post_type()
{
    register_post_type('Our Story',
        array(
            'labels' => array(
                'name' => __('Our Story'),
                'singular_name' => __('Our Story')
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Our Story'),
        )
    );
}

add_action('init', 'create_our_story_post_type');


function create_cuisines_post_type()
{
    register_post_type('Cuisines',
        array(
            'labels' => array(
                'name' => __('Cuisines'),
                'singular_name' => __('Cuisines')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Cuisines'),
        )
    );
}

add_action('init', 'create_cuisines_post_type');

function create_testimonials_post_type()
{
    register_post_type('Testimonials',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonials')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Testimonials'),
        )
    );
}

add_action('init', 'create_testimonials_post_type');


function join_post_type()
{
    register_post_type('join us',
        array(
            'labels' => array(
                'name' => __('Join us'),
                'singular_name' => __('Join us')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Join us'),
        )
    );
}

add_action('init', 'join_post_type');


//Adds thumbnail to post
add_theme_support('post-thumbnails');

//Adds Menus
add_theme_support('menus');


function faqs_post_type()
{

    // Set labels for custom post type

    $labels = array(
        'name' => 'FAQS',
        'singular_name' => 'faq',
        'add_new' => 'Add faq',
        'add_new_item' => 'Enter faq Details',
        'all_items' => 'All faqs',

    );


    // Set Options for this custom post type;

    $args = array(
        'public' => true,
        'label' => 'faqs',
        'labels' => $labels,
        'description' => 'faqs is a collection of faqs and their info',
        'menu_icon' => 'dashicons-video-alt2',
        'supports' => array('title', 'editor', 'thumbnail'),
        'capability_type' => 'page',

    );

    register_post_type('faqs', $args);

}

add_action('init', 'faqs_post_type');


function shortcode_faqs_post_type()
{

    $args = array(
        'post_type' => 'faqs',
        'publish_status' => 'published',
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $query = new WP_Query($args);

    $result = '<div class="panel-group mt-5" id="accordion" role="tablist" aria-multiselectable="true">';
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $result .= '
         <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading ' . $post_id . '">
                   <h4 class="panel-title mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $post_id . '" aria-expanded="false" aria-controls="collapse' . $post_id . '" class="collapsed">
               ' . get_the_title() . '
              </a>
            </h4>
              </div>
              <div id="collapse' . $post_id . '" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading' . $post_id . '" style="">
                  <div class="panel-body">
                    <div class="accord-image-block ">
                      <div>' . get_the_content() . '</div>
                    </div>
                  </div>
              </div>
          </div>
         ';
        endwhile;
        wp_reset_postdata();

    endif;
    $result .= '</div>';
    return $result;
}

add_shortcode('faqs-list', 'shortcode_faqs_post_type');


function shortcode_how_it_works_post_type()
{

    $args = array(
        'post_type' => 'How It Works',
        'publish_status' => 'published',
        'orderby' => 'date',
        'order' => 'ASC',

    );

    $query = new WP_Query($args);

    $result = '<section class="how-it-works pt-0">';
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            $image = get_field('image');
            $result .= '
         <div class="image-and-text-block mt-3">
                <div class="container">
                    <div class="row d-flex align-items-center sec-height">
                        <img src=' . $image . ' class="img-pos">
                        <div class="col-md-5">
                            <h3>' . get_the_title() . '</h3>
                            <p>' . get_the_content() . '</p>
                        </div>
                        <div class="col-md-7">
                        </div>
                    </div>
                </div>
            </div>
         ';
        endwhile;
        wp_reset_postdata();

    endif;
    $result .= '</section>';
    return $result;
}

add_shortcode('how-it-works', 'shortcode_how_it_works_post_type');


function full_page_list_shortcode($atts = [], $content = null, $tag = '')
{
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    // override default attributes with user attributes
    $args = shortcode_atts(
        array(
            'publish_status' => 'published',
            'orderby' => 'date',
            'order' => 'ASC',
            'post_type' => '',
            'posts_per_page' => '',
            'category_name' => '',
        ), $atts, $tag
    );

    $query = new WP_Query($args);

    $result = '<section class="how-it-works pt-3">';
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            $result .= '
         <div class="image-and-text-block mt-3">
                <div class="container">
                    <div class="row d-flex align-items-center sec-height">
                        <img src='. get_the_post_thumbnail_url() .' class="img-pos">
                        <div class="col-md-5">
                            <h3><a style="color: #946C73;" href=' . get_the_permalink() . '>' . get_the_title() . '</a></h3>
                            <p>' . get_the_content() . '</p>
                        </div>
                        <div class="col-md-7">
                        </div>
                    </div>
                </div>
            </div>
         ';
        endwhile;
        wp_reset_postdata();

    endif;
    $result .= '</section>';
    return $result;

    // return output
    return $result;
}

function full_page_list_shortcode_init()
{
    add_shortcode('full-page-list', 'full_page_list_shortcode');
}

add_action('init', 'full_page_list_shortcode_init');


function col3_list_shortcode($atts = [], $content = null, $tag = '')
{
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    // override default attributes with user attributes
    $args = shortcode_atts(
        array(
            'publish_status' => 'published',
            'orderby' => 'date',
            'order' => 'ASC',
            'post_type' => '',
            'posts_per_page' => '',
            'category_name' => '',
        ), $atts, $tag
    );

    $query = new WP_Query($args);

    $result = '<div class="row align-items-center">';
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            $image = get_field('image');
            $result .= '
        <div class="col-md-6 col-lg-4">
                        <div class="services-card-btm">
                            <img class="img-fluid" src="' . $image . '"
                                 style="height:227px; border-radius:3%; min-width: 290px"/>
                            <h5>' . get_the_title() . '</h5>
                            <p class="mb-1">' . get_the_content() . '</p>
                        </div>
                    </div>
         ';
        endwhile;
        wp_reset_postdata();

    endif;
    $result .= '</div>';
    return $result;

    // return output
    return $result;
}

function col3_list_shortcode_init()
{
    add_shortcode('col3-list', 'col3_list_shortcode');
}

add_action('init', 'col3_list_shortcode_init');


function shortcode_select_time()
{
    $response = wp_remote_retrieve_body(wp_remote_get('https://dev.chefpost.com/api/wordpress/get-timings'));
    $response = json_decode($response);
    $options = $response->data;

    $result = '<select style="appearance: none;" class="time-select border-0" name="time" id="inputTime" placeholder="Select Time">
                    <option value="">Select Time</option>';
    foreach ($options as $key => $value) {
        $result .= '<option value="' . $key . '">' . $value . '</option>';
    }
    $result .= '</select>';
    return $result;
}

add_shortcode('show-time', 'shortcode_select_time');

function widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Our Services Heading Section', 'ChefPost'),
        'id' => 'our-services',
        'description' => esc_html__('Add widgets here.', 'ChefPost'),
        'before_widget' => '<div class="section-heading">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Featured Chefs Heading Section', 'ChefPost'),
        'id' => 'featured-chefs',
        'before_widget' => '<div class="section-heading">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => esc_html__('How It Works Heading Section', 'ChefPost'),
        'id' => 'how-works',
        'before_widget' => '<div class="section-heading">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Header Contact Info', 'ChefPost'),
        'id' => 'header-contact',
        'before_widget' => '<div class="section-heading">',
        'after_widget' => '</div>',
    ));


}

add_action('widgets_init', 'widgets_init');

?>