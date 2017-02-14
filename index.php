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
        <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-gear"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>FORTIS</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="dropdown-submenu"><a href="#">Sub menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>              
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right user-nav">
                        <li class="dropdown profile_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar2.jpg" /><span>Jason Gicha</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Messages</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>           


                </div><!--/.nav-collapse animate-collapse -->
            </div>
        </div>

        <div id="cl-wrapper" class="fixed-menu">
            <div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs." >
                <div class="cl-toggle"><i class="fa fa-bars"></i></div>
                <div class="cl-navblock">
                    <div class="menu-space">
                        <div class="content">
                            <div class="side-user">
                                <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                                <div class="info">
                                    <a href="#">Jason Gicha</a>
                                    <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                                </div>
                            </div>
                            <ul class="cl-vnavigation">
                                <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
                                <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Support</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Create Ticket</a></li>
                                        <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Add Ticket</a></li>
                                    </ul>
                                </li>
                                </li>
                                <li><a href="view_tickets.php"><i class="fa fa-list-alt"></i><span>View ticket</span></a></li>

                                <li><a href="#"><i class="fa fa-list-alt"></i><span>Forms</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="form-elements.html">Components</a></li>
                                    </ul>
                                </li>
                                <li><a href= "homebanner.php"><i class="fa fa-table"></i><span>About Us</span></a>
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

        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
        <script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="js/behaviour/general.js"></script>

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
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
    </body>
</html>
