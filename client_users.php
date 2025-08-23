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
							All users of <?php echo $row_comp[1]; ?>.
						</div>
						<div class="panel-body">
							<div class="header">
								<button class="btn btn-md btn-default" data-toggle="modal" data-target="#add-client-user"><i class="fa fa-plus"></i>Add user</button>
							</div>
							<div class="content">
								<div class="table-responsive">
									<input id="n_cid" name="n_cid" type="hidden" value="<?php echo $row[4]; ?>">
									<table id="datatable" class="table table-bordered">
										<thead>
											<tr  style="background-color:#5f5d5d;color:white;">
												<th class="hidden">User ID</th>
												<th>Full Name</th>
												<th>Contact No.</th>
												<th>E-mail</th>
												<th>Username</th>
												<th>Role</th>
												<th>Action</th>
											</tr>
										</thead>
										<?php
	                                                $sql_tckts = "SELECT 
	                                                    a.user_id,  
	                                                    a.fname,
	                                                    a.mname,
	                                                    a.lname,
	                                                    a.cnum,
	                                                    a.email,
	                                                    a.uname,
	                                                    a.pass,
							    						c.user_role,
	                                                    d.user_desc,
	                                                    a.is_active
	                                                
	                                                FROM users AS a
	                                                JOIN users_roles AS c ON a.user_id=c.user_id
	                                                JOIN roles AS d ON c.user_role=d.userlevel_id WHERE company_id = ? AND a.user_id!=?";
	                                                $res_tckts = $db->prepare($sql_tckts);
	                                                $res_tckts->execute(array($row[4],$row[0]));
	                                                while ($row_tckts = $res_tckts->fetch(PDO::FETCH_NUM)) {
	                                                    ?>
										<tr class="odd gradeX">
											<td class="hidden"><?php echo $row_tckts[0]; ?>
											</td>
											<td><?php echo $row_tckts[1] . " " . $row_tckts[2] . " " . $row_tckts[3] ?>
											</td>
											<td><?php echo $row_tckts[4]; ?></td>
											<td><?php echo $row_tckts[5]; ?></td>
											<td><?php echo $row_tckts[6]; ?></td>
											<td><?php echo $row_tckts[9]; ?></td>
											<td class="center"><center><?php if ($row_tckts[10] == 1) { ?>
											<a class="btn btn-default btn-sm" href="#" onclick="de_activate(<?php echo $row_tckts[0]; ?>)" type="button">
											<i class="fa fa-unlock"></i></a><?php } else { ?>
											<a class="btn btn-default btn-sm" onclick="activate(<?php echo $row_tckts[0]; ?>)" type="button">
											<i class="fa fa-lock"></i></a><?php } ?>
											<a id="view_user" class="btn btn-info btn-sm">
											<i class="fa fa-search"></i></a>
											<a id="edit_user" class="btn btn-warning btn-sm" onclick="edit_client_user(<?php echo $row_tckts[0] ?>,'<?php echo $row_tckts[1] ?>','<?php echo $row_tckts[2] ?>','<?php echo $row_tckts[3] ?>','<?php echo $row_tckts[4] ?>','<?php echo $row_tckts[5] ?>')">
											<i class="fa fa-pencil"></i></a>
											<!--<a class="btn btn-primary btn-sm">Print Account</a>-->
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
<?php include_once 'modals/client_users_modals.php'; ?>
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
        
        
            $('.table tbody tr').on('click','#view_user',function(){
            var currow = $(this).closest('tr');
            var col1 = currow.find('td:eq(0)').text();
            var col2 = currow.find('td:eq(1)').text();
            var col3 = currow.find('td:eq(2)').text();
            var col4 = currow.find('td:eq(3)').text();
            var col5 = currow.find('td:eq(4)').text();
            var col6 = currow.find('td:eq(5)').text();
            //var result = col1+'\n'+col2+'\n'+col3+'\n'+col4+'\n'+col5+'\n'+col6;
            //alert(result);

            $('#view_users').modal('show');
            $('#view_users_id').val(col1);
            $('#full_name').val(col2);
            $('#contact_no').val(col3);
            $('#e_mail').val(col4);
            $('#user_name').val(col5);
            $('#roles').val(col6);
        });
    
    
    /*        $('.table tbody tr').on('click','#edit_user',function(){
            var currow = $(this).closest('tr');
            var col1 = currow.find('td:eq(0)').text();
            var col2 = currow.find('td:eq(1)').text();
            var col3 = currow.find('td:eq(2)').text();
            var col4 = currow.find('td:eq(3)').text();
            var col5 = currow.find('td:eq(4)').text();
            var col6 = currow.find('td:eq(5)').text();
            //var result = col1+'\n'+col2+'\n'+col3+'\n'+col4+'\n'+col5+'\n'+col6;
            //alert(result);

            $('#edit_users').modal('show');
            $('#edit_users_id').val(col1);
            $('#edit_name').val(col2);
            $('#edit_no').val(col3);
            $('#edit_email').val(col4);
            $('#edit_username').val(col5);
            $('#edit_roles').val(col6);

        })   */
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
