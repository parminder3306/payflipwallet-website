/* mobile prepaid Recharge */

$('document').ready(function() {
    $("#addmoney-form").validate( {
        rules: {
            amount: {
                required: true, number: true, min: 10, max: 10000,
            }
            ,
        }
        , messages: {
            amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 10000"
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#addmoney-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/payflipwallet', data: data, dataType:"json", success: function(response) {
                $("#error").show().delay(2000).fadeOut();
                if(response.addmoney=="true") {
                    setTimeout(' window.location.href = "'+response.url+'"; ', 2000);
					$("#addmoney-button").html('<span class="spinner"></span>');
                }
                else if(response.error=="true") {
                    $("#error").html(response.msg);
                }
            }
        }
        );
        return false;
    }
}

);