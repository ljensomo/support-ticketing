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
	<?php include 'includes/sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default" style="border-color:#272930;">
						<div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
							List of Ticket Status
						</div>
						<div class="panel-body">
							<div class="header">
								<a class="btn btn-default btn-flat btn-rad" data-target="#add-status-modal" data-toggle="modal">
									<i class="fa fa-plus-circle"></i> Add Status
								</a> 
							</div>
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr  style="background-color:#5f5d5d;color:white;">
												<th class="hidden">Status ID</th>
												<th>Status</th>
												<th>Description</th>
												<th>Action</th>
											</tr>
										</thead>
										<?php
	                                                $sql = "SELECT * FROM status";
	                                                $res = $db->prepare($sql);
	                                                $res->execute();
	                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
	                                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row['status_id']; ?>
											</td>
											<td><?php echo $row['status_desc']; ?>
											</td>
											<td><?php echo $row['description']; ?>
											</td>
											<td><center>
												<a id="view" class="btn btn-info btn-md btn-flat btn-rad">
													<i class="fa fa-search"></i> View
												</a>
												<a id="edit" class="btn btn-warning btn-md btn-flat btn-rad">
													<i class="fa fa-pencil"></i> Edit
												</a>
											<!--<a class="btn btn-danger btn-sm" onclick="del_status(<?php echo $row['status_id']; ?>)">
											<i class="fa fa-trash-o"></i></a>-->
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
<?php include_once 'modals/status_modals.php'; ?>
<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
          $('.table tbody tr').on('click','#edit',function(){
            var currow = $(this).closest('tr');
            var col1 = currow.find('td:eq(0)').text();
            var col2 = currow.find('td:eq(1)').text();
            var col3 = currow.find('td:eq(2)').text();
            //var result = col1+'\n'+col2+'\n'+col3;
            //alert(result);
            $('#edit_status').modal('show');
            $('#edit_status_id').val(col1);
            $('#edit_status_desc').val(col2);
            $('#edit_status_description').val(col3);
            
        })
          </script>
<script>
          $('.table tbody tr').on('click','#view',function(){
            var currow = $(this).closest('tr');
            var col1 = currow.find('td:eq(0)').text();
            var col2 = currow.find('td:eq(1)').text();
            var col3 = currow.find('td:eq(2)').text();
            //var result = col1+'\n'+col2+'\n'+col3;
            //alert(result);
            $('#view_status').modal('show');
            $('#view_status_ud').val(col1);
            $('#view_sttus').val(col2);
            $('#view_desc').val(col3);
            
        })
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
