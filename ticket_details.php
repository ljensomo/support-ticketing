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
		 <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
		<script src="sweetalert-master/dist/sweetalert.min.js"></script>

    </head>
    <body>

        <!-- Fixed navbar -->
        <?php include 'includes/topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h2><i class="fa fa-users" style="padding-right:10px"></i>Ticket Details</h2>
                    <ol class="breadcrumb">
                      	<li class="active">Users List	</li>
                    </ol>
                </div>
                
                <div class="cl-mcont">
                	<div class="block-flat">
                                            <div class="gallery-cont">
                                                       <div class="item w2">
          <div class="photo">
           <div class="head">
              <div class="pull-right"><h5>STATUS</h5></div><h5>SUBJECT</h5>
               <div class="pull-right"><h5>ASSIGNED</h5></div><h5>ISSUED DESCRIPTION</h5>
                <span class="pull-right"></span><h5>DATE CREATED</h5>       
            </div>
	            <div class="img">
	            		<img src="images/1.png">
	              		<div class="over">	
	                			<div class="func"><a href="#"><i class="fa fa-link"></i></a><a class="image-zoom" href="images/1.png"><i class="fa fa-search"></i></a></div>
	             			</div>            
            		</div>

                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Go!</button>
                    </span>
                  </div>
            		

            					
            		
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="block-flat">
                  <div class="header">              
              <h3>Comments</h3>
            </div>
            <div class="content">
              <div class="list-group tickets">
                <li class="list-group-item" href="#">
                 <span class="fa fa-comment pull-right"></span> <img class="avatar" src="images/avatar_50.jpg"/> 
                  <h4 class="name">Jeff Hanneman</h4>
                  <p>My vMaps plugin doesn't work</p> 
                  <span class="date">17 Feb</span>
                </li>
                <li class="list-group-item" href="#">
                 <span class="fa fa-comment pull-right"></span> <img class="avatar" src="images/avatar4_50.jpg"/> 
                  <h4 class="name">Jhon Doe</h4>
                  <p>My vMaps plugin doesn't work</p> 
                  <span class="date">15 Feb</span>
                </li>
                <li class="list-group-item" href="#">
                 <span class="fa fa-comment pull-right"></span> <img class="avatar" src="images/avatar1_50.jpg"/> 
                  <h4 class="name">Victor Jara</h4>
                  <p>My vMaps plugin doesn't work</p> 
                  <span class="date">15 Feb</span>
                </li>
              </div>
              <div class="text-center">
                <button class="btn btn-success btn-flat btn-rad md-trigger" data-modal="reply-ticket">Reply Last</button>
              </div>
              <!-- Nifty Modal -->
              <div class="md-modal colored-header custom-width md-effect-9" id="reply-ticket">
                <div class="md-content">
                  <div class="modal-header">
                    <h3>Reply Ticket</h3>
                    <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body form">
                                <div class="list-group tickets">
                <li class="list-group-item" href="#">
                 <span class="label label-primary pull-right">Normal</span> <img class="avatar" src="images/avatar_50.jpg"/> 
                  <h4 class="name">Jeff Hanneman</h4>
                  <p>My vMaps plugin doesn't work</p> 
                  <span class="date">17 Feb</span>
                </li>
              </div>
                    <div class="form-group flat-editor">
                      <div id="summernote"></div>
                    </div>

                    <p class="spacer2"><input type="checkbox" name="c[]" checked />  Notify me if this ticket receives any comment.</p>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Reply</button>
                  </div>
                </div>
              </div>
              <div class="md-overlay"></div>
            </div>
            </div>
                       </div>

		
                
                       
                 
      
                
            </div> 
         
                                    
      
        <script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/behaviour/general.js"></script>
	<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="js/masonry.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	
	<script type="text/javascript" src="js/table.js"></script>
        
        <script type="text/javascript">
    $(document).ready(function(){
      //initialize the javascript
      //App.init();
      
      //Initialize Mansory
      var $container = $('.gallery-cont');
      // initialize
      $container.masonry({
        columnWidth: 0,
        itemSelector: '.item'
      });
      
      //Resizes gallery items on sidebar collapse
      $("#sidebar-collapse").click(function(){
          $container.masonry();      
      });
      
      //MagnificPopup for images zoom
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function 

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
          // openerElement is the element on which popup was initialized, in this case its <a> tag
          // you don't need to add "opener" option if this code matches your needs, it's defailt one.
          var parent = $(openerElement).parents("div.img");
          return parent;
        }
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
