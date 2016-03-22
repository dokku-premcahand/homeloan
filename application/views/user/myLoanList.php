<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loan Opportunity</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body class="col-lg-12">
        <?php 
            $data['header'] = 'logout';
            $data['active'] = 'myLoan';
            $this->load->view('header',$data); 
        ?>
        <section>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="page-header">
                    <h4>MY LOAN LIST</h4>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10" style="margin-bottom: 10px;">
                <div class="col-lg-4">
                    <select class="form-control">
                        <option selected="selected">In Process Loan</option>
                        <option>Processed Loan</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10" style="margin-bottom: 10px;">
                <form action="<?php echo base_url(); ?>" method="POST">
                    <div class="col-lg-3">
                        <input type="text" name="" id="" value="" class="form-control"/>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" name="" id="" class="btn btn-primary">Search</button>
                        <button type="button" name="" id="" class="btn btn-warning">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-offset-1 col-lg-10" style="margin-bottom: 10px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>APR</th>
                            <th>Term</th>
                            <th>Loan Amount</th>
                            <th>Lend Amount</th>
                            <th>Closing Date</th>
                            <th>Maturity Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($details as $data): ?>
                        <tr>
                            <td><?php echo $data->projectName; ?></td>
                            <td><?php echo $data->apr; ?></td>
                            <td><?php echo $data->term; ?></td>
                            <td><?php echo $data->loanAmount; ?></td>
                            <td><?php echo $data->loanAmount; ?></td>
                            <td><?php echo $data->closingDate; ?></td>
                            <td><?php echo $data->maturityDate; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php $this->load->view('footer'); ?>
    </body>
    <script type="text/javascript"src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</html>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"src="<?php echo base_url('public/js/validation.js'); ?>"></script>