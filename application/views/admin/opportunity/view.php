<?php $this->load->view('admin/header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="">
                <?php
                    if($details->status == FUNDED){
                ?>
                    <a href="<?php echo base_url('admin/loan/listing'); ?>">Loan</a>
                <?php
                    }else{
                ?>
                    <a href="<?php echo base_url('admin/opportunity/listing'); ?>">Opportunity</a>
                <?php
                    }
                ?>
            </li>
            <li class="active">View</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo ($details->status == FUNDED) ? "Loan" : "Opportunity" ; ?> Details
            </h1>
        </div>
        <div class="col-lg-12 panel panel-default">
            <div class="panel-body">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Project Name</td>
                            <td><?php echo $details->projectName; ?></td>
                            <td>State</td>
                            <td><?php echo $details->state; ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo $details->city; ?></td>
                            <td>LTV</td>
                            <td><?php echo $details->ltv; ?></td>
                        </tr>
                         <tr>
                            <td>APR</td>
                            <td><?php echo $details->apr; ?></td>
                            <td>Maturity Date</td>
                            <td><?php echo $details->maturityDate; ?></td>
                        </tr>
                        <tr>
                            <td>Pre-Pay Penality</td>
                            <td><?php echo $details->penalty; ?></td>
                            <td>Loan Service Agent</td>
                            <td><?php echo $details->agent; ?></td>
                            </div>
                        </tr>
                        <tr>
                            <td>Exit Term</td>
                            <td><?php echo $details->exitTerm; ?></td>
                            <td>Purpose</td>
                            <td><?php echo $details->purpose; ?></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><?php echo $details->location; ?></td>
                            <td>Address</td>
                            <td><?php echo $details->address; ?></td>
                        </tr>
                        <tr>
                            <td>Loan Amount</td>
                            <td><?php echo $details->loanAmount; ?></td>
                            <td>Term</td>
                            <td><?php echo $details->term; ?></td>
                        </tr>
                        <tr>
                            <td>Gross APR</td>
                            <td><?php echo $details->grossApr; ?></td>
                            <td>Date</td>
                            <td><?php echo $details->date; ?></td>
                        </tr>
                        <tr>
                            <td>Closing Date</td>
                            <td><?php echo $details->closingDate; ?></td>
                            <td>Agent URL</td>
                            <td><?php echo $details->agentUrl; ?></td>
                        </tr>
                        <tr>
                            <td>Security</td>
                            <td><?php echo $details->security; ?></td>
                            <td>Status</td>
                            <td>
                                <?php 
                                    if($details->status == 1)
                                        echo "Inactive";
                                    else if($details->status == 2)
                                        echo "Funded";
                                    else if($details->status == 3)
                                        echo "Matured";
                                    else
                                        echo "NA";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <img style="height:100px;width:100px;" src="<?php echo base_url('uploads/loanOppImg/'.$details->image)?>" alt="image"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4>Opportunity Invester Details</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(count($investment) > 0){
                                    foreach ($investment as $key => $value) {
                            ?>
                                    <tr>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo $value->amount; ?></td>
                                    </tr>
                            <?php
                                    }
                                }else{
                            ?>
                                    <tr>
                                        <td colspan='2'>No Investments in Opportunity</td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4>Document Details</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Document Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($documents as $data){
                            ?>
                                <tr>
                                    <td><?php echo $data->title; ?></td>
                                    <td><?php echo $data->type; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/admin/forceDownload/'.$data->id); ?>" target="_blank">
                                            <span class="glyphicon glyphicon-download" aria-hidden="true" style="color:#ff6600;"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div>

<?php $this->load->view('admin/footer'); ?>