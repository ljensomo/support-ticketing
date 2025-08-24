<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link href="images/fb-art1.png" rel="shortcut icon">
	<title>Projects - Fortis Ticketing System</title>
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
			-->
	<link href="css/fonts1.css" rel="stylesheet" type="text/css">
	<link href="css/fonts2.css" rel="stylesheet" type="text/css">
	<link href="css/fonts3.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap core CSS -->
	<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
	<link href="fonts/font-awesome-4/css/font-awesome.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<link href="js/jquery.gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="js/jquery.nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css" />
	<link href="js/jquery.easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
	<link href="js/bootstrap.switch/bootstrap-switch.css" rel="stylesheet" type="text/css" />
	<link href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="js/jquery.select2/select2.css" rel="stylesheet" type="text/css" />
	<link href="js/bootstrap.slider/css/slider.css" rel="stylesheet" type="text/css" />
	<link href="js/intro.js/introjs.css" rel="stylesheet" type="text/css" />
	<link href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="js/jquery.magnific-popup/dist/magnific-popup.css" rel="stylesheet" type="text/css" />
	<link href="js/jquery.niftymodals/css/component.css" rel="stylesheet" type="text/css" />
	<link href="js/bootstrap.summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />
	<link href="sweetalert-master/dist/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
</head>

<body>

	<!-- Fixed navbar -->
	<?php include 'includes/topbar.php'; ?>
	<div id="cl-wrapper" class="fixed-menu">
		<?php include 'includes/sidebar.php'; ?>
		<div id="pcont" class="container-fluid">
			<?php
			$cmpny_id = $_GET['cid'];
			$slct_cmpny = "SELECT company_name FROM companies WHERE id = ?";
			$slct_res = $db->prepare($slct_cmpny);
			$slct_res->execute(array($cmpny_id));
			$slct_row = $slct_res->fetch(PDO::FETCH_ASSOC);
			?>
			<div class="cl-mcont">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-danger" style="border-color:#272930;">
							<div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
								List of <?php echo $slct_row['company_name']; ?>'s projects.
							</div>
							<div class="panel-body">
								<div class="header">
									<a class="btn btn-default btn-md btn-flat btn-rad" data-target="#add_c_project" data-toggle="modal">
										<i class="fa fa-plus-circle" style="padding-right: 10px"></i>
										Add Project
									</a>
									<hr>
								</div>
								<div class="content">
									<div class="table-responsive">
										<table id="datatable" class="table table-bordered hover">
											<thead>
												<tr style="background-color:#5f5d5d;color:white;">
													<th><strong>Project Name</strong></th>
													<th><strong>Description</strong></th>
													<th><strong>Date Implemented</strong></th>
													<th><strong>Action</strong></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql_prjct = "SELECT
																	cp.id, 
																	p.project_name,
																	p.description,
																	cp.date_implemented
																FROM company_projects AS cp
																JOIN projects AS p ON cp.project_id=p.id
																WHERE cp.company_id = ?";
												$res_prjct = $db->prepare($sql_prjct);
												$res_prjct->execute(array($cmpny_id));
												while ($row_prjct = $res_prjct->fetch(PDO::FETCH_ASSOC)) {
												?>
													<tr class="odd gradeX">
														<td><strong><?= $row_prjct['project_name'] ?></strong></td>
														<td><strong><?= $row_prjct['description'] ?></strong></td>
														<td><strong><?= $row_prjct['date_implemented'] ?></strong></td>
														<td class="center">
															<center>
																<a class="btn btn-danger btn-sm btn-flat btn-rad" onclick="removeProject(<?=$row_prjct['id']?>)">
																	<i class="fa fa-times"></i>Remove Project
																</a>
															</center>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once 'modals/project_modals.php'; ?>

	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		// function to remove project
		function removeProject(id) {
			swal({
					title: "Are you sure?",
					text: "Do you want to remove the project from the company?",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Remove",
					closeOnConfirm: false
				},
				function() {
					$.ajax({
						method: "POST",
						url: "includes/rmve_prjct_process.php",
						data: { id: id },
						dataType: "json",
					}).done(function(response){
						if (response.success) {
							swal({ title: "Success", text: "The project was successfully removed from the company.", type: "success" },
								function() {
									location.reload();
								}
							);
						} else {
							swal("Ooops!", response.message, "info");
						}
					}).fail(function() {
						swal("Ooops!", "Something went wrong!", "error");
					});
				}
			);
		}

		// add new project
		$("#add_company_project_form").submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: "includes/add_cmpnyprjct_process.php",
				method: "POST",
				data: new FormData(this),
				dataType: "json",
				processData: false,
				contentType: false,
			}).done(function(response) {
				if (response.success) {
					swal({
							title: "Success!",
							text: response.message,
							type: "success"
						},
						function() {
							location.reload();
						}
					);
				} else {
					swal("Ooops!", response.message, "info");
				}
			}).fail(function() {
				swal("Ooops!", "Something went wrong!", "error");
			});
		});
	</script>
	<script src="js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
	<script src="js/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
	<script src="js/jquery.easypiechart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="js/behaviour/general.js" type="text/javascript"></script>
	<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script src="js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
	<script src="js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
	<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="js/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="js/jquery.datatables/jquery.datatables.min.js" type="text/javascript"></script>
	<script src="js/jquery.datatables/bootstrap-adapter/js/datatables.js" type="text/javascript"></script>
	<script src="js/table.js" type="text/javascript"></script>
	<!-- Bootstrap core JavaScript
			================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/behaviour/voice-commands.js"></script>
	<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/jquery.flot/jquery.flot.js" type="text/javascript"></script>
	<script src="js/jquery.flot/jquery.flot.pie.js" type="text/javascript"></script>
	<script src="js/jquery.flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="js/jquery.flot/jquery.flot.labels.js" type="text/javascript"></script>
</body>

</html>