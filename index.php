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

    <link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />

    <link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery.easypiechart/jquery.easy-pie-chart.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="js/intro.js/introjs.css" />
    <link rel="stylesheet" href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" type="text/css" media="screen" />
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
                <h2><i style="padding-right:5px" class="fa fa-dashboard"></i>DASHBOARD</h2>
            </div>
            <div class="cl-mcont">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow" style="border-color: #d9534f;">
                        <div class="panel-heading" style="border-color:#d9534f; color: white;background-color: #d9534f;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-ticket fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 35px;"><?php echo $alltickets; ?></div><br>
                                    <div style="font-size: 20px;">Total No. of<br> Tickets</div>
                                </div>
                            </div>
                        </div>
                        <a href="all-tickets.php">
                            <div class="panel-footer" style="color: #d9534f;background: white;">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow" style="border-color: #337ab7;">
                        <div class="panel-heading" style="border-color:#337ab7; color: white;background-color: #337ab7;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-ticket fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 35px;"><?php echo $allopentickets; ?></div><br>
                                    <div style="font-size: 20px;">Open<br> Tickets</div>
                                </div>
                            </div>
                        </div>
                        <a href="all-open-tickets.php">
                            <div class="panel-footer" style="color: #337ab7;background: white;">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow" style="border-color: #5cb85c;">
                        <div class="panel-heading" style="border-color: #5cb85c; color: white;background-color: #5cb85c;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-ticket fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 35px;"><?php echo $allclosedtickets; ?></div><br>
                                    <div style="font-size: 20px;">Total Closed<br>Tickets</div>
                                </div>
                            </div>
                        </div>
                        <a href="total-closed-tickets.php">
                            <div class="panel-footer" style="color: #5cb85c; background: white;">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow" style="border-color: #f0ad4e;">
                        <div class="panel-heading" style="border-color: #f0ad4e; color: white;background-color: #f0ad4e;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 35px;">
                                        <?php echo $allinprogresstickets; ?>
                                    </div><br>
                                    <div style="font-size: 20px;">In Progress<br>Tickets</div>
                                </div>
                            </div>
                        </div>
                        <a href="all-inprogress-tickets.php">
                            <div class="panel-footer" style="color: #f0ad4e;background: white;">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    </br>
                </div>
                <div class="row dash-cols">
                    <div class="col-sm-6 col-md-6">
                        <div class="panel panel-default" style="border-color:#272930;">
                            <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                                Companies with top number of issues.
                            </div>
                            <div class="panel-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width:50%;"><strong>Company Name</strong></th>
                                            <th><strong>No. of isssues</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $query = "SELECT
                                                        COUNT(t.id) AS total,
                                                        c.company_name
                                                    FROM tickets t
                                                    JOIN company_users AS cu ON t.id=cu.user_id
                                                    JOIN companies AS c ON cu.company_id=c.id
                                                    GROUP BY c.id
                                                    LIMIT 5";
                                        $stmt = $db->prepare($query);
                                        $stmt->execute();
                                        while ($top_companies = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                                <td style="width:30%;"><?php echo $top_companies['company_name']; ?></td>
                                                <td><?php echo $top_companies['total']; ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-primary btn-flat btn-rad">View</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6">
                        <div class="block-flat">
                            <div id="chart-container">
                                <canvas id="bargraph"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>

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
        $.ajax({

            url: "data.php",
            method: "get"

        }).success(function(data) {

            alert(data);

            console.log(data);
            var player = [];
            var score = [];

            for (var i in data) {
                player.push(data[i].date_created);
                score.push(data[i].numbers);
            }



            var ctx = document.getElementById('bargraph').getContext('2d');
            var bargraph = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: player,
                    datasets: [{
                        label: "Severe Tickets",
                        bacgroundColor: "rgba(200,200,200,0.7)",
                        borderColor: "rgba(200,200,200,0.7)",
                        data: score
                    }]
                }
            })

        });

        $(document).ready(function() {
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