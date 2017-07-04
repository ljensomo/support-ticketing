<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
       <link rel="shortcut icon" href="images/fb-art1.png">

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

        <div id="cl-wrapper" class="fixed-menu">

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h3>Fortis Technologies Corp.</h3>
                    <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="create.php" class="active">Create Ticket</a></li>
                        <li><a href="validate.php">View Ticket</a></li>
                    </ol>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="spacer"></div>
                            <div class="block-flat">
                                <div class="head">  

                                    <h3>Ticket Informations</h3>
                                    <hr>
                                </div>
                                <div class="content">
                                    <form method="POST" action="controler\inserttickets.php" class="form-horizontal group-border-dashed"  style="border-radius: 0px;" >
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Issue Type</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="sel_issue_type">
                                                    <option value="1">  Bug</option>
                                                    <option value="2">Normal</option>
                                                </select>                                 

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Company Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Company name" name="txtCname" type="text" required>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Reporter</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Reporter" name="txtReporter" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Contact Number</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Contact Number" name="txtCnum" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">E-mail</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="email" placeholder="E-mail" name="txtEmail" type="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Problem Summary</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Summary" name="txtPsummary" type="text" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" placeholder="Problem Description" name="txtArea" required></textarea>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Serverity</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="sel_sev">
                                                    <option value="5">Minor</option>
                                                    <option value="1">Normal</option>
                                                    <option value="2">Danger</option>
                                                    <option value="3">Severe</option>
                                                    <option value="4">Critical</option>
                                                </select>                                 
                                            </div>
                                        </div>
                                        -->
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


                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>

                <script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
                <script type="text/javascript" src="js/behaviour/general.js"></script>
                <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
                <script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
                <script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
                <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
                <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
                <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
                <script src="js/skycons/skycons.js" type="text/javascript"></script>
                <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
                <script type="text/javascript" src="js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   
                <script type="text/javascript" src="js/bootstrap.summernote/dist/summernote.min.js"></script>

                <script src="js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-us-merc-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-fr-merc-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-uk-mill-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-au-mill-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-in-mill-en.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-map.js"></script>
                <script src="js/jquery.vectormaps/maps/jquery-jvectormap-ca-lcc-en.js"></script>

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