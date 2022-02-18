<?php
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="main how-it-works header-setting">
        <div class="container-fluid p-0">
            <div class="section-heading">
                <h1 class="text-center title"><?php the_title(); ?></h1>
            </div>

        </div>
    </section>
    <section class="how-it-works pt-0">
        <?php the_content('Read More'); ?>
    </section>
<?php endwhile; ?>
