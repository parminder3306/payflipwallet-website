$('document').ready(function() {
    $("#forget-form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            email: {
                required: "Email is required",
            },
        },
        focusInvalid: false,
        submitHandler: submitForm
    });
    /* Handling login functionality */
    function submitForm() {
        var data = $("#forget-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'https://payflipwallet.com/auth/forget',
            data: data,
            success: function(response) {
                $("#msg").html(response);
                $("#msg").show().delay(3000).fadeOut();
            }
        });
        return false;
    }
});