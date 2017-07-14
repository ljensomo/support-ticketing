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
                
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                            	<div class="content">
                            	<h1><i class="fa fa-plus-circle" style="padding-right:10px;"></i>Create New Ticket</h1>
                            		<form method="POST" action="" class="form-horizontal group-border-dashed" style="border-radius: 0px;" parsley-validate novalidate>

                            
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Project :</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="project" id="project" required>
                                            <option></option>
                                            
                                            <?php 
                                            $id_loader = "SELECT 
											a.company_id
											FROM users AS a 
											INNER JOIN companies AS b ON a.company_id=b.id WHERE user_id = ?;";
											
											$id_res=$db->prepare($id_loader);
											$id_res->execute(array($row[0]));
											$id_row = $id_res->fetch(PDO::FETCH_NUM);	
                                            
                                            $option_loader = "SELECT * FROM company_proj WHERE company_id = ?";
                                            $option_res = $db->prepare($option_loader);
                                            $option_res->execute(array($id_row[0]));
                                            while($option_row = $option_res->fetch(PDO::FETCH_NUM)) {
                                            ?>
                                            
                                            <option value="<?php echo $option_row[0]; ?>"><?php echo $option_row[2]; ?></option>
                                            
                                            <?php } ?>
                                            
                                        </select>                                 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Transaction No      :</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="Number" name="trans_no" id="trans_no" type="text" required="">                               

                                    </div>
                                </div>

                                <div class="form-group">
                                                            <label class="col-sm-3 control-label">Reporter :</label>
                                                            <div class="col-sm-6">
                                                                <select class="form-control" name="reporter" id="reporter" required>
                                                                    <option></option>
                                                                    
                                                                    <?php 
                                                                    
                                                                    
                                                                    
                                                                    $reporter_loader = "SELECT
                                                                    a.user_id,
                                                                    a.fname,
                                                                    a.mname,
                                                                    a.lname,
                                                                    a.company_id,
                                                                    a.cnum, 
                                                                    a.email,
                                                                    a.is_active,
                                                                    c.user_desc
                                                                     FROM users AS a JOIN 
                                                                     users_roles AS b ON a.user_id=b.user_id
                                                                     JOIN roles AS c ON b.user_role=c.userlevel_id
                                                                     WHERE company_id = ? AND user_desc = ?";
                                                                 
                                                                    $rep_res = $db->prepare($reporter_loader);
                                                                    $rep_res->execute(array($id_row[0],'reporter'));
                                                                    while($rep_row = $rep_res->fetch(PDO::FETCH_NUM)) {
                                                                    ?>
                                                                    
                                                                    <option value="<?php echo $rep_row[0] ; ?>"><?php echo $rep_row[1] . " " . $rep_row[2] . " " . $rep_row[3]; ?></option>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                </select>                                 
                                                            </div>
                                                        </div>

                                <div class="spacer text-center">
                                    <button type="reset" class="btn btn-default btn-lg" style="width:150px;"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</button>
                                    <button class="btn btn-primary btn-lg" type="button" onclick="create()" style="width:150px;"><i class="fa fa-mail-forward" style="padding-right:10px;"></i>Create</button>
                                </div>

                            </form>
                            	</div>
                            </div>              
                        </div>
                    </div>

                </div>
            </div> 

        </div>
        
        <div class="modal fade" id="select-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                	<h2 class="pull-left"><i class="fa fa-bug" style="padding-right:10px;"></i>Ticket Issue</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                       
                                                       <br/>
					<form method="POST" action="add_tickets.php" class="form-horizontal group-border-dashed"  style="border-radius: 0px;" >
                                   <input class="form-control" type="hidden" name="company_id" id="company_id" value="<?php echo $row[4]; ?>">                                 
                                   <div class="form-group">
                                    <label class="col-sm-3 control-label">Subject :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject" type="text" required>                                 
                                    </div>
                                </div>
                                <div class="form-group">
                                                            <label class="col-sm-3 control-label">Description :</label>
                                                            <div class="col-sm-8">
                                                                    <input class="form-control" type="text" placeholder="Issue description" name="desc" id="desc" type="text" required>                             
                                                            </div>
                                                        </div>
                                                        
                                <div class="form-group">
                                            <label class="col-sm-3 control-label">Attachment :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="file" accept="image/*" placeholder="" name="file" id="file" required>
                                            </div>
                                        </div>

                                        	<div class="spacer text-center" style="padding-left:80px">
													<button type="button" class="btn btn-default" data-dismiss="modal" style="width:150px"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</button>
                                                    <button class="btn btn-danger" type="submit" style="width:150px"><i class="fa fa-plus-circle" style="padding-right:10px;"></i>Add</button>

                                        	</div>
                                </form>
						       <!-- /input-group -->
								<!-- /.col-lg-6 -->                                    
					             </div>
                                            
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
        <script type="text/javascript">
        	function create(){
        	//alert("asdas");
        		var project = $('#project').val();
        		var trans_no = $('#trans_no').val();
        		var reporter = $('#reporter').val();
				var company_id = $('#company_id').val();				
        		
        		$.ajax({

		            type:"POST",
		            url:"includes/create_new_ticket_process.php",
		            data: "project="+project+"&trans_no="+trans_no+"&reporter="+reporter+"&company_id="+company_id,
		            complete : function(request){
            
	            	if(request.responseText.trim() === "success"){
	                  swal({ title : "Submitted!", text : "Successfully Created!", type : "success"},
	                       function(){
					           
	                       			                       }
	                  );
					}else if(request.responseText.trim() === "error"){
	           		 swal({ title : "Ooops!", text : "Please complete all fields!", type : "warning"});
	           		}
	           		}
           		 
            });
            
            
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
