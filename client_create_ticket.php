<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Create Ticket - Fortis Ticketing System</title>
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

<!-- Fixed navbar --><?php include 'includes/portal_topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php include 'includes/client_sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="page-head">
			<?php 
        		$select_company = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE id = ?";
        		$stmt_comp = $db->prepare($select_company);
        		$stmt_comp->execute(array($row[4]));
        		$row_comp = $stmt_comp->fetch(PDO::FETCH_NUM);
             ?>

			<h2><i class="fa fa-building-o"></i>
			<?php echo $row_comp[1]; ?> | <small><i class="fa fa-ticket" style="padding-right: 5px"></i>New Ticket</small></h2>
		</div>
		<div class="cl-mcont">
			<div class="col-md-12">
				<div class="block-flat">
					<div class="header">
						<?php 
                    		$select_company = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE id = ?";
                    		$stmt_comp = $db->prepare($select_company);
                    		$stmt_comp->execute(array($row[4]));
                    		$row_comp = $stmt_comp->fetch(PDO::FETCH_NUM);
	                     ?>
						<h3>
						<i class="fa fa-building-o" style="padding-right: 10px;">
						</i><strong><?php echo $row_comp[1]; ?></strong><small> | 
						Create New Ticket/s</small></h3>
					</div>
					<div class="content">
						<!--<h3><i class="fa fa-plus-circle" style="padding-right:10px;"></i>Create New Ticket</h3><hr>-->
						<form action="includes/create_new_ticket_process.php" class="form-horizontal" enctype="multipart/form-data" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
							<div class="row">
								<div class="col-lg-12">
									<input id="id" name="id" type="hidden" value="<?php echo $row[0] ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span>Issue Type :</span></label>
										<div class="col-sm-6">
											<select id="type" class="select2" name="type">
											<option value="0">-- Type</option>
											<?php
												$sql_issue = "SELECT * FROM issue";
												$issue_res = $db->prepare($sql_issue);
												$issue_res->execute();
												while($issue_row=$issue_res->fetch(PDO::FETCH_NUM)){
											?>
											<option value="<?php echo $issue_row[0]; ?>"><?php echo $issue_row[1]; ?></option>
											<?php } ?>
											</select> </div>
										<a class="btn btn-primary btn-flat md-trigger" data-modal="form-primary" data-toggle="modal" data-target="#new_issue_type">
										<i class="fa fa-plus" style="border-radius: 5px;">
										</i></a></div>
									<hr>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span>Project :</span></label>
										<div class="col-sm-6">
											<select id="project" class="form-control" name="project" required="">
											<option value="">-- Select Project
											</option>
											<?php 
	                                            	if($row[11]==4){
	                                            	$sel_proj = "SELECT a.id,a.company_id,a.project_id,a.assignee_id,c.proj_desc																FROM company_proj AS a 
																JOIN companies AS b 
																ON a.company_id=b.id
																JOIN projects AS c 
																ON a.project_id=c.proj_id WHERE company_id = ?
																GROUP BY c.proj_desc";
																$stmt_proj = $db->prepare($sel_proj);
																$stmt_proj->execute(array($row[4]));
													}else{
													$sel_proj = "SELECT a.id,a.company_id,a.project_id,a.assignee_id,b.proj_desc
																FROM company_proj AS a
																JOIN projects AS b
																ON a.project_id=b.proj_id WHERE a.company_id=? AND a.assignee_id = ?
																GROUP BY b.proj_desc";
																$stmt_proj = $db->prepare($sel_proj);
																$stmt_proj->execute(array($row[4],$row[0]));
													}
													while($row_proj = $stmt_proj->fetch(PDO::FETCH_NUM)){			
	                                            ?>
											<option value="<?php echo $row_proj[2]; ?>">
											<?php echo $row_proj[4]; ?></option>
											<?php 
	                                            	}
	                                            	?></select> </div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span class="auto-style3">Reporter :</span></label>
										<div class="col-sm-6">
											<input id="name" class="form-control" name="name" readonly type="text" value="<?php echo $row[1] . " " . $row[3] ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span class="auto-style3">Transaction No 
										:</span></label>
										<div class="col-sm-6">
											<input id="trans_no" class="form-control" name="trans_no" placeholder="Number" required="" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span>Subject :</span></label>
										<div class="col-sm-6">
											<input id="subject" class="form-control" name="subject" placeholder="Enter issue summary" required="" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span>Issue Description :</span></label>
										<div class="col-sm-6">
											<textarea id="desc" class="form-control" name="desc" placeholder="Enter issue description" required="" rows="3" type="text"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">
										<span>Attachment :</span></label>
										<div class="col-sm-6">
											<input id="attachment" class="form-control" name="attachment" type="file"  required>
										</div>
									</div>
									<div class="spacer text-center">
										<button class="btn btn-default btn-lg" style="width: 150px;" type="reset">
										<i class="fa fa-ban" style="padding-right: 10px;">
										</i>Cancel</button>
										<button class="btn btn-primary btn-lg" style="width: 150px;" onclick="create()">
										<i class="fa fa-mail-forward" style="padding-right: 10px;">
										</i>Create</button></div>
								</div>
							</div>
							<!-- row end -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'modals.php'; ?>
<script type="text/javascript">
	function create(){

	var id = $("#id").val();
	var project = $("#project").val();
	var trans_no = $("#trans_no").val();
	var type = $("#type").val();
	var subject = $("#subject").val();
	var desc = $("#desc").val();
	//var attachment = $("#img")[0].files[0];
	//var attachment = $('input[type=file]').val().split('\\').pop();
	var attachment = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
//		alert(file);
	alert(attachment);
		// $.ajax({
		// 	type:"post",
		// 	url:"includes/create_new_ticket_process.php",
		// 	data:{
		// 		id:id,
		// 		project:project,
		// 		trans_no:trans_no,
		// 		type:type,
		// 		subject:subject,
		// 		desc:desc,
		// 		attachment:attachment
		// 	},
		// 	complete:function(data){
		// 		alert(data);
		// 	}
		// });
	}
</script>
<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
<script src="js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
<script src="js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="js/behaviour/general.js" type="text/javascript"></script>
<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script src="js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="js/jquery.niftymodals/js/jquery.modalEffects.js" type="text/javascript"></script>
<script type="text/javascript">
                $(document).ready(function () {
                    //initialize the javascript
                    App.init();
                    $('.md-trigger').modalEffects();
                });
            </script>
<!-- Bootstrap core JavaScript
            ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/behaviour/voice-commands.js"></script>
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
