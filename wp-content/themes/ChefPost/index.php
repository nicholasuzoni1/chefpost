<?php get_header(); ?>

    <!--Banner Section-->
<?php
$args = array('post_type' => 'banners', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 1);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
    ?>
    <section class="bannar">
        <div id="crousel-demo" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner img-size">
                <div class="carousel-item active">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="main-pos">
                        <div class="container">
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <h2 class="text-center"><?php echo get_the_title() ?></h2>
                                    <p><?php echo get_the_content() ?></p>
                                </div>
                                <div class="col-md-12 mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-pos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5" style="margin: 120px 0;"></div>
                    <div class="col-md-12 mt-4">
                        <?php include get_template_directory() . '/include/top_filter.php'; ?>
                    </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&libraries=places&callback=initializeAutocomplete"
            async defer></script>
    <?php
    wp_reset_query();
endwhile;
?>

    <!-- Our Services Section-->

    <section class="bannar-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-block">
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Our Services Heading Section')) :
                        endif; ?>

                        <div class="row">
                            <?php
                            $args = array('post_type' => 'services', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 4);
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                $image = get_field('image');
                                ?>
                                <div class="col-md-3">
                                    <a href="#">
                                        <div class="services-card">
                                            <img src="<?php echo $image; ?>"
                                                 style="height: 178px; border-radius: 3%; max-width: 245px;">
                                            <div class="pt-2">
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


    <!-- Featured Chefs Section-->

    <section class="meet-our-chef">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Featured Chefs Heading Section')) :
                    endif; ?>
                    <div class="col-12 p-0">
                        <div id="owl-example-second" class="owl-carousel">
                            <?php
                            $args = array('post_type' => 'Featured Chefs', 'orderby' => 'date', 'order' => 'ASC');
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                $image = get_field('image');
                                ?>
                                <a href="#">
                                    <div class="col-md-12">
                                        <div class="chef-image">
                                            <img class="img-fluid"
                                                 src="<?php echo $image; ?>"
                                                 alt="<?php echo get_the_title() ?>">
                                        </div>
                                        <h4 class="text-center"><?php echo get_the_title() ?></h4>
                                    </div>
                                </a>
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

    <!--How its work Section-->

    <section class="how-it-works">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('How It Works Heading Section')) :
                    endif; ?>
                </div>
            </div>
        </div>
        <?php
        $args = array('post_type' => 'How It Works', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 4);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $image = get_field('image');
            ?>
            <div class="image-and-text-block text-left mt-3">
                <div class="container">
                    <div class="row d-flex align-items-center sec-height">
                        <img src="<?php echo $image; ?>" class="img-pos">
                        <div class="col-md-5">
                            <h3><?php echo get_the_title() ?></h3>
                            <p><?php echo get_the_content() ?></p>
                        </div>
                        <div class="col-md-7">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            wp_reset_query();
        endwhile;
        ?>
    </section>

    <!--Story Section-->

    <section class="our-story">
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
                <div class="col-8">
                    <h3>Menus, cuisines or diets…</h3>
                </div>
                <div class="col-4 text-right">
                    <a class="theme-button bordered float-right hover-ripple view-all" href="#">View
                        all</a>
                </div>
            </div>
            <div class="row align-items-center">
                <?php
                $args = array('post_type' => 'Cuisines', 'orderby' => 'date', 'order' => 'ASC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-card-btm">
                            <img class="img-fluid" src="<?php echo $image; ?>"
                                 style="height:227px; border-radius:3%; min-width: 290px"/>
                            <h5><?php echo get_the_title() ?></h5>
                            <p class="mb-1"><?php echo get_the_content() ?></p>
                        </div>
                    </div>
                    <?php
                    wp_reset_query();
                endwhile;
                ?>
            </div>
        </div>
    </section>

    <!--Testimonials Section-->

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Testimonials</h3>
                    <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut.</p> -->
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $c = 0;
                            $class = '';
                            $args = array('post_type' => 'Testimonials', 'orderby' => 'date', 'order' => 'ASC');
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) : $loop->the_post();
                                $c++;
                                if ($c == 1) $class .= ' active';
                                else $class = '';
                                ?>
                                <div class="carousel-item <?php echo $class; ?>">
                                    <div class="mt-5 mb-5">
                                        <div class="row">
                                            <div class="offset-md-1 col-md-10">
                                                <div class="testimonial-wrap">
                                                    <img class="mb-4"
                                                         src="<?php echo get_template_directory_uri() . '/assets/images/ic_esclamation.png' ?>">
                                                    <h6><?php echo get_the_content() ?></h6>
                                                    <div class="line mt-5">
                                                        <strong><?php echo get_the_title() ?></strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                wp_reset_query();
                            endwhile;
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span style="transform: rotate(180deg);" class="carousel-control-prev-icon"
                                  aria-hidden="true"><img
                                        src="<?php echo get_template_directory_uri() . '/assets/images/ic_next.png' ?>"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><img
                                        src="<?php echo get_template_directory_uri() . '/assets/images/ic_next.png' ?>"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Join Section-->
<?php
$args = array('post_type' => 'join us', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 1);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
    $image = get_field('image');
    ?>
    <section class="join-us-today" style="background-image: url(<?php echo $image ?>)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h3><?php echo get_the_title() ?></h3>
                    <p><?php echo get_the_content() ?></p>
                    <a href="https://www.fountain.com/chefpost/apply/miami-florida-chef?preview=true" target="_blank">
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
    <section class="subscribe">
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
    <script type="text/javascript">
        $(document).ready(function () {
            var success = "{!! $v_success !!}";
            if (success == 1 || success == '1') {
                swal("An email verification link has been sent to your email account", "Please click on the link that has been sent to your email account to verify your email", "success");
            }
        });

        function submitSubscribeForm() {
            var first_name = $('#first_name_field').val();
            var last_name = $('#last_name_field').val();
            var email_address = $('#email_address_field').val();
            if (!first_name) {
                swal('warning', 'Please enter your first name', 'warning');
                return false;
            }
            if (!email_address) {
                swal('warning', 'Please enter your email address', 'warning');
                return false;
            }
            if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email_address)) {
                swal('warning', 'Please enter your valid email address', 'warning');
                return false;
            }
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: "{{route('add_subscriber')}}",
                data: {
                    "_token": CSRF_TOKEN,
                    "first_name": first_name,
                    "last_name": last_name,
                    "email_address": email_address
                },
                dataType: 'JSON',
                success: function (results) {
                    if (results.success === true) {
                        swal("Done!", results.message, "success");
                        setTimeout(function () {
                            location.reload()
                        }, 3000);
                    } else {
                        swal("Error!", results.message, "error");
                    }
                }
            });
        }
    </script>

<?php get_footer(); ?>