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
                    <h2><i style="padding-right:5px" class="fa fa-ticket"></i>Tickets</h2>
                    
                    </div>  
                <div class="cl-mcont">
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="header">                            
                                    <h3>Pending Tickets</h3>

                                </div>
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable" >
                                            <thead>
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
                                                    <td>Log-in Failure!</td>
                                                    <td>I cannot use the system.</td>
                                                    <td>Ticketing System</td>
                                                    <td><center><label class="label label-primary">Closed</label></center></td>
                                                    <td>None</td>
                                                    <td><center>
                                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                    </center></td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>System Error!</td>
                                                    <td>I dont know what happen.</td>
                                                    <td>Payroll System</td>
                                                    <td><center><label class="label label-warning">Unresolved</label></center></td>
                                                    <td>None</td>
                                                    <td><center>
                                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                    </center></td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Database Failure!</td>
                                                    <td>I cannot access the system.</td>
                                                    <td>Inventory System</td>
                                                    <td><center><label class="label label-info">In Progress</label></center></td>
                                                    <td>None</td>
                                                    <td><center>
                                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                    </center></td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Message Errors!</td>
                                                    <td>I cannot message the clients.</td>
                                                    <td>Helpdesk System</td>
                                                    <td><center><label class="label label-danger">Pending</label></center></td>
                                                    <td>None</td>
                                                    <td><center>
                                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                    </center></td>
                                                </tr>

                                                  <tr>
                                                    <td>5</td>
                                                    <td>Notification Failure!</td>
                                                    <td>I cannot see the notification at the system.</td>
                                                    <td>None</td>
                                                    <td><center><label class="label label-default">Open</label></center></td>
                                                    <td>None</td>
                                                    <td><center>
                                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                    </center></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>6</td>
                                                    <td>Computing Failure!</td>
                                                    <td>I cannot use the system to compute grades.</td>
                                                    <td>Grading System</td>
                                                    <td><center><label class="label label-success">Resolved</label></center></td>
                                                    <td>Lorenz John Ensomo</td>
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
         <div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <div class="i-circle danger"><i class="fa fa-users"></i></div>
                                                         <form method="POST" action="includes/validation_process.php" class="form-horizontal group-border-dashed">
                                                            <select class="form-control" id="sel_issue_type" name="sel_issue_type">
                                                        <option value="1">User</option>
                                                        <option value="2">Client</option>
                                                            </select>
                                                        
                                                        <h1>User Level</h1>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                               

                                                    <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel </button>

                    
                                                    <button class="btn btn-primary" type="submit">Proceed</button>

                                                  </form>
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
