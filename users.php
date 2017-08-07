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
                    <h2><i class="fa fa-users" style="padding-right:10px"></i>Users</h2>
                    <ol class="breadcrumb">
                      	<li class="active">Users List	</li>
     
                    </ol>
                </div>	
                <div class="cl-mcont">
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="header">							
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#add-user-modal"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Add User</a>
                                </div>
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable" >
                                            <thead>
                                                <tr>
                                                    <th>User ID</th>
                                                    <th>Full Name</th>
                                                    <th>Contact No.</th>
                                                    <th>E-mail</th>
                                                    <th>Username</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT 
													a.user_id,	
													a.fname,
													a.mname,
													a.lname,
													a.company_name,
													a.cnum,
													a.email,
													a.is_active,
													b.username,
													b.password,
													d.user_desc
												
												FROM users AS a INNER JOIN
												user_accounts AS b ON a.user_id=b.user_id
												JOIN users_roles AS c ON a.user_id=c.user_id
												JOIN roles AS d ON c.user_role=d.userlevel_id WHERE user_desc = 'Administrator' OR user_desc = 'User' OR user_desc = 'Watcher';";
                                                $res = $db->prepare($sql);
                                                $res->execute();
                                                while ($row = $res->fetch(PDO::FETCH_NUM)) {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $row[0]; ?></td>
                                                        <td><?php echo $row[1] . " " . $row[2] . " " . $row[3] ?></td>
                                                        <td><?php echo $row[5]; ?></td>
                                                        <td><?php echo $row[6]; ?></td>
                                                        <td><?php echo $row[8]; ?></td>
                                                        <td><?php echo $row[10]; ?></td>
                                                        <td class="center">
                                                <center>
                                                    <?php if ($row[7] == 1) { ?>
                                                        <a class="btn btn-default btn-sm" href="deactivate_user.php?cid=<?php echo $row['user_id']; ?>" type="button"p><i class="fa fa-unlock"></i></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-default btn-sm" href="activate_user.php?cid=<?php echo $row['user_id']; ?>"><i class="fa fa-lock"></i></a>
                                                    <?php } ?>
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
         <div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                	<h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>User Informations</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
							                               	 <div class="form-group">
							                                    <label class="col-sm-3 control-label">First Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="First Name" id="firstname" name="firstname" type="text" onkeypress="return blockSpecialChar(event)" >                               
							
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Middle Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="M.I." id="middlename" name="middlename" type="text">
							
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Last Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Last Name" id="lastname" name="lastname" type="text" required>
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Contact Number</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Contact Number" id="contact" name="contact" type="text" required>
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">E-mail</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="E-mail address" id="email" name="email" type="text" required>
							                                    </div>
							                                </div>
													        <div class="form-group">
						                                    	<label class="col-sm-3 control-label">Role</label>
						                                    	<div class="col-sm-6">
						                                        <select class="form-control" name="role" id="role">
						                                            <option></option>
						                                            <option value="1">Administrator</option>
						                                            <option value="2">Support</option>
						                                            <option value="3">Watcher</option>
						                                        </select>                                 
						                                    </div>
						                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Username</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Username" id="username" name="username" type="text" required>
							                                    </div>
							                                </div>
															<div class="form-group">
							                                    <label class="col-sm-3 control-label">Password</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Password" id="pw" name="pw" type="password" required>
							                                    </div>
							                                </div>
							                                	<div class="form-group">
							                                    <label class="col-sm-3 control-label">Confirm Password</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Confirm Password" id="confirm_pw" name="confirm_pw" type="password" required>
							                                    </div>
							                                </div>

							                            

							                                
							                                <div class="spacer text-center">
							                                    <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
							                                     <button type="button" onclick="add_developer()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
							                                </div>
							
                            			</form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                    	function add_developer(){
                                    	  	var fname = $('#firstname').val();
                                    	  	var mname = $('#middlename').val();
                                    		var lname = $('#lastname').val();
                                    		var contact = $('#contact').val();
                                    		var email = $('#email').val();
                                    		var role = $('#role').val();
                                    		var username = $('#username').val();
                                    		var pw = $('#pw').val();
                                    		var confirm_pw = $('#confirm_pw').val();
                                    		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                                    
                                    		if(fname == "" || lname == "" || contact == "" || email == "" || role == "" || username == "" || pw == "" || confirm_pw == ""){
                                    			swal({title:"Ooops", text:"Please complete all necessary informations", type:"warning"});
                                    		}else{ 
                                    			if(!emailReg.test(email)){
												swal({ title : "Ooops!", text : "Please enter valid email!", type : "warning"},
															function(){
																$('#email').focus();
															}
												
												);
							
                                    			
                                                }else if(confirm_pw == pw){
                                    				swal({title:"Success", text:"EQUAL", type:"success"});
                                    			}else{
                                    				swal({title:"Ooops", text:"NOT EQUAL", type:"warning"});
                                    				$('#confirm_pw').val('');
                                    				$('#confirm_pw').focus();
                                    			}
                                    		}//condition
                                    	
                                    	}//function add_developer
                                    	
  
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
