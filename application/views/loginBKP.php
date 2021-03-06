<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/menu.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/login.js"></script>
    </head>

    <body>

        <div class="header">

            <div class="header_spacer">

                <div class="header_spacer_wrap">

                    <div class="header_spacer_left">

                        <p class="header_spacer_left_phone_number">Project Name</p>
                    </div><!-- header_spacer_left -->

                    <div class="header_spacer_right">


                    </div><!-- header_spacer_right -->

                </div><!-- header_spacer_wrap -->

            </div><!-- header_spacer -->


            <div class="main_header">
                <div style="clear:both"></div>
            </div><!-- main_header -->
            <br />
            <div class="navigation">
                <ul id="menu">
                    <li><a href="#">HOME</a></li>
                    <li>
                        <a href="#">ABOUT</a>

                    </li>
                    <li>
                        <a href="#">LEADERSHIP TEAM</a>
                    </li>
                    <li>
                        <a href="#">TESTIMONIALS</a>
                    </li>
                    <li>
                        <a href="#">BROKER'S CORNER</a>
                        <ul>
                            <li><a href="#">Sub menu1</a></li>
                            <li><a href="#">Sub menu2</a></li>
                            <li><a href="#">Sub menu3</a></li>
                            <li><a href="#">Sub menu4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">CONTACT US</a>
                    </li>
                </ul>

            </div><!-- navigation -->





        </div><!-- header -->

        <div style="clear:both"></div>

        <br />



        <div style="clear:both"></div>
        <br />
        <div class="wrapper">


            <div class="login_main_wrapper">
                <div class="login_heading"> <p>Login</p> </div><!-- login_heading -->

                <div class="login_wrapper">
                    <div class="errorMsg">
                        <?php echo $this->session->flashdata('errorMsg'); ?>
                    </div>

                    <form action="<?php echo base_url('home/authenticate') ?>" method="post" class="loginFrm"/>
                    <div class="login_form">

                        <div class="login_username">
                            <p>Email ID </p>

                            <input type="email" name="emailId" class="login_username_input" type="text" />

                        </div><!-- login_username -->

                        <div class="login_username">
                            <p>Password </p>

                            <input type="password" name="password" class="login_username_input" type="text" />

                        </div><!-- login_username -->


                        <div class="login_username">

                            <button type="button" class="login_button_form" id="loginBtn">Login</button>
                            </from>

                            <div class="login_forgot_pass"><a href="<?php echo base_url('home/forgotPassword') ?>">Forgot your Password?</a></div>

                        </div><!-- login_username -->

                    </div><!-- login_form -->

                </div><!-- login_wrapper -->

            </div><!-- login_main_wrapper -->

        </div><!-- wrapper -->

        <div style="clear:both"></div>
        <br/><br/>
        <div class="footer">

            <div class="footer_wrap">
                <p class="footer_para">Copyright text.</p>
                <div class="footer_copyright"><a target="_blank" href=""><img src="" alt="" /></a></div>

            </div><!-- footer_wrap -->
        </div><!-- footer -->

    </body>
</html>
