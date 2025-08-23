<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
       <link rel="shortcut icon" href="images/fb-art1.png">

        <title>All Tickets - Fortis Ticketing System</title>
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
                                    <i class="fa fa-ticket fa-2x" style="padding-right:10px"></i>
                                    All open tickets of Fortis Technologies Corp.
                                </div>
                                <div class="panel-body">
                                    <div class="content">
                                        <div class="table-responsive">
                                            <div id="resultas"></div>
                                            <table class="table table-bordered hover" id="datatable" >
                                                <thead>
                                                    <tr style="background-color:#5f5d5d;color:white;">
                                                        <th class="hidden"><strong>Ticket #</strong></th>
                                                        <th><strong>Company</strong></th>
                                                        <th><strong>Project</strong></th>
                                                        <th><strong>Issue</strong></th>
                                                        <th><strong>Date Created</strong></th>
                                                        <th><strong>Reporter</strong></th>
                                                        <th><strong>Status</strong></th>
                                                        <th><strong>Action</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $ticket_loader = "SELECT 
                                                        a.ticket_id,
                                                        b.proj_desc,
                                                        a.transaction_id,
                                                        d.problem_subject,
                                                        d.problem_desc,
                                                        a.reporter_id,
                                                        DATE_FORMAT(a.date_created,'%M %d, %Y %h:%s'),
                                                        c.fname,
                                                        c.mname,
                                                        c.lname,
                                                        e.before_status,
                                                        f.status_desc,
                                                        c.company_id,
                                                        e.assignto_id
                                                        FROM tickets AS a 
                                                        JOIN projects AS b
                                                        ON a.project=b.proj_id
                                                        JOIN users AS c
                                                        ON a.reporter_id=c.user_id
                                                        JOIN ticket_details AS d
                                                        ON a.ticket_id=d.ticket_id
                                                        JOIN ticket_progress AS e 
                                                        ON a.ticket_id=e.ticket_id
                                                        JOIN STATUS AS f 
                                                        ON e.before_status=f.status_id
                                                        ORDER BY a.ticket_id DESC";
                                                    $res_tickets = $db->prepare( $ticket_loader);
                                                    $res_tickets->execute(array($row[0]));
                                                    while ($row_tickets =  $res_tickets->fetch(PDO::FETCH_NUM)) {
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td class="hidden"><?php echo $row_tickets[0]; ?></td>
                                                            <td><strong><?php 
                                                                $sql_comp = "SELECT * FROM companies WHERE id = ?";
                                                                $comp_res = $db->prepare($sql_comp);
                                                                $comp_res->execute(array($row_tickets[12]));
                                                                $comp_row = $comp_res->fetch(PDO::FETCH_NUM);
                                                                echo $comp_row[1];
                                                            ?></strong></td>
                                                            <td><?php echo $row_tickets[1]; ?></td>
                                                            <td><strong><?php echo $row_tickets[3]; ?></strong><br><small><?php echo substr($row_tickets[4],0,30); ?>..</small></td>
                                                            <td><?php echo $row_tickets[6] ?></td>
                                                            <td><?php echo $row_tickets[7] . " " . $row_tickets[8] . " " . $row_tickets[9] ?></td>
                                                            <td>
                                                                <label class="label label-default"><?php echo $row_tickets[11]; ?></label>
                                                            </td>
                                                            <td><a href="view-ticket.php?tid=<?php echo $row_tickets[0]; ?>" class="btn btn-sm btn-primary">View Ticket</a></td>
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
