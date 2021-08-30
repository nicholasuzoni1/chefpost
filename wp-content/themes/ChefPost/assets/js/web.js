$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: 'today'
});
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
