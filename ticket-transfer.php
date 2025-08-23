<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
       <link rel="shortcut icon" href="images/fb-art1.png">

        <title>Ticket Request - Fortis Ticketing System</title>
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
        <?php include 'includes/topbar.php'; ?>

        <div class="fixed-menu" id="cl-wrapper">
		<?php include 'includes/sidebar.php'; ?>
		
	        <div class="container-fluid" id="pcont">
                <div class="cl-mcont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" style="border-color:#272930;">
                                <div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
                                    <i class="fa fa-ticket" style="padding-right:10px"></i>
                                    Request Details
                                </div>
                                <div class="panel-body">

                                    <?php 

                                        if(isset($_GET['tid'])){

                                            $tid = $_GET['tid'];

                                            $query = "SELECT
                                                            t.ticket_id,
                                                            u.user_id,
                                                            u.fname,
                                                            u.mname,
                                                            u.lname,
                                                            p.proj_desc,
                                                            td.problem_subject,
                                                            td.problem_desc,
                                                            td.attachment
                                                        FROM tickets AS t
                                                        JOIN ticket_progress AS tp
                                                        ON t.ticket_id=tp.ticket_id
                                                        JOIN ticket_details AS td
                                                        ON t.ticket_id=td.ticket_id
                                                        JOIN projects AS p
                                                        ON t.project=p.proj_id
                                                        JOIN users AS u
                                                        ON t.reporter_id=u.user_id
                                                        WHERE t.ticket_id=?";
                                            $stmt = $db->prepare($query);
                                            $stmt->execute(array($tid));
                                            $ticket = $stmt->fetch(PDO::FETCH_NUM);

                                            $query2 = "SELECT
                                                            tp.ticket_id,
                                                            u.user_id,
                                                            u.fname,
                                                            u.mname,
                                                            u.lname
                                                        FROM ticket_progress AS tp
                                                        JOIN users AS u
                                                        ON tp.assignto_id=u.user_id
                                                        WHERE tp.ticket_id=?";
                                            $stmt2 = $db->prepare($query2);
                                            $stmt2->execute(array($tid));
                                            $requestor = $stmt2->fetch(PDO::FETCH_NUM);


                                        }else{
                                            openWindow($goto = "index.php");
                                        }

                                    ?>

                                    <div class="header">
                                        <div class="pull-right actions">
                                        </div>                          
                                        <h3><?php echo $requestor[2] . ' ' . $requestor[4]; ?> sent a request.</h3>
                                        <hr style="border: 0.5px solid #949598;">
                                    </div>
                                    <div class="content">
                                        <input type="hidden" id="ticket_id" value="<?php echo $tid; ?>" />
                                        <input type="hidden" id="sender_id" value="<?php echo $requestor[1]; ?>" />
                                        <div class="alert alert-info">
                                            <h4><i class="fa fa-info-circle sign"></i>
                                            <strong><?php echo $requestor[2] . ' ' . $requestor[4]; ?></strong> is requesting to transfer his ticket to you.</h4>
                                        </div>
                                        <h4>Ticket Details</h4>
                                        <hr style="border: 0.5px solid #949598;">
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <h4><strong>Created by :</strong> <?php echo $ticket[2] . ' ' . $ticket[3] . ' ' . $ticket[4]; ?></h4>
                                                <hr />
                                                <h4><strong>Project :</strong> <?php echo $ticket[5]; ?></h4>
                                                <hr />
                                                <h4><strong>Subject :</strong> <?php echo $ticket[6]; ?></h4>
                                                <hr />
                                                <h4><strong>Descrption :</strong> <?php echo $ticket[7]; ?></h4>
                                                <hr />
                                                <a class="btn btn-md btn-primary" href="view-ticket.php?tid=<?php echo $ticket[0]; ?>" target="_blank">View more...</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="image-zoom" href="attachment/sample4.jpg">
                                                    <center>
                                                        <img src="attachment/<?php echo $ticket[8]; ?>" class="img-thumbnail" style="height:300px;width:1100px;">
                                                    </center>
                                                </a>
                                            </div>
                                        </div>
                                        <hr style="border: 0.5px solid #949598;">
                                        <button class="btn btn-lg btn-default" id="btn_cancel">Cancel</button>
                                        <button class="btn btn-lg btn-primary" id="btn_accept">Accept</button>
                                    </div>
                                </div>
                            </div>			
                        </div>
                    </div>

                </div>
            </div>	
        </div>

        <?php include('modals/ticket-modals.php'); ?>

	<script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">

        $('#btn_accept').on('click', function(){

            var ticket_id = $('#ticket_id').val();
            var from = $('#sender_id').val();
            var sender = $('#logged_id').val();
            var reply = 'reply';

            $.ajax({
                url:"includes/transfer-request.php",
                type:"post",
                data:{
                    ticket_id:ticket_id,
                    from:from,
                    sender:sender,
                    reply:reply
                },
                complete:function(data){
                    window.location.href='my-tickets.php';
                }
            });

        });

    </script>

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
