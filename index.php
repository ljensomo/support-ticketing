<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png">

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
                <div class="cl-mcont">

                    <div class="stats_bar">
                        <div class="butpro butstyle" data-step="2" data-intro="<strong>Beautiful Elements</strong> <br/> If you are looking for a different UI, this is for you!.">
                            <div class="sub"><h3>THE CLIENTS</h3><span id="total_clientes">170</span></div>
                            <div class="stat"><span class="spk1"><canvas style="display: inline-block; width: 74px; height: 16px; vertical-align: top;" width="74" height="16"></canvas></span></div>
                        </div>
                        <div class="butpro butstyle">
                            <div class="sub"><h3>OPEN TICKETS</h3><span>951,611</span></div>
                            <div class="stat"><span class="up"> 13,5%</span></div>
                        </div>
                        <div class="butpro butstyle">
                            <div class="sub"><h3>CLOSED TICKTES</h3><span>125</span></div>
                            <div class="stat"><span class="down"> 20,7%</span></div>
                        </div>  
                        <div class="butpro butstyle">
                            <div class="sub"><h3>ONGOING TICKETS</h3><span>18</span></div>
                            <div class="stat"><span class="equal"> 0%</span></div>
                        </div>  
                        <div class="butpro butstyle">
                            <div class="sub"><h3>THE ASSIGNEE</h3><span>3%</span></div>
                            <div class="stat"><span class="spk2"></span></div>
                        </div>
                        <div class="butpro butstyle">
                            <div class="sub"><h3>CRITICAL TICKETS</h3><span>184</span></div>
                            <div class="stat"><span class="spk3"></span></div>
                        </div>  

                    </div>  



                    <div class="row dash-cols">
                        <div class="col-sm-6 col-md-6">
                            <div class="widget-block  white-box calendar-box">
                                <div class="col-md-6 blue-box calendar no-padding">
                                    <div class="padding ui-datepicker"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding">
                                        <h2 class="text-center">Monday</h2>
                                        <h1 class="day">2</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-block photo white-box weather-box">
                                <div class="col-md-6 padding photo">
                                    <h2 class="text-center">Monday</h2>
                                    <h1 class="day">10/12/2013</h1>
                                </div>
                                <div class="col-md-6 red-box">
                                    <div class="padding text-center">
                                        <canvas id="sun-icon" width="130" height="215"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#chat-1" data-toggle="tab">Baby<3</a></li>
                                <li><a href="#chat-2" data-toggle="tab">Lorenz</a></li>
                                <li><a href="#chat-3" data-toggle="tab">Jane</a></li>
                            </ul>
                            <div class="tab-content no-padding">
                                <div class="tab-pane active cont" id="chat-1">
                                    <div class="chat-wi">
                                        <div class="chat-space nano nscroller">
                                            <div class="chat-content content">
                                                <div class="chat-conv">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hello? :)</div>
                                                        <div><small>12:20 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="Adam" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Who are you? </div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hmmmmmmm....</div>
                                                        <div><small>12:30 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="Adam" />
                                                    <div class="c-bubble">
                                                        <div class="msg">I don't know you? Can i call you mine? <3</div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div class="chat-in">
                                            <form action="dfgdfg" method="post" name="sd">
                                                <input type="submit" value="SEND" class="btn btn-info pull-right" />
                                                <div class="input">
                                                    <input type="text" placeholder="Send a message..." name="msg" />
                                                </div>
                                                <div class="chat-tools">
                                                    <ul class="nav nav-pills">
                                                        <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                        <li><i class="fa fa-camera"></i></li>
                                                        <li><i class="fa fa-microphone"></i></li>
                                                        <li><i class="fa fa-cloud"></i></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="tab-pane cont" id="chat-2">
                                    <div class="chat-wi">
                                        <div class="chat-space nano nscroller">
                                            <div class="chat-content content">
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="Adam" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hey, are you there?</div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich" />
                                                    <div class="c-bubble">
                                                        <div class="msg">I'm here, how was your day?</div>
                                                        <div><small>12:20 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>                                      
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="Adam" />
                                                    <div class="c-bubble">
                                                        <div class="msg">It was fine, just making some designs...</div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div class="chat-in">
                                            <form action="dfgdfg" method="post" name="sd">
                                                <input type="submit" value="SEND" class="btn btn-info pull-right" />
                                                <div class="input">
                                                    <input type="text" placeholder="Send a message..." name="msg" />
                                                </div>
                                                <div class="chat-tools">
                                                    <ul class="nav nav-pills">
                                                        <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                        <li><i class="fa fa-camera"></i></li>
                                                        <li><i class="fa fa-microphone"></i></li>
                                                        <li><i class="fa fa-cloud"></i></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="tab-pane" id="chat-3">
                                    <div class="chat-wi">
                                        <div class="chat-space nano nscroller">
                                            <div class="chat-content content">
                                                <div class="chat-conv">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hello, what can i do for you?</div>
                                                        <div><small>12:20 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="Lucy" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hi, i need support with my iPhone?</div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hello, how are you? i just though you were here, i'll see you tomorrow.</div>
                                                        <div><small>12:30 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="chat-conv sent">
                                                    <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="Lucy" />
                                                    <div class="c-bubble">
                                                        <div class="msg">Hi, i need support with my iPhone?</div>
                                                        <div><small>12:25 p.m.</small></div>
                                                        <span></span>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div class="chat-in">
                                            <form action="dfgdfg" method="post" name="sd">
                                                <input type="submit" value="SEND" class="btn btn-info pull-right" />
                                                <div class="input">
                                                    <input type="text" placeholder="Send a message..." name="msg" />
                                                </div>
                                                <div class="chat-tools">
                                                    <ul class="nav nav-pills">
                                                        <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                        <li><i class="fa fa-camera"></i></li>
                                                        <li><i class="fa fa-microphone"></i></li>
                                                        <li><i class="fa fa-cloud"></i></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                        </div>      
                    </div>


                    <div class="row dash-cols">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="widget-block">
                                <div class="white-box padding">
                                    <div class="row info">
                                        <div>
                                            <h3>Your Goals</h3>

                                        </div>
                                        <div>
                                            <div id="com_stats" style="height:98px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="widget-block">
                                <div class="white-box padding">
                                    <div class="row info text-shadow">
                                        <div class="col-xs-12">
                                            <h3>Comments</h3>
                                        </div>
                                        <div class="col-xs-12">
                                            <div id="com2_stats" style="height:98px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="widget-block">
                                <div class="white-box">
                                    <div class="fact-data">
                                        <div class="epie-chart" data-percent="45"><span>0%</span></div>
                                    </div>
                                    <div class="fact-data no-padding text-shadow">
                                        <h3>Users sales</h3>
                                        <h2>4,522</h2>
                                        <p>Monthly sales from users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="row dash-cols">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="block">
                                <div class="header">
                                    <h2><i class="fa fa-comment"></i>Comments</h2>
                                </div>
                                <div class="content no-padding">
                                    <div class="fact-data text-center">
                                        <h3>Positive</h3>
                                        <h2>60%</h2>
                                    </div>
                                    <div class="fact-data text-center">
                                        <h3>Negative</h3>                           
                                        <h2>40%</h2>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="block">
                                <div class="header">
                                    <h2><i class="fa fa-bug"></i>Tickets</h2>
                                </div>
                                <div class="content no-padding">
                                    <div class="fact-data text-center">
                                        <h3>Frequency</h3>
                                        <h2>53%</h2>
                                    </div>
                                    <div class="fact-data text-center">
                                        <h3>Pending</h3>                            
                                        <h2>13</h2>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="block">
                                <div class="header">
                                    <h2><i class="fa fa-comment"></i>Comments</h2>
                                </div>
                                <div class="content no-padding">
                                    <div class="fact-data text-center">
                                        <h3>Positive</h3>
                                        <h2>60%</h2>
                                    </div>
                                    <div class="fact-data text-center">
                                        <h3>Negative</h3>                           
                                        <h2>40%</h2>
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
