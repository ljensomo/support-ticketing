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
                <div class="page-head">
                    <h2>Messages</h2>
              
                </div>	
                <div class="cl-mcont">

                    <div class="row">
                        <div class="col-md-12">
                        <ul class="nav nav-tabs">
                      <li class="active"><a href="#chat-1" data-toggle="tab">Jason</a></li>
                      <li><a href="#chat-2" data-toggle="tab">Robe</a></li>
                      <li><a href="#chat-3" data-toggle="tab">Chaw</a></li>
                    </ul>
                        <div class="tab-content no-padding">
                      <div class="tab-pane active cont" id="chat-1">
                        <div class="chat-wi">
                            <div class="chat-space nano nscroller">
                                <div class="chat-content content">
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, what can i do for you?</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">Hi, i need support with my iPhone?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, how are you? i just though you were here, i'll see you tomorrow.</div>
                                            <div><small>12:30 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="Adam">
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
                                    <input value="SEND" class="btn btn-info pull-right" type="submit">
                                    <div class="input">
                                        <input placeholder="Send a message..." name="msg" type="text">
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
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">Hey, are you there?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">I'm here, how was your day?</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>                                      
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="Adam">
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
                                    <input value="SEND" class="btn btn-info pull-right" type="submit">
                                    <div class="input">
                                        <input placeholder="Send a message..." name="msg" type="text">
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
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, what can i do for you?</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="Lucy">
                                        <div class="c-bubble">
                                            <div class="msg">Hi, i need support with my iPhone?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, how are you? i just though you were here, i'll see you tomorrow.</div>
                                            <div><small>12:30 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="Lucy">
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
                                    <input value="SEND" class="btn btn-info pull-right" type="submit">
                                    <div class="input">
                                        <input placeholder="Send a message..." name="msg" type="text">
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
