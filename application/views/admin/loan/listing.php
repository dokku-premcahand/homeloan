<?php $this->load->view('admin/header'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"><a href="">Loan</a></li>
            <li class="active">Listing</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Loan Listing</h1>
        </div>
    </div><!--/.row-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered" id="opportunityTable"></table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap-table.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/admin/loan/listing.js'); ?>"></script>