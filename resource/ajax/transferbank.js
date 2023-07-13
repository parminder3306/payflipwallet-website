$('document').ready(function() {
    $("#banktransfer-form").validate( {
        rules: {
            payeename: {
                required: true, minlength: 10, maxlength: 20,
            }
            , acnumber: {
                required: true, minlength: 9, number: true,
            }
            , ifsccode: {
                required: true, minlength: 11,
            }
            , amount: {
                required: true, number: true, min: 500, max: 5000,
            }
            ,
        }
        , messages: {
            payeename: {
                required: "Payname is required", minlength: "Payname is invaild", maxlength: "Payname is invaild",
            }
            , acnumber: {
                required: "Account Number is required", number: "Account Number is invaild", minlength: "Account must not be lesser than 9 characters in length.",
            }
            , ifsccode: {
                required: "IFSC Code is required", minlength: "IFSC must be exactly 11 characters in length.",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 500", max: "Amount must be more than 500 to 5000",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#banktransfer-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/transferbank', data: data, dataType:"json", success: function(response) {
                $("#msg").show().delay(2000).fadeOut();
                if(response.status=="success") {
                    setTimeout(' window.location.href = "'+response.url+'"; ', 2000);
                    $("#msg").html(response.msg);
					$("#banktransfer-button").html('<span class="spinner"></span>');
                }
                else if(response.type=="wallet") {
                    $("#msg").html(response.msg);
                }
            }
        }
        );
        return false;
    }
}

);
function showUser(str) {
    if (str.length) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                var res=xmlhttp.responseText;
                var delta=res.split(':');
                document.getElementById("tax").value=delta[0];
                $("#servicetax").html('Fee : &#x20B9;'+delta[0]+'');
            }
        }
        xmlhttp.open("GET", "https://payflipwallet.com/auth/payfliptax?amount="+str+"&src=Bank", true);
        xmlhttp.send();
    }
    else {
        return;
    }
}