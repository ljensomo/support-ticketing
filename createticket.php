<?php 
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png">

        <title>Fortis Ticketing System</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>


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
        <div class="page-head">
                <h3>Fortis Technologies Corp.</h3>
                <ol class="breadcrumb">
                  <li><a href="HomeBanner.php">Home</a></li>
                  <li class="active">Create Ticket</li>
                  <li><a href="view_tickets.php">View Ticket</a></li><a href="view_tickets.php">
                </a></ol>
            </a></div>

                <div class="cl-mcont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                          <div class="header">                          
                            <h3>Ticket Informations</h3>
                          </div>
                          <div class="content">
                             <form method="POST" action="insert.php" class="form-horizontal group-border-dashed" action="#" style="border-radius: 0px;" >
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Issue Type</label>
                                <div class="col-sm-6">
                                  <select class="form-control">
                                    <option>Bug</option>
                                    <option>Normal</option>
                                  </select>                                 
                                
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Company Name</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="text" placeholder="Company name" name="txtCname">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Reporter</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="text" placeholder="Reporter" name="txtReporter">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Number</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="text" placeholder="Contact Number" name="txtCnum">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="email" placeholder="E-mail" name="txtEmail">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-sm-3 control-label">Problem Summary</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="text" placeholder="Summary" name="txtPsummary">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-6">
                                  <textarea class="form-control" placeholder="Problem Description" name="txtArea"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Serverity</label>
                                <div class="col-sm-6">
                                  <select class="form-control">
                                    <option>Minor</option>
                                    <option>Normal</option>
                                    <option>Danger</option>
                                    <option>Severe</option>
                                    <option>Critical</option>
                                  </select>                                 
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-sm-3 control-label">Attachment</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="file" name="txtAttach" placeholder="Drop files here to attach"></textarea>
                                </div>
                              </div>
                           

                          </div>
                          <div class="spacer text-center">
                           <button type="submit" class="btn btn-danger btn-lg">Create Ticket</button>
                           </div>
                        </div>
                         </form>
                    </div>
                </div>
            </div>
      


        <script src="js/jquery.js"></script>
        <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
        <script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
        <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
        <script src="js/jquery.maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
        <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="js/behaviour/general.js"></script>
        <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                //initialize the javascript
                App.init();
                App.masks();
            });
        </script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/behaviour/voice-commands.js"></script>
        <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
