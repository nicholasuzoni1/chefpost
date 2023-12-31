<?php global $url; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="p:domain_verify" content="13ab91ff2a46bad48366c3895d96ca44"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/images/ic_cart.png' ?>">
    <?php
    $sep = ' | ';
    $name = get_bloginfo('name');
    if (is_home() || is_front_page())
        $title = $name . $sep . get_bloginfo('description');
    if (is_single() || is_page())
        $title = wp_title($sep, false, 'right') ;
    if (is_category())
        $title = single_cat_title('', false) . $sep ;
    if (is_day())
        $title = 'Post for the day ' . get_the_date('j F, Y') . $sep . $name;
    if (is_month())
        $title = 'Post for the month ' . get_the_date('F, Y') . $sep . $name;
    if (is_year())
        $title = 'Post for the year ' . get_the_date('Y') . $sep . $name;
    ?>
    <title><?php echo $title; ?></title>

    <link rel="preload" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gelion-Regular.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gelion-Medium.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gelion-Bold.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/AtlasGrotesk-Light.otf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gilroy-Regular.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gilroy-Medium.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gilroy-Bold.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/Gilroy-Heavy.ttf' ?>" as="font"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/fonts/CaslonGraphiqueEF.ttf' ?>" as="font"/>
    <?php wp_head(); ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-184607912-1"></script>

    <!-- CLient Code -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // new config
        gtag('config', 'AW-475298271');
        // old config
        // gtag('config', 'UA-184607912-1');
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
           <img alt="ChefPost Logo" src="<?php echo get_template_directory_uri() . '/assets/images/ic_logo_header.png' ?>"></a>
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
            <div class="d-block d-lg-none">
                <?php
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Contact Info')) :
                endif; ?>
            </div>
            <ul class="navbar-nav ml-auto align-items-center" style="flex-direction: row;" id="guest">
                <li class="nav-item mr-3 mr-lg-0">
                    <a class="nav-link">
                        <button class="hover-ripple theme-button with-background open_login_popup">LOGIN</button>
                    </a>
                </li>
                <li class="nav-item mr-3 mr-lg-0">
                    <a class="nav-link">
                        <button class="hover-ripple theme-button bordered open_signup_popup">SIGN UP</button>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto align-items-center" style="flex-direction: row;" id="user">
                <li class="nav-item mr-3 mr-lg-0">
                    <a class="nav-link" href="<?php echo $url . "get-cart" ?>">
                    <img alt="Cart" src="<?php echo get_template_directory_uri() . '/assets/images/ic_cart.png' ?>">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-lg-0">
                    <a class="nav-link" href="<?php echo $url . "edit-profile" ?>">
                 <img alt="Profile" src="<?php echo get_template_directory_uri() . '/assets/images/ic_profile.png' ?>">
                    </a>
                </li>
            </ul>
            <div class="d-none d-lg-block">
                <?php
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Contact Info')) :
                endif; ?>
            </div>


        </div>
    </nav>
    <input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" id="ip">
</header>
<script>
    document.getElementById("guest").style.display = 'none';
    document.getElementById("user").style.display = 'none';
    let logged_in = localStorage.getItem('logged_in');
    if (logged_in != null && logged_in != "") {
        var formdata = new FormData();
        formdata.append("logged_in", logged_in);
        (async () => {
            const rawResponse = await fetch('<?php echo $url?>api/wordpress/get_login_status', {
                method: 'POST',
                body: formdata
            });
            const content = await rawResponse.json();
            if (content.success) {
                if (content.user) {
                    document.getElementById("guest").style.display = 'none';
                    document.getElementById("user").style.display = 'flex';
                } else {
                    localStorage.removeItem('logged_in');
                    document.getElementById("user").style.display = 'none';
                    document.getElementById("guest").style.display = 'flex';
                }
            } else {
                localStorage.removeItem('logged_in');
                document.getElementById("user").style.display = 'none';
                document.getElementById("guest").style.display = 'flex';
                swal("Error", content.message, "error");
            }
        })();
    } else {
        document.getElementById("user").style.display = 'none';
        document.getElementById("guest").style.display = 'flex';
    }
</script>