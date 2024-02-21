<?php
require_once APPPATH . 'views/Panel/Panel.php';
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Panel Principal</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Panel Principal</h1>
			</div>
		</div><!--/.row-->





		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>En tramite</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="0"><span
								class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Concluidos</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="0"><span
								class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Verdes</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="0"><span
								class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Rojos</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="0"><span
								class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->



		<div class="panel panel-default ">

			<div class="panel-heading">
				Resumen general de mis embarques

			</div>


			<div class="panel-body timeline-container">

				<table id="myTable" class="display">
					<thead>
						<tr>
							<th>Column 1</th>
							<th>Column 2</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Row 1 Data 1</td>
							<td>Row 1 Data 2</td>
						</tr>
						<tr>
							<td>Row 2 Data 1</td>
							<td>Row 2 Data 2</td>
						</tr>
					</tbody>
				</table>
			</div>


		</div>


		<script>
			$(document).ready(function () {
				
				$('#myTable').DataTable({
					
					// Opciones de personalización (ej. búsqueda, paginación, etc.)
				});
			});
		</script>
		<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
</body>

</html>