<?php get_header(); global $url; ?>
<main class="main how-it-works" style="background: #FFFFFF;">
    <section class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="singleBanner mb-4" style="margin-top: -7px;">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="pl-3 pl-lg-4">
<!--                            <p class="meta mb-0">Posted by <a href="#">--><?php //the_author_posts_link(); ?><!--</a>-->
<!--                                on --><?php //the_time('F jS, Y'); ?><!--</p>-->
                            <h3 class="h5 title"><?php the_title(); ?></h3>
                            <a href="<?php echo $url.'filter?' ?>" style="background-color: #aa182c; color: white" class="bt btn-lg">Book It Now</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <?php  the_post_thumbnail(array(768, 512), array('class' => 'img-fluid'));?>
                    </div>
                </div>
            </div>
            <div class="post-content">
                <div class="px-3 px-lg-5">
                    <?php the_content('Read More'); ?>
<!--                    <p class="meta">Posted by <a href="#">--><?php //the_author_posts_link(); ?><!--</a>-->
<!--                        on --><?php //the_time('F jS, Y'); ?>
<!--                        &nbsp;&bull;&nbsp; <a href="--><?php //comments_link(); ?><!--" class="comments">-->
<!--                            --><?php //comments_number('0 Comments', '1 Comment', '% responses'); ?>
<!--                        </a> &nbsp;&bull;&nbsp; <a href="--><?php //the_permalink(); ?><!--" class="permalink">Full article</a></p>-->
                </div>

            </div>
        <?php endwhile; ?>
    </section>
    <section class="subscribe" style="background:#fbf9f6; margin-bottom: -25px;">
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

