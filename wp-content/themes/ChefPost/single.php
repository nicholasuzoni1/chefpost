<?php get_header();
global $url; ?>
<main class="main how-it-works" style="background: #FFFFFF;">
    <section class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php $link = get_field('link'); ?>
            <div style="margin-top: 45px;">
                <div style="margin-bottom: 20px;" class="text-center">
                    <h1 style="font-weight: 900; font-size: 56px" class="title"><?php the_title(); ?></h1>
                </div>
                <div class="post-content">
                    <?php the_content('Read More'); ?>
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
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
</script>

