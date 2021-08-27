<?php
/**
 * Template Name: Story Page
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
    <section class="story-about-brand pt-0">
        <div class="container">
            <?php the_content('Read More'); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>