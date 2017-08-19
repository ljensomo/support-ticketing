\<!DOCTYPE html>

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
        <?php include 'includes/topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h2>Time Resolution</h2><br>

                    <ol class="breadcrumb">
                      
                          <a class="btn btn-primary" href="#">Save</a>
                            <a class="btn btn-default" href="#">Cancel</a>
                    </ol>
                </div>	
                <div class="cl-mcont">
                        
                        
                            <div class="block-flat">
                                <div class="header">							
                            <h4>Time will be measured between the Start and Stop conditions below.</h4>
                                </div>
                                  <div class="content">
                                    <div class="row">
                                    <div class="col-md-4">
                            <table>
                                    <h3>Start</h3>
                                    <h4>Begin counting time when.</h4>
                                <thead>
                                   
                                    <tr>

                            <th> <div class="dataTables_filter" id="datatable_filter"><label><input type="text" aria-controls="datatable" class="form-control" class=" fa font-awesome" placeholder="Search"></label></div></th>                                 </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%;"><input type="checkbox"> Issue Created</td>
                                    </tr>
                                    <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Resolution: Cleared</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assignee: From Assigned</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assignee: To Unassigned</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assigend: Changed</td>
                                    </tr>
                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Entered Status: Resolveed</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-md-4">
                            <table>
                                    <h3>Pause on</h3>
                                    <h4>Time is not counting during.</h4>
                                <thead>
                             
                                    <tr>

                                        <th> <div class="dataTables_filter" id="datatable_filter"><label><input type="text" aria-controls="datatable" class="form-control" class=" fa font-awesome" placeholder="Search"></label></div></th>                               </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%;"><input type="checkbox"> Assigned: Set</td>
                                    </tr>
                                    <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assigned: Not Set</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Status: Resolved</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Status: Waiting for Customer</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Status: Waiting for Support</td>
                                    </tr>
                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Resolution: Set</td>
                                    </tr>
                                    <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Resolution: Not Set</td>
                                    </tr>
                                </tbody>
                            </table> 
                            </div>  
                            <div class="col-md-4">
                            <table>
                                    <h3>Stop</h3>
                                    <h4>Finish counting time when.</h4>
                                <thead>

                                    <tr>

                                      <th> <div class="dataTables_filter" id="datatable_filter"><label><input type="text" aria-controls="datatable" class="form-control" class=" fa font-awesome" placeholder="Search"></label></div></th>                                 </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%;"><input type="checkbox"> Resolution: Set</td>
                                    </tr>
                                    <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assignee: From Unassigned</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assignee: To Unassigned</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assignee: Changed</td>
                                    </tr>
                                     <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Assigend: Resolved</td>
                                    </tr>
                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Entered Status: Resolved</td>
                                    </tr>
                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Entered Status: Waiting for Customer</td>
                                    </tr>
                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Entered Status: Waiting for Support</td>
                                    </tr>

                                      <tr>                                      
                                    <td style="width:30%;"><input type="checkbox"> Resolution: Cleared</td>
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
