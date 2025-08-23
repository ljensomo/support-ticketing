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
			<?php 
                    	$cmpny_id = $_GET['cid'];
                    	$slct_cmpny = "SELECT company_name FROM companies WHERE id = ?";
                    	$slct_res = $db->prepare($slct_cmpny);
                    	$slct_res->execute(array($cmpny_id));
                    	$slct_row = $slct_res->fetch(PDO::FETCH_NUM);
                    ?>
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-danger" style="border-color:#272930;">
						<div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
							List of <?php echo $slct_row[0]; ?> projects.
						</div>
						<div class="panel-body">
							<div class="header">
								<a class="btn btn-default btn-md btn-flat btn-rad" data-target="#add_c_project" data-toggle="modal">
									<i class="fa fa-plus-circle" style="padding-right: 10px"></i>
									Add Project
								</a><hr>
							</div>
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr style="background-color:#5f5d5d;color:white;">
												<th class="hidden">ID</th>
												<th class="hidden"><strong>Company ID</strong></th>
												<th class="hidden"><strong>Project ID</strong></th>
												<th><strong>Project Name</strong></th>
												<th><strong>Date Implemented</strong></th>
												<th><strong>Action</strong></th>
											</tr>
										</thead>
										<?php
	                                                $sql_prjct = "SELECT a.id,a.company_id,a.project_id,b.proj_desc,DATE_FORMAT(a.date_implemented,'%M %d, %Y')
	                                                FROM company_proj AS a JOIN projects AS b ON a.project_id=b.proj_id 
	                                                WHERE a.company_id=?
	                                                GROUP BY b.proj_desc";
	                                                $res_prjct = $db->prepare($sql_prjct);
	                                                $res_prjct->execute(array($cmpny_id));
	                                                while ($row_prjct = $res_prjct->fetch(PDO::FETCH_NUM)) {
	                                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_prjct[0]; ?></td>
											<td class="hidden"><?php echo $row_prjct[1]; ?></td>
											<td class="hidden"><?php echo $row_prjct[2]; ?></td>
											<td><strong><?php echo $row_prjct[3]; ?></strong></td>
											<td><strong><?php echo $row_prjct[4]; ?></strong></td>
											<td class="center"><center>
											<a class="btn btn-danger btn-md btn-flat btn-rad" onclick="rmve_prjct(<?php echo $row_prjct[1]; ?>,<?php echo $row_prjct[2]; ?>)">
											<i class="fa fa-times"></i>Remove Project</a>
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

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">

	function add_project(cid){
		
		var prjct = $('#sel_prjct').val();
    	var date_implemented = $('#date_implement').val();

		if(prjct==""){	
			swal("Ooops!","Please select a project!","warning");
		}else if(date_implemented == ""){
			swal("Ooops!","Please select date of implementaion!","warning");
		}else{
			$.ajax({
				type:"post",
				url:"includes/add_cmpnyprjct_process.php",
				data:{
					cid:cid,
					prjct:prjct,
          date_implemented:date_implemented
				},
				complete:function(a){
					if(a.responseText.trim()=="success"){
						swal({title:"Success!",text:"The project was added!",type:"success"},
							function(){
							location.reload();
							}
						);
					}else if(a.responseText.trim()=="exist"){
						swal("Ooops!","The selected project was already added to company!","info");
					}
				}
			});
		}
	}

	function rmve_prjct(cid,pid){
		 swal({
          title: "Are you sure?",
          text: "Do you want to remove the project from the company?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Remove",
          closeOnConfirm: false
        },
        	function(){
				$.ajax({
							type:"post",
							url:"includes/rmve_prjct_process.php",
							data:{
								cid:cid,
								pid:pid
							},
							success:function(data){
								swal({title:"Successs",text:"The was successfully removed from the company",type:"success"},
									function(){
										location.reload();
									}
								);
							}
						});
			}
		);
		 
	}
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
