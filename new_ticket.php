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

        <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

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
                    <h2><i style="padding-right:5px" class="fa fa-dashboard"></i>DASHBOARD | <small>Fortis Technologies Corp.</small></h2>
                    
                </div>  
                <div class="cl-mcont">
                                    <div class="block-flat">
                    <div class="header">
                        <h3>
                        <i class="fa fa-building-o" style="padding-right: 10px;">
                        </i><strong>Fortis Technologies Corp.</strong><small> | 
                        Create New Ticket/s</small></h3>
                    </div>
                    <div class="content">
                        <!--<h3><i class="fa fa-plus-circle" style="padding-right:10px;"></i>Create New Ticket</h3><hr>-->
                        <form action="includes/create_new_ticket_process.php" class="form-horizontal" enctype="multipart/form-data" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="id" name="id" type="hidden" value="<?php echo $row[0] ?>">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span>Issue Type :</span></label>
                                        <div class="col-sm-6">
                                            <select id="type" class="select2" name="type">
                                            <option value="0">-- Type</option>
                                            <?php
                                                $sql_issue = "SELECT * FROM issue";
                                                $issue_res = $db->prepare($sql_issue);
                                                $issue_res->execute();
                                                while($issue_row=$issue_res->fetch(PDO::FETCH_NUM)){
                                            ?>
                                            <option value="<?php echo $issue_row[0]; ?>"><?php echo $issue_row[1]; ?></option>
                                            <?php } ?>
                                            </select> </div>
                                        <a class="btn btn-primary btn-flat md-trigger" data-modal="form-primary" data-toggle="modal" data-target="#new_issue_type">
                                        <i class="fa fa-plus" style="border-radius: 5px;">
                                        </i></a></div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span>Project :</span></label>
                                        <div class="col-sm-6">
                                            <select id="project" class="select2" name="project" required="">
                                            <option value="">-- Select Project
                                            </option>
                                            <?php 
                                                $sql_proj = "SELECT proj_id,proj_desc FROM projects";
                                                $proj_res = $db->prepare($sql_proj);
                                                $proj_res->execute();
                                                while($proj_row = $proj_res->fetch(PDO::FETCH_NUM)){
                                            ?>
                                            <option value="<?php echo $row_proj[0]; ?>">
                                            <?php echo $proj_row[1]; ?></option>
                                            <?php 
                                                    }
                                            ?></select> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span class="auto-style3">Reporter :</span></label>
                                        <div class="col-sm-6">
                                            <input id="name" class="form-control" name="name" readonly type="text" value="<?php echo $row[1] . " " . $row[3] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span class="auto-style3">Transaction No 
                                        :</span></label>
                                        <div class="col-sm-6">
                                            <input id="trans_no" class="form-control" name="trans_no" placeholder="Number" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span>Subject :</span></label>
                                        <div class="col-sm-6">
                                            <input id="subject" class="form-control" name="subject" placeholder="Enter issue summary" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span>Issue Description :</span></label>
                                        <div class="col-sm-6">
                                            <textarea id="desc" class="form-control" name="desc" placeholder="Enter issue description" required="" rows="3" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                        <span>Attachment :</span></label>
                                        <div class="col-sm-6">
                                            <input id="attachment" class="form-control" name="attachment" type="file"  required>
                                        </div>
                                    </div>
                                    <div class="spacer text-center">
                                        <button class="btn btn-default btn-lg" style="width: 150px;" type="reset">
                                        <i class="fa fa-ban" style="padding-right: 10px;">
                                        </i>Cancel</button>
                                        <button class="btn btn-primary btn-lg" style="width: 150px;" type="submit">
                                        <i class="fa fa-mail-forward" style="padding-right: 10px;">
                                        </i>Create</button></div>
                                </div>
                            </div>
                            <!-- row end -->
                        </form>
                    </div>
                </div>
                </div>
                <!--#ed5b56-->

                          



                


        
    

                
                

            </div>
              

                
            
                
                
                        

                </div>

  
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
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
    <script src="js/skycons/skycons.js" type="text/javascript"></script>
    <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="js/intro.js/intro.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


    <script type="text/javascript" src="js/table.js"></script>
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
    <script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
