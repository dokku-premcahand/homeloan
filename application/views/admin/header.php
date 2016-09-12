 <!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

<link href="<?php echo base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
<!--<link href="css/datepicker3.css" rel="stylesheet">-->
<link href="<?php echo base_url('public/css/styles_admin.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/datepicker3.css') ?>" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/lumino.glyphs.js') ?>"></script>



<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span></span>Admin Panel</a>
<!--				 <ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul> -->
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if($menu == 'dashboard') { ?>active<?php } ?>">
				<a href="<?php echo base_url('admin/admin/dashboard') ?>">
					<svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> 
					Dashboard
				</a>
			</li>
			<li class="<?php if($menu == 'addloan') { ?>active<?php } ?>">
				<a href="<?php echo base_url('admin/admin/addLoanOpportunity') ?>">
					<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> 
					Add Opportunity
				</a>
			</li>
			<li class="parent ">
                            <a href="#"><span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> User </a>
				<ul class="children collapse" id="sub-item-1">
					<li>
                                            <a class="" href="<?php echo base_url('admin/user') ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> List Users</a>
					</li>
					<li>
                                            <a class="" href="<?php echo base_url('admin/addUsers') ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Users</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li>
				<a href="<?php echo base_url('admin/index/logout') ?>">
					<svg class="glyph stroked male-user">
						<use xlink:href="#stroked-male-user"></use></svg>
						Logout
				</a>
			</li>
		</ul>
	</div>	