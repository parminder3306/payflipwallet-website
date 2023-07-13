$('document').ready(function() {
    $("#sendmoney-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , amount: {
                required: true, minlength: 2, maxlength: 4, number: true,
            }
            , remarks: {
                required: true, minlength: 6, maxlength: 20,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , amount: {
                required: "Amount is required", minlength: "Amount must be more than 10", number: "Enter vaild amount"
            }
            , remarks: {
                required: "Remarks is required"
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    /* Handling login functionality */
    function submitForm() {
        var data=$("#sendmoney-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/sendmoney', data: data, dataType:"json", success: function(response) {
                $("#msg").show().delay(2000).fadeOut();
                if(response.status=="success") {
                    setTimeout(' window.location.href = "'+response.url+'"; ', 2000);
                    $("#msg").html(response.msg);
					$("#sendmoney").html('<span class="spinner"></span>');
                }
                else if(response.type=="wallet") {
                    $("#msg").html(response.msg);
                }
                else if(response.error=="true") {
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
        xmlhttp.open("GET", "https://payflipwallet.com/auth/payfliptax?amount="+str+"&src=Sendmoney", true);
        xmlhttp.send();
    }
    else {
        return;
    }
}