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
    

    $("#adminLogin").validate({
        rules: {
            email: "required",
            password: "required"
        },
        messages: {
            email: "Please enter email id",
            password: "Please enter your password"
        },
        submitHandler: function (form) {
            form.submit();
        }
    })     
    
    $("#addLoan").validate({
        rules:{
            projectName:"required",
            ltv :"required",
            apr :"required",
            maturityDate :"required",
            penalty :"required",
            agent :"required",
            exitTerm :"required",
            purpose :"required",
            location :"required",
            address :"required",
            loanAmount :{
                required: true,
                number: true
            },
            term :"required",
            grossApr :"required",
            date :"required",
            closingDate :"required",
            agentUrl :"required",
            security :"required"
        },
        messages:{
            projectName:"Please enter Project Name",
            ltv :"Please enter LTV ",
            apr :"Please enter APR",
            maturityDate :"Please enter Maturity date",
            penalty :"Please enter penalty",
            agent :"Please enter Agent",
            exitTerm :"Please enter Exit Terms",
            purpose :"Please enter Purpose",
            location :"Please enter Location",
            address :"Please enter addreaa",
            loanAmount :{
                required :"Please enter Loan Amount",
                number :"Please enter digits only"
            },
            term :"Please enter Terms",
            grossApr :"Please enter Gross APR",
            date :"Please enter date",
            closingDate :"Please enter Closing Date",
            agentUrl :"Please enter agent URL",
            security :"Please enter security",
            state: {
                required :"Please enter State"
            },
            city: {
                required :"Please enter city"
            },
            image: {
                required :"Please select image"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    })
})
