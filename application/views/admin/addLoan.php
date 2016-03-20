<?php $this->load->view('admin/header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Loan Opportunity</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!--<div class="panel-heading">Add Loan Opportunity</div>-->
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
                    <form role="form" name="addLoan" id="addLoan" method="post" action="<?php echo base_url('admin/saveLoan'); ?>">
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Project Name</label> 
                                <input name="projectName" id="projectName" class="form-control" placeholder="Project Name">
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <!--<input name="state" id="state" class="form-control" placeholder="State">-->
                                <select class="form-control required" name="state" id="state">
                                    <option value="">Select State</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <!--<input name="city" id="city" class="form-control" placeholder="City">-->
                                <select class="form-control required" name="city" id="city">
                                    <option value="">Select City</option>
                                    <option value="Mumbai">Mumbai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>LTV</label>
                                <input name="ltv" id="ltv" class="form-control" placeholder="LTV">
                            </div>

                            <div class="form-group">
                                <label>APR</label>
                                <input name="apr" id="apr" class="form-control" placeholder="APR">
                            </div>

                            <div class="form-group">
                                <label>Maturity Date</label>
                                <input name="maturityDate" id="maturityDate" class="form-control datepicker" value="02/16/12" placeholder="Maturity Date">
                            </div>

                            <div class="form-group">
                                <label>Pre-Pay Penalty</label>
                                <input name="penalty" id="penalty" class="form-control" placeholder="Pre-Pay Penalty">
                            </div>

                            <div class="form-group">
                                <label>Loan Service Agent</label>
                                <input name="agent" id="agent" class="form-control" placeholder="Loan Service Agent">
                            </div>

                            <div class="form-group">
                                <label>Exit Term</label>
                                <textarea name="exitTerm" id="exitTerm" class="form-control" placeholder="Exit Term"></textarea>                            </div>

                            <div class="form-group">
                                <label>Purpose</label>
                                <textarea name="purpose" id="purpose" class="form-control" placeholder="Purpose"></textarea>                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input name="location" id="location" class="form-control" placeholder="Location">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" id="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Loan Amount</label>
                                <input name="loanAmount" id="loanAmount" class="form-control" placeholder="Loan Amount">
                            </div>
                            <div class="form-group">
                                <label>Term</label>
                                <input name="term" id="term" class="form-control" placeholder="Term">
                            </div>

                            <div class="form-group">
                                <label>Gross APR</label>
                                <input name="grossApr" id="grossApr" class="form-control" placeholder="Gross APR">
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input name="date" id="date" class="form-control" placeholder="Date">
                            </div>

                            <div class="form-group">
                                <label>Closing Date</label>
                                <input name="closingDate" id="closingDate" class="form-control" placeholder="Closing Date">
                            </div>

                            <div class="form-group">
                                <label>Agent URL</label>
                                <input name="agentUrl" id="agentUrl" class="form-control" placeholder="Agent URL">
                            </div>

                            <div class="form-group">
                                <label>Security</label>
                                <input name="security" id="security" class="form-control" placeholder="Security">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit Button</button>
                    </form>
                </div>
                <!--</div>-->
            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); ?>	
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/validation.js'); ?>"></script>
    <script>
        $(document).ready(function (e) {
            $('#maturityDate').datepicker();
            $('#date').datepicker();
            $('#closingDate').datepicker();
        })

    </script>
