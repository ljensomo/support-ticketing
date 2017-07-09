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
                <div class="block-flat">

                    <div class="stats_bar">
                        <div class="butpro butstyle" data-step="2" data-intro="<strong>Beautiful Elements</strong> <br/> If you are looking for a different UI, this is for you!.">
                            <?php
                                                $sql = "SELECT COUNT(*) FROM ticket";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>                        
                            <div class="sub"><a href="clients.php"><h3>FORTIS CLIENTS</h3></a><span id="total_clientes"><?php echo $row['COUNT(*)']; ?></span></div>
                            <div class="stat btn-danger btn-lg"><i class="fa fa-users"></i></div>
                            <?php } ?>
                        </div>


                        <div class="butpro butstyle">
                        <?php
                                                $sql = "SELECT COUNT(*) FROM ticket WHERE ticketstatus_id=1";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>

                            <div class="sub"><a href="tickets.php"><h3>OPEN TICKETS</h3></a><span><?php echo $row['COUNT(*)']; ?></span></div>
                            <div class="stat btn-info btn-lg"><i class="fa fa-ticket"></i></div>
                            <?php } ?>
                        </div>
                        <div class="butpro butstyle">
                        <?php
                                                $sql = "SELECT COUNT(*) FROM ticket WHERE ticketstatus_id=3";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>                        
                            <div class="sub"><a href="clients.php"><h3>RESOLVED TICKETS</h3></a><span><?php echo $row['COUNT(*)']; ?></span></div>
                            <div class="stat btn-warning btn-lg"><i class="fa fa-tags"></i></div>
                            <?php } ?>
                        </div>  
                        <div class="butpro butstyle">
                        <?php
                                                $sql = "SELECT COUNT(*) FROM ticket WHERE ticketstatus_id=2";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>                        
                            <div class="sub"><a href="pending_tickets.php"><h3>PENDING TICKETS</h3></a><span><?php echo $row['COUNT(*)']; ?></span></div>
                            <div class="stat btn-success btn-lg"><i class="fa fa-edit"></i></div>
                            <?php } ?>


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
