<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Fortis Ticketing System</title>
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
	<?php include 'includes/sidebar.php'; 
	
		$cid = $_GET['cid'];
		$sql_cname = "SELECT id,company_name FROM companies WHERE id=?";
		$cname_res = $db->prepare($sql_cname);
		$cname_res->execute(array($cid));
		$cname_row = $cname_res->fetch(PDO::FETCH_NUM);
	?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-danger" style="border-color:#272930;">
						<div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
							List of <?php echo $cname_row[1]; ?> users.
						</div>
						<div class="panel-body">
							<div class="header">
								<a class="btn btn-default btn-flat btn-rad" data-toggle="modal" data-target="#new_company_user">
								<i class="fa fa-plus-circle" style="padding-right: 10px">
								</i>Add User</a>
								<hr>
							</div>
							<div class="content">
								<div class="table-responsive">
									<table class="table table-bordered hover" id="datatable">
										<thead>
											<tr style="background-color:#5f5d5d;color:white;">
												<th class="hidden"><strong>ID</strong></th>
												<th><strong>Fullname</strong></th>
												<th><strong>Contact No.</strong></th>
												<th><strong>Email</strong></th>
												<th><strong>Username</strong></th>
												<th><strong>Role</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<tbody>

											<?php  
												$query = "SELECT
															u.id,
															CONCAT(fname,' ',lname) AS fullname,
															contact_no,
															email,
															username,
															role_desc,
															avatar, is_active
														FROM company_users cu
														JOIN users AS u ON cu.user_id=u.id
														JOIN user_roles AS ur ON u.id=ur.user_id
														JOIN roles AS r ON ur.role_id=r.id
														WHERE company_id = ?";
												$stmt = $db->prepare($query);
												$stmt->execute(array($cid));
												while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
											?>
											<tr>
												<td class="hidden"><?php echo $user['id']; ?></td>
												<td><img src="images/avatars/<?php echo $user['avatar']; ?>" style="height:25px;width:25px;"> <?=$user['fullname']?></td>
												<td><?php echo $user['contact_no']; ?></td>
												<td><?php echo $user['email']; ?></td>
												<td><?php echo $user['username']; ?></td>
												<td><?php echo $user['role_desc']; ?></td>
												<td>
													<?php if($user['is_active'] == 1){ ?>
														<button class="btn btn-md btn-danger btn-flat btn-rad" type="button" onclick="changeUserStatus(<?php echo $user['id']; ?>, 0)">
															<i class="fa fa-lock"></i> De-activate
														</button>
													<?php }else{ ?>
														<button class="btn btn-md btn-success btn-flat btn-rad" type="button" onclick="changeUserStatus(<?php echo $user['id']; ?>, 1)">
															<i class="fa fa-unlock"></i> Activate
														</button>
													<?php } ?>
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

<?php include_once 'modals/company_modals.php'; ?>

<script src="js/jquery.js"></script>
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

<script type="text/javascript">

	function changeUserStatus(user_id, status){
		$.ajax({
			type:"POST",
			url:"includes/change_user_status_process.php",
			method:"POST",
			data:{user_id:user_id, status:status},
			dataType:"json",
		}).done(function(response){
			if(response.success){
				swal({title:"Success", text:response.message, type:"success"},
					function(){
						location.reload();
					}
				);
			}else{
				swal("Ooops!",response.message,"warning");
			}
		}).fail(function(){
			swal("Ooops!","Something went wrong!","warning");
		});
	}

    function activate(id){
        swal({
            title: "Are you sure?",
            text: "Activate user?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Activate!",
            closeOnConfirm: false
        },function(){
            $.ajax({
                type:"POST",
                url:"includes/activate_client_process.php",
                data:"id="+id,
                success:function(){
                    swal({ title:"Acitvated!", text:"The user was activated.", type:"success"},
                        function(){
                            location.reload();
                        }
                    );
                }
            });
        });
    }

    function de_activate(id){
        swal({
            title: "Are you sure?",
            text: "The user will not be able to login!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, De-Activate it!",
            closeOnConfirm: false
        },function(){
            $.ajax({
                type:"POST",
                url:"includes/de_activate_client_process.php",
                data:"id="+id,
                success:function(){
                    swal({ title:"De-Acitvated!", text:"The user was deactivated.", type:"success"},
                        function(){
                            location.reload();
                        }
                    );
                }
            });
        });
    }

	$("#add-c-user-form").submit(function(e){
		e.preventDefault();
		
		$.ajax({
			url: 'includes/new_c_user_process.php',
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType:"json"
		}).done(function(response){
			if(response.success){
				swal({title:"Success", text:response.message, type:"success"},
					function(){
						location.reload();
					}
				);
			}else{
				swal("Ooops!",response.message,"warning");
			}
		}).fail(function(){
			swal("Ooops!","Something went wrong!","warning");
		});
	});

</script>


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
