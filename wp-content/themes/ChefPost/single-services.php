<?php
/**
 * Template Name: Single services
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
<main class="main how-it-works" style="background: #FFFFFF;">
    <section class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div style="margin-top: 45px;">
                <div style="margin-bottom: 20px;" class="text-center">
                    <h1 style="font-weight: 900; font-size: 56px" class="title"><?php the_title(); ?></h1>
                    <p>“Easy way to eat well at home”</p>
                </div>
                <div class="singleBanner mb-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="pl-3 pl-lg-4 text-center">
                                <div class="text-left">
                                    <h4 class="title"><?php the_title(); ?></h4>
<!--                                    <a href="--><?php //echo $link; ?><!--" style="background-color: #aa182c; color: white"-->
<!--                                       class="bt btn-sm">Book It Now</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <?php the_post_thumbnail(array(768, 512), array('class' => 'img-fluid')); ?>
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <?php the_content('Read More'); ?>
                </div>
<!--                <div class="singleBanner mb-4">-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-lg-8">-->
<!--                            <img width="768" height="512"-->
<!--                                 src="https://www.shankitchen.com/wp-content/uploads/2017/07/Prepare.jpg">-->
<!--                        </div>-->
<!--                        <div class="col-lg-4"></div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </section>
</main>
<?php get_footer(); ?>

