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
	        <?php include 'includes/portal_topbar.php'; ?>
	
	
	
	        <div id="cl-wrapper" class="fixed-menu">
	            <?php include 'includes/client_sidebar.php'; ?>
	
	            <div class="container-fluid" id="pcont">
	                <div class="page-head">
	                    <h2><i style="padding-right:5px" class="fa fa-ticket"></i>New Ticket</h2>
	                    
	                    </div>  
	                <div class="cl-mcont">
	                
	                        
	
	                        <div class="col-md-12">
	                            <div class="block-flat">
	                          
	                            <div class="header">                            
	                                    <h3><i class="fa fa-plus-circle" style="padding-right:10px;"></i><strong>Create New Tickets</strong></h3>
	                                </div>
	                            	<div class="content">
	
	                            	<!--<h3><i class="fa fa-plus-circle" style="padding-right:10px;"></i>Create New Ticket</h3><hr>-->
	                            		<form method="POST" action="includes/create_new_ticket_process.php" class="form-horizontal" style="border-radius: 0px;" parsley-validate novalidate enctype="multipart/form-data">
	
	                        <div class="row">
	                            <div class="col-lg-12">
	                            <input type="hidden" name="id" id="id" value="<?php echo $row[0] ?>">
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">
										<span>Issue Type :</span></label>
	                                    <div class="col-sm-6">
	                                        <select class="form-control" name="type" id="type" required>
	                                            <option>-- Type</option>
	                                            <option value="1">Bug</option>
	                                            <option value="2">Error</option>
	                                        </select>                                 
	                                    </div>
	                                </div><hr>
	                                <div class="form-group">
	                                  
	                                    <label class="col-sm-3 control-label">
										<span>Project :</span></label>
	                                    <div class="col-sm-6">
	                                        <select class="form-control" name="project" id="project" required>
	                                            <option>-- Select Project</option>
	                                            <option value="1">POS</option>
	                                            <option value="2">MIS</option>
	                                        </select>                                 
	                                    </div>
	                                </div>
	
	              
	
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">
										<span class="auto-style3">Reporter :</span></label>
	                                        <div class="col-sm-6">
	                                            <input class="form-control" name="name" id="name" type="text"   readonly value="<?php echo $row[1] . " " . $row[3] ?>">
	                                         </div>
	                                </div>
	
	                
	
	                                <div class="form-group">
	                                    <label class="col-sm-3 control-label">
										<span class="auto-style3">Transaction No      :</span></label>
	                                        <div class="col-sm-6">
	                                            <input class="form-control" placeholder="Number" name="trans_no" id="trans_no" type="text" required="">                               
	                                        </div>
	                                </div>
	
	                           
	                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
									<span>Subject     :</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" placeholder="Enter issue summary" name="subject" id="subject" type="text" required="">                             
                                        </div>
                                </div>

                      

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
									<span>Issue Description     :</span></label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" placeholder="Enter issue description" rows="3" name="desc" id="desc" type="text" required=""></textarea>
                                        </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
									<span>Attachment     :</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" name="file" id="file" type="file">
					     </div>
                                </div>

                                <div class="spacer text-center">
                                    <button type="reset" class="btn btn-default btn-lg" style="width:150px;"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</button>
                                    <button class="btn btn-primary btn-lg" type="button" onclick="create()" style="width:150px;"><i class="fa fa-mail-forward" style="padding-right:10px;"></i>Create</button>
                                </div>
                    </div>
                </div>  <!-- row end -->            
                            </form>
                            	</div>
                            </div>              
                        </div>
                    </div>

                </div>
            </div> 

        

        
        <script type="text/javascript">
        	function create(){
        	//alert("asdas");
	                var id = $('#id').val();
	                var type = $('#type').val();
        		  var project = $('#project').val();
        		  var trans_no = $('#trans_no').val();
	                var subject = $('#subject').val();
	                var desc = $('#desc').val();
	                var file = $('#file').val();
        		
				

        		if(type = "" || project == "" || trans_no == "" || subject == "" || desc == "" || file == ""){
                    swal({ title : "Ooops!", text : "Please complete all fields!", type : "warning"});
                }else{
        		    $.ajax({
		            type:"POST",
		            url:"includes/create_new_ticket_process.php",
		            data: "project="+project+"&trans_no="+trans_no+"&id="+id+"&subject="+subject+"&desc="+desc+"&type="+type+"&file="+file,
		            complete : function(request){
            
    	            	if(request.responseText.trim() === "success"){
    	                    swal({ title : "Submitted!", text : "Successfully Created!", type : "success"},
    	                       function(){
    					           location.reload();
    	                       			                       }
    	                  );
    					}else if(request.responseText.trim() === "error"){
    	           		    swal({ title : "Ooops!", text : "Please complete all fields!", type : "warning"});
    	           		}
	           		                          }
           		 
                    }); // ajax closing
                }
            
            
        	}
        </script>
         
      
           <script src="js/jquery.js"></script>
            <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
            <script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
            <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
            <script type="text/javascript" src="js/behaviour/general.js"></script>
            <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

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



    </body>
    </html>
