<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <h5>About Us</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'menu_class' => 'list-inline mb-0',
                    'container' => 'ul',
                ));
                ?>
                <!--                <ul class="list-inline mb-0">-->
                <!--                    <li class="d-block"><a href="{{route('about_us')}}">Our Story</a></li>-->
                <!--                     <li class="d-block"><a href="{{route('blogs')}}">Blogs</a></li> -->
                <!--                    <li class="d-block"><a href="{{route('career')}}">Career</a></li>-->
                <!--                   <li class="d-block"><a href="{{route('press')}}">Press</a></li> -->
                <!--                </ul>-->
            </div>
            <div class="col-md-3 col-6">
                <h5>Support</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'support_menu',
                    'menu_class' => 'list-inline mb-0',
                    'container' => 'ul',
                ));
                ?>
                <ul class="list-inline mb-0">
                    <!--                    <li class="d-block"><a href="{{route('customer_inquiry')}}">Customer Inquiries</a></li>-->
                    <!--                    <li class="d-block"><a href="{{route('faq')}}">FAQ</a></li>-->
                    <!--                     <li class="d-block"><a href="{{route('gift_cards')}}">Gift Cards</a></li> -->
                    <!--                     <li class="d-block"><a href="{{route('affilate_program')}}">Affiliate Program</a></li> -->
                    <!--                    <li class="d-block"><a href="{{route('services')}}">Services</a></li>-->
                    <!--                    <li class="d-block"><a href="{{route('terms_and_conditions')}}">Terms of Service</a></li>-->
                    <!--                    <li class="d-block"><a href="{{route('privacy_policy')}}">Privacy Policy</a></li>-->
                </ul>
            </div>
            <div class="col-md-3 col-12 small-text-center mg-mb">
                <h5>Social Connect</h5>
                <ul class="list-inline mb-4">
                    <li class="mr-4"><a href="https://www.instagram.com/chefpost/" target="_blank"><img
                                    src="{{asset('frontend/images/ic_insta.png')}}"></a></li>
                    <li class="mr-4"><a href="https://www.facebook.com/chefpost-102917058142370" target="_blank"><img
                                    src="{{asset('frontend/images/ic_fb.png')}}"></a></li>
                    <li class="mr-4"><a href="https://www.pinterest.com/Chefpostpins/" target="_blank"><img
                                    src="{{asset('frontend/images/ic_pinterest.svg')}}"></a></li>
                    <li class="mr-4"><a href="https://www.youtube.com/channel/UCT5OHOUo0ScfQO3F8ck9-Pg" target="_blank"><img
                                    src="{{asset('frontend/images/ic_youtube.png')}}"></a></li>
                </ul>
                <ul class="list-inline mb-0">
                    <li class="mr-2"><a href="https://apps.apple.com/us/app/chefpost/id1561131582" target="_blank"><img
                                    style="border-radius: 5px;" width="110"
                                    src="{{asset('frontend/images/AppStore.png')}}"></a></li>
                    <li class="mr-2"><a href="https://play.google.com/store/apps/details?id=com.chefpostuser"
                                        target="_blank"><img width="110" style="border-radius: 5px;"
                                                             src="{{asset('frontend/images/GooglePlay.png')}}"></a></li>
                </ul>
            </div>
            <div class="col-md-3 small-text-center">
                <a class="" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_logo_footer.png' ?>">
                </a>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
<!-- end #footer -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-41JH1G30DC"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-41JH1G30DC');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script type="text/javascript">
    function timePicker(id) {
        var input = document.getElementById(id);

        if (!input) {
            return;
        }

        var timePicker = document.createElement("div");
        timePicker.classList.add("time-picker");
        input.value = "08:30";
        document.getElementById("timePickerValue").value = "08:30";
    @if
        (isset($_GET['time']))
        input.value = "{{$_GET['time']}}";
        document.getElementById("timePickerValue").value = "{{$_GET['time']}}";
    @endif
        //open timepicker
        input.onclick = function () {
            timePicker.classList.toggle("open");

            this.setAttribute("disabled", "disabled");
            timePicker.innerHTML += `
      <div class="set-time">
         <div class="label">
            <a id="plusH" >+</a>
            <input class="set" type="text" id="hour" value="08">
            <a id="minusH">-</a>
         </div>
         <div class="label">
            <a id="plusM">+</a>
            <input class="set" type="text" id="minute" value="30">
            <a id="minusM">-</a>
         </div>
      </div>
      <div id="submitTime">Set time</div>`;
            this.after(timePicker);
            var plusH = document.getElementById("plusH");
            var minusH = document.getElementById("minusH");
            var plusM = document.getElementById("plusM");
            var minusM = document.getElementById("minusM");
            var h = parseInt(document.getElementById("hour").value);
            var m = parseInt(document.getElementById("minute").value);
            //increment hour
            plusH.onclick = function () {
                h = isNaN(h) ? 0 : h;
                if (h === 23) {
                    h = -1;
                }
                h++;
                document.getElementById("hour").value = (h < 10 ? "0" : 0) + h;
            };
            //decrement hour
            minusH.onclick = function () {
                h = isNaN(h) ? 0 : h;
                if (h === 0) {
                    h = 24;
                }
                h--;
                document.getElementById("hour").value = (h < 10 ? "0" : 0) + h;
            };
            //increment hour
            plusM.onclick = function () {
                m = isNaN(m) ? 0 : m;
                if (m === 45) {
                    m = -15;
                }
                m = m + 15;
                document.getElementById("minute").value = (m < 10 ? "0" : 0) + m;
            };
            //decrement hour
            minusM.onclick = function () {
                m = isNaN(m) ? 0 : m;
                if (m === 0) {
                    m = 60;
                }
                m = m - 15;
                document.getElementById("minute").value = (m < 10 ? "0" : 0) + m;
            };

            //submit timepicker
            var submit = document.getElementById("submitTime");
            submit.onclick = function () {
                input.value =
                    document.getElementById("hour").value +
                    ":" +
                    document.getElementById("minute").value;
                input.removeAttribute("disabled");
                timePicker.classList.toggle("open");
                timePicker.innerHTML = "";
                document.getElementById("timePickerValue").value = input.value;
            };
        };
    }

    timePicker("timePicker");

    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: 'today'
    });

    function userLogout() {
        swal({
            title: "Are you sure you want to Logout?",
            text: "Please ensure and then confirm",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#aa1c2c",
            confirmButtonText: "Yes, logout!",
            closeOnConfirm: false
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'GET',
                        url: "{{route('user_logout')}}",
                        dataType: 'JSON',
                        success: function (results) {
                            swal("Done!", results.message, "success");
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        }
                    });
                }
            });
    }

    jQuery("#owl-example-second").owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        // autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        items: 4,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },

            600: {
                items: 2,
                nav: true
            },

            1024: {
                items: 4,
                nav: true
            },

            1366: {
                items: 4,
                nav: true
            }
        }
    });
</script>
<script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('header');
        } else {
            $('header').removeClass('header');
        }
    });
</script>

<script type="text/javascript">
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $("nav").addClass("shrink");
        } else {
            $("nav").removeClass("shrink");
        }
    });
</script>
<script type="text/javascript">
    jQuery("#owl-example").owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        // autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        items: 4,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },

            600: {
                items: 2,
                nav: true
            },

            1024: {
                items: 4,
                nav: true
            },

            1366: {
                items: 4,
                nav: true
            }
        }
    });
</script>
<script type="text/javascript">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
        widgetcode: "9efa4fe90d50d9fabfb603725697f684b67ecdf6586df79cd22883484f9638e7",
        values: {},
        ready: function () {
        }
    };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zoho.com/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
    d.write("<div id='zsiqwidget'></div>");
</script>
<script>(function () {
        var s = document.createElement('script'), e = !document.body ? document.querySelector('head') : document.body;
        s.src = 'https://acsbapp.com/apps/app/dist/js/app.js';
        s.async = true;
        s.onload = function () {
            acsbJS.init({
                statementLink: '',
                footerHtml: 'ACCESSIBILITY',
                hideMobile: false,
                hideTrigger: false,
                language: 'en',
                position: 'right',
                leadColor: '#aa182c',
                triggerColor: '#aa182c',
                triggerRadius: '5px',
                triggerPositionX: 'right',
                triggerPositionY: 'top',
                triggerIcon: 'people',
                triggerSize: 'small',
                triggerOffsetX: 20,
                triggerOffsetY: 20,
                mobile: {
                    triggerSize: 'small',
                    triggerPositionX: 'right',
                    triggerPositionY: 'center',
                    triggerOffsetX: 10,
                    triggerOffsetY: 0,
                    triggerRadius: '5px'
                }
            });
        };
        e.appendChild(s);
    }());</script>
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '260311002478597');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=260311002478597&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>
</html>
