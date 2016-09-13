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

<!-- Assign loan to user -->
<div class="modal fade" tabindex="-1" role="dialog" id="attachLoanToUserModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <input type="text" data-provide="typeahead" id="attachLoanToUsertxt">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap-table.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/typeahead.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/admin/loan/listing.js'); ?>"></script>