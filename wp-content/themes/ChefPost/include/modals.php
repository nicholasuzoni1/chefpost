<style>
    .error {
        color: red;
        font-size: 14px;
        margin: 2px 5px 0px 0px !important;
    }

    /* .grecaptcha-badge {
       visibility: hidden;
    } */

    #user_phone_email_login-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #user_password-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #name-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #first_name-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #last_name-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #user_email_address-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #user_phone_number-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #password-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #new_password_field-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #confirm_password_field-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #condition_check-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #register_password-error {
        position: absolute;
        top: 37px;
        font-size: 12px;
    }

    #partitioned {
        padding-left: 22px;
        letter-spacing: 42px;
        border: 0;
        background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
        background-position: bottom;
        background-size: 50px 1px;
        background-repeat: repeat-x;
        background-position-x: 43px;
        width: 205px;
    }
</style>
<div class="modal fade login" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="d-none d-lg-flex col-lg-6">
                        <div class="figBlock">
                            <img class="img-fluid full-width rounded-image" style="height: 100%;"
                                 src="{{asset('frontend/images/popup-image.png')}}" alt="img"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="px-3 px-lg-0 pr-lg-4">
                            <div class="popupLink mt-4">
                                <ul class="nav nav-tabs border-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#loginTab">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#registerTab">Sign Up</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane active" id="loginTab">
                                    <label>
                                        <p class="label-txt">Email</p>
                                        <input type="text" name="phone_email" id="user_phone_email_login"
                                               class="input" placeholder="xyz@mail.com">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <label>
                                        <p class="label-txt">Password</p>
                                        <input type="password" class="input" name="password" id="user_password"
                                               placeholder="******">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <div class="row mb-4">
                                        <div class="col-md-12 text-right">
                                            <a class="theme-color" href="" data-toggle="modal"
                                               data-target="#myModal1">Forgot Password ?</a>
                                        </div>
                                    </div>
                                    <button id="user-login-form" class="w-100 theme-button with-background mb-2 hover-ripple mt-5"
                                            type="submit">LOGIN
                                    </button>
<!--                                    <small class="d-block mb-2 text-center">Or</small>-->
<!--                                    <div class="form-row">-->
<!--                                        <div class="col-lg-6 mb-3">-->
<!--                                            <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=837754193815119&kid_directed_site=0&app_id=837754193815119&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv3.3%2Fdialog%2Foauth%3Fclient_id%3D837754193815119%26redirect_uri%3Dhttp%253A%252F%252Flocalhost%253A8000%252Ffb_callback%26scope%3Demail%26response_type%3Dcode%26state%3Dg5Wk2daPLC9WDw0GcCzMgaDoPj4CwtABYfFc7icr%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D770fb918-b89b-4988-b5bf-21a889011dca%26tp%3Dunspecified&cancel_url=http%3A%2F%2Flocalhost%3A8000%2Ffb_callback%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dg5Wk2daPLC9WDw0GcCzMgaDoPj4CwtABYfFc7icr%23_%3D_&display=page&locale=ur_PK&pl_dbl=0">-->
<!--                                                <button type="button" class="full-width hover-ripple facebook-btn">-->
<!--                                                    Login with Facebook-->
<!--                                                </button>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-6 mb-3">-->
<!--                                            <a href="http://localhost/chef-post/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">-->
<!--                                                <button type="button" class="full-width hover-ripple facebook-btn"-->
<!--                                                        style="background-color: #4285F4;">-->
<!--                                                    Login with Google-->
<!--                                                </button>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                                <div class="tab-pane fade" id="registerTab">

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <label>
                                                <p class="label-txt">First Name</p>
                                                <input type="text" class="input" name="first_name" id="first_name">
                                                <div class="line-box">
                                                    <div class="line"></div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <label>
                                                <p class="label-txt">Last Name</p>
                                                <input type="text" class="input" name="last_name" id="last_name">
                                                <div class="line-box">
                                                    <div class="line"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <label class="mt-3">
                                        <p class="label-txt">Email Address</p>
                                        <input type="email" class="input" placeholder="xyz@mail.com" name="email"
                                               id="user_email_address">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <label>
                                        <p class="label-txt">Phone Number</p>
                                        <select class="wd-30 number-box-in" name="phone_code" id="phone_code">
<!--                                            --><?php //echo do_shortcode("[show-countries-codes]"); ?>
                                        </select>
                                        <div class="wd-70">
                                            <input type="tel" class="input" name="phone" id="user_phone_number"
                                                   placeholder="(123) 456 - 7890">
                                            <div class="line-box">
                                                <div class="line "></div>
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <p class="label-txt">Password</p>
                                        <input type="password" class="input" placeholder="******" name="password"
                                               id="register_password">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <!-- <label> -->
                                    <div class="checkbox-block">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                               value="1" name="condition_check" checked
                                               onchange="terms_policy(this)">
                                        <label for="styled-checkbox-1" style="margin: 15px 0px 12px 0;"> <span>By signing up you agree to the <a
                                                        href="{{route('terms_and_conditions')}}" target="_blank">Terms of use</a> & <a
                                                        href="{{route('privacy_policy')}}" target="_blank">Privacy Policy</a></span></label>
                                    </div>
                                    <!-- </label> -->
                                    <button class="w-100 theme-button with-background mb-2 hover-ripple"
                                            type="submit" id="signup_button">SIGN UP
                                    </button>
<!--                                        <small class="d-block mb-2 text-center">Or</small>-->
<!--                                        <div class="form-row">-->
<!--                                            <div class="col-lg-6 mb-3">-->
<!--                                                <a href="{{route('fb_redirect')}}">-->
<!--                                                    <button type="button" class="full-width hover-ripple facebook-btn">-->
<!--                                                        {{--<img style="    margin-right: 15px;"-->
<!--                                                                 src="{{asset('user/images/facebook_white.svg')}}">--}}-->
<!--                                                        Login with Facebook-->
<!--                                                    </button>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            <div class="col-lg-6 mb-3">-->
<!--                                                <a href="{{route('google_redirect')}}">-->
<!--                                                    <button type="button" class="full-width hover-ripple facebook-btn"-->
<!--                                                            style="background-color: #4285F4;">-->
<!--                                                        {{--<img style="    margin-right: 15px;"-->
<!--                                                                 src="{{asset('user/images/facebook_white.svg')}}">--}}-->
<!--                                                        Login with Google-->
<!--                                                    </button>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Forgot password -->
<div class="modal fade login" id="myModal1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-md-6 p-0 d-none d-sm-block">
                        <div class="figBlock">
                            <img class="img-fluid rounded-image full-width"
                                 src="{{asset('frontend/images/popup-image.png')}}" alt="img"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-4 pr-5 pt-5">
                            <h4 class="forgot-pswd-deading mb-4">Forgot Password</h4>
                            <p>Enter your email address to reset your password.</p>
                            <form class="mt-3" method="post" name="forgot_password_form" id="forgot_password_form"
                                  action="{{route('forgot-password')}}">
                                <div class="login-form">
                                    <!-- <input id="partitioned" type="text" maxlength="4"> -->
                                    <ul class="list-inline">
                                        <!-- <li class="d-inline-block mr-3">
                                          <input type="radio" id="user_email" name="phone_email" value="email" checked="" onchange="change_input_type('email','your.email@email.com')">
                                          <label for="user_email">Email Id
                                        </li>
                                        <li class="d-inline-block mr-3">
                                          <input type="radio" id="user_phone" name="phone_email" value="phone" onchange="change_input_type('number','1234567890')">
                                          <label for="user_phone">Phone number</label>
                                        </li> -->
                                    </ul>
                                    <input type="hidden" id="user_email" name="phone_email" value="email">
                                </div>
                                <label>
                                    <p class="label-txt">Email Address</p>
                                    <input type="email" name="user_phone_email" id='user_phone_email' class="input"
                                           placeholder="your.email@email.com" required>
                                    <div class="line-box">
                                        <div class="line"></div>
                                    </div>
                                </label>

                                <div class="pt-4">
                                    <button class="w-100 theme-button with-background mb-2 hover-ripple mt-5"
                                            type="button" onclick="checKEmailOrOtp()">SUBMIT
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- OTP -->
<!-- Forgot password -->
<div class="modal fade login" id="myModal2">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-md-6 p-0 d-none d-sm-block">
                        <div class="figBlock">
                            <img class="img-fluid rounded-image full-width"
                                 src="{{asset('frontend/images/popup-image.png')}}" alt="img"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-4 pr-5 pt-5">
                            <h4 class="forgot-pswd-deading mb-4">Enter OTP</h4>
                            <p>OTP sent to your registered mobile number +<span id="user_phone_code">91</span> <span
                                        id="user_phone_number">876543219</span></p>
                            <form class="mt-3" method="post" action="#">
                                <input type="hidden" value="" name="user-phone" id="user_phone_phone">
                                <div class="login-form">
                                </div>
                                <div class="row enter-otp">
                                    <div class="col-md-3">
                                        <label>
                                            <input type="text" class="input" placeholder="" minlength="1" maxlength="1"
                                                   name="first_otp" id="first_otp" required>
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="text" class="input" placeholder="" minlength="1" maxlength="1"
                                                   name="second_otp" id="second_otp" required>
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="text" class="input" placeholder="" minlength="1" maxlength="1"
                                                   name="third_otp" id="third_otp" required>
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="text" class="input" placeholder="" minlength="1" maxlength="1"
                                                   name="fourth_otp" id="fourth_otp" required>
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <button class="w-100 theme-button with-background mb-2 hover-ripple mt-5"
                                            type="button" onclick="checkOtp()">SUBMIT
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Reset Password -->
<!-- Forgot password -->
<div class="modal fade login" id="myModal3">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-md-6 p-0 d-none d-sm-block">
                        <div class="figBlock">
                            <img class="img-fluid rounded-image full-width"
                                 src="{{asset('frontend/images/popup-image.png')}}" alt="img"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="change-password">
                            <div class="pl-4 pr-5 pt-5">
                                <h4 class="forgot-pswd-deading mb-4">Reset Password</h4>
                                <form class="mt-4 p-4" method="post" action="#" name="reset-password-form"
                                      id="reset-password-form">
                                    <input type="hidden" name="user_phone" id="user_phone_phone_phone">
                                    <label>
                                        <p class="label-txt">New Password</p>
                                        <input type="password" class="input" name="new_password" id="new_password_field"
                                               placeholder="xxxxxxxxxxx" required>
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <label>
                                        <p class="label-txt">Re-enter Password</p>
                                        <input type="password" class="input" name="confirm_password"
                                               id="confirm_password_field" placeholder="xxxxxxxxxxx" required>
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </label>
                                    <div class="text-center">
                                        <button class="theme-button with-background hover-ripple mt-4 pl-5 pr-5"
                                                type="button" onclick="resetPassword()">SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>

<script type="text/javascript">

</script>
