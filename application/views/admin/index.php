<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>

        <link href="<?php echo base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/css/styles_admin.css') ?>" rel="stylesheet">

    </head>

    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Administrator Log in</div>
                    <div class="panel-body">
                        <?php
                        if ($this->session->flashdata('errorMsg')) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('errorMsg'); ?>
                            </div>
                            <?php
                        }
                        ?>
                        <form role="form" action="<?php echo base_url("admin/index/authenticate") ?>" enctype="multipart/form-data" method="POST" id="adminLogin">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" id="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <input type="submit" name="submit" value="Login" class="btn btn-primary col-lg-12">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.validate.min.js'); ?>"></script>
</html>
