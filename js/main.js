$(function () {
    $("#store_name").blur(function (e) {
        const input = $(this).val();

        // use custom validation if required
        var regex = /^[a-zA-Z0-9\s\-]+$/;

        if (!regex.test(input)) {
            $(".error").text("Invalid store name");
            $(".error").show();
        } else {
            $(".error").hide();
            $.ajax({
                type: "POST",
                url: "/api/store",
                data: {
                    name: input
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.statusCode == 200) {
                        $(".success").text("Store updated successful");
                        $(".success").show();
                    }
                    else {
                        $(".error").text(response.error);
                        $(".error").show();
                    }
                },
                error: function (response) {
                    $(".error").text("Network or server error");
                    $(".error").show();
                }
            });
        }
    });
});