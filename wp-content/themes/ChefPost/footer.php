<?php global $url ?>
<?php include get_template_directory() . '/include/modals.php'; ?>

<footer>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-6 col-md-3 ">
                <h5>About Us</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'menu_class' => 'list-inline mb-0 footer-menu',
                    'container' => 'ul',
                ));
                ?>
                <!--                <ul class="list-inline mb-0">-->
                <!--                    <li class="d-block"><a href="{{route('about_us')}}">Our Story</a></li>-->
<!--                                     <li class="d-block"><a href="{{route('blog')}}">Blog</a></li> -->
                <!--                    <li class="d-block"><a href="{{route('career')}}">Career</a></li>-->
                <!--                   <li class="d-block"><a href="{{route('press')}}">Press</a></li> -->
                <!--                </ul>-->
            </div>
            <div class="col-6 col-md-3 ">
                <h5>Support</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'support_menu',
                    'menu_class' => 'list-inline mb-0 footer-menu',
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
            <div class="col-12 col-md-3  small-text-center mg-mb">
                <h5>Social Connect</h5>
                <ul class="list-inline mb-4">
                    <li class="mr-4"><a href="https://www.instagram.com/chefpost/" target="_blank"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/ic_insta.png' ?>"></a>
                    </li>
                    <li class="mr-4"><a href="https://www.facebook.com/chefpost-102917058142370" target="_blank"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/ic_fb.png' ?>"></a>
                    </li>
                    <li class="mr-4"><a href="https://www.pinterest.com/Chefpostpins/" target="_blank"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/ic_pinterest.svg' ?>"></a>
                    </li>
                    <li class="mr-4"><a href="https://www.youtube.com/channel/UCT5OHOUo0ScfQO3F8ck9-Pg" target="_blank"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/ic_youtube.png' ?>"></a>
                    </li>
                </ul>
                                <ul class="list-inline mb-0">
                                    <li class="mr-2"><a href="https://apps.apple.com/us/app/chefpost/id1561131582" target="_blank"><img
                                                    style="border-radius: 5px;" width="110"
                                                    src="
                <?php echo get_template_directory_uri() . '/assets/images/AppStore.png'?>"></a></li>
                                    <li class="mr-2"><a href="https://play.google.com/store/apps/details?id=com.chefpostuser"
                                                        target="_blank"><img width="110" style="border-radius: 5px;"
                                                                             src="
                <?php echo get_template_directory_uri() . '/assets/images/GooglePlay.png'?>"></a></li>
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
<div class="copyright">
    <p class="mb-0" style=""><span style="font-size: 30px; margin-right: 4px;">&copy; </span>Chefpost <?php echo date("Y"); ?></p>
</div>
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

        // (isset($_GET['time']))
        // input.value = "{{$_GET['time']}}";
        // document.getElementById("timePickerValue").value = "{{$_GET['time']}}";

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
        startDate: 'today',
        autoclose:true
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
    (async () => {
        const rawResponse = await fetch('<?php echo $url?>api/wordpress/get-countries', {
            method: 'GET'
        });
        const content = await rawResponse.json();
        if (content.success == true) {
            var countries_html = '';
            var countries = content.countries;
            for (var i = 0; i < countries.length; i++) {
                countries_html += `<option value="${countries[i].phone_code}" ${countries[i].phone_code == '1' ? 'selected' : ''}>+${countries[i].phone_code}</option>`;
            }
            $('#phone_code').append(countries_html);
        }
    })();

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

    $(document).on('click', '#user-login-form', function (e) {
        e.preventDefault();
        var formdata = new FormData();
        formdata.append("phone_email", $("#user_phone_email_login").val().trim());
        formdata.append("password", $("#user_password").val().trim());
        console.log({formdata1:$("#user_phone_email_login").val().trim()})
        if(!$("#user_phone_email_login").val().trim()){
            console.log('Error');
            let newlabel = document.getElementById("user_phone_email_login_error");
            newlabel.innerHTML="Please Enter the Email.";
            if(!$("#user_password").val().trim()){
            console.log('Error');
            let newlabel1 = document.getElementById("user_password_error");
            newlabel1.innerHTML="Please Enter the Password";
            }
            return false
        }
        if(!$("#user_password").val().trim()){
            console.log('Error');
            let newlabel1 = document.getElementById("user_password_error");
            newlabel1.innerHTML="Please Enter the Password";
            return false
        }
        console.log({formdata});
        (async () => {
            const rawResponse = await fetch('<?php echo $url?>api/wordpress/user_login', {
                method: 'POST',
                body: formdata
            });
            const content = await rawResponse.json();
            console.log(content);
            if (content.success) {
                console.log("ABC")
                $('#myModal').modal('hide');
                $("#user_phone_email_login").val('')
                $("#user_password").val('')
                swal("Success", "User logged in successfully.", "success");
                localStorage.setItem("logged_in", content.token)
                window.location.replace(`<?php echo $url?>api_login/${content.user_id}/${content.token}`);
            } else {
                $('#myModal').modal('hide');
                $("#user_phone_email_login").val('')
                $("#user_password").val('')
                swal("Error", "Invalid credentials.", "error");
            }
        })();
    })

    $(document).on('click', '#signup_button', async function (e) {
        var formdata = new FormData();
        formdata.append("first_name", $("#first_name").val().trim());
        formdata.append("last_name", $("#last_name").val().trim());
        $("#user_email_address").val() && formdata.append("email", $("#user_email_address").val().trim());
        formdata.append("phone_code", $("#phone_code").val().trim());
        formdata.append("phone", $("#user_phone_number").val().trim());
        formdata.append("password", $("#register_password").val().trim());
            let value= {email:$("#user_email_address").val().trim()};
            try {
                let response= await fetch(base_url + 'api/wordpress/user/email/check',{
                method: 'POST',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                body: JSON.stringify(value)
            }).then(response=>response.json()).then(data => {
                let newlabel = document.getElementById("user_email_address_error_signup");
                if(!data.success){
                    newlabel.innerHTML = data.msg;
                    return false;
                }
                if(data.success ==1){
                    newlabel.innerHTML="";
                }
            });
            } catch (error) {
                console.log({error})
                return false;
            }
            
        
        (async () => {
            const rawResponse = await fetch('<?php echo $url?>api/wordpress/user_signup', {
                method: 'POST',
                body: formdata
            });
            const content = await rawResponse.json();
            if (content.success) {
                $('#myModal').modal('hide');
                $("#first_name").val('')
                $("#last_name").val('')
                $("#user_email_address").val('')
                $("#phone_code").val('')
                $("#user_phone_number").val('')
                $("#register_password").val('')
                swal("An email verification link has been sent to your email account", "Please click on the link that has been sent to your email account to verify your email", "success");
            }
        })();
    })

    $('#testimonial-carousel').owlCarousel({
        margin: 16,
        nav: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=260311002478597&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>
</html>
