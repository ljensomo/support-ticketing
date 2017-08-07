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
                    <h2><i class="fa fa-building-o" style="padding-right:10px"></i>Companies</h2>
                    <ol class="breadcrumb">
                        <li class="active">Client Records</li>
                      </ol>
                </div>  
                <div class="cl-mcont">
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="header">                            
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#add-company"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Add Companies</a>

                                </div>
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>Company ID</th>
                                                    <th>Company Name</th>
                                                    <th>Company TIN code</th>
                                                    <th>E-mail Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM companies";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_NUM)) {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $row[0]; ?></td>
                                                        <td><?php echo $row[1]; ?></td>
                                                        <td><?php echo $row[2]; ?></td>
                                                        <td><?php echo $row[3]; ?></td>
                                                        <td class="center">
                                                <center>
                                                    <a class="btn btn-info btn-sm" href="#"><i class="fa fa-search"></i></a>
                                                    <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-pencil"></i></a>
                                                    
                                                </center>        
                                                </td>
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
         <div class="modal fade" id="add-company" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <div class="i-circle danger"><i class="fa fa-user"></i>
                                                     </div>
                               <form method="POST" action="#" class="form-horizontal group-border" style="border-radius: 0px;" parsley-validate novalidate>
                                 <div class="form-group">
                                 <h4><i class="fa fa-info-circle" style="padding-right:10px;"></i>Company Informations</h4>
                                 </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Company name</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Company Name" name="company_name" id="company_name"type="text" required>                               

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Company TIN code</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Number" name="company_tin_code" id="company_tin_code" type="text">                               

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email address</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Email" name="email" id="email" type="text" required>                               

                                    </div>
                                </div>

                                <div class="spacer text-center" style="padding-left:30px">
                                    <button type="reset" class="btn btn-default btn-lg" style="width:150px;"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</button>
                                    <button type="button" onclick="client()" class="btn btn-danger btn-lg" style="width:150px;"><i class="fa fa-save" style="padding-right:10px;"></i>Save</button>
                                </div>

                            </form>   
                                                    </div>
                                                </div>

                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
        <script type="text/javascript">
        	function client(){
        	//alert("asdas");
        		var company_name = $('#company_name').val();
        		var company_tin_code = $('#company_tin_code').val();
        		var email = $('#email').val();				
        		var id = 0;
        		$.ajax({

		            type:"POST",
		            url:"includes/add_client_process.php",
		            data: "company_name="+company_name+"&company_tin_code="+company_tin_code+"&email="+email,
		            complete : function(request){
            
	            	
					if(request.responseText.trim() === "exist"){
	           		  swal({ title : "Ooops!", text : "Company Name alredy exist!", type : "error"});
	           		}else if(request.responseText.trim() === "none"){
	           		 swal({ title : "Ooops!", text : "Please complete all fields!", type : "warning"});
	           		}else if(request.responseText.trim() === "success"){
	                  swal({ title : "Submitted!", text : "Successfully Created!", type : "success"},
	                  		function(){
	                  			location.reload();	                  		}
	                  );
	                  
	                }
	           	
	           		}
           		 
            });
            
            
        	}
        </script>

      
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
