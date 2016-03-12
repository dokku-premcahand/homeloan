<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body class="col-lg-12">
        <?php $this->load->view('header'); ?>
    <section>
        <div class="container">
            <div class="col-lg-12">
                <div id="loginbox" class="mainbox col-sm-offset-4 col-md-offset-4 col-md-4  col-sm-4 ">
                    <div class="panel panel-default" >
                        <div class="panel-heading customPanel">
                            <div class="panel-title text-center">Login</div>
                        </div>     

                        <div class="panel-body" >
                            <?php
                                if($this->session->flashdata('errorMsg')){
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('errorMsg');?>
                                    </div>
                            <?php
                                }
                            ?>
                            <form name="form" action="<?php echo base_url("home/authenticate") ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="user" type="text" class="form-control" name="user" value="" placeholder="User">                                        
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>                                                                  

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        
                                        <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                                    </div>
                                </div>

                            </form>     

                        </div>                     
                    </div>  
                </div>
            </div>
        </div><br>
    </section>
        <?php $this->load->view('footer'); ?>
    </body>
    <script type="text/javascript"src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</html>
