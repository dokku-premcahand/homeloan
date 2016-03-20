<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loan Opportunity Details</title>
        <link href="<?php echo base_url('public/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/login.css'); ?>" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body class="col-lg-12">
        <?php 
            $data['header'] = 'logout';
            $data['active'] = 'loanDetails';
            $this->load->view('header',$data); 
        ?>
        <section>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="page-header">
                    <h4>Loan Details</h4>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="col-lg-6">
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Project Name</div>
                        <div class="col-lg-6"><?php echo $details->projectName; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">State</div>
                        <div class="col-lg-6"><?php echo $details->state; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">City</div>
                        <div class="col-lg-6"><?php echo $details->city; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">LTV</div>
                        <div class="col-lg-6"><?php echo $details->ltv; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">APR</div>
                        <div class="col-lg-6"><?php echo $details->apr; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Maturity Date</div>
                        <div class="col-lg-6"><?php echo $details->maturityDate; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Pre-Pay Penality</div>
                        <div class="col-lg-6"><?php echo $details->penalty; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Loan Service Agent</div>
                        <div class="col-lg-6"><?php echo $details->agent; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Exit Term</div>
                        <div class="col-lg-6"><?php echo $details->exitTerm; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Purpose</div>
                        <div class="col-lg-6"><?php echo $details->purpose; ?></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Location</div>
                        <div class="col-lg-6"><?php echo $details->location; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Address</div>
                        <div class="col-lg-6"><?php echo $details->address; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Loan Amount</div>
                        <div class="col-lg-6"><?php echo $details->loanAmount; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Term</div>
                        <div class="col-lg-6"><?php echo $details->term; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Gross APR</div>
                        <div class="col-lg-6"><?php echo $details->grossApr; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Date</div>
                        <div class="col-lg-6"><?php echo $details->date; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Closing Date</div>
                        <div class="col-lg-6"><?php echo $details->closingDate; ?></div>
                    </div>
                    <div class="col-lg-12 even">
                        <div class="col-lg-6 bold">Agent URL</div>
                        <div class="col-lg-6"><?php echo $details->agentUrl; ?></div>
                    </div>
                    <div class="col-lg-12 odd">
                        <div class="col-lg-6 bold">Security</div>
                        <div class="col-lg-6"><?php echo $details->security; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="page-header">
                    <h4>Image Details</h4>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="page-header">
                    <h4>Document Details</h4>
                </div>
            </div>
        </section>
        <?php //$this->load->view('footer'); ?>
    </body>
    <script type="text/javascript"src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</html>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"src="<?php echo base_url('public/js/validation.js'); ?>"></script>