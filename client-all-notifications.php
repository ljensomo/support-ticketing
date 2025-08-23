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
			 include 'includes/count_client_all_tickets.php'; ?>
			<div class="page-aside email" style="border-right:1px solid #515358;">
			  <div class="fixed nano nscroller">
			    <div class="content">
			      <div class="header">
			        <button class="navbar-toggle" data-target=".mail-nav" data-toggle="collapse" type="button">
			          <span class="fa fa-chevron-down"></span>
			        </button>          
			        <h2 class="page-title"><?php echo $row_comp[1]; ?></h2>
			        <hr style="margin-top:12px;margin-bottom:15px;border-color:#272930;" />
			        <img src="images/state_online.png" alt="Status" />
			        <span><strong><?php echo $row[1] . ' ' . $row[2] . ' ' . $row[3]; ?></strong></span>
			      </div>        
			      <div class="mail-nav collapse">
			        <ul class="nav nav-pills nav-stacked ">
			          <li class="active"><a href="client_open_tickets.php"><span class="label label-primary pull-right"><?php echo $allopentickets[0]; ?></span><i class="fa fa-inbox"></i> Open</a></li>
			          <li><a href="client_pending_tickets.php"><span class="label label-info pull-right"><?php echo $alluserinprogresstickets[0]; ?></span><i class="fa fa-spinner"></i> Pending / In Progress</a></li>
			          <li><a href="client_closed_tickets.php"><span class="label label-info pull-right"><?php echo $allclosedtickets[0]; ?></span><i class="fa fa-lock"></i> Closed</a></li>
			        </ul>
			        <p class="title">More</p>
			        <ul class="nav nav-pills nav-stacked ">
			          <li><a href="client-assigned-projects.php"><span class="label label1 pull-right"></span>Project/s Assigned</a></li>
			        </ul>
			        <div class="compose">
			          <a class="btn btn-flat btn-primary" href="client-create-ticket.php">Create Ticket</a>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
	<?php 
			}
		?>
	        <div class="container-fluid" id="pcont">
                <div class="cl-mcont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" style="border-color:#272930;">
                                <div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
                                    <i class="fa fa-globe" style="padding-right:6px"></i>
                                    All your notifications.
                                </div>
                                <div class="panel-body">
                                    <div class="content">
                                        <div class="table-responsive">
                                            <div id="resultas"></div>
                                                <table class="table table-bordered hover" id="datatable">
                                                    <thead>
                                                        <tr style="background-color:#5f5d5d;color:white;">
                                                            <th class="hidden"><strong>Notification ID</strong></th>
                                                            <th><strong>Description</strong></th>
                                                            <th><strong>Date</strong></th>
                                                            <th><strong>Status</strong></th>
                                                            <th><strong>Action</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php 

                                                        $query = "SELECT id,activity,notif_table,isviewed,DATE_FORMAT(date_created,'%M %d, %Y %h:%S ') FROM notifications WHERE notif_to = ?";
                                                        $stmt = $db->prepare($query);
                                                        $stmt->execute(array($row[0]));
                                                        while( $notifications = $stmt->fetch(PDO::FETCH_NUM)){

                                                    ?>

                                                        <tr>
                                                            <td class="hidden"><?php echo $notifications[0]; ?></td>
                                                            <td><?php echo $notifications[1]; ?></td>
                                                            <td><?php echo $notifications[4]; ?></td>
                                                            <td>
                                                                <?php  

                                                                    if($notifications[3] == 1){
                                                                        echo 'Viewed';
                                                                    }else{
                                                                        echo 'Not yet viewed.';
                                                                    }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-primary btn-flat btn-rad" href="<?php echo $notifications[2]; ?>">View Details</a>
                                                                <!-- <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i>Remove</button> -->
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
