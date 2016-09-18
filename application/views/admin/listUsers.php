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
                    <table id="userTable" data-toggle="table" data-url="<?php echo base_url('public/tables/data1.json') ?>"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="id" data-sortable="true">Id</th>
                            <th data-field="firstname" data-sortable="true">First Name</th>
                            <th data-field="lastname"  data-sortable="true">Last Name</th>
                            <th data-field="email" data-sortable="true">Email-Id</th>
                            <th data-field="mobile_number" data-sortable="true">Mobile No</th>
                            <th data-filed='action' data-align='center' data-formatter='actionFormatter' data-events='actionEvents'>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <link href="<?php echo base_url('public/css/bootstrap-table.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/bootstrap-table.js') ?>"></script>
    <script>
        var $table = $('#userTable');
    function actionFormatter(value) {
        return [
            '<a class="update" href="javascript:" title="Update User"><i class="glyphicon glyphicon-edit"></i></a> &nbsp;&nbsp;&nbsp;',
            '<a class="remove" href="javascript:" title="Delete Item"><i class="glyphicon glyphicon-remove-circle"></i></a> &nbsp;&nbsp;&nbsp;',
            '<a class="change_password" href="javascript:" title="Change Password"><i class="glyphicon glyphicon-edit"></i></a>',
        ].join('');
    }
    
        window.actionEvents = {
        'click .update': function (e, value, row) {
            console.log(row);
            window.location="<?php echo base_url('admin/user/viewUser'); ?>"+"/"+row.user_id;
        },
        'click .remove': function (e, value, row) {
//            alert($BASE_URL);
            if (confirm('Are you sure to delete this item?')) {
                $.ajax({
                    url: '<?php echo base_url("admin/user/deleteUser"); ?>' + '/' + row.user_id,
                    type: 'delete',
                    success: function (data) {
                        location.reload();
                    },
                    error: function () {
                        showAlert('Delete item error!', 'danger');
                    }
                })
            }
        },
        'click .change_password': function (e, value, row) {
            window.location="<?php echo base_url('admin/user/changePassword'); ?>"+"/"+row.user_id;
        },
    };
    </script>