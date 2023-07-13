$('document').ready(function() {
    $("#prepaid-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#prepaid-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/mobile-prepaid.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout('window.location.href = "https://payflipwallet.com/mobile-recharge"; ', 2000);
					$("#prepaid_button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);
$('document').ready(function() {
    $("#prepaid-index-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#prepaid-index-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/mobile-prepaid.php', data: data, success: function(data) {
                if(data=="ok") {
					setTimeout('window.location = "https://payflipwallet.com/mobile-recharge";',2000);
                    document.getElementById("prepaid").style.display="block";
					$("#prepaid-button").html('<span class="spinnerindex"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* mobile postpaid Recharge */

$('document').ready(function() {
    $("#postpaid-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#postpaid-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/mobile-postpaid.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/mobile-postpaid-payment"; ', 2000);
					$("#postpaid-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);
$('document').ready(function() {
    $("#postpaid-index-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#postpaid-index-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/mobile-postpaid.php', data: data, success: function(data) {
                if(data=="ok") {
					setTimeout('window.location = "https://payflipwallet.com/mobile-postpaid-payment";',2000);
                    document.getElementById("postpaid").style.display="block";
					$("#postpaid-button").html('<span class="spinnerindex"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* datacard prepaid Recharge */

$('document').ready(function() {
    $("#datacard-prepaid").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#datacard-prepaid").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/datacard-prepaid.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/datacard-recharge"; ', 2000);
					$("#datacard-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* datacard postpaid Recharge */

$('document').ready(function() {
    $("#datacard-postpaid").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 10, max: 3000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 10", max: "Amount must be more than 10 to 3000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#datacard-postpaid").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/datacard-postpaid.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/datacard-postpaid-payment"; ', 2000);
					$("#datacard-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* dth Recharge */

$('document').ready(function() {
    $("#dth-form").validate( {
        rules: {
            number: {
                required: true, minlength: 6, maxlength: 12, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 100, max: 5000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            number: {
                required: "DTH Number is required", minlength: "Enter 12 digit DTH Number", number: "Enter vaild DTH Number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 100", max: "Amount must be more than 100 to 5000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#dth-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/dth.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/dth-recharge"; ', 2000);
					$("#dth-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* broadband billpay */

$('document').ready(function() {
    $("#broadband-form").validate( {
        rules: {
            number: {
                required: true, minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 100, max: 5000,
            }
            , acnumber: {
                required: true, minlength: 4, maxlength: 16,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            number: {
                required: "Phone Number is required", minlength: "Enter 10 digit Phone Number", number: "Enter vaild Phone Number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 100", max: "Amount must be more than 100 to 5000",
            }
            , acnumber: {
                required: "Account Number is required", minlength: "Account Number must be minimum 4 to 16 characters",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#broadband-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/broadband-bill.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/broadband-bill-payment"; ', 2000);
					$("#broadband-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* Landline billpay */

$('document').ready(function() {
    $("#landline-form").validate( {
        rules: {
            number: {
                required: true, minlength: 10, maxlength: 10, number: true,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 100, max: 5000,
            }
            , acnumber: {
                required: true, minlength: 4, maxlength: 16,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            number: {
                required: "Phone Number is required", minlength: "Enter 10 digit Phone Number", number: "Enter vaild Phone Number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 100", max: "Amount must be more than 100 to 5000",
            }
            , acnumber: {
                required: "Account Number is required", minlength: "Account Number must be minimum 4 to 16 characters",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#landline-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/landline-bill.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/landline-bill-payment"; ', 2000);
					$("#landline-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);

/* Electricity billpay */

$('document').ready(function() {
    $("#electricity-form").validate( {
        rules: {
            acnumber: {
                required: true, minlength: 10, maxlength: 16,
            }
            , operator: {
                required: true,
            }
            , amount: {
                required: true, number: true, min: 100, max: 10000,
            }
            , promocode: {
                minlength: 4, maxlength: 12,
            }
            ,
        }
        , messages: {
            acnumber: {
                required: "Account Number is required", minlength: "Enter 16 digit Account Number", number: "Enter vaild Account Number",
            }
            , operator: {
                required: "Operator is required",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 100", max: "Amount must be more than 100 to 10000",
            }
            , promocode: {
                required: "Promocode is required", minlength: "Promocode is invaild", maxlength: "Promocode is invaild",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#electricity-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/electricity-bill.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/electricity-bill-payment"; ', 2000);
					$("#electricity-button").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);
$('document').ready(function() {
    $("#googleplay-form").validate( {
        rules: {
            mobile: {
                required: true, range: [7000000001, 9999999999], minlength: 10, maxlength: 10, number: true,
            }
            , amount: {
                required: true, number: true, min: 100, max: 1500,
            }
            ,
        }
        , messages: {
            mobile: {
                required: "Mobile Number is required", minlength: "Enter 10 digit mobile number", number: "Enter vaild mobile number", range: "Enter vaild mobile number",
            }
            , amount: {
                required: "Amount is required", number: "Amount is invaild", min: "Amount must be more than 100", max: "Amount must be more than 100 to 1500",
            }
            ,
        }
        , focusInvalid: false, submitHandler: submitForm
    }
    );
    function submitForm() {
        var data=$("#googleplay-form").serialize();
        $.ajax( {
            type: 'POST', url: 'https://payflipwallet.com/auth/googleplay.php', data: data, success: function(data) {
                if(data=="ok") {
                    setTimeout(' window.location.href = "https://payflipwallet.com/googleplay-recharge"; ', 2000);
					$("#google-play").html('<span class="spinner"></span>');
                }
                else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html('<div class="msgred"> '+data+' </div>');
                        $("#error").show().delay(3000).fadeOut();
                    }
                    );
                }
            }
        }
        );
        return false;
    }
}

);