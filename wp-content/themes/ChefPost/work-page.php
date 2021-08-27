<?php
/**
 * Template Name: Work Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ChefPost
 */


get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="main how-it-works header-setting">
        <div class="container-fluid p-0">
            <div class="section-heading">
                <h3 class="text-center title"><?php the_title(); ?></h3>
            </div>

        </div>
    </section>
    <section class="how-it-works pt-0">
        <?php the_content('Read More'); ?>
    </section>
<?php endwhile; ?>
<!--    <section class="how-it-works pt-0">-->
<!--        --><?php
//        $args = array('post_type' => 'How It Works', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 4);
//        $loop = new WP_Query($args);
//        while ($loop->have_posts()) : $loop->the_post();
//            $image = get_field('image');
//            ?>
<!--            <div class="image-and-text-block text-left mt-3">-->
<!--                <div class="container">-->
<!--                    <div class="row d-flex align-items-center sec-height">-->
<!--                        <img src="--><?php //echo $image; ?><!--" class="img-pos">-->
<!--                        <div class="col-md-5">-->
<!--                            <h3>--><?php //echo get_the_title() ?><!--</h3>-->
<!--                            <p>--><?php //echo get_the_content() ?><!--</p>-->
<!--                        </div>-->
<!--                        <div class="col-md-7">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php
//            wp_reset_query();
//        endwhile;
//        ?>
<!--    </section>-->
<?php get_footer(); ?>