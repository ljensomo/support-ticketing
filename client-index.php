<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Home - Fortis Ticketing System</title>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        -->
<link href="css/fonts1.css" rel="stylesheet" type="text/css">
<link href="css/fonts2.css" rel="stylesheet" type="text/css">
<link href="css/fonts3.css" rel="stylesheet" type="text/css">
<!-- Morris Charts CSS -->
<link href="vendor/morrisjs/morris.css" rel="stylesheet">
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
	<?php include 'includes/client_sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="page-head">
			<h2><i class="fa fa-dashboard" style="padding-right: 5px"></i>DASHBOARD | <small><?php echo $row_comp[1]; ?></small></h2>
		</div>
		<div class="cl-mcont">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow" style="border-color: #d9534f;">
					<div class="panel-heading" style="border-color: #d9534f; color: white; background-color: #d9534f;">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-ticket fa-5x"></i></div>
							<div class="col-xs-9 text-right">
								<div class="huge" style="font-size: 35px;">
									<?php echo $alltickets[0]; ?></div>
								<br>
								<div style="font-size: 20px;">
									Total No. of<br>Tickets</div>
							</div>
						</div>
					</div>
					<a href="client_all_tickets.php">
					<div class="panel-footer" style="color: #d9534f; background: white;">
						<span class="pull-left">View Details</span>
						<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix">
						</div>
					</div>
					</a></div>
			</div>
			<!--#ed5b56-->
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow" style="border-color: #337ab7;">
					<div class="panel-heading" style="border-color: #337ab7; color: white; background-color: #337ab7;">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-ticket fa-5x"></i></div>
							<div class="col-xs-9 text-right">
								<div class="huge" style="font-size: 35px;">
									<?php echo $allopentickets[0]; ?></div>
								<br>
								<div style="font-size: 20px;">
									Open<br>Tickets</div>
							</div>
						</div>
					</div>
					<a href="client-all-open-tickets.php">
					<div class="panel-footer" style="color: #337ab7; background: white;">
						<span class="pull-left">View Details</span>
						<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix">
						</div>
					</div>
					</a></div>
			<br>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow" style="border-color: #5cb85c;">
					<div class="panel-heading" style="border-color: #5cb85c; color: white; background-color: #5cb85c;">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-ticket fa-5x"></i></div>
							<div class="col-xs-9 text-right">
								<div class="huge" style="font-size: 35px;">
									<?php echo $allclosedtickets[0]; ?></div>
								<br>
								<div style="font-size: 20px;">
									Closed<br>Tickets</div>
							</div>
						</div>
					</div>
					<a href="client-all-closed-tickets.php">
					<div class="panel-footer" style="color: #5cb85c; background: white;">
						<span class="pull-left">View Details</span>
						<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix">
						</div>
					</div>
					</a></div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow" style="border-color: #f0ad4e;">
					<div class="panel-heading" style="border-color: #f0ad4e; color: white; background-color: #f0ad4e;">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-ticket fa-5x"></i></div>
							<div class="col-xs-9 text-right">
								<div class="huge" style="font-size: 35px;">
									<?php echo 	$allinprogresstickets[0]; ?>
								</div>
								<br>
								<div style="font-size: 20px;">
									In Progress<br>Tickets</div>
							</div>
						</div>
					</div>
					<a href="client-all-inprogress-tickets.php">
					<div class="panel-footer" style="color: #f0ad4e; background: white;">
						<span class="pull-left">View Details</span>
						<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix">
						</div>
					</div>
					</a></div>
			</div>
		
		</div>
	</div>
</div>


<!-- Morris Charts JavaScript -->
<script type="text/javascript" src="js/script.js"></script>
<script src="vendor/raphael/raphael.min.js"></script>
<script src="vendor/morrisjs/morris.min.js"></script>
<script src="data/morris-data.js"></script>
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
<script src="js/skycons/skycons.js" type="text/javascript"></script>
<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="js/intro.js/intro.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/table.js" type="text/javascript"></script>
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

<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
		      $(document).ready(function(){
		        //initialize the javascript
		        //App.init();
		 	  	App.dashBoard();        
		        
		          introJs().setOption('showBullets', false).start();
		
		      });
    	</script>
<script src="js/behaviour/voice-commands.js"></script>
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/jquery.flot/jquery.flot.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.labels.js" type="text/javascript"></script>

</body>

</html>