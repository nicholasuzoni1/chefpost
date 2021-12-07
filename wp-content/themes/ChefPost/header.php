<?php global $url; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description
        "
          content="Book a personal chef for weekday meals, meals preps or events anytime. Available in South Florida. Book, Relax and Enjoy the Chefpost Experience">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() . '/assets/images/ic_cart.png' ?>">
    <title>Chefpost</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen"/>
    <?php wp_head(); ?>
    <!-- CLient Code -->
    <script>
        (function (w, d, t, s, n) {
            w.FlodeskObject = n;
            var fn = function () {
                (w[n].q = w[n].q || []).push(arguments);
            };
            w[n] = w[n] || fn;
            var f = d.getElementsByTagName(t)[0];
            var e = d.createElement(t);
            var h = '?v=' + new Date().getTime();
            e.async = true;
            e.src = s + h;
            f.parentNode.insertBefore(e, f);
        })(window, document, 'script', 'https://assets.flodesk.com/universal.js', 'fd');
        window.fd('form', {
            formId: '5fbf2025d1b2b1f394200b5c'
        });
    </script>
    <!-- CLient Code -->
</head>
<body>
<!-- Header section -->
<header class="fixed-top header">
    <nav class="navbar navbar-expand-lg navbar-light container">

        <a class="navbar-brand mr-5 pr-5" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_logo_header.png' ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'menu_class' => 'navbar-nav d-flex align-items-center',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'container' => 'ul',

            ));
            ?>

            <!--            <ul class="navbar-nav d-flex align-items-center">-->
            <!--                <li class="nav-item">-->
            <!--                    <a class="nav-link" href="{{route('about_us')}}">Our Story</a>-->
            <!--                </li>-->
            <!--                <li class="nav-item">-->
            <!--                    <a class="nav-link" href="{{route('services')}}">Services</a>-->
            <!--                </li>-->
            <!--                <li class="nav-item">-->
            <!--                    <a class="nav-link" href="{{route('how_it_works')}}">How It Works</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <?php
                echo $_COOKIE["Chefpost_Login"];
                if (empty($_COOKIE["Chefpost_Login"]) || $_COOKIE["Chefpost_Login"] == '') {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button class="hover-ripple theme-button with-background open_login_popup">LOGIN</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button class="hover-ripple theme-button bordered open_signup_popup">SIGN UP</button>
                        </a>
                    </li>
                <?php } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url . "/get-cart" ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_cart.png' ?>">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url . "/edit-profile" ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_profile.png' ?>">
                        </a>
                    </li>
                    <?php
                }
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Contact Info')) :
                endif; ?>
            </ul>
        </div>
    </nav>
    <input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" id="ip">
</header>
<script>
    console.log(12)
    console.log(document.getElementById("ip").value)
    //$(document).ready(function () {
    //    var formdata = new FormData();
    //    formdata.append("first_name", $("#first_name").val().trim());
    //    formdata.append("last_name", $("#last_name").val().trim());
    //    formdata.append("email", $("#user_email_address").val().trim());
    //    formdata.append("phone_code", $("#phone_code").val().trim());
    //    formdata.append("phone", $("#user_phone_number").val().trim());
    //    formdata.append("password", $("#register_password").val().trim());
    //    (async () => {
    //        const rawResponse = await fetch('<?php //echo $url?>//api/wordpress/user_signup', {
    //            method: 'POST',
    //            body: formdata
    //        });
    //        const content = await rawResponse.json();
    //        console.log(content)
    //        if (content.success) {
    //            $('#myModal').modal('hide');
    //            $("#first_name").val('')
    //            $("#last_name").val('')
    //            $("#user_email_address").val('')
    //            $("#phone_code").val('')
    //            $("#user_phone_number").val('')
    //            $("#register_password").val('')
    //            swal("An email verification link has been sent to your email account", "Please click on the link that has been sent to your email account to verify your email", "success");
    //        }
    //    })();
    //})
</script>