<?php $this->load->view('admin/header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="">
                <a href=""> 
                    <?php
                        if($details->funded == 1 || $details->completed == 1){
                    ?>
                        <a href="<?php echo base_url('admin/loan/listing'); ?>">Loan</a>
                    <?php
                        }else{
                    ?>
                        <a href="<?php echo base_url('admin/opportunity/listing'); ?>">Opportunity</a>
                    <?php
                        }
                    ?>
                </a>
            </li>
            <li class="active">Edit</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit <?php echo ($details->funded == 1 || $details->completed == 1) ? "Loan" : "Opportunity" ; ?></h1>
        </div>
    </div><!--/.row-->
<form role="form" name="addLoan" id="addLoan" method="post" action="<?php echo base_url('admin/opportunity/update'); ?>" enctype="multipart/form-data">
    <div class="row">
       <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Details</div>
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
                <?php 
                    // echo "<pre>";print_r($details);exit; 
                ?>
                        <div class="col-md-6">
                            <input type="hidden" name="loanOpportunityId" value="<?php echo $details->id; ?>"/>
                            <input type="hidden" name="image" value="<?php echo $details->image; ?>"/>
                            <div class="form-group">
                                <label>Project Name</label>
                                <input name="projectName" id="projectName" class="form-control" placeholder="Project Name" value="<?php echo $details->projectName; ?>">
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control required" name="state" id="state">
                                    <option value="">Select State</option>
                                    <option value="Maharashtra" <?php echo ($details->state == 'Maharashtra') ? 'selected' : '' ; ?>>Maharashtra</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text"  class="form-control required" name="city" id="city" placeholder="City" value="<?php echo $details->city; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>LTV</label>
                                <input name="ltv" id="ltv" class="form-control" placeholder="LTV" value="<?php echo $details->ltv; ?>">
                            </div>

                            <div class="form-group">
                                <label>APR</label>
                                <input name="apr" id="apr" class="form-control" placeholder="APR" value="<?php echo $details->apr; ?>">
                            </div>

                            <div class="form-group">
                                <label>Maturity Date</label>
                                <input name="maturityDate" id="maturityDate" class="form-control" placeholder="Maturity Date" value="<?php echo $details->maturityDate; ?>">
                            </div>

                            <div class="form-group">
                                <label>Pre-Pay Penalty</label>
                                <input name="penalty" id="penalty" class="form-control" placeholder="Pre-Pay Penalty" value="<?php echo $details->penalty; ?>">
                            </div>

                            <div class="form-group">
                                <label>Loan Service Agent</label>
                                <input name="agent" id="agent" class="form-control" placeholder="Loan Service Agent" value="<?php echo $details->agent; ?>">
                            </div>

                            <div class="form-group">
                                <label>Exit Term</label>
                                <textarea name="exitTerm" id="exitTerm" class="form-control" placeholder="Exit Term"><?php echo $details->exitTerm; ?></textarea>                            </div>

                            <div class="form-group">
                                <label>Purpose</label>
                                <textarea name="purpose" id="purpose" class="form-control" placeholder="Purpose"><?php echo $details->purpose; ?></textarea>                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input name="location" id="location" class="form-control" placeholder="Location" value="<?php echo $details->location; ?>">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" id="address" class="form-control" placeholder="Address" value="<?php echo $details->address; ?>">
                            </div>
                            <div class="form-group">
                                <label>Loan Amount</label>
                                <input name="loanAmount" id="loanAmount" class="form-control" placeholder="Loan Amount" value="<?php echo $details->loanAmount; ?>">
                            </div>
                            <div class="form-group">
                                <label>Term</label>
                                <input name="term" id="term" class="form-control" placeholder="Term" value="<?php echo $details->term; ?>">
                            </div>

                            <div class="form-group">
                                <label>Gross APR</label>
                                <input name="grossApr" id="grossApr" class="form-control" placeholder="Gross APR" value="<?php echo $details->grossApr; ?>">
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input name="date" id="date" class="form-control" placeholder="Date" value="<?php echo $details->date; ?>">
                            </div>

                            <div class="form-group">
                                <label>Closing Date</label>
                                <input name="closingDate" id="closingDate" class="form-control" placeholder="Closing Date" value="<?php echo $details->closingDate; ?>">
                            </div>

                            <div class="form-group">
                                <label>Agent URL</label>
                                <input name="agentUrl" id="agentUrl" class="form-control" placeholder="Agent URL" value="<?php echo $details->agentUrl; ?>">
                            </div>

                            <div class="form-group">
                                <label>Security</label>
                                <input name="security" id="security" class="form-control" placeholder="Security" value="<?php echo $details->security; ?>">
                            </div>
                            <!-- <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" id="image" required>
                            </div> -->
                            <div class="form-group">
                                <label>Status</label><br>
                                <input name="inactive" value="1" type="checkbox" <?php echo ($details->inactive == 1) ? 'checked' : '' ; ?>> Inactive
                                <input name="funded" value="1" type="checkbox" <?php echo ($details->funded == 1) ? 'checked' : '' ; ?>> Funded
                                <input name="completed" value="1" type="checkbox" <?php echo ($details->completed == 1) ? 'checked' : '' ; ?>> Matured
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Update <?php echo ($details->funded == 1 || $details->completed == 1) ? "Loan" : "Opportunity"; ?>
                                </button>
                            </center>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Documents</div>
                <div class="panel-body">
                    <!--<form role="form" name="addLoanDocument" id="addLoanDocument" method="post" action="<?php echo base_url('admin/saveLoanDocument'); ?>" enctype="multipart/form-data">-->
                        <!-- <div class="col-md-12 divAdd">
                            <div class="form-group divnew" id="div1">
                                    <div class="col-md-3"><input name="title[]" id="title1" class="form-control" placeholder="Document title"></div>
                                    <div class="col-md-3"><input name="type[]" id="type1" class="form-control" placeholder="Document type"></div>
                                    <div class="col-md-3"><input type="file" name="document[]" id="document1"></div>
                                    <div class="col-md-3"><a id="addButton" style="cursor: pointer;">+</a></div>
                            </div>
                        </div>
                        <br></br>
                        <div class="form-group" style="text-align:center; margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Submit Button</button>
                        </div>

                </div>
            </div>
        </div>
    </div> -->
</form>

    <?php $this->load->view('admin/footer'); ?>
    <script src="<?php echo base_url('public/js/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/admin/opportunity/edit.js') ?>"></script>
