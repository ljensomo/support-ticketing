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
                    <h2>Users</h2>
                    <ol class="breadcrumb">

                        <li><a href="users.php">Users</a></li>
                        <li class="active">Add User</li>

                    </ol>

                </div>	
                <div class="cl-mcont">

                    <div class="block-flat">
                        <div class="head">  

                            <h3>Input Details</h3>
                            <hr>
                        </div>
                        <div class="content">
                            <form method="POST" action="add_user_account.php" class="form-horizontal group-border-dashed" style="border-radius: 0px;" parsley-validate novalidate>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="First Name" name="firstname" type="text" required onkeypress="return blockSpecialChar(event)">                               

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Middle Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="M.I." name="middlename" type="text">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Last Name" name="lastname" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact Number</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Contact Number" name="contact" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="E-mail address" name="mail" type="text" required>
                                    </div>
                                </div>
                                <div class="spacer text-center">
                                    <button type="submit" class="btn btn-danger btn-lg">Next</button>
                                    <button type="reset" class="btn btn-default btn-lg">Cancel</button>
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>




            <script src="js/jquery.js"></script>
            <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
            <script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
            <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
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
                });
            </script>
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/behaviour/voice-commands.js"></script>
            <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../New folder/js/special_char.js"></script>
    </body>
</html>