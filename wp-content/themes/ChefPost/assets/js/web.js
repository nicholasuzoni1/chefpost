let base_url = window.location.href;
if (base_url.includes('localhost') || base_url.includes('127.0.0.1')) base_url = 'http://localhost:8000/';
else if (base_url.includes('dev')) base_url = 'https://dev.chefpost.com/';
else base_url = 'https://booking.chefpost.com/';
$("ul.sub-menu").parent().addClass("dropdown");
$("ul.sub-menu").addClass("dropdown-menu");
$("ul#menu-header li.dropdown a").addClass("dropdown-toggle");
$("ul.sub-menu li a").removeClass("dropdown-toggle");
$('.navbar .dropdown-toggle').append('');
$('a.dropdown-toggle').attr('data-toggle', 'dropdown');

$('#search_input').keyup(delay(function (e) {
    console.log('Time elapsed!', this.value);
    findRelatedService(this);
}, 1000));

function delay(callback, ms) {
    var timer = 0;
    console.log(timer);
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}

function findRelatedService(obj) {
    $('#relatedSearchProduct').css('display', 'block');
    var search = $(obj).val();
    if (!search) {
        $('#relatedSearchProduct').css('display', 'none');
        return false;
    }
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: "{{route('get_related_search')}}",
        data: {
            _token: CSRF_TOKEN,
            search: search,
        },
        async: false,
        dataType: 'JSON',
        success: function (results) {
            if (results.success == true) {
                var productList = '';
                console.log(results.related_search);
                var related = results.related_search;
                for (var i = 0; i < related.length; i++) {
                    productList += "<a onclick='fillSearchProductValue(this)' data-value='" + related[i] + "'><span class='product_search_name'>" + related[i] + "</span></a>";
                }
                $('#relatedSearchProduct').html(productList);
            }
        }
    });
}

function fillSearchProductValue(obj) {
    var search = $(obj).data('value');
    $('#search_input').val(search);
    $('#relatedSearchProduct').css('display', 'none');
    $('#relatedSearchProduct').html('');
};


$(".toggle-password-main").click(function () {
    console.log('clcikkeddddd');
});
checkSuccess = function (response) {
    switch (jQuery.parseJSON(response).statuscode) {
        case 200:
            return true;
        case 400:
            return false;
    }
    return true;
};


//validate login form
$("#signup-form").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true
        },
        password: {
            required: true
        },
        password_confirmation: {
            required: true,
            equalTo: "#password-field"
        },
        firstname: {
            required: true
        },
        lastname: {
            required: true
        },
        city: {
            required: true
        },
        postal: {
            required: true
        },
        address: {
            required: true
        }
    },
    messages: {
        password_confirmation: {
            equalTo: 'Passwords are not same'
        },
    },
    submitHandler: function () {
        $("#signup-form").submit();
    }
});

//validate Signup form
$("#user-signup-form").validate({
    rules: {
        first_name: {
            required: true
        },
        last_name: {
            required: true
        },
        // condition_check:{
        //     required: true
        // },
        email: {
            required: true,
            email: true,
            remote: {
                url: '/user/email/check',
                type: "POST",
                cache: false,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    email: function () {
                        return $("#user_email_address").val();
                    }
                },
                dataFilter: function (response) {
                    return checkSuccess(response);
                }
            }
        },
        phone: {
            required: true,
            // minlength : 6,
            // maxlength : 15,
            remote: {
                url: '/user/phone/check',
                type: "POST",
                cache: false,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    phone: function () {
                        return $("#user_phone_number").val();
                    }
                },
                dataFilter: function (response) {
                    return checkSuccess(response);
                }
            }

        },
        password: {
            required: true,
            minlength: 6,
            maxlength: 15,
        },
    },
    messages: {
        email: {
            remote: 'This Email address is already registered with us',
            email: 'Please enter a valid email'
        },
        phone: {
            remote: 'This phone number is already registered with us',
            // minlength : 'Please enter a valid phone number.',
            // maxlength : 'Please enter a valid phone number.'
        },
        password: {
            minlength: 'Password should be of min. 6 characters',
            maxlength: 'Password should be of max. 15 characters'
        }
    },
});


//validate Signup form
$("#user-login-form").validate({
    rules: {
        phone_email: {
            required: true,
            remote: {
                url: '/user/email/check/exist',
                type: "POST",
                cache: false,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    phone_email: function () {
                        return $("#user_phone_email_login").val();
                    }
                },
                dataFilter: function (response) {
                    return checkSuccess(response);
                }
            }
        },
        password: {
            required: true,
            minlength: 6,
            maxlength: 15,
            remote: {
                url: '/user/password/check',
                type: "POST",
                cache: false,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    phone_email: function () {
                        return $("#user_phone_email_login").val();
                    },
                    password: function () {
                        return $("#user_password").val();
                    }
                },
                dataFilter: function (response) {
                    return checkSuccess(response);
                }
            }
        },
    },
    messages: {
        phone_email: {
            remote: "User doesn't exists."
        },
        password: {
            remote: "Enter correct password.",
            minlength: 'Password should be of min. 6 characters',
            maxlength: 'Password should be of max. 15 characters'
        }
    },
});


//validate change password form
$("#change-password-form").validate({
    rules: {
        password: {
            required: true
        },
        new_password: {
            required: true,
            minlength: 6,
            maxlength: 15
        },
        confirm_password: {
            required: true,
            equalTo: "#new_password"
        },
    },
    messages: {
        confirm_password: {
            equalTo: 'Passwords do not match'
        }
    },
});

//validate reset password form
$("#reset-password-email-form").validate({
    rules: {
        new_password: {
            required: true,
            minlength: 6,
            maxlength: 15
        },
        confirm_password: {
            required: true,
            equalTo: "#new_password_email"
        },
    },
    messages: {
        confirm_password: {
            equalTo: 'Passwords do not match'
        }
    },
});
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

function delay(callback, ms) {
    var timer = 0;
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}

function findRelatedService(obj) {
    $('#relatedSearchProduct').css('display', 'block');
    var search = $(obj).val();
    if (!search) {
        $('#relatedSearchProduct').css('display', 'none');
        return false;
    }
    var formdata = new FormData();
    formdata.append("search", search);

    (async () => {
        const rawResponse = await fetch(base_url + 'api/wordpress/search', {
            method: 'POST',
            body: formdata
        });
        const content = await rawResponse.json();
        if (content.success == true) {
            var productList = '';
            var related = content.related_search;
            for (var i = 0; i < related.length; i++) {
                productList += "<a onclick='fillSearchProductValue(this)' data-value='" + related[i] + "'><span class='product_search_name'>" + related[i] + "</span></a>";
            }
            $('#relatedSearchProduct').html(productList);
        }
    })();
}

function fillSearchProductValue(obj) {
    var search = $(obj).data('value');
    $('#search_input').val(search);
    $('#relatedSearchProduct').css('display', 'none');
    $('#relatedSearchProduct').html('');
}

var signupFormSubmission = 0;
$(document).on('submit', "#user-signup-form", function (event) {
    if (signupFormSubmission == 0) {
        event.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha.execute("{{env('RECAPTCHA_SITE_KEY')}}", {action: 'user_signup'}).then(function (token) {
                $('#user-signup-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                signupFormSubmission = 1;
                $('#user-signup-form').unbind('submit').submit();
            });
        });
    }
})

const isNumericInput = (event) => {
    const key = event.keyCode;
    return ((key >= 48 && key <= 57) || // Allow number line
        (key >= 96 && key <= 105) // Allow number pad
    );
};

const isModifierKey = (event) => {
    const key = event.keyCode;
    return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
        (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
        (key > 36 && key < 41) || // Allow left, up, right, down
        (
            // Allow Ctrl/Command + A,C,V,X,Z
            (event.ctrlKey === true || event.metaKey === true) &&
            (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
        )
};

const enforceFormat = (event) => {
    // Input must be of a valid number format or a modifier key, and not longer than ten digits
    if (!isNumericInput(event) && !isModifierKey(event)) {
        event.preventDefault();
    }
};

const formatToPhone = (event) => {
    if (isModifierKey(event)) {
        return;
    }

    // I am lazy and don't like to type things more than once
    const target = event.target;
    const input = target.value.replace(/\D/g, '').substring(0, 10); // First ten digits of input only
    const areaCode = input.substring(0, 3);
    const middle = input.substring(3, 6);
    const last = input.substring(6, 10);

    if (input.length > 6) {
        target.value = `(${areaCode}) ${middle} - ${last}`;
    }
    else if (input.length > 3) {
        target.value = `(${areaCode}) ${middle}`;
    }
    else if (input.length > 0) {
        target.value = `(${areaCode}`;
    }
};

const inputElement = document.getElementById('user_phone_number');
if (inputElement != null) {
    inputElement.addEventListener('keydown', enforceFormat);
    inputElement.addEventListener('keyup', formatToPhone);
}

function change_input_type(type, placeholder) {
    $('#user_phone_email').attr('type', type);
    $('#user_phone_email').attr('placeholder', placeholder);
}

function checKEmailOrOtp() {
    var type = $('input[name="phone_email"]:checked').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var user_phone_email = $('#user_phone_email').val();
    if (!user_phone_email) {
        var value = (type == 'email') ? 'email address' : 'phone number';
        swal("Error!", 'Please enter ' + value, "error");
    }
    console.log(type, CSRF_TOKEN, user_phone_email);
    $.ajax({
        type: 'POST',
        url: "{{route('forgot-password')}}",
        data: {
            _token: CSRF_TOKEN,
            phone_email: type,
            user_phone_email: user_phone_email
        },
        dataType: 'JSON',
        success: function (results) {
            if (results.success == true) {
                if (results.type == 'email') {
                    swal("A Reset password link has been sent to your email account", "Please click on the link that has been sent to your email account to verify your email and create your new password", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
                else {
                    $('#user_phone_code').html(results.user.phone_code);
                    $('#user_phone_number').html(results.user.phone);
                    $('#user_phone_phone').val(results.user.phone);
                    $('#myModal2').modal('show');
                }
            }
            else {
                swal("Error!", results.message, "error");
            }
        }
    });
}

function checkOtp() {
    var first = $('#first_otp').val();
    var second = $('#second_otp').val();
    var third = $('#third_otp').val();
    var fourth = $('#fourth_otp').val();
    var otp = first + "" + second + "" + third + "" + fourth;
    if (!otp) {
        swal("Error!", "Please enter OTP.", "error");
    }
    var phone = $('#user_phone_phone').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: "{{route('check-otp')}}",
        data: {
            _token: CSRF_TOKEN,
            otp: otp,
            phone: phone
        },
        dataType: 'JSON',
        success: function (results) {
            if (results.success == true) {
                $('#user_phone_phone_phone').val(results.user.phone);
                $('#myModal3').modal('show');
            }
            else {
                swal("Error!", results.message, "error");
            }
        }
    });
}

function resetPassword() {
    var phone = $('#user_phone_phone_phone').val();
    var password = $('#new_password_field').val();
    var c_password = $('#confirm_password_field').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    if (password == c_password) {
        $.ajax({
            type: 'POST',
            url: "{{route('reset-password-post')}}",
            data: {
                _token: CSRF_TOKEN,
                password: password,
                phone: phone
            },
            dataType: 'JSON',
            success: function (results) {
                if (results.success == true) {
                    $('#myModal3').modal('hide');
                    $('#myModal2').modal('hide');
                    $('#myModal').modal('hide');
                    swal("Success!", results.message, "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
                else {
                    swal("Error!", results.message, "error");
                }
            }
        });
    }
    else {
        swal("Error!", 'Password does not match', "error");
    }
}

function terms_policy(obj) {
    if ($(obj).prop("checked") == true) {
        $('#signup_button').prop('disabled', false);
    } else {
        swal('Warning!', 'Please, agree the terms & condition to continue.', 'warning');
        $('#signup_button').prop('disabled', true);
    }
}

$(document).on('click', '.open_login_popup', function () {
    $('#myModal').modal('show');
    $('.nav-tabs a[href="#loginTab"]').tab('show');
})
$(document).on('click', '.open_signup_popup', function () {
    $('#myModal').modal('show');
    $('.nav-tabs a[href="#registerTab"]').tab('show');
})

function submitCustomerForm() {
    var first_name = $('#first_name_field').val();
    var last_name = $('#last_name_field').val();
    var email_address = $('#email_address_field').val();
    var phone = $('#phone_number_field').val();
    var message = $('#message_field').val();
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
    if (!message) {
        swal('warning', 'Please enter your message', 'warning');
        return false;
    }
    var formdata = new FormData();
    formdata.append("first_name", first_name);
    formdata.append("last_name", last_name);
    formdata.append("email", email_address);
    formdata.append("phone", phone);
    formdata.append("message", message);
    (async () => {
        const rawResponse = await fetch(base_url + 'api/wordpress/customer-inquiry', {
            method: 'POST',
            body: formdata
        });
        const results = await rawResponse.json();
        if (results.success === true) {
            swal({
                title: "Done!",
                text: results.message,
                type: "success"
            }).then(function () {
                let base_url = window.location.href;
                if (base_url.includes('localhost') || base_url.includes('127.0.0.1')) base_url = 'http://localhost/chef-post/';
                else if (base_url.includes('dev')) base_url = 'https://dev-wordpress.chefpost.com/';
                else base_url = 'https://wordpress.chefpost.com/';
                window.location = base_url;
            });
        } else {
            swal("Error!", results.message, "error");
        }
    })();
}