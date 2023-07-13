$('document').ready(function() {
    $("#signup-form").validate( {
        rules: {
            name: {
                required: true, minlength: 6, maxlength: 20,
            }
            , mobile: {
                required: true, minlength: 10, maxlength: 10, range: [7000000001, 9999999999], number: true
            }
            , email: {
                required: true, email: true
            }
            , password: {
                required: true, minlength: 6,
            }
            ,
        }
        , messages: {
            name: {
                required: "Enter your Full Name"
            }
            , mobile: {
                required: "Enter your mobile number", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , email: {
                required: "Enter your Email ID"
            }
            , password: {
                required: "Enter  New Password"
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#signup-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/signup', data: data, dataType:"json", success: function(response) {
                $("#error").show().delay(2000).fadeOut();
                if(response.status=="success") {
                    $("#error").html("<div class='msggreen'>Account Create Successfully</div>");
                    setTimeout(' window.location.href = "https://payflipwallet.com/login"; ', 2000);
					$("#signup_button").html('<span class="spinner"></span>');
                }
                else if(response.status=="mobile") {
                    $("#error").html("<div class='msgred'>mobile number already exits</div>");
                }
                else if(response.status=="email") {
                    $("#error").html("<div class='msgred'>email already exits</div>");
                }
                else if(response.status=="error") {
                    $("#error").html("<div class='msgred'>Opps something went wrong</div>");
                }
            }
        }
        );
        return false;
    }
}

);