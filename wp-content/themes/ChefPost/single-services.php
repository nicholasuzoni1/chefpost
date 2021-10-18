<?php
/**
 * Template Name: single services
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
            <?php the_content(); ?>
        <?php endwhile; ?>
    </section>
</main>
<?php get_footer(); ?>

