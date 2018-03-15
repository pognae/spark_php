<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SPARK | Dashboard</title>
	
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	
	<!-- Ionicons -->
	<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	
	<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<!-- jQuery 3 -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap 3.3.7 -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>

    <!-- The jQuery library is a prerequisite for all jqSuite products -->
    <script type="text/ecmascript" src="js/jquery-1.11.0.min.js"></script> 

    <!-- We support more than 40 localizations -->
    <script type="text/ecmascript" src="trirand/js/i18n/grid.locale-en.js"></script>

    <!-- This is the Javascript file of jqGrid -->   
    <script type="text/ecmascript" src="trirand/src/jquery.jqGrid.js"></script>
    
	<!-- This is the localization file of the grid controlling messages, labels, etc.
    <!-- A link to a jQuery UI ThemeRoller theme, more than 22 built-in and many more custom -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 

    <!-- The link to the CSS that the grid needs -->
    <link rel="stylesheet" type="text/css" media="screen" href="trirand/css/ui.jqgrid-bootstrap.css" />

	<script>
		$.jgrid.defaults.width = 780;
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<?php $this->load->view('common/header'); ?>
		
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<?php $this->load->view('common/menu'); ?>
		<!-- /.sidebar -->

	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="background-color: #ffffff;">

		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				전표관리 <small></small>
			</h1>

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> 전표관리</a></li>
				<li class="active">전표</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content container-fluid">

			<!--------------------------
			| Your Page Content Here |
			-------------------------->
			<table id="jqGrid" style="width:100%"></table>
    		<div id="jqGridPager"></div>

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Main Footer -->
	<?php $this->load->view('common/footer'); ?>

</div>
<!-- ./wrapper -->


   <script type="text/javascript"> 
        $(document).ready(function () {
			
            $("#jqGrid").jqGrid({
                url: 'http://trirand.com/blog/phpjqgrid/examples/jsonp/getjsonp.php?callback=?&qwery=longorders',
                mtype: "GET",
				styleUI : 'Bootstrap',
                datatype: "jsonp",
                colModel: [
                    { label: 'OrderID', name: 'OrderID', key: true, width: 75 },
                    { label: 'Customer ID', name: 'CustomerID', width: 150 },
                    { label: 'Order Date', name: 'OrderDate', width: 150 },
                    { label: 'Freight', name: 'Freight', width: 150 },
                    { label:'Ship Name', name: 'ShipName', width: 150 }
                ],
				viewrecords: true,
                height: 500,
                rowNum: 20,
                pager: "#jqGridPager"
            });
        });
   </script>
</body>
</html>