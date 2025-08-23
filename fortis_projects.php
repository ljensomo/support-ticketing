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

<!-- Fixed navbar --><?php include 'includes/topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php include 'includes/sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					  <div class="panel panel-default"  style="border-color:#272930;">
					    <div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
					    	List of Fortis Technologies Corp.'s Project/s.
					    </div>
					    <div class="panel-body">
						    <div class="header">
								<a class="btn btn-default btn-md btn-flat btn-rad" data-target="#new_project" data-toggle="modal">
									<i class="fa fa-plus-circle"></i> Add Project
								</a>
								<hr>
							</div>
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr  style="background-color:#5f5d5d;color:white;">
												<th class="hidden">Project ID</th>
												<th>Project Name</th>
												<th>Assigned Support/s</th>
												<th>Action</th>
											</tr>
										</thead>
										<?php
	                                                $sql_prjct = "SELECT * FROM projects";
	                                                $res_prjct = $db->prepare($sql_prjct);
	                                                $res_prjct->execute();
	                                                while ($row_prjct = $res_prjct->fetch(PDO::FETCH_NUM)) {
	                                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_prjct[0]; ?>
											</td>
											<td><strong><?php echo $row_prjct[1]; ?></strong></td>
											<td>

											<?php 

												$query = "SELECT 
															u.user_id,
															u.fname,
															u.mname,
															u.lname,
															u.profile_pic
														FROM users AS u
														JOIN assigned_projects AS ap
														ON u.user_id=ap.user_id
														WHERE ap.assigned_project = ?
														AND ap.isdeleted = ?";
												$stmt = $db->prepare($query);
												$stmt->execute(array($row_prjct[0],0));
												$count = $stmt->rowCount();

												if ( $count > 0 ) {

													while ( $support = $stmt->fetch(PDO::FETCH_NUM )) {

											?>
												<img src="images/avatars/<?php echo $support[4]; ?>" style="height:25px;width:25px;border-radius:20px;" alt="<?php echo $support[1] . ' ' . $support[3]; ?>" />
												<?php echo $support[1] . ' ' . $support[2] . ' ' . $support[3]; ?>
												<a href="#" type="button" class="label label-danger" style="margin-left:12px;" onclick="remove_support(<?php echo $support[0]; ?>,<?php echo $row_prjct[0]; ?>)">
													<i class="fa fa-times"></i>
												</a>
												<br />

											<?php 

													} 
												}else{
													echo 'No support/s assigned.';
												}

											?>

											</td>
											<td><center>
												<button class="btn btn-info btn-md btn-flat btn-rad" type="button" onclick="show_modalsupports(<?php echo $row_prjct[0]; ?>)">
													<i class="fa fa-plus"></i> Add support
												</button>
												<button id="editseverity" class="btn btn-warning btn-md btn-flat btn-rad" onclick="show_editmodal(<?php echo $row_prjct[0]; ?>,'<?php echo $row_prjct[1]; ?>')">
													<i class="fa fa-pencil"></i> Edit
												</button>
												<a class="btn btn-md btn-primary btn-flat btn-rad" href="project-companies.php?pid=<?php echo $row_prjct[0]; ?>&pname=<?php echo $row_prjct[1]; ?>">
													<i class="fa fa-building-o"></i> Companies
												</a>
											</center></td>
										</tr>
										<?php
	                                            }
	                                	?>
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

<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript">


	$(document).ready(function(){

		$('#btn_edit').on('click',function(){
			var pid = $('#project_id2').val();
			var pname = $('#project_name2').val();
			
			$.ajax({
				url:'includes/edit-project-name.php',
				method:'post',
				data:{
					pid:pid,
					pname:pname
				},
				success:function(data){
					location.reload();
				}
			});
		});

	});

	function show_editmodal(id,project_name){
		$('#project_id2').val(id);
		$('#project_name2').val(project_name);
		$('#edit-project').modal('show');
	}

	function new_prjct(){
		//alert("test!");
		var prjct = $("#prjct").val();
		var prjct_desc = $("#prjct_desc").val();
		
		if(prjct == ""){
			swal("Ooops!","Please enter project name.","warning");
		}else{
			$.ajax({
				type:"post",
				url:"includes/add_project_process.php",
				data:"prjct="+prjct,
				complete:function(a){
					if(a.responseText.trim()=="invalid"){
						swal("Ooops!","Project was already added!","warning");
					}else if(a.responseText.trim()=="success"){
						swal({title:"Saved!",text:"Project was successfully added!",type:"success"},
							function(){
								location.reload();
							}
						);
					}
				}
			});	
		}
	}

	function show_modalsupports(id){

		var project_id = id;

		$('#project_id').val(project_id);
		$('#add-support').modal('show');

	}

	function remove_support( sid, pid ){

		var support_id = sid;
		var project_id = pid;
		var remove = 'yes';

		$.ajax({
			url:'includes/project-updates.php',
			type:'post',
			data:{
				support_id:support_id,
				project_id:project_id,
				remove:remove
			},
			success:function(){
				location.reload();
			}
		});

	}

	$(document).ready(function(){

		$('#btn_addsupport').on('click',function(){

			var support_id = $('#project_support').val();
			var project_id = $('#project_id').val();
			var add = 'yes';

			if ( support_id === '' ) {
				swal('Ooops!','Please select a support you want to add in the project.', 'info');
			}else{

				$.ajax({
					url:"includes/project-updates.php",
					type:"post",
					data:{
						support_id:support_id,
						project_id:project_id,
						add:add
					},
					complete:function(data){
						if ( data.responseText.trim() === 'success' ){
							location.reload();
						}else{
							swal('Ooops!',data.responseText,'info');
						}
					}
				});

			}

		});
		
	});

</script>

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
