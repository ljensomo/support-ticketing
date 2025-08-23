<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>My Groups - Fortis Ticketing System</title>
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
<script src="html5shiv.js"></script>
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

<!-- Fixed navbar --><?php include 'includes/topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php include 'includes/sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="panel" style="border-color:#272930;">
					    <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
					    	List of your group/s.
					    </div>
					    <div class="panel-body">												
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr style="background-color:#5f5d5d;color:white;">
												<th class="hidden"><strong>Group ID</strong></th>
												<th><strong>Group Name</strong></th>
												<th><strong>Assigned Projects</strong></th>
												<th><strong>Members</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<tbody>
										<?php 
											$query = "SELECT 
															g.id,
															g.group_name
														FROM groups AS g
														JOIN group_members AS gm
														ON g.id=gm.group_id
														WHERE gm.user_id = ?";
											$stmt = $db->prepare($query);
											$stmt->execute(array($row[0]));
											while($row_group = $stmt->fetch(PDO::FETCH_NUM)){
										?>
											<tr class="odd gradeX">
												<td class="hidden"><?php echo $row_group[0]; ?></td>
												<td><h4><?php echo $row_group[1]; ?></h4></td>
												<td>
												<?php 

													$query2 = "SELECT
																	gp.id,
																	gp.group_id,
																	p.proj_desc
																FROM
																group_projects AS gp
																JOIN projects AS p
																ON gp.project_id=p.proj_id WHERE gp.group_id=?";
													$stmt2 = $db->prepare($query2);
													$stmt2->execute(array($row_group[0]));

													$count = "SELECT COUNT(id) FROM group_members WHERE group_id = ?";
													$stmt_count = $db->prepare($count);
													$stmt_count->execute(array($row_group[0]));
													$row_count = $stmt_count->fetch(PDO::FETCH_NUM);

													if($row_count[0] > 0){
														while($row_projects = $stmt2->fetch(PDO::FETCH_NUM)){
														echo '<strong>' . $row_projects[2] . '</strong>';
												?>
														<br /><br />
												<?php
														}
													}else{
														echo '<strong>No Project/s assigned.<strong>';
													} 
												?>											
												</td>
												<td>
												<?php 
													$query3 = "SELECT 
																	gm.id,
																	u.fname,
																	u.mname,
																	u.lname

																FROM 
																group_members AS gm
																JOIN users AS u
																ON gm.user_id=u.user_id WHERE gm.group_id=?";
													$stmt3 = $db->prepare($query3);
													$stmt3->execute(array($row_group[0]));

													$count2 = "SELECT COUNT(id) FROM group_members WHERE group_id = ?";
													$stmt_count2 = $db->prepare($count2);
													$stmt_count2->execute(array($row_group[0]));
													$row_count2 = $stmt_count2->fetch(PDO::FETCH_NUM);

													if($row_count2[0] > 0){

														while($row_members = $stmt3->fetch(PDO::FETCH_NUM)){
															echo '<strong>' . $row_members[1] . ' ' . $row_members[2] . ' ' . $row_members[3] . '</strong>';
													?>
															<br /><br />												
												<?php
														}

													}else{
														echo '<strong>No member/s added.</strong>';
													}
												?>
												</td>
												<td class="center"><center>
												<a class="btn btn-info btn-sm" type="button" onclick="group_modal_show(<?php echo $row_group[0]; ?>,'<?php echo $row_group[1]; ?>')">
												<i class="fa fa-ticket"></i>Tickets</a>
												</center></td>
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

<?php include_once 'modals/group_modals.php'; ?>
<!-- function source -->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
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
