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
         <script type="text/javascript" src="script/jquery-3.2.1.js"></script>
          <script src="sweetalert-master/dist/sweetalert.min.js"></script>
   	 <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">



    </head>
    <body>
     
   <!-- Fixed navbar -->
      <?php include'includes/portal_topbar.php';?>
         
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
                 
                        
                                                    
                            <div class="header">
                                <a class="btn btn-danger" href="add_reporters.php" ">New +</a>
                            </div>
                            <div class="pull-right">                           
                             <label><input aria-controls="datatable" class="form-control" placeholder="Search" type="text"></label>
                            </div>
             
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>MI</th>
                                            <th>Last Name</th>
                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                                $loggeduser = $_SESSION['admin'];
                                                $sql = "SELECT * FROM user_info WHERE username = ?";
                                                $res = $db->prepare($sql);
                                                $res->execute(array($loggeduser));
                                                $row = $res->fetch(PDO::FETCH_ASSOC);

                                                $cid = $row['company_id'];

                                                $sql2 = "SELECT * FROM user_info WHERE company_id = ? AND user_desc = ?";
                                                $res2 = $db->prepare($sql2);
                                                $res2->execute(array($cid,'Reporter'));
                                                while ($row2 = $res2->fetch(PDO::FETCH_NUM)) {
                                                    ?>
                                      
                                                <tr class="odd gradex">
                                                    <td><?php echo $row2[0]; ?></td>
                                                    <td><?php echo $row2[1]; ?></td>
                                                    <td><?php echo $row2[2]; ?></td>
                                                    <td><?php echo $row2[3]; ?></td>
                                                    
                                                    <td><center>
                                                        <?php if ($row['is_active'] == 1) { ?>
                                                        <a class="btn btn-default btn-sm" href="deactivate_user.php?cid=<?php echo $row2[0]; ?>" type="button"p><i class="fa fa-unlock"></i></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-default btn-sm" href="activate_user.php?cid=<?php echo $row2[0]; ?>"><i class="fa fa-lock"></i></a>
                                                    <?php } ?>
                                                        <a class="btn btn-info btn-sm" href="#.php?id=<?php echo $row2[0]; ?>"><i class="fa fa-pencil">
                                            </i></a>
                                            <button class="btn btn-danger btn-sm" type =" button" onclick="deletedata()"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                    
                                                </tr>
                                                    
                                        <?php } ?>
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
            
            <script type="text/javascript">
            function deletedata() {
            	swal({title: "test", text : "pwede",
            		 type : "warning", 
            		 showCancelButton : true, 
            		 confirmButtonColor : "#dd6b55",
            		  confirmButtonText : "Yes, Delete it!", 
            		  closeOnConfirm : false });
            }
            
            </script>
            

                    
           


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

