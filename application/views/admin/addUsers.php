<?php $this->load->view('admin/header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Users</h1>
        </div>
    </div>
    
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add User</div>
            <?php
                if ($this->session->flashdata('successMsg')) {
                    ?>
                <div class="alert alert-success" role="alert" style="text-align: center;">
                        <?php echo $this->session->flashdata('successMsg'); ?>
                    </div>
                    <?php
                }
            ?>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="<?php echo base_url('admin/admin/saveUser'); ?>" method="post" name="userRegistration" id="userRegistration">
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="fname" id="fname" class="form-control" placeholder="Placeholder">
                    </div>
                    
                    <div class="form-group">
                        <label>Last Name</label>
                        <input name="lname" id="lname" class="form-control" placeholder="Placeholder">
                    </div>
                    
                    <div class="form-group">
                        <label>Email-Id</label>
                        <input name="email" id="email" class="form-control" placeholder="Placeholder">
                    </div>
                    
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input name="mobileno" id="mobileno" class="form-control" placeholder="Placeholder">
                    </div>
                    
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" id="username" class="form-control" placeholder="Placeholder">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                        
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>    
                    
<!--                    <div class="form-group">
                    <label>Gender</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender"  value="male" checked>Male
                            </label>
                            <label>
                                <input type="radio" name="gender"  value="female" checked>Female
                            </label>
                        </div>
                    </div>-->
                    
                    <button type="submit" class="btn btn-primary">Submit Button</button>
                </div>
                </form>
            </div>
        </div>
    </div>
   
<?php $this->load->view('footer'); ?>

    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/validation.js'); ?>"></script>
     
    
    