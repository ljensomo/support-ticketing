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
        <?php include 'includes/topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h2>Clients</h2>
                    <ol class="breadcrumb">
                        <li class="active">Clients</li>
                        <li><a href="add_client.php">Add Clients</a></li>
                    </ol>
                </div>  
                <div class="cl-mcont">
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="header">                            
                                    <a class="btn btn-primary" href="add_client.php">Add Clients</a>

                                </div>
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable" >
                                            <thead>
                                                <tr>
                                                    <th>User ID</th>
                                                    <th>Company Name</th>
                                                    <th>E-mail address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM client_info";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['company_name']; ?></td>
                                                        <td><?php echo $row['email_address']; ?></td>
                                                        <td class="center">
                                                <center>
                                                    <?php if ($row['is_active'] == 1) { ?>
                                                        <a class="btn btn-default btn-sm" href="de_activate_client.php?cid=<?php echo $row['user_id']; ?>" type="button"p><i class="fa fa-unlock"></i></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-default btn-sm" href="activate_client.php?cid=<?php echo $row['user_id']; ?>"><i class="fa fa-lock"></i></a>
                                                    <?php } ?>
                                                    <a class="btn btn-info btn-sm" href="view_client.php?cid=<?php echo $row['id']; ?>"><i class="fa fa-folder"></i></a>
                                                    <a class="btn btn-warning btn-sm" href="edit_client.php?cid=<?php echo $row['user_id']; ?>" data-toggle="modal"><i class="fa fa-pencil"></i></a>
                                                    
                                                </center>        
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
