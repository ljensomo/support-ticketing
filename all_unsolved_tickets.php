<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="shortcut icon" href="images/favicon.png">-->

        <title>Fortis Ticketing System</title>
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        -->
        <link rel="stylesheet" type="text/css" href="css/fonts1.css">
        <link rel="stylesheet" type="text/css" href="css/fonts2.css">
        <link rel="stylesheet" type="text/css" href="css/fonts3.css">

        <!-- Bootstrap core CSS -->
        <link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />

        <link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
        <link rel="stylesheet" type="text/css" href="js/jquery.easypiechart/jquery.easy-pie-chart.css" />
        <link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
        <link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
        <link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
        <link rel="stylesheet" type="text/css" href="js/intro.js/introjs.css" />
        <link rel="stylesheet" href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="js/jquery.magnific-popup/dist/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="js/jquery.niftymodals/css/component.css" />
        <link rel="stylesheet" type="text/css" href="js/bootstrap.summernote/dist/summernote.css" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />

    </head>
    <body>

        <!-- Fixed navbar -->
        <?php include 'includes/topbar.php'; ?>

        <div class="fixed-menu sb-collapsed" id="cl-wrapper">
		<?php include 'includes/sidebar.php'; ?>
		<div class="page-aside email">
      <div class="fixed nano nscroller">
        <div class="content">
          <div class="header">
            <button class="navbar-toggle" data-target=".mail-nav" data-toggle="collapse" type="button">
              <span class="fa fa-chevron-down"></span>
            </button>          
            <h2 class="page-title">Categories</h2>
            <p class="description">Ticket description</p>
          </div>        
          <div class="mail-nav collapse">
            <ul class="nav nav-pills nav-stacked ">
              <li><a href="tickets.php"><span class="label label-primary pull-right">6</span><i class="fa fa-inbox"></i> Open Tickets</a></li>
              <li><a href="close_tickets.php"><i class="fa fa-envelope"></i>Closed tickets</a></li>
              <li class="active"><a href="#"><i class="fa fa-suitcase"></i>Assigned tickets</a></li>
              <li><a href="pending_tickets.php"><span class="label label-default pull-right">3</span><i class="fa fa-file-o"></i> Pending tickets</a></li>

            </ul>
            

          </div>
        </div>
      </div>


		</div>		
	<div class="container-fluid" id="pcont">
    <div class="block-flat">
						<div class="header">							
							<h3>Tickets</h3>
						</div>
						<div class="content">
							<table class="no-border">
								<thead class="no-border">
									<tr>
										<th style="width:4s0%;">Subject</th>
										<th>Company Name</th>
										<th>Requester</th>
										<th>Date Created</th>
										<th>Issue Type</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="no-border-y">
								<?php
                                                $sql = "SELECT * FROM ticket WHERE ticketstatus_id=1";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
									<tr>
										<td><strong><?php echo $row['problem_sum']; ?></strong><br><?php echo $row['problem_desc']; ?></td>
										<td><?php echo $row['CompanyName']; ?></td>
										<td><?php echo $row['Reporter']; ?></td>
										<td><?php echo $row['date_created']; ?></td>
										<td class="text-center"><?php echo $row['ticketstatus_id']; ?></td>
										<td class="center">
										<center>
											<a class="btn btn-info btn-sm" href="#?cid=<?php echo $row['ID']; ?>"><i class="fa fa-search"></i></a>
										</center>
										</td>
									</tr>
									  <?php
                                            }
                                            ?>
								</tbody>
							</table>						
						</div>
					</div>
	
</div>

        <script src="js/jquery.js"></script>
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
