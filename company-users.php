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
																a.profile_pic
																FROM users AS a
																JOIN users_roles AS c ON a.user_id=c.user_id
																JOIN roles AS d ON c.user_role=d.userlevel_id 
																WHERE a.company_id = ?";
											$stmt = $db->prepare($query);
											$stmt->execute(array($cid));
											while($users = $stmt->fetch(PDO::FETCH_NUM)){

										?>

											<tr>
												<td class="hidden"><?php echo $users[0]; ?></td>
												<td><img src="images/avatars/<?php echo $users[11]; ?>" style="height:25px;width:25px;"> <?php echo $users[1] . ' ' . $users[2] . ' ' . $users[3]; ?></td>
												<td><?php echo $users[4]; ?></td>
												<td><?php echo $users[5]; ?></td>
												<td><?php echo $users[6]; ?></td>
												<td><?php echo $users[8]; ?></td>
												<td>
													<?php if($users[10] == 1){ ?>

													<button class="btn btn-md btn-danger btn-flat btn-rad" type="button" onclick="de_activate(<?php echo $users[0]; ?>)">
														<i class="fa fa-lock"></i> De-activate
													</button>

													<?php }else{ ?>

													<button class="btn btn-md btn-success btn-flat btn-rad" type="button" onclick="activate(<?php echo $users[0]; ?>)">
														<i class="fa fa-lock"></i> Activate
													</button>

													<?php } ?>
													<!-- <button class="btn btn-md btn-warning btn-flat btn-rad" type="button" onclick="test()"><i class="fa fa-pencil"></i> Edit</button> -->
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

	function new_c_user(){
		var fname = $('#n_c_fname').val();
		var mname = $('#n_c_mname').val();		
		var lname = $('#n_c_lname').val();		
		var cnum = $('#n_c_cnum').val();
		var email = $('#n_c_email').val();
		var uname = $('#n_c_uname').val();
		var pass = $('#n_c_pass').val();		
		var c_pass = $('#n_c_confrm_pass').val();
		var role = $('#n_c_role').val();
		var cid = $('#n_c_cid').val();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
		
		 if(fname == "" || lname == "" || cnum == "" || email == "" || role == "" || uname == "" || pass == "" || c_pass == ""){
                  swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
         }else{ 
                  if(!emailReg.test(email)){
                        swal({ title : "Ooops!", text : "Please enter valid email!", type : "warning"},
                              function(){
                                $('#email').focus();
                              }
                        );                          
                  }else if(c_pass == pass){
                        $.ajax({
                        	type:"post",
                        	url:"includes/new_c_user_process.php",
                        	data:{
                        		fname:fname,
                        		mname:mname,
                        		lname:lname,
                        		cnum:cnum,
                        		uname:uname,
                        		email:email,
                        		pass:pass,
                        		role:role,
                        		cid:cid
                        	},
                        	complete:function(a){
                        		//swal({title:"Success", text:a.responseText.trim(), type:"success"});
								if(a.responseText.trim()=="success"){
									swal({title:"Success", text:"Successfully saved!", type:"success"},
										function(){
											location.reload();
										}
									);
								}else if(a.responseText.trim()=="exist"){
									swal("Ooops!","The username you entered already exist!","warning");
								}
                        	}
                        });
                  }else{
		                swal({title:"Ooops", text:"Password did not matched", type:"warning"});
		                $('#n_c_confrm_pass').val('');
		                $('#n_c_confrm_pass').focus();
                  }
         }//condition
	}	

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
