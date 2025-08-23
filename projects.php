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

<!-- Fixed navbar --><?php include 'includes/client-topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php 
		if($row[11] == 4){
			include 'includes/client_sidebar.php'; 
		}else{
			include 'includes/client-user-sidebar.php'; 
		}
	?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default" style="border-color:#272930;">
						<div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
							All projects of <?php echo $row_comp[1]; ?> with Fortis Technologies Corp.
						</div>
						<div class="panel-body">
							<div class="content">
							<input type="hidden" id="logged_id" value="<?php echo $row[0]; ?>">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered">
										<thead>
											<tr  style="background-color:#5f5d5d;color:white;">
												<th class="hidden">ID</th>
												<th class="hidden">Project ID</th>
												<th><strong>Project Description</strong></th>
												<th><strong>Assigned</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<?php
	                                        $sql_tckts = "SELECT a.id,a.company_id,a.project_id,a.assignee_id,c.proj_desc																
	                                        FROM company_proj AS a 
											JOIN companies AS b 
											ON a.company_id=b.id
											JOIN projects AS c 
											ON a.project_id=c.proj_id WHERE company_id = ?
											GROUP BY a.project_id";
	                                        $res_tckts = $db->prepare($sql_tckts);
	                                        $res_tckts->execute(array($row[4]));
	                                        while ($row_tckts = $res_tckts->fetch(PDO::FETCH_NUM)) {
	                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_tckts[0]; ?>
											</td>
											<td class="hidden"><?php echo $row_tckts[2]; ?>
											</td>
											<td><h5><strong><?php echo $row_tckts[4]; ?></strong></h5></td>
											<td>
											<?php
											 	$count_assgn = "SELECT COUNT(id)
												FROM company_proj AS a
												JOIN users AS b
												ON a.assignee_id=b.user_id
												WHERE b.company_id=? AND a.project_id=?";
												$count_res = $db->prepare($count_assgn);
												$count_res->execute(array($row[4],$row_tckts[2]));
												$count_row = $count_res->fetch(PDO::FETCH_NUM);
													if($count_row[0]>0){
														$slct_assgn = "SELECT
														a.id,
														a.company_id,
														a.project_id,
														a.assignee_id,
														b.fname,
														b.mname,
														b.lname,
														b.profile_pic
														FROM company_proj AS a
														JOIN users AS b
														ON a.assignee_id=b.user_id 
														WHERE a.company_id=? AND a.project_id=?";
														$assgn_res = $db->prepare($slct_assgn);
														$assgn_res->execute(array($row[4],$row_tckts[2]));
														while($assgn_row=$assgn_res->fetch(PDO::FETCH_NUM)){ ?>
														<img src="images/avatars/<?php echo $assgn_row[7]; ?>" alt="<?php echo $assgn_row[4] . " " . $assgn_row[6]; ?>" style="height:25px;width:25px;border-radius:20px;">
														<?php
															echo $assgn_row[4] . " " . $assgn_row[5] . " " . $assgn_row[6] . '<br>';	
														}
													}else{
														echo 'None';
													}
											?>
											</td>
											<td class="center">
												<center>
													<a class="btn btn-danger btn-sm" onclick="assgn_to(<?php echo $row[4];  ?>,<?php echo $row_tckts[2]; ?>)">
														<i class="fa fa-user"></i>Assign User/s
													</a>
												</center>
											</td>
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
<?php include_once 'modals/company_projects_modals.php'; ?>
<script src="js/functions.js"></script>
<!-- function source -->
<script src="js/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

	    function load_unseen_notifications(view = ''){

	        var user_id = $('#logged_id').val();

	        $.ajax({
	                url:"includes/fetch-notifications.php",
	                method:"POST",
	                data:{
	                    user_id:user_id,
	                    view:view
	                },
	                dataType:"json",
	                success:function(data){
	                    $('#notifications').html(data.notifications);
	                    if(data.count > 0){
	                        $('#count').html(data.count);
	                        $('#count').show();
	                    }
	                }
	        });

	    }

	    load_unseen_notifications();

	    setInterval(function(){
	        load_unseen_notifications();
	    }, 5000);

	    $('#notif-dropdown').on('click',function(){
	        $('#count').hide();
	        load_unseen_notifications('yes');
	    });

	});
</script>
		<script>
        	function assgn_to(cid,pid){
        			$.ajax({
					type:"POST",
					url:"includes/load_assgnee.php",
					data:{
						cid:cid,
						pid:pid
					},
					success:function(data){
						$("#assign_modal").html(data);
						//alert(data);
						$('#assgn_user').modal('show');	
					}
				})
        	}
        	function view_dtails(cid,pid){
				$.ajax({
					type:"post",
					url:"includes/view_prjct_dtails.phpx",
					data:"cid="+cid+"&11`111`pid="+pid,
					success:function(){
					
					}
				});        		
        	}
// ASSIGN USER

		function assgn(cid){
			var user_id = $('#s_user').val();
			var pid = $('#pid').val();
			var logged_id = $('#logged_id').val();


			if(user_id==""){
				//alert('select user!');
				swal("Ooops!","Please select user!","warning");
			}else{
				$.ajax({
					type:"POST",
					url:"includes/prjct_assgn_process.php",
					data:{
						user_id:user_id,
						pid:pid,
						cid:cid,
						logged_id:logged_id
					},
					complete:function(a){

						if(a.responseText.trim()=="assigned"){
							swal("Ooops!","User is already assigned!","info");
						}else if(a.responseText.trim()=="success"){
							swal({title:"Saved!",text:"The user was successfully assigned.",type:"success"},
								function(){
									location.reload();
								}
							);
						}
					}
				});
			}
		};        	

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
