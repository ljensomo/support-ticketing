<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Companies - Fortis Ticketing System</title>
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
					    	List of all the clients.
					    </div>
					    <div class="panel-body">
							<div class="header">
								<a class="btn btn-default btn-md btn-flat btn-rad" data-target="#add-company" data-toggle="modal">
								<i class="fa fa-plus-circle" style="padding-right: 10px">
								</i>Add Company</a>
								<hr>
							</div>
							<div class="content">
								<div class="table-responsive">
									<table id="datatable" class="table table-bordered hover">
										<thead>
											<tr style="background-color:#5f5d5d;color:white;">
												<th class="hidden">Company ID</th>
												<th>Company Name</th>
												<th>Company TIN code</th>
												<th>E-mail Address</th>
												<th>Priority Level</th>
												<th>Action</th>
											</tr>
										</thead>
										<?php
	                                                $sql_com = "SELECT * FROM companies";
	                                                $res_com = $db->prepare($sql_com);
	                                                $res_com->execute();
	                                                while ($row_com = $res_com->fetch(PDO::FETCH_NUM)) {
	                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_com[0]; ?>
											</td>
											<td><strong><?php echo $row_com[1]; ?></strong></td>
											<td><?php echo $row_com[2]; ?></td>
											<td><?php echo $row_com[3]; ?></td>

											<?php if( $row_com[4] == 1){
												echo '<td style="background-color:red;color:white;"><strong>High</strong></td>';
											}else if ( $row_com[4] == 2){
												echo '<td style="background-color:orange;color:white;"><strong>Medium</strong></td>';
											}else if ( $row_com[4] == 3){
												echo '<td style="background-color:gray;color:white;"><strong>Low</strong></td>';
											} ?>
											
											<td class="center"><center>
											<a class="btn btn-primary btn-sm btn-flat btn-rad" href="client_projects.php?cid=<?php echo $row_com[0] ?>">
											<i class="fa fa-folder"></i>Projects</a>
											<a class="btn btn-warning btn-sm btn-flat btn-rad" type="button" onclick="edit_company(<?php echo $row_com[0]; ?>,'<?php echo $row_com[1]; ?>','<?php echo $row_com[2]; ?>','<?php echo $row_com[3]; ?>')">
											<i class="fa fa-pencil"></i>Edit</a>
											<a class="btn btn-danger btn-sm btn-flat btn-rad" href="company-users.php?cid=<?php echo $row_com[0]; ?>">
											<i class="fa fa-users"></i>Users</a>
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

<?php include_once 'modals/company_modals.php'; ?>

<script type="text/javascript">
  function add_company(){
            var company_name = $('#company_name').val();
            var company_tin_code = $('#company_tin_code').val();
            var email = $('#company_email').val();
            var priority_level = $('#priority').val();      
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            // alert(priority_level);
            
            if (company_name == "" || company_tin_code == "" || email == "" || priority_level == "") {
              swal({ title : "Ooops!", text : "Please complete all fields!", type : "error"});
            }else if(!emailReg.test(email)){
              swal({title:"Ooops!",text:"Please enter a valid email!",type:"warning"},
                function(){
                  $('#company_email').focus();
                }
              );
            }else{
              $.ajax({

                type:"POST",
                url:"includes/add_client_process.php",
                data: {
                	company_name:company_name,
                	company_tin_code:company_tin_code,
                	email:email,
                	priority:priority_level
                },
                complete : function(request){
            
                
                  if(request.responseText.trim() === "exist"){
                          swal({ title : "Ooops!", text : "Company Name alredy exist!", type : "error"});
                        }else if(request.responseText.trim() === "success"){
                            swal({ title : "Saved!", text : "Successfully Created!", type : "success"},
                                function(){
                                  location.reload();                        
                                      }
                            );
                                  }
                        }
                }); 
            }
            
            
            
            
          }
</script>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

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