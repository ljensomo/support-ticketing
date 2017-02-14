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
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
            </button>
              <a class="navbar-brand" href="#"><span>Fortis</span></a>
      </div>
      <div class="navbar-collapse collapse">
       
        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="dropdown profile_menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar2.jpg" /><span>Administrator</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Messages</a></li>
          <li class="divider"></li>
          <li><a href="#">Sign Out</a></li>
        </ul>
          </li>
        </ul>           
      </div>
    </div>
  </div><!--/.nav-collapse animate-collapse -->
    
    <div id="cl-wrapper" class="fixed-menu">
     <div class="cl-sidebar">
        <div class="cl-toggle"><i class="fa fa-bars"></i></div>
          <div class="cl-navblock">
            <div class="menu-space">
              <div class="content">
                <div class="side-user">
                  <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                    <div class="info">
                      <a href="#">Administrator</a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                  </div>
              <ul class="cl-vnavigation">
                <li><a href="adminindex.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
                <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Support</span></a>
              <ul class="sub-menu">
                <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Create Ticket</a></li>
                <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Add Ticket</a></li>
              </ul>
                <li><a href="accounts.php"><i class="fa fa-envelope nav-icon"></i><span>Accounts</span></a>
                </li>
                </li>
                <li><a href="status_tickets.php"><i class="fa fa-list-alt"></i><span>View ticket</span></a></li>
                </li>
                <li><a href="#"><i class="fa fa-list-alt"></i><span>Employees</span></a>
              <ul class="sub-menu">
                <li><a href="form-elements.html">Components</a></li>
              </ul>
                </li>
                <li><a href="#"><i class="fa fa-table"></i><span>About Us</span></a>
              <ul class="sub-menu">
                <li><a href="tables-general.html">General</a></li>
              </ul>
                </li>              
                <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Email</span></a>
              <ul class="sub-menu">
                <li><a href="email-inbox.html"><span class="label label-primary pull-right">New</span>Inbox</a></li>
                <li><a href="email-read.html"><span class="label label-primary pull-right">New</span>Email Detail</a></li>
              </ul>
                </li>

              </ul>
          </div>
        </div>
          <div class="text-right collapse-button" style="padding:7px 9px;">
            <input type="text" class="form-control search" placeholder="Search..." />
              <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
          </div>
        </div>
            </div>
              <div id="pcont" class="container">
                <div class="cl-mcont">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="block-flat">
                        <div class="header">              
                          <h3>Employee Accounts</h3>
                        </div>
                    <div class="content">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="datatable">
                            <thead>
                              <tr>
                                <th>Lastname</th>
                                <th>Firstname</th>
                                <th>M.I.</th>
                                <th>Username</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                          <tbody>
                            <?php
                              $query = "SELECT * FROM users";
                              $stmt = $con->prepare($query);
                              $stmt->execute();
                                                        
                                  foreach ($stmt->fetchAll() as $data) {
                                    echo '<tr>';
                                    echo '<td>'.$data['lname'].'</td>';
                                    echo '<td>'.$data['fname'].'</td>';
                                    echo '<td>'.$data['mname'].'</td>';
                                    echo '<td>'.$data['username'].'</td>';
                                    echo  '<td class="center"><div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button>';
                                    echo '<div class="btn-group">';
                                    echo '<button data-toggle="dropdown" class="btn btn-md btn-primary dropdown-toggle" type="button">';
                                    echo  '<span class="caret"></span>';
                                    echo   '<span class="sr-only">Toggle Dropdown</span>';
                                    echo '</button>';
                                    echo   '<ul role="menu" class="dropdown-menu pull-right">';
                                    echo   '<li><a href="#">Edit</a></li>';
                                    echo   '<li><a href="#">Delete</a></li>';
                                    echo   '<li class="divider"></li>';
                                    echo   '<li><a href="#">View Details</a></li>';
                                    echo '</ul></div>';
                                    echo '</td>';
                                    echo '</tr>';
                                    echo '</div>';
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
        <script type="text/javascript">
            $(document).ready(function () {
                //initialize the javascript
                App.init();
                //App.dashBoard();        
                /*Sparklines*/
                $(".spk1").sparkline([2, 4, 3, 6, 7, 5, 8, 9, 4, 2, 6, 8, 8, 9, 10], {type: 'bar', width: '80px', barColor: '#4A8CF7'});
                $(".spk2").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 5], {type: 'discrete', width: '80', lineColor: '#4A8CF7', thresholdValue: 4, thresholdColor: '#ff0000'});
                $(".spk4").sparkline([2, 4, 3, 6, 7, 5, 8, 9, 4, 2, 10, ], {type: 'bar', width: '80px', height: '30px', barColor: '#EA6153'});
                $(".spk5").sparkline([5, 3, 5, 6, 5, 7, 4, 8, 6, 9, 8, ], {type: 'bar', width: '80px', height: '30px', barColor: '#4AA3DF'});

                $(".spk3").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
                    type: 'line',
                    lineColor: '#258FEC',
                    fillColor: '#4A8CF7',
                    spotColor: false,
                    width: '80px',
                    minSpotColor: false,
                    maxSpotColor: false,
                    highlightSpotColor: '#1e7ac6',
                    highlightLineColor: '#1e7ac6'});

                //Maps 
                $('#world-map').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    regionStyle: {
                        initial: {
                            fill: '#38c3c1',
                        },
                        hover: {
                            "fill-opacity": 0.8
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 10
                        },
                        hover: {
                            r: 12,
                            stroke: 'rgba(255,255,255,0.8)',
                            "stroke-width": 4
                        }
                    },
                    markers: [
                        {latLng: [41.90, 12.45], name: '1.512 Visits', style: {fill: '#E44C34', stroke: 'rgba(255,255,255,0.7)', "stroke-width": 3}},
                        {latLng: [1.3, 103.8], name: '940 Visits', style: {fill: '#E44C34', stroke: 'rgba(255,255,255,0.7)', "stroke-width": 3}},
                        {latLng: [51.511214, -0.119824], name: '530 Visits', style: {fill: '#E44C34', stroke: 'rgba(255,255,255,0.7)', "stroke-width": 3}},
                        {latLng: [40.714353, -74.005973], name: '340 Visits', style: {fill: '#E44C34', stroke: 'rgba(255,255,255,0.7)', "stroke-width": 3}},
                        {latLng: [-22.913395, -43.200710], name: '1.800 Visits', style: {fill: '#E44C34', stroke: 'rgba(255,255,255,0.7)', "stroke-width": 3}}
                    ]
                });

                /*Pie Chart*/
                var data = [
                    {label: "Google", data: 50},
                    {label: "Dribbble", data: 15},
                    {label: "Twitter", data: 12},
                    {label: "Youtube", data: 14},
                    {label: "Microsoft", data: 14}
                ];

                $.plot('#ticket-chart', data, {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0.5,
                            shadow: {
                                top: 5,
                                left: 15,
                                alpha: 0.3
                            },
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: false
                            },
                            highlight: {
                                opacity: 0.08
                            }
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    },
                    colors: ["#5793f3", "#19B698", "#dd4444", "#fd9c35", "#fec42c", "#d4df5a", "#5578c2"],
                    legend: {
                        show: false
                    }
                });

                $("table td .legend").each(function () {
                    var el = $(this);
                    var color = el.data("color");
                    el.css("background", color);
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                $('.image-zoom').magnificPopup({
                    type: 'image',
                    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
                    zoom: {
                        enabled: true, // By default it's false, so don't forget to enable it
                        duration: 300, // duration of the effect, in milliseconds
                        easing: 'ease-in-out', // CSS transition easing function 
                        opener: function (openerElement) {
                            var parent = $(openerElement);
                            return parent;
                        }
                    }
                });

                //Nifty Modals Init
                $('.md-trigger').modalEffects();

                //Summernote Editor
                $('#summernote').summernote({
                    height: 100,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ]});
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
