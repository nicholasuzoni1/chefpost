<?php get_header(); ?>
<main class="main how-it-works header-setting pb-0">
    <section class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="section-heading mb-3">
                <h3 class="text-center title"><?php the_title(); ?></h3>
            </div>
            <div class="post-content">
                <div class="text-center mb-3">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="text-center">
                    <?php the_content('Read More'); ?>
                    <p class="meta">Posted by <a href="#"><?php the_author_posts_link(); ?></a>
                        on <?php the_time('F jS, Y'); ?>
                        &nbsp;&bull;&nbsp; <a href="<?php comments_link(); ?>" class="comments">
                            <?php comments_number('0 Comments', '1 Comment', '% responses'); ?>
                        </a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink(); ?>" class="permalink">Full article</a></p>
                </div>

            </div>
        <?php endwhile; ?>
    </section>
    <section class="subscribe pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Client Code -->
                    <div id="fd-form-5fc7d7b8c792d45aa601ef32"></div>
                    <script>
                        window.fd('form', {
                            formId: '5fc7d7b8c792d45aa601ef32',
                            containerEl: '#fd-form-5fc7d7b8c792d45aa601ef32'
                        });
                    </script>
                    <!-- CLient Code -->
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

