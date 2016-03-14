$(function () {
    $("#user_registration").validate({
        rules: {
            username: "required",
            password: {
                minlength: 5
            },
            firstname: "required",
            address: "required",
            account: "required",
            email: {
                required: true,
                email: true
            },
            confirm_password: {
                equalTo: "#password"
            },
            lastname: "required",
            city: "required",
            zipcode: "required",
            mobile_number: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            username: "Please enter Username",
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
            address: "Please enter address",
            account: "Please enter account type",
            zipcode: "Please enter Zipcode",
            state: {
                required: "Please select State",
            },
            city: {
                required: "Please select City",
            },
            mobile_number: {
                required: "Please enter contact number",
                minlength: "Your contact number should contain 10 digits",
                maxlength: "Your contact number should contain 10 digits",
                number: "Contact numbers should contain only digits"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }

    });
});
