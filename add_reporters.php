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
                  <li><a href="HomeBanner.php">Home</a></li>
                  <li class="active">Reporters</a></li>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="spacer"></div>
                            <div class="block-flat">
                                <div class="head">  

                                    <h3>Input Details</h3>
                                    <hr>
                                </div>
                                <?php
                                            $loggeduser = $_SESSION['admin'];
                                            $sql = "SELECT * FROM user_info WHERE username = ?";
                                            $res = $db->prepare($sql);
                                            $res->execute(array($loggeduser));
                                            $row = $res->fetch(PDO::FETCH_NUM);

                                            
                                ?>                               
                                <div class="content">
                                    <form method="POST" action="includes\add_reporter_process.php" class="form-horizontal group-border-dashed"  style="border-radius: 0px;" >
                                        <input type="hidden" name="company_id" value="<?php echo $row[4]; ?>"/>   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="First Name" name="fname" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">MI</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Middle Initial" name="mname" type="text" maxlength="11">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Last Name" name="lname" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Assigned Project</label>
                                            <div class="col-sm-6">
                                               
                                                <select class="form-control" name="project_id">
                                                    <option></option>
                                            <?php
                                            $sql2 = "SELECT * FROM company_proj WHERE company_id = ?";
                                            $res2 = $db->prepare($sql2);
                                            $res2->execute(array($row[4]));
                                            while($row2 = $res2->fetch(PDO::FETCH_NUM)) {
                                            ?>
                                                    <option value="<?php echo $row2[0]; ?>"><?php echo $row2[2]; ?></option>
                                                    <?php } ?> 
                                                </select>                                

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Contact #</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Contact Number" name="contact_no" type="text" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email Address</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder="Email Address" name="email_add" type="text" required>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Username</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Username" name="username" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" required parsley-equalto="#password">
                                    </div>
                                </div>
                                <div class="spacer text-center">
                                    <a class="btn btn-default btn-md" href="representatives.php">Back</a>
                                        <button type="submit" class="btn btn-danger btn-md">Save</button>
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

                

                <script src="js/behaviour/voice-commands.js"></script>
                <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
                <script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
                <script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
                <script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
                </body>
                </html>