<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="main how-it-works header-setting">
        <div class="container">
            <div class="section-heading">
                <h3 class="text-center title"><?php the_title(); ?></h3>
            </div>
            <?php the_content('Read More'); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>