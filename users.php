<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Users - Fortis Ticketing System</title>
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
					  <div class="panel panel-default" style="border-color:#272930;">
					    <div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
					    	<i class="fa fa-users" style="padding-right: 10px"></i>
					    	List of Fortis Technologies Corp. support.
					    </div>
					    <div class="panel-body">						<div class="header">
							<a class="btn btn-default btn-flat btn-rad" data-target="#new_f_user" data-toggle="modal">
							<i class="fa fa-plus-circle" style="padding-right: 10px">
							</i>Add User</a><hr>
						</div>						
						<div class="content">
							<div class="table-responsive">
								<table id="datatable" class="table table-bordered hover">
									<thead>
										<tr style="background-color:#5f5d5d;color:white;">
											<th class="hidden"><strong>User ID</strong></th>
											<th><strong>Full Name</strong></th>
											<th><strong>Contact No.</strong></th>
											<th><strong>E-mail</strong></th>
											<th><strong>Username</strong></th>
											<th><strong>Role</strong></th>
											<th><strong>Status</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<?php
                                                	$sql_fuser = "SELECT 
																a.user_id,  
																a.fname,
																a.mname,
																a.lname,
																a.cnum,
																a.email,
																a.uname,
																a.pass,
																d.user_desc,
																c.user_role,
																a.is_active,
																a.profile_pic,
																a.line_status
																FROM users AS a
																JOIN users_roles AS c ON a.user_id=c.user_id
																JOIN roles AS d ON c.user_role=d.userlevel_id 
																WHERE c.user_role IN (1,2,3)";
			                                        $res_fuser = $db->prepare($sql_fuser);
			                                        $res_fuser->execute();
			                                        while ($row_fuser = $res_fuser->fetch(PDO::FETCH_NUM)) {
                                                ?>
									<tr class="odd gradeX">
										<td class="hidden"><?php echo $row_fuser[0]; ?>
										</td>
										<td>
											<img src="images/avatars/<?php echo $row_fuser[11]; ?>" style="height:25px; width:25px;">
											<strong><?php echo $row_fuser[1] . " " . $row_fuser[2] . " " . $row_fuser[3] ?></strong>
										</td>
										<td><?php echo $row_fuser[4]; ?></td>
										<td><?php echo $row_fuser[5]; ?></td>
										<td><?php echo $row_fuser[6]; ?></td>
										<td><?php echo $row_fuser[8]; ?></td>
										<?php if( $row_fuser[12] == 1){
											echo '<td style="background-color:green;color:white;"><strong>Online</strong></td>';
										}else if ( $row_fuser[12] == 0){
											echo '<td style="background-color:red;color:white;"><strong>Offline</strong></td>';
										} ?>
										<td class="center"><center><?php if ($row_fuser[10] == 1) { ?>
										<a class="btn btn-default btn-sm btn-flat btn-rad" type="button" onclick="de_actvt_user(<?php echo $row_fuser[0]; ?>)">
										<i class="fa fa-unlock"></i></a><?php } else { ?>
										<a class="btn btn-default btn-sm btn-flat btn-rad" type="button" onclick="activate_user(<?php echo $row_fuser[0]; ?>)">
										<i class="fa fa-lock"></i></a><?php } ?>
										<a class="btn btn-info btn-sm btn-flat btn-rad" type="button" onclick="view_fuser('<?php echo $row_fuser[1] . " " . $row_fuser[2] . " " . $row_fuser[3] ?>','<?php echo $row_fuser[4]; ?>','<?php echo $row_fuser[5]; ?>','<?php echo $row_fuser[6]; ?>','<?php echo $row_fuser[8]; ?>')">
										<i class="fa fa-search"></i></a>
										<a class="btn btn-warning btn-sm btn-flat btn-rad" type="button" onclick="edit_fuser(<?php echo $row_fuser[0]; ?>,'<?php echo $row_fuser[1]; ?>','<?php echo $row_fuser[2]; ?>','<?php echo $row_fuser[3]; ?>','<?php echo $row_fuser[4]; ?>','<?php echo $row_fuser[5]; ?>','<?php echo $row_fuser[6]; ?>')">
										<i class="fa fa-pencil"></i></a>
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


<?php include_once 'modals/users_modals.php'; ?>

<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>

<script>

	function edit_fuser(id,fname,mname,lname,cnum,email,uname){
		$("#edit_fuser_id").val(id);
		$("#edit_f_fname").val(fname);
		$("#edit_f_mname").val(mname);
		$("#edit_f_lname").val(lname);
		$("#edit_f_cntct").val(cnum);
		$("#edit_f_email").val(email);
		$("#edit_fusers").modal("show");
		
	}
	function updte_fuser(){
		var id = $("#edit_fuser_id").val();
		var fname = $("#edit_f_fname").val();
		var mname = $("#edit_f_mname").val();
		var lname = $("#edit_f_lname").val();
		var contact = $("#edit_f_cntct").val();
		var email = $("#edit_f_email").val();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		if(fname=="" || lname=="" || email=="" || contact == ""){
			swal({title:"Ooops!", text:"Please complete all necessary fields!", type:"warning"});
		}else if(!emailReg.test(email)){
			swal({title:"Ooops!", text:"Please enter valid email!",type:"warning"},
				function(){
						$('#edit_email').focus();
					}
			);
		}else{
			$.ajax({
				type:"POST",
				url:"includes/edit_user_process.php",
				data:{
					id:id,
					fname:fname,
					mname:mname,
					lname:lname,
					contact:contact,
					email:email
				},
				complete:function(){
					//$('#datatable').load('client_users.php #datatable');
					swal({title:"Saved!", text:"Changes has been successfully saved!", type:"success"},
						function(){
							//location.reload();
							//table.ajax.reload();
							$('#edit_fusers').modal('hide');
							//$('#datatable').refresh();
							location.reload();
							
						}
					);
				}
			})
		}
	}
</script>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="js/behaviour/general.js"></script>
<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="js/jquery.datatables/jquery.datatables.min.js"></script>
<script type="text/javascript" src="js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>


<script type="text/javascript" src="js/table.js"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/behaviour/voice-commands.js"></script>
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
