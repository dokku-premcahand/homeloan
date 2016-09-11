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
            <h1 class="page-header">Tables</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Advanced Table</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="<?php echo base_url('public/tables/data1.json') ?>"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="id" data-sortable="true">Id</th>
                            <th data-field="firstname" data-sortable="true">First Name</th>
                            <th data-field="lastname"  data-sortable="true">Last Name</th>
                            <th data-field="email" data-sortable="true">Email-Id</th>
                            <th data-field="mobile_number" data-sortable="true">Mobile No</th>
                            <th data-field="action" data-sortable="true">Test</th>
                            
                          

                            <th data-field="."<svg class='glyph stroked pencil'><use xlink:href='#stroked-pencil'/></svg>Action</th>
<!--                                <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>-->
                                


                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <link href="<?php echo base_url('public/css/bootstrap-table.css') ?>" rel="stylesheet">
   <script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
   <script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap-table.js') ?>"></script>
<script>
    $(function () {
        $('#hover, #striped, #condensed').click(function () {
            var classes = 'table';

            if ($('#hover').prop('checked')) {
                classes += ' table-hover';
            }
            if ($('#condensed').prop('checked')) {
                classes += ' table-condensed';
            }
            $('#table-style').bootstrapTable('destroy')
                .bootstrapTable({
                    classes: classes,
                    striped: $('#striped').prop('checked')
                });
        });
    });

    function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
            return {
                classes: classes[index / 2]
            };
        }
        return {};
    }
</script>

   