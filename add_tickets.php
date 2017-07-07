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
          <script src="html5shiv.js"></script>
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
                <div class="container">
                    
                    <br>
                    
                        <div class="row">
                        <div class="col-md-3">
                           <div class="block-flat">
                            
                                <ul style="list-style: none;" class="nav nav-pills nav-stacked">

                                    <li  style=" padding: 6px"><a href="homebanner.php" style="color:black; font-size: 140%">Home</a></li>
                                    <li  style=" padding: 6px"><a href="homebanner_tickets.php" style="color:black; font-size: 140%">Tickets</a></li>
                                    <li  style=" padding: 6px"><a href="project.php" style="color:black; font-size: 140%">Projects</a></li>
                                    <li  class="active" style=" padding: 6px"><a href="#" style="color:black; font-size: 140%">Create Ticket</a></li>
                                    <li  style=" padding: 6px"><a href="homebanner_users.php" style="color:black; font-size: 140%">Users</a></li>
                                </ul>
                            </div>
                            </div>

                            <div class="col-md-9">
                                        <div class="block-flat">
                                <div class="head"> 
                                
									<?php 
									
									$project = $_POST['project'];
									$num = $_POST['no'];
									
									$proj_loader = "SELECT * FROM company_proj WHERE id=?";
									$proj_res = $db->prepare($proj_loader);
									$proj_res->execute(array($project));
									$proj_row = $proj_res->fetch(PDO::FETCH_NUM);
									
									?>			 

                                    <h2><?php echo $proj_row[2]; ?></h2>
                                    <h4>Ticket Informations</h4>
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
                                    <form method="POST" action="includes\create_ticket_process.php" class="form-horizontal group-border-dashed"  style="border-radius: 0px;" >
                                        <input type="hidden" name="company_name" value="<?php echo $row[1]; ?>"/>   
                                        
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
                                        
                                        
                                        <div class="form-group">
                                                                                
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Attachment</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="txtAttach" type="file"  placeholder="Drop files here to attach" required>
                                            </div>
	                                        </div>
	                                        
                                </div>
                                <div class="spacer text-center">
                                    <button type="submit" class="btn btn-danger btn-lg">Create Ticket</button>
                                        <button type="reset" class="btn btn-default btn-lg">Cancel</button>
                                </div>

                           
                            </form>
                        </div>
                                
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
        
        <script type="text/javascript" src="js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        

        <script src="js/behaviour/voice-commands.js"></script>
        <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
    </body>
</html>
