<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Project Name - Home</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/menu.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    </head>

    <body>

        <div class="header">

            <div class="header_spacer">

                <div class="header_spacer_wrap">

                    <div class="header_spacer_left">

                        <p class="header_spacer_left_phone_number">Project Name</p>
                    </div><!-- header_spacer_left -->

                    <div class="header_spacer_right">

                        <div class="header_spacer_right_left_1">
                            <a href="<?php echo base_url(); ?>"><img class="header_spacer_right_img" src="img/login.png" alt="" /></a>
                            <a class="header_spacer_right_para" href="<?php echo base_url('home/logout'); ?>">Logout</a>
                        </div><!-- header_spacer_right_left_1 -->



                    </div><!-- header_spacer_right -->

                </div><!-- header_spacer_wrap -->

            </div><!-- header_spacer -->


            <div class="main_header">



            </div><!-- main_header -->

        </div><!-- header -->

        <div style="clear:both"></div>

        <br />

        <div class="navigation">
            <ul id="menu">
                <li><a href="#">HOME</a></li>
                <li>
                    <a href="<?php echo base_url('user/myProfile'); ?>">MY PROFILE</a>

                </li>
                <li>
                    <a href="#">LOAN OPPORTUNITY</a>
                </li>
                <li>
                    <a href="#">MY LOAN LIST</a>
                </li>
            </ul>

        </div><!-- navigation -->

        <div style="clear:both"></div>
        <br />
        <div class="wrapper">
            <p class="my_account_heading">User Registration</p>
<?php if ($this->session->flashdata('flashSuccess')): ?>
                <p class='flashMsg flashSuccess'> <?php echo $this->session->flashdata('flashSuccess') ?> </p>
            <?php endif ?>
            <br /><br />
            <form action="<?php echo base_url('user/updateUser'); ?>" name="user_registration" id="user_registration" method="post">
                <table class="form-style-1">
                    <tr><td class="td1"><label>Username</label></td>
                        <td class="td2"><input type="text" name="username" id="username" value="<?php echo $userdata->username; ?>"></td>
                    <td class="td1"><label>First Name</label></td>
                        <td class="td2"><input type="text" name="firstname" id="firstname" value="<?php echo $userdata->firstname; ?>"></td>
                    </tr>
                    <tr><td class="td1"><label>Password</label></td>
                        <td class="td2"><input type="password" name="password" id="password" value=""></td></tr>
                    <tr></tr>
                    <tr><td class="td1"><label>State</label></td>
                        <td class="td2"><select name="state" id="state" class="required" >
                                <option value=''>Select State</option>
                                <option value='Maharashtra' <?php if($userdata->state == 'Maharashtra'){ ?> selected <?php } ?> >Maharashtra</option>
                                <!--<option value='Karnataka' <?php if($userdata->state == 'Karnataka'){ ?> selected <?php } ?>>Karnataka</option>-->
                                <!--<option value='Kerala' <?php if($userdata->state == 'Kerala'){ ?> selected <?php } ?> >Kerala</option>-->
                            </select></td></tr>
                    <tr><td class="td1"><label>Address</label></td>
                        <td class="td2"><input type="text" name="address" id="address" value="<?php echo $userdata->address; ?>"></td>
                    </tr>
                    <tr><td class="td1"><label>Phone Number</label></td>
                        <td class="td2"><input type="text" name="mobile_number" id="mobile_number" value="<?php echo $userdata->mobile_number; ?>"></td></tr>
                    <tr><td class="td1"><label>Account Type</label></td>
                        <td class="td2"><input type="checkbox" name="account" value="Personal" <?php if($userdata->account_type == "Personal") { ?>checked<?php }?> >Personal</input>
                            <input type="checkbox" name="account" value="Corporate" <?php if($userdata->account_type == "Corporate") { ?>checked<?php }?>>Corporate</input>
                            <input type="checkbox" name="account" value="IRA" <?php if($userdata->account_type == "IRA") { ?>checked<?php }?>>IRA</input>
                            <input type="checkbox" name="account" value="Trust" <?php if($userdata->account_type == "Trust" ) { ?>checked<?php }?>>Trust</input>
                            <input type="checkbox" name="account" value="Pension" <?php if($userdata->account_type == "Pension") { ?>checked<?php }?>>Pension</input>
                        </td></tr>  
                    <tr><td class="td1"><label>Email ID</label></td>
                        <td class="td2"><input type="text" name="email" id="email" value="<?php echo $userdata->email; ?>"></td></tr>
                    <tr><td class="td1"><label>Confirm Password</label></td>
                        <td class="td2"><input type="password" name="confirm_password" id="confirm_password" value=""></td></tr>
                    <tr><td class="td1"><label>Last Name</label></td>
                        <td class="td2"><input type="text" name="lastname" id="lastname" value="<?php echo $userdata->lastname; ?>"></td></tr>

                    <tr><td class="td1"><label>City</label></td>
                        <td class="td2"><select name="city" id="city" class="required">
                                <option value="">None</option>
                                <option value="Mumbai" <?php if($userdata->city == 'Mumbai'){ ?> selected <?php } ?>>Mumbai</option>
                                <!--<option value="Bangalore">Bangalore</option>-->
                                <!--<option value="Mangalore">Mangalore</option>-->
                            </select></td></tr>

                    <tr><td class="td1"><label>Zip Code</label></td>
                        <td class="td2"><input type="text" name="zipcode" id="zipcode" value="<?php echo $userdata->zipcode; ?>"></td></tr>
                </table>

                <input type="submit" id="submit" name="submit" value="Submit">


            </form>

        </div><!-- wrapper -->


        <div style="clear:both;"></div>
        <br /><br />

        <div class="footer">

            <div class="footer_wrap">
                <p class="footer_para">Copyright text</p>
                <div class="footer_copyright"><a target="_blank" href=""><img src="" alt="" /></a></div>

            </div><!-- footer_wrap -->
        </div><!-- footer -->

    </body>
</html>
<script>
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
                     number : true,
                     minlength : 10,
                     maxlength : 10
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
                    number : "Contact numbers should contain only digits"
                }
            },
            submitHandler: function(form) {
            form.submit();
        }

        });
    });
</script>
                <style>

                    .flashSuccess {
                       /* background-color: #b3efa6;*/
                        color: green;
                        margin: 0 auto;
                        padding: 10px;
                        text-align: center;
                     }

                </style>
                <style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.td2 {
    padding: right;
    /*display: block;*/
    list-style: none;
    margin: 10px 0 0 0;
}
.td1 {
    padding: left;
    /*display: block;*/
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
.form-style-1 input[type=email],
textarea,
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; 
}
.form-style-1 input[type=text]:focus,
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus,
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>