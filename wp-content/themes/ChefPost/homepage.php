<?php /* Template Name: Homepage */ ?>

<?php global $url ?>
<?php get_header(); ?>

<!--Banner Section-->
<?php
$args = array('post_type' => 'banners', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 1);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image');
    ?>
    <section class="bannar" style="background: url('<?php echo $image; ?>') no-repeat center">
        <div class="layer"></div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h1 class="text-center"><?php echo get_the_title() ?></h1>
                    <p><?php echo get_the_content() ?></p>
                </div>
                <div class="col-md-12 mt-4">
                    <?php include get_template_directory() . '/include/top_filter.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function initializeAutocomplete() {
            var input = document.getElementById('autocomplete');
            // var options = {
            //   types: ['(regions)'],
            //   componentRestrictions: {country: "IN"}
            // };
            var options = {}

            var autocomplete = new google.maps.places.Autocomplete(input, options);

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();
                var placeId = place.place_id;
                // to set city name, using the locality param
                var componentForm = {
                    locality: 'short_name',
                };
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        document.getElementById("city").value = val;
                    }
                }
                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lng;
                document.getElementById("location_id").value = placeId;
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3cBzlfdK8yX-rwUiixhHfbDS7ORfmX2o&libraries=places&callback=initializeAutocomplete"
            async defer></script>
    <?php
    wp_reset_query();
endwhile;
?>

<!-- Our Services Section-->

<section class="bannar-bottom bg-white services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-block">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Our Services Heading Section')) :
                    endif; ?>

                    <div class="row homeServices" style="justify-content: center;">
                        <?php
                        $args = array('post_type' => 'services', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 4, 'category_name' => 'Home page Services');
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $image = get_field('image');
                            $link = get_field('link');
                            ?>
                            <div class="col-6 col-sm-6 col-md-4">
                                <a href="<?php echo $link; ?>">
                                    <div class="services-card">
                                        <img alt="services card" src="<?php the_post_thumbnail_url(); ?>"
                                             style="height: 178px; border-radius: 3%; max-width: 100%;">
                                        <div class="pt-2 text-left text-md-center">
                                            <h5><?php echo get_the_title() ?></h5>
                                            <span><?php echo get_the_content() ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                            wp_reset_query();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--for mobile -->

<!--How its work Section-->
<section class="common-section how-it-works for-mobile d-block d-lg-none">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('How It Works Heading Section')) :
                endif; ?>
            </div>
        </div>
    </div>
    <?php echo do_shortcode("[full-page-list post_type='How It Works'  posts_per_page=4]"); ?>
</section>


<!-- Featured Chefs Section-->

<section class="common-section meet-our-chef">
    <div class="container">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Featured Chefs Heading Section')) :
        endif; ?>
        <?php echo do_shortcode("[show-chefs]"); ?>
    </div>
</section>

<!--for desktop -->

<!--How its work Section-->
<section class="common-section how-it-works  d-none d-lg-block">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('How It Works Heading Section')) :
                endif; ?>
            </div>
        </div>
    </div>
    <?php echo do_shortcode("[full-page-list post_type='How It Works'  posts_per_page=4]"); ?>
</section>


<!--Story Section-->

<section class="our-story d-none d-lg-block">
    <div class="container">
        <?php
        $args = array('post_type' => 'Our Story', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $video = get_field('video');
            ?>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <h3 class="text-center"><?php echo get_the_title() ?></h3>
                    <p class="text-center"><?php echo get_the_content() ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $video; ?>"></iframe>
                    </div>
                </div>
            </div>
            <?php
            wp_reset_query();
        endwhile;
        ?>
    </div>
</section>

<!--Cusion Section-->

<section class="minies-cusion-diet">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <h3>Menus, cuisines or diets…</h3>
            </div>
            <div class="col-lg-4 col-12 text-right d-flex justify-content-end mb-4">
                <a class="theme-button bordered float-right hover-ripple view-all" href="<?php echo $url . 'cuisines' ?>">View
                    all</a>
            </div>
        </div>
        <!--        for desktop-->
        <div class="d-none d-lg-block">
            <?php echo do_shortcode("[col3-list post_type='Cuisines' posts_per_page='3']"); ?>
        </div>
<!--        for mobile-->
        <div class="d-block d-lg-none">
            <div id="owl-cuisines" class="owl-carousel cuisines-carousel">
                <?php
                $args = array('post_type' => 'Cuisines', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <a href="<?php echo get_field('link') ?>" class="services-card">
                        <div class="cover-bg" style="background:#D6D6D6 url(<?php echo $image ?>) no-repeat center"></div>
                        <div class="content">
                            <h5><?php echo get_the_title() ?></h5>
                            <p class="mb-1"><?php echo get_the_content() ?></p>
                        </div>
                    </a>
                    <?php
                    wp_reset_query();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<!--Testimonials Section-->

<section class="common-section testimonials">
    <div class="container">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Testimonials Heading Section')) :
        endif; ?>
        <?php echo do_shortcode("[testimonials]"); ?>
    </div>
</section>


<!--Join Section-->
<?php
$args = array('post_type' => 'join us', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 1);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image');
    ?>
    <section class="common-section join-us-today" style="background-image: url(<?php echo $image ?>)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h3><?php echo get_the_title() ?></h3>
                    <p><?php echo get_the_content() ?></p>
                    <a href="https://view.flodesk.com/pages/618042b7db5bc2b4fb307d40?preview=true"
                       target="_blank">
                        <button class="theme-button hover-ripple">Apply now!</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    wp_reset_query();
endwhile;
?>
<!--Subscribe Section-->
<section class="common-section subscribe">
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
<?php //include get_template_directory() . '/include/modals.php'; ?>
<?php get_footer(); ?>