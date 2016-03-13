<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Profile</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body class="col-lg-12">
        <?php 
            $data['header'] = 'logout';
            $data['active'] = 'profile';
            $this->load->view('header',$data); 
        ?>
    <section>
        <div class="container">
            <div class="col-lg-12">
                <form action="<?php echo base_url('user/updateUser'); ?>" name="user_registration" id="user_registration" method="post">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $userdata->username; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $userdata->email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $userdata->firstname; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $userdata->lastname; ?>"></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">State</label>
                            <select name="state" id="state" class="required form-control" >
                                <option value=''>Select State</option>
                                <option value='Maharashtra' <?php if($userdata->state == 'Maharashtra'){ ?> selected <?php } ?> >Maharashtra</option>
                                <!--<option value='Karnataka' <?php if($userdata->state == 'Karnataka'){ ?> selected <?php } ?>>Karnataka</option>-->
                                <!--<option value='Kerala' <?php if($userdata->state == 'Kerala'){ ?> selected <?php } ?> >Kerala</option>-->
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">City</label>
                            <select name="city" id="city" class="required form-control">
                                <option value="">None</option>
                                <option value="Mumbai" <?php if($userdata->city == 'Mumbai'){ ?> selected <?php } ?>>Mumbai</option>
                                <!--<option value="Bangalore">Bangalore</option>-->
                                <!--<option value="Mangalore">Mangalore</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo $userdata->address; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Zip Code</label>
                            <input type="text" name="zipcode" id="zipcode" class="form-control" value="<?php echo $userdata->zipcode; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1">Account Type</label>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-2 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="account" value="Personal" <?php if($userdata->account_type == "Personal") { ?>checked<?php }?> >
                                        Personal
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="account" value="Corporate" <?php if($userdata->account_type == "Corporate") { ?>checked<?php }?>>
                                        Corporate
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="account" value="IRA" <?php if($userdata->account_type == "IRA") { ?>checked<?php }?>>
                                        IRA
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="account" value="Trust" <?php if($userdata->account_type == "Trust" ) { ?>checked<?php }?>>
                                        Trust
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="account" value="Pension" <?php if($userdata->account_type == "Pension") { ?>checked<?php }?>>
                                        Pension
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="<?php echo $userdata->mobile_number; ?>">
                        </div>
                        <div class="col-lg-6" style="margin-top: 24px;">
                            <button type="submit" id="updateUserProfile" class="btn btn-default btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>
    </section>
        <?php //$this->load->view('footer'); ?>
    </body>
    <script type="text/javascript"src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</html>
