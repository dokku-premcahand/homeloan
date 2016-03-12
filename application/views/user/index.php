<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Project Name - Home</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/menu.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!--[if IE]>
        <style>
        
        
        .search_input input {
        padding-top: 10px;
        } 
        </style>
        <![endif]-->
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
            <p class="my_account_heading">[Page title]</p>

            <br /><br />

            Put your content here

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
    