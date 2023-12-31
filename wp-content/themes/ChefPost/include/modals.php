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
    #user_email_address_error_signup{
        display: block !important;
    }
</style>
<div class="modal fade login" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div data-dismiss="modal"
                     style="display: inline;cursor: pointer;position: absolute;top: 8px;right: 15px;z-index: 2;">
                    <i class="fa fa-times fa-lg"></i>
                </div>
                <div class="row">
                    <div class="d-none d-lg-flex col-lg-6">
                        <div class="figBlock">
                            <img class="img-fluid full-width rounded-image" style="height: 100%;"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/popup-image.png' ?>"
                                 alt="img"/>
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
                                <form class="mt-4 pt-4" name="user-login-form1" id="user-login-form1">
                                    <label>
                                        <p class="label-txt">Email</p>
                                        <input type="text" name="phone_email" id="user_phone_email_login" onfocusout="onFocusChangeHandlerLogin(this)"
                                               class="input" placeholder="xyz@mail.com">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                        <label for="user_phone_email_login" id="user_phone_email_login_error" class="error"></label>
                                    </label>
                                    <label>
                                        <p class="label-txt">Password</p>
                                        <input type="password" class="input" name="password" id="user_password"
                                               placeholder="******">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                        <label for="user_password" id="user_password_error" class="error"></label>
                                    </label>
                                    <div class="row mb-4">
                                        <div class="col-md-6 text-left">
                                            <a class="theme-color" href="<?php echo $url ?>guest_bookings">Get Guest
                                                Bookings</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a class="theme-color" href="" data-toggle="modal"
                                               data-target="#myModal1">Forgot Password ?</a>
                                        </div>
                                    </div>
                                    <button id="user-login-form"
                                            class="w-100 theme-button with-background mb-2 hover-ripple mt-5"
                                            type="submit">LOGIN
                                    </button>
                                    <small class="d-block mb-2 text-center">Or</small>
                                    <div class="form-row">
                                        <div class="col-lg-12 mb-3">
                                            <a href="#" onclick="googleLogin()"
                                               data-plugin="nsl" data-action="connect" data-redirect="current"
                                               data-provider="google" data-popupwidth="600" data-popupheight="600">
                                                <button type="button" class="full-width hover-ripple facebook-btn"
                                                        style="background-color: #4285F4;">
                                                    Sign In with Google
                                                </button>
                                            </a>
                                            <br>
                                            <br>
                                            <a class="mt-3" href="#" onclick="FacebookLogin()"
                                               data-plugin="nsl" data-action="connect" data-redirect="current"
                                               data-provider="facebook" data-popupwidth="600" data-popupheight="600">
                                                <button type="button" class="full-width hover-ripple facebook-btn"
                                                        style="background-color: #3B5998;">
                                                    Sign In with Facebook
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="registerTab">
                                    <form id="user-signup-form" name="user-signup-form" >

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
    
                                        <label class="mt-3" id="parentDiv_email" >
                                            <p class="label-txt">Email Address</p>
                                            <input type="email" class="input" placeholder="xyz@mail.com" name="email" onblur="validationFocusHandlerEmail(this)"
                                                   id="user_email_address">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                            <label style="display: block !important;" for="email" id="user_email_address_error_signup" class="error"></label>

                                        </label>
                                        <label>
                                            <p class="label-txt">Phone Number</p>
                                            <select class="wd-30 number-box-in" name="phone_code" id="phone_code">
                                                //echo do_shortcode("[show-countries-codes]"); ?>
                                            </select>
                                            <div class="wd-70">
                                                <input type="tel" class="input" name="phone" id="user_phone_number"
                                                placeholder="(123) 456 - 7890">
                                                    <!-- onfocusout="validationFocusHandlerPhone(this)" -->
                                                <div class="line-box">
                                                    <div class="line "></div>
                                                </div>
                                            </div>
                                            <label for="user_phone_number" id="user_phone_number_error" class="error"></label>
                                        </label>
                                        <label>
                                            <p class="label-txt">Password</p>
                                            <input type="password" class="input" placeholder="******" name="password"
                                                   id="register_password">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </label>
                                        <div class="checkbox-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                                   value="1" name="condition_check" checked
                                                   onchange="terms_policy(this)">
                                            <label for="styled-checkbox-1" style="margin: 15px 0px 12px 0;"> <span>By signing up you agree to the <a
                                                            href="<?php echo esc_url(home_url('/terms-of-service')); ?>"
                                                            target="_blank">Terms of use</a> & <a
                                                            href="<?php echo esc_url(home_url('/privacy-policy')); ?>"
                                                            target="_blank">Privacy Policy</a></span></label>
                                        </div>
                                        <button class="w-100 theme-button with-background mb-2 hover-ripple"
                                                type="submit" id="signup_button">SIGN UP
                                        </button>
                                    </form>
                                    <small class="d-block mb-2 text-center">Or</small>
                                    <div class="form-row">
                                        <div class="col-lg-12 mb-3">
                                            <a href="#" onclick="googleLogin()"
                                               data-plugin="nsl" data-action="connect" data-redirect="current"
                                               data-provider="google" data-popupwidth="600" data-popupheight="600">
                                                <button type="button" class="full-width hover-ripple facebook-btn"
                                                        style="background-color: #4285F4;">
                                                    Sign Up with Google
                                                </button>
                                            </a>
                                            <br>
                                            <br>
                                            <a class="mt-3" href="#" onclick="FacebookLogin()"
                                               data-plugin="nsl" data-action="connect" data-redirect="current"
                                               data-provider="facebook" data-popupwidth="600" data-popupheight="600">
                                                <button type="button" class="full-width hover-ripple facebook-btn"
                                                        style="background-color: #3B5998;">
                                                    Sign In with Facebook
                                                </button>
                                            </a>
                                        </div>
                                    </div>
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
                                 src="<?php echo get_template_directory_uri() . '/assets/images/popup-image.png' ?>"
                                 alt="img"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-4 pr-5 pt-5">
                            <h4 class="forgot-pswd-deading mb-4">Forgot Password</h4>
                            <p>Enter your email address to reset your password.</p>
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
                                        type="button" onclick="sendResetPassword()">SUBMIT
                                </button>
                            </div>
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
                                 src="<?php echo get_template_directory_uri() . '/assets/images/popup-image.png' ?>" alt="img"/>
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
                                 src="<?php echo get_template_directory_uri() . '/assets/images/popup-image.png' ?>" alt="img"/>
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
<script>
    function googleLogin() {
        let _token = makeid(45);
        let url = "<?php echo $url ?>?key=wordpress_google_login&token=" + _token
        localStorage.setItem("logged_in", _token)
        window.location.href = url
    }

    function FacebookLogin() {
        let _token = makeid(45);
        let url = "<?php echo $url ?>?key=wordpress_facebook_login&token=" + _token
        localStorage.setItem("logged_in", _token)
        window.location.href = url
    }

    function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
        }
        return result;
    }

    function sendResetPassword() {
        var formdata = new FormData();
        formdata.append("user_phone_email", document.getElementById("user_phone_email").value);
        (async () => {
            const rawResponse = await fetch('<?php echo $url?>api/wordpress/resetPassword', {
                method: 'POST',
                body: formdata
            });
            const content = await rawResponse.json();
            $('#myModal').modal('hide');
            if (content.success) {
                if (content.user) {
                    $('#myModal1').modal('hide');
                    swal("Success", content.message, "success");
                } else {
                    swal("Error", content.message, "error");
                }
            } else {
                swal("Error", content.message, "error");
            }
        })();
    }
    var validationFocusHandlerEmail = async(obj)=>{
        var value={email:obj.value};
        if(obj.value){
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
                // newlabel.innerHTML="";
                if(!data.success){
                    // let newlabel = document.getElementById("user_email_address_error_signup");
                    newlabel.innerHTML = data.msg;
                    return false;
                }
                if(data.success ==1){
                    let newlabel2 = document.getElementById("user_email_address_error_signup");
                    newlabel2.innerHTML="";
                }
            });
        }
        
            // let content = await response.json();

}
var validationFocusHandlerPhone =async(obj)=>{
    let value={phone:obj.value};
        let response= await fetch(base_url + 'api/wordpress/user/phone/check',{
                method: 'POST',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                body: JSON.stringify(value)
            }).then(response=>response.json()).then(data => {
                if(!data.success){
                    let newlabel = document.getElementById("user_phone_number_error");
                    newlabel.innerHTML="";
                    newlabel.innerHTML = data.msg;
                }
                if(data.success){
                    let newlabel = document.getElementById("user_phone_number_error");
                    newlabel.innerHTML="";
                }
            });
}
var onFocusChangeHandlerLogin =async(obj)=>{
    let value={phone_email:obj.value};
        let response= await fetch(base_url + 'api/wordpress/user/email/check/exist',{
                method: 'POST',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                body: JSON.stringify(value)
            }).then(response=>response.json()).then(data => {
                if(!data.success){
                    let newlabel = document.getElementById("user_phone_email_login_error");
                    newlabel.innerHTML="";
                    newlabel.innerHTML = data.msg;
                }
                if(data.success){
                    let newlabel = document.getElementById("user_phone_email_login_error");
                    newlabel.innerHTML="";
                }
            });
}
</script>