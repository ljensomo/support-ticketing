<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/fb-art1.png">
        
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
        <?php include 'includes/portal_topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/client_sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h2><i style="padding-right:5px" class="fa fa-dashboard"></i>DASHBOARD</h2>
                    
                    </div>  
                <div class="cl-mcont">
                
                <div class="col-md-3">
                	<div class="panel panel-default">
                	    <div class="panel-heading" style="height:100px; color: #ffffff; background-color: #ed5b56;">
                	    <div class="fixed">
                	       <h5 style="margin-top:5px; margin-bottom:-60px; font-size:15px; padding-left:100px;">OPEN TICKETS</h5>
                	       <h3 class="pull-left"><i class="fa fa-user" style="font-size:60px; padding-right:90px;"></i><span style="font-size:40px; margin-bottom:30px;"> 44 </span></h3>
					    </div>								
                	    </div>

                		<div class="panel-footer" style="background-color: #ffffff;">
                		  <a href="#"> View Details<i class="pull-right"><i class="fa fa-angle-double-right" style="font-size:20px; padding-left:60px"></i></i></a>              
                		  </div>
                	</div> 
                </div>
                
               <div class="col-md-3">
                	<div class="panel panel-default">
                	    <div class="panel-heading" style="height:100px;  color: #ffffff; background-color:#428bca;">
                	    <div class="fixed">
                	       <h5 style="margin-top:5px; margin-bottom:-60px; font-size:15px; padding-left: 90px;">CLOSED TICKETS</h5>
                	       <h3 class="pull-left"><i class="fa fa-user" style="font-size:60px; padding-right:90px;"></i><span style="font-size:40px; margin-bottom:30px;"> 44 </span></h3>
					    </div>								
                	    </div>

                		<div class="panel-footer" style="background-color: #ffffff;">
                		  <a href="#"> View Details<i class="pull-right"><i class="fa fa-angle-double-right" style="font-size:20px; padding-left:60px"></i></i></a>              
                		  </div>
                	</div> 
                </div>      
                          
                <div class="col-md-3">
                	<div class="panel panel-default">
                	    <div class="panel-heading" style="height:100px; color: #ffffff; background-color: #60c060;">
                	    <div class="fixed">
                	       <h5 style="margin-top:5px; margin-bottom:-60px; font-size:15px; padding-left: 40px;">TICKETS PER COMPANY</h5>
                	       <h3 class="pull-left"><i class="fa fa-user" style="font-size:60px; padding-right:90px;"></i><span style="font-size:40px; margin-bottom:30px;"> 44 </span></h3>
					    </div>								
                	    </div>

                		<div class="panel-footer" style="background-color: #ffffff;">
                		  <a href="#"> View Details<i class="pull-right"><i class="fa fa-angle-double-right" style="font-size:20px; padding-left:60px"></i></i></a>              
                		  </div>
                	</div> 
                </div>
                
                <div class="col-md-3">
                	<div class="panel panel-default">
                	    <div class="panel-heading" style="height:100px; color: #ffffff; background-color: #fcad37;">
                	    <div class="fixed">
                	       <h5 style="margin-top:5px; margin-bottom:-50px; font-size:15px; padding-left: 30px;">CLOSED TICKETS PER DAY</h5>
                	       <h3 class="pull-left"><i class="fa fa-user" style="font-size:60px; padding-right:90px;"></i><span style="font-size:40px; margin-bottom:30px;"> 44 </span></h3>
					    </div>								
                	    </div>

                	<div class="panel-footer" style="background-color: #ffffff;">
                		  <a href="#"> View Details<i class="pull-right"><i class="fa fa-angle-double-right" style="font-size:20px; padding-left:60px"></i></i></a>              
                		  </div>
                	</div> 
                </div>
                
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable" >
                                            <thead>
                                            	<tr>
                                            		<th colspan="8">Recent Tickets</th>
                                            	</tr>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Subject</th>
                                                    <th>Description</th>
                                                    <th>Project</th>
                                                    <th>Status</th>
                                                    <th>Assignee</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                	<td>1</td>
                                                	<td>System Failure!</td>
                                                	<td>I cannot use the system.</td>
                                                	<td>Ticketing System</td>
                                                	<td><center><label class="label label-warning">In Progress</label></center></td>
                                                	<td>None</td>
                                                	<td><center>
                                                		<a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                               			<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                	</center></td>
                                                </tr>
                                                
                                                <tr>
                                                	<td>2</td>
                                                	<td>System Failure!</td>
                                                	<td>I cannot use the system.</td>
                                                	<td>Ticketing System</td>
                                                	<td><center><label class="label label-success">Resolved</label></center></td>
                                                	<td>None</td>
                                                	<td><center>
                                                		<a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                               			<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                	</center></td>
                                                </tr>
                                                
                                                <tr>
                                                	<td>3</td>
                                                	<td>System Failure!</td>
                                                	<td>I cannot use the system.</td>
                                                	<td>Ticketing System</td>
                                                	<td><center><label class="label label-danger">Unresolved</label></center></td>
                                                	<td>None</td>
                                                	<td><center>
                                                		<a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                               			<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                	</center></td>
                                                </tr>
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
