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


	<link rel="stylesheet" type="text/css" media="screen" href="../css/jquery-ui-1.11.1.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="../css/ui.jqgrid.css" />

	<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="../js/i18n/grid.locale-kr.js" type="text/javascript"></script>
	<script src="../js/jquery.jqGrid.min.js" type="text/javascript"></script>


<script type="text/javascript">
$(function(){

	// 변수 선언
	var i, max, myData, grid = $("#list4");

	// grid 설정
	grid.jqGrid({
		datatype: "local",
		height: 'auto',
		colNames:['Inv No','Date', 'Client', 'Amount','Tax','Total','Notes'],
		colModel:[
			{name:'id',index:'id', width:60, sorttype:"int"},
			{name:'invdate',index:'invdate', width:90, sorttype:"date"},
			{name:'name',index:'name', width:100},
			{name:'amount',index:'amount', width:80, align:"right",sorttype:"float"},
			{name:'tax',index:'tax', width:80, align:"right",sorttype:"float"},
			{name:'total',index:'total', width:80,align:"right",sorttype:"float"},
			{name:'note',index:'note', width:150, sortable:false}
		],
		multiselect: true,
		caption: "Manipulating Array Data"
	});

	// 로컬 데이터
	myData = [
		{id:"1",invdate:"2007-10-01",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
		{id:"2",invdate:"2007-10-02",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
		{id:"3",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
		{id:"4",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
		{id:"5",invdate:"2007-10-05",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
		{id:"6",invdate:"2007-09-06",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
		{id:"7",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
		{id:"8",invdate:"2007-10-03",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
		{id:"9",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"}
	];

	// 데이터 추가
	for( i=0, max = myData.length ; i<=max ; i++ ){
		grid.jqGrid('addRowData', i+1, myData[i]);
	}
});
</script>


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
	<div class="content-wrapper">

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
			<table id="list4"></table>



		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Main Footer -->
	<?php $this->load->view('common/footer'); ?>

</div>
<!-- ./wrapper -->

</body>
</html>