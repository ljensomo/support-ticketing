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
      <?php include'includes/portal_topbar.php';?>
             
         <div class="page-head">
                <h3>Fortis Technologies Corp.</h3>
                <ol class="breadcrumb">
                  <li><a href="HomeBanner.php">Home</a></li>
                  <li ><a href="create.php">Create Ticket</a></li>
                  <li class="active">View Ticket</li>
                </a></ol><a href="view_tickets.php">
            </a></div>

        <div class="cl-mcont">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                 
                        
                                                    
                            <span>Tickets Status</span>
                            <div class="pull-right">                           
                             <label><input aria-controls="datatable" class="form-control" placeholder="Search" type="text"></label>
                            </div>
             
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Ticket #</th>
                                            <th>Company Name</th>
                                            <th>Reporter</th>
                                            <th>Summary</th>
                                             <th>Assignee</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM ticket";
                                        $stmt = $con->prepare($query);
                                        $stmt->execute();
                                                
                                            foreach ($stmt->fetchAll() as $data) {
                                                ?>

                                                <tr class="odd gradex">
                                                    <td><?php echo $data['ID']?></td>
                                                    <td><?php echo $data['CompanyName']?></td>
                                                    <td><?php echo $data['Reporter']?></td>
                                                    <td><?php echo $data['problem_desc']?></td>
                                                    <td class="center">none</td>
                                                    <td><?php echo $data['ticketstatus_id']?></td>
                                                    <td><?php echo $data['date_created']?></td>
                                                    <td>
                                                        <button class="btn btn-default btn-xs" type="button">Actions</button>
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown" class="btn btn-md btn-primary dropdown-toggle" type="button">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="#">Add Comment</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">View Details</a></li>
                                                            </ul>
                                                        </div>
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
                </div>
            </div>
            <div class="col-md-12">
                  <ul class="nav nav-tabs">
                          <li class="active"><a href="#Responsive Comments" data-toggle="tab">Reponsive Comments</a></li>
                          <li><a href="#Internal Comments" data-toggle="tab">Internal Comments</a></li>
                        </ul>
                        
                    <div class="block-flat">
                        
                        <div class="content">
                      
                            <form class="form-horizontal group-border-dashed" action="#" novalidate="">
                                <div class="form-group">
                                    <textarea class="ckeditor form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                      <button type="submit" class="btn btn-primary">Send</button>
                                      <button class="btn btn-default">Cancel</button>
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
