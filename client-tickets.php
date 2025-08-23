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
							<?php 

								$pname = $_GET['pname']; 
								echo 'Tickets in ' . $pname;

							?>
					    </div>
					    <div class="panel-body">
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr style="background-color:#5f5d5d;color:white;">
												<th class="hidden"><strong>Ticket #</strong></th>
												<th><strong>Company</strong></th>
												<th><strong>Project</strong></th>
												<th><strong>Issue</strong></th>
												<th><strong>Date Created</strong></th>
												<th><strong>Reporter</strong></th>
												<th><strong>Status</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<?php

												$pid = $_GET['pid'];

	                                                $query = "SELECT 
                                            				a.ticket_id,
                                                            b.proj_desc,
                                                            a.transaction_id,
                                                            a.reporter_id,
                                                            DATE_FORMAT(a.date_created,'%M %d, %Y %h:%s'),
                                                            c.fname,
                                                            c.mname,
                                                            c.lname,
                                                            e.before_status,
                                                            f.status_desc,
                                                            c.company_id,
                                                            a.project
			                                            FROM tickets AS a 
			                                            JOIN projects AS b
			                                            ON a.project=b.proj_id
			                                            JOIN users AS c
			                                            ON a.reporter_id=c.user_id
			                                            JOIN ticket_progress AS e 
			                                            ON a.ticket_id=e.ticket_id
			                                            JOIN STATUS AS f 
			                                            ON e.before_status=f.status_id
			                                            JOIN companies AS g
														ON c.company_id=g.id 
			                                            WHERE b.proj_id = ?";
	                                                $stmt = $db->prepare($query);
	                                                $stmt->execute(array($pid));
	                                                while ($tickets = $stmt->fetch(PDO::FETCH_NUM)) {
	                                                    ?>
									<tr class="odd gradeX">
										<td class="hidden"><?php echo $row_tickets[0]; ?>
										</td>
										<td><strong>

                                            <?php 

                                            $sql_c = "SELECT company_name FROM companies WHERE id = ?";
                                            $res_c = $db->prepare($sql_c);
                                            $res_c->execute(array($tickets[10]));
                                            $row_c = $res_c->fetch(PDO::FETCH_NUM);
                                            echo $row_c[0];

                                            ?>											

										</strong></td>
										<td><?php echo $tickets[1]; ?></td>

	                                        <?php 

	                                            $query_1 = "SELECT 
	                                                        id,
	                                                        ticket_id,
	                                                        problem_subject,
	                                                        problem_desc,
	                                                        attachment,
	                                                        issue_status
	                                                    FROM ticket_details
	                                                    WHERE ticket_id = ?";
	                                            $stmt_1 = $db->prepare($query_1);
	                                            $stmt_1->execute(array($tickets[0]));
	                                            $descriptions = $stmt_1->fetch(PDO::FETCH_NUM);

	                                        ?>

										<td><strong><?php echo $descriptions[2]; ?>
										</strong><br><small><?php echo substr($descriptions[3],0,30); ?>
										</small></td>
										<td><?php echo $tickets[4] ?></td>
										<td><?php echo $tickets[5] . " " . $tickets[7]; ?>
										</td>
										<td><center>
											<label class="label label-info"><?php echo $tickets[9]; ?>
											</label>
											</center></td>
										<td class="center"><center>

										<?php if($row[8]==1){ ?>

										<a class="btn btn-info btn-sm" href="view-ticket.php?tid=<?php echo $tickets[0]; ?>">
										<i class="fa fa-search"></i></a>

										<?php } ?>

										<a class="btn btn-primary btn-sm btn-flat btn-rad" type="button" href="view-ticket.php?tid=<?php echo $tickets[0]; ?>">
											View Ticket
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
