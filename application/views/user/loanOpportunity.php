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
            $data['active'] = 'loan';
            $this->load->view('header',$data);
        ?>
        <section>
            <div class="col-lg-offset-1 col-lg-10 ">
                <?php
                    if($this->session->flashdata('errorMsg')){
                ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('errorMsg');?>
                        </div>
                <?php
                    }
                ?>
            </div>

            <div class="col-lg-offset-1 col-lg-10">
                <div class="page-header">
                    <h4>Loan Opportunity</h4>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10" style="margin-bottom: 10px;">
<!--                <form action="<?php echo base_url() ?>" method="POST">
                    <div class="col-lg-3" style="padding:0px;">
                        <input type="text" name="search" value="" id="" class="form-control"/>
                    </div>
                    <div class="col-lg-3">
                        <input type="button" class="btn btn-primary" value="Search" id="searchBtn"/>
                        <input type="button" class="btn btn-success" value="Reset" id="resetBtn"/>
                    </div>
                </form>-->
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Project Name</th>
                            <th>Image</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Loan Amount</th>
                            <th>LTV</th>
                            <th>APR</th>
                            <th>Term</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($details as $data){
                        ?>
                            <tr class="valign">
                                <td>
                                    <input type="checkbox" name="" value="" id=""/>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('user/loanOpportunityDetails/'.$data->id); ?>">
                                        <?php echo $data->projectName; ?>
                                    </a>
                                </td>
                                <td>
                                    <img style="height:100px;width:100px;" src="<?php echo base_url('uploads/loanOppImg/'.$data->image)?>" alt="image"/>
                                </td>
                                <td>
                                    <?php echo $data->state; ?>
                                </td>
                                <td>
                                    <?php echo $data->city; ?>
                                </td>
                                <td>
                                    <?php echo $data->loanAmount; ?>
                                </td>
                                <td>
                                    <?php echo $data->ltv; ?>
                                </td>
                                <td>
                                    <?php echo $data->apr; ?>
                                </td>
                                <td>
                                    <?php echo $data->term; ?>
                                </td>
                                <td class="center pointer">
                                    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true" style="color: #3e8f3e"></span>
                                </td>
                                <td class="center pointer">
                                    <a href="<?php echo base_url('user/loanOpportunityDetails/'.$data->id); ?>"
                                        <span class="glyphicon glyphicon-search" aria-hidden="true" style="color: #003399"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-offset-9 col-lg-3">
                <?php
                    if(!empty($pagination)){
                        echo $pagination;
                    }
                ?>
            </div>
        </section>
        <?php $this->load->view('footer'); ?>
    </body>
    <script type="text/javascript"src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</html>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"src="<?php echo base_url('public/js/validation.js'); ?>"></script>
