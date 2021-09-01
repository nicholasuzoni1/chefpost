<?php
/**
 * Template Name: Blog Page
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
<main class="main-wrapper">
    <?php while (have_posts()) : the_post(); ?>
        <section class="bannar inner-page">
            <div id="crousel-demo" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner img-size">
                    <div class="carousel-item active">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        <div class="main-pos">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <h2 class="text-center"><?php echo get_the_title() ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <section>
        <div class="container">
            <div class="">

                <div class="nav nav-pills my-3" id="pills-tab" role="tablist">
                    <?php
                    $args = array(
                        'exclude' => array(1, 2, 6)
                    );
                    $categories = get_categories($args);
                    $i = 0;

                    foreach ($categories as $category) {
                        ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $i === 0 ? 'active' : '' ?>"
                               data-toggle="pill" id="pills-<?= $category->term_id ?>-category"
                               href="#category-<?php echo $category->term_id ?>" role="tab"
                               aria-controls="category-<?php echo $category->term_id ?>" aria-selected="true">
                                <?php echo $category->name ?>
                            </a>
                        </li>
                        <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="tab-content">
                    <?php
                    $x = 0;
                    foreach ($categories as $category) {
                        $args_2 = array('post_type' => 'post', 'posts_per_page' => 100, 'category_name' => $category->name);
                        $loop = new wp_Query($args_2);
                        ?>
                        <div class="tab-pane fade <?= $x === 0 ? 'show active' : '' ?>"
                             id="category-<?php echo $category->term_id ?>" role="tabpanel"
                             aria-labelledby="pills-<?php echo $category->term_id ?>-category">
                            <div class="row align-items-center">
                                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="services-card-btm">
                                            <a href="<?php the_permalink(); ?>" target="_blank">
                                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"
                                                     style="height:227px; border-radius:3%; min-width: 290px">
                                            </a>
                                            <h5><?php echo the_title(); ?></h5>
                                            <p class="mb-1"><?php echo get_the_content(); ?></p>
                                            <p class="meta">Posted by <?php the_author_posts_link(); ?><span
                                                        class="px-1">on</span><?php the_time('F jS, Y'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php
                        wp_reset_query();
                        $x++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="common-section">
        <div class="container">
            <div class="section-heading mb-4"><h3 class="mt-2">Recent Post</h3>
            </div>
            <?php
            $args = array(
                'exclude' => array(1, 2, 6)
            );
            $categories = get_categories($args);
            foreach ($categories as $category) {
                $args = array('post_type' => 'post', 'posts_per_page' => 100, 'category_name' => $category->name);
                $loop = new wp_Query($args);
                ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <a href="<?php the_permalink(); ?>" target="_blank">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"
                                     style="border-radius:3%; height:227px; min-width: 290px">
                            </a>

                        </div>
                        <div class="col-lg-8 mb-3">
                            <a href="<?php the_permalink(); ?>" target="_blank"><h5 style="font-weight: 700;"><?php echo the_title(); ?></h5></a>
                            <p class="mb-1"><?php echo get_the_content(); ?></p>
                            <p class="meta">Posted by <?php the_author_posts_link(); ?><span
                                        class="px-1">on</span><?php the_time('F jS, Y'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php
                wp_reset_query();
            }
            ?>

    </section>
</main>
<?php get_footer(); ?>

