<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Open tickets - Fortis Ticketing System</title>
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
							All open tickets of <?php echo $row_comp[1]; ?>.
						</div>
						<div class="panel-body">
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr  style="background-color:#5f5d5d;color:white;">
												<th class="hidden">Ticket #</th>
												<th><strong>Issue</strong></th>
												<th><strong>Project</strong></th>
												<th><strong>Transaction ID</strong></th>
												<th><strong>Date Created</strong></th>
												<th><strong>Assignee</strong></th>
												<?php if($row[11]==4){ ?>
												<th><strong>Created by:</strong></th>
												<?php } ?>
												<th><strong>Status</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<?php
											if($row[11]==4){
	                                                $ticket_loader = "SELECT
															a.ticket_id,
															d.proj_desc,
															a.transaction_id,
															a.reporter_id,
															DATE_FORMAT(a.date_created,'%M %d, %Y'),
															b.before_status,
															b.after_status,
															b.assignto_id,
															b.assign_from_id,
															b.severity_id,
															b.resolution_id,
															b.date_resolved,
															b.date_taken,
															c.problem_subject,
															c.problem_desc,
															c.attachment,
															c.issue_status,
															e.status_desc,
															f.company_id,
															f.fname,
															f.mname,
															f.lname
															
															FROM tickets AS a
															JOIN ticket_progress AS b 
															ON a.ticket_id=b.ticket_id
															JOIN ticket_details AS c
															ON a.ticket_id=c.ticket_id
															JOIN projects AS d 
															ON a.project=d.proj_id
															JOIN STATUS AS e
															ON b.before_status=e.status_id 
															JOIN users AS f
															ON f.user_id=a.reporter_id
															WHERE f.company_id=? 
															AND b.before_status IN (1,4)";       
	                                                $res_tickets = $db->prepare( $ticket_loader);
	                                                $res_tickets->execute(array($row[4]));
	                                                }else{
													 $ticket_loader = "SELECT
														a.ticket_id,
														d.proj_desc,
														a.transaction_id,
														a.reporter_id,
														DATE_FORMAT(a.date_created,'%M %d, %Y'),
														b.before_status,
														b.after_status,
														b.assignto_id,
														b.assign_from_id,
														b.severity_id,
														b.resolution_id,
														b.date_resolved,
														b.date_taken,
														c.problem_subject,
														c.problem_desc,
														c.attachment,
														c.issue_status,
														e.status_desc,
														f.company_id,
														f.fname,
														f.mname,
														f.lname
														FROM tickets AS a
														JOIN ticket_progress AS b 
														ON a.ticket_id=b.ticket_id
														JOIN ticket_details AS c
														ON a.ticket_id=c.ticket_id
														JOIN projects AS d 
														ON a.project=d.proj_id
														JOIN STATUS AS e
														ON b.before_status=e.status_id 
														JOIN users AS f
														ON f.user_id=a.reporter_id
														WHERE f.company_id=? AND b.before_status IN (1,4)";       
	                                                $res_tickets = $db->prepare( $ticket_loader);
	                                                $res_tickets->execute(array($row[4],$row[0]));
	                                               
	                                                }
	                                                while ($row_tickets =  $res_tickets->fetch(PDO::FETCH_NUM)) {
	                                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_tickets[0]; ?>
											</td>
											<td><strong><?php echo substr($row_tickets[13],0,10); ?>
											</strong><br><small><?php echo substr($row_tickets[14],0,30); ?>
											..</small></td>
											<td><strong><?php echo $row_tickets[1]; ?></strong></td>
											<td><?php echo $row_tickets[2]; ?></td>
											<td><?php echo $row_tickets[4]; ?></td>
											<?php 
	                                        	$sel_user = "SELECT * FROM users WHERE user_id=?";
	                                        	$stmt_user = $db->prepare($sel_user);
	                                        	$stmt_user->execute(array($row_tickets[7]));
	                                        	$row_user=$stmt_user->fetch(PDO::FETCH_NUM);
	                                        
	                                        	if ($row_user[0]>0){
	                                        ?>
											<td><?php echo $row_user[1] . " " . $row_user[3] ?>
											</td>
											<?php 
												}else{
	                                        ?>
											<td>Waiting for support...</td>
											<?php } ?><?php if($row[11]==4){ ?>
											<td><?php echo $row_tickets[19] . " " . $row_tickets[21]; ?>
											</td>
											<?php } ?>
											<td><center><?php if ($row_tickets[5] == 1) { ?>
											<label class="label label-default"><?php echo $row_tickets[17]; ?>
											</label><?php } else if ($row_tickets[5] == 4) { ?>
											<label class="label label-info"><?php echo $row_tickets[17]; ?>
											</label><?php } ?>
											</center></td>
											<td>
											<?php if($row[11]==4){ ?>
											<a href="client-view-ticket-details.php?tid=<?php echo $row_tickets[0]; ?>" class="btn btn-sm btn-info">View Ticket</a>
											<?php } ?>
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
<div id="add-user-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button></div>
			<div class="modal-body">
				<div class="text-center">
					<div class="i-circle danger">
						<i class="fa fa-users"></i></div>
					<form action="includes/validation_process.php" class="form-horizontal group-border-dashed" method="POST">
						<select id="sel_issue_type" class="form-control" name="sel_issue_type">
						<option value="1">User</option>
						<option value="2">Client</option>
						</select>
						<h1>User Level</h1>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal" type="button">
				Cancel</button><button class="btn btn-primary" type="submit">Proceed
				</button>
				</form>
			</div>
		</div>
	</div>
</div>
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
