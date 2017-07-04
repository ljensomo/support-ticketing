<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/fb-art1.png">

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
      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>
 
      

    
    
        
               <div id="cl-wrapper" class="fixed-menu">
        <div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs.">
            <div class="cl-toggle"><i class="fa fa-bars"></i></div>
            <div class="cl-navblock">
        <div class="menu-space nano nscroller has-scrollbar" style="height: 333px;">
          <div class="content" tabindex="0" style="right: -19px;">
            <div class="side-user">
              <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar"></div>
              <div class="info">
                <a href="#">Jason Gicha</a>
                <img src="images/state_online.png" alt="Status"> <span>Online</span>
              </div>
            </div>
            <ul class="cl-vnavigation">
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
               </li><li class="parent"><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Support</span></a>
                <ul class="sub-menu">
                  <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Create Ticket</a></li>
                  <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Add Ticket</a></li>
                </ul>
              </li>
              
                <li><a href="view_tickets.php"><i class="fa fa-list-alt"></i><span>View ticket</span></a></li>
              
              <li class="parent"><a href="#"><i class="fa fa-list-alt"></i><span>Forms</span></a>
                <ul class="sub-menu">
                  <li><a href="form-elements.html">Components</a></li>
                </ul>
              </li>
              <li><a href="homebanner.php"><i class="fa fa-table"></i><span>About Us</span></a>
              </li>              
             <li class="parent"><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Email</span></a>
                <ul class="sub-menu">
                  <li><a href="email-inbox.html"><span class="label label-primary pull-right">New</span>Inbox</a></li>
                  <li><a href="email-read.html"><span class="label label-primary pull-right">New</span>Email Detail</a></li>
                </ul>
              </li>

            </ul>
          </div>
        <div class="pane" style="display: block;"><div class="slider" style="height: 287px; top: 0px;"></div></div></div>
        <div class="text-right collapse-button" style="padding:7px 9px;">
          <input class="form-control search" placeholder="Search..." type="text">
          <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
        </div>
            </div>
        </div>
    
        <div class="container-fluid" id="pcont">
          <div class="cl-mcont">
          
            <div class="stats_bar">
                <div class="butpro butstyle" data-step="2" data-intro="<strong>Beautiful Elements</strong> <br/> If you are looking for a different UI, this is for you!.">
                    <div class="sub"><h3>THE CLIENTS</h3><span id="total_clientes">170</span></div>
                    <div class="stat"><span class="spk1"><canvas style="display: inline-block; width: 74px; height: 15px; vertical-align: top;" width="74" height="15"></canvas></span></div>
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
                    <div class="stat"><span class="spk2"><canvas style="display: inline-block; width: 80px; height: 15px; vertical-align: top;" width="80" height="15"></canvas></span></div>
                </div>
                <div class="butpro butstyle">
                    <div class="sub"><h3>CRITICAL TICKETS</h3><span>184</span></div>
                    <div class="stat"><span class="spk3"><canvas style="display: inline-block; width: 80px; height: 15px; vertical-align: top;" width="80" height="15"></canvas></span></div>
                </div>  

            </div>  
            
            

            <div class="row dash-cols">
        <div class="col-sm-6 col-md-6">
          <div class="widget-block  white-box calendar-box">
            <div class="col-md-6 blue-box calendar no-padding">
              <div class="padding ui-datepicker hasDatepicker" id="dp1486622254278"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2017</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">8</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default ui-state-highlight ui-state-active" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2017"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
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
                      <li class="active"><a href="#chat-1" data-toggle="tab">Baby&lt;3</a></li>
                      <li><a href="#chat-2" data-toggle="tab">Lorenz</a></li>
                      <li><a href="#chat-3" data-toggle="tab">Jane</a></li>
                    </ul>
                    <div class="tab-content no-padding">
                      <div class="tab-pane active cont" id="chat-1">
                        <div class="chat-wi">
                            <div class="chat-space nano nscroller has-scrollbar">
                                <div class="chat-content content" tabindex="0" style="right: -19px;">
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="" data-original-title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello? :)</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="" data-original-title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">Who are you? </div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="" data-original-title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hmmmmmmm....</div>
                                            <div><small>12:30 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar_50.jpg" data-toggle="tooltip" title="" data-original-title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">I don't know you? Can i call you mine? &lt;3</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>                                  
                                </div>
                            <div class="pane"><div class="slider" style="height: 353px; top: 24px;"></div></div></div>
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
                            <div class="chat-space nano nscroller has-scrollbar">
                                <div class="chat-content content" tabindex="0" style="right: -19px;">
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="" data-original-title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">Hey, are you there?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="" data-original-title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">I'm here, how was your day?</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>                                      
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar4_50.jpg" data-toggle="tooltip" title="" data-original-title="Adam">
                                        <div class="c-bubble">
                                            <div class="msg">It was fine, just making some designs...</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>                                  
                                </div>
                            <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
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
                            <div class="chat-space nano nscroller has-scrollbar">
                                <div class="chat-content content" tabindex="0" style="right: -19px;">
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="" data-original-title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, what can i do for you?</div>
                                            <div><small>12:20 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="" data-original-title="Lucy">
                                        <div class="c-bubble">
                                            <div class="msg">Hi, i need support with my iPhone?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar1_50.jpg" data-toggle="tooltip" title="" data-original-title="MiguelMich">
                                        <div class="c-bubble">
                                            <div class="msg">Hello, how are you? i just though you were here, i'll see you tomorrow.</div>
                                            <div><small>12:30 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="chat-conv sent">
                                        <img alt="Avatar" class="c-avatar ttip" src="images/avatar3_50.jpg" data-toggle="tooltip" title="" data-original-title="Lucy">
                                        <div class="c-bubble">
                                            <div class="msg">Hi, i need support with my iPhone?</div>
                                            <div><small>12:25 p.m.</small></div>
                                            <span></span>
                                        </div>
                                    </div>                                  
                                </div>
                            <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
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
