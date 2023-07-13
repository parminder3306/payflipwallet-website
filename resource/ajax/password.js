$('document').ready(function() {
    $("#changepassword-form").validate( {
        rules: {
            oldpassword: {
                required: true, minlength: 6,
            }
            , newpassword: {
                required: true, minlength: 6,
            }
            ,
        }
        , messages: {
            oldpassword: {
                required: "Old Password is required",
            }
            , newpassword: {
                required: "New Password is required",
            }
            ,
        }
        ,
    }
    );
}

);
$('document').ready(function() {
    $("#resetpassword-form").validate( {
        rules: {
            newpassword: {
                required: true, minlength: 6,
            }
            , cpassword: {
                required: true, minlength: 6,
            }
            ,
        }
        , messages: {
            newpassword: {
                required: "New Password is required",
            }
            , cpassword: {
                required: "Confirm Password is required",
            }
            ,
        }
        ,
    }
    );
}

);