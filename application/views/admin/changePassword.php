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
            <h1 class="page-header">Change User Password</h1>
        </div>
    </div>
    
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Change User Password</div>
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
                    <form role="form" action="<?php echo base_url('admin/user/updateUserPassword'); ?>" method="post" name="changePassword" id="changePassword">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </div>
                        
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>                        
                    <button type="submit" class="btn btn-primary">Submit Button</button>
                </div>
                </form>
            </div>
        </div>
    </div>
   
<?php $this->load->view('footer'); ?>

    <script src="<?php echo base_url('public/js/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/validation.js'); ?>"></script>
     
    
    