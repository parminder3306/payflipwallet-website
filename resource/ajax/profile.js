$('document').ready(function() {
    $("#profile-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 6,
                maxlength: 20,
            },
        },
        messages: {
            name: {
                required: "Name is required",
            },
        },
        focusInvalid: false,
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#profile-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'https://payflipwallet.com/auth/profile.php',
            data: data,
            success: function(data) {
                if (data == "ok") {
                    $("#error").html("<div class='msggreen'>" + data + "</div>");
					$("#profile-button").html('<span class="spinner"></span>');
                } else {
                    $("#error").fadeIn(3000, function() {
                        $("#error").html(data);
                        setTimeout(' window.location.href = ""; ', 3000);
                    });
                }
            }
        });
        return false;
    }
});