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
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
	
	  <link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
	<link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
	<link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
	<!-- Bootstrap core CSS -->
	<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">


	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
	

</head>

<body class="texture">

<div id="cl-wrapper" class="sign-up-container">

	<div class="middle-sign-up">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="images/fb-art.jpg" alt="logo" style="width:30px; height:30px"/><span style="padding-left:10px">Fortis Technologies Corp | <small style="color:white">Sign-Up</small></span></h3>
			</div>
			<div>
			<div id="loading" style="display:none">
				<center><img src="images/loader.gif"/ style="width:50%;height:50%">
					<p>Submitting...</p>
				</center>
			</div>
			<div id="message" style="display:none;padding-top:20px;">
				<center>
				<h4><strong>Information was successfully submitted.</strong></h4><br>
				<h5>Please check your email for verification of your account.</h5>
				</center>
			</div>
			<div id="message2" style="display:none;padding-top:20px;padding-bottom:20px">
				<center>
				<h4><strong>Information was not submitted.</strong></h4><br>
				<h5>There was an error encountered during the process, please try again.</h5>
				<a class="btn btn-md btn-danger" onclick="add_user()">Try Again</a>
				</center>
			</div>
				<form style="margin-bottom: 0px !important;" class="form-horizontal" id="SignUpForm" method="POST" action="" novalidate>
					<div class="content">
               				<div class="row">
							<div class="col-md-6">
							<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" placeholder="First Name" id="fname" class="form-control" name="fname" required>
                                        </div>
                                    </div>
                                </div>
							
							<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" placeholder="Middle Name" id="mname" class="form-control" name="mname" required>
                                        </div>
                                    </div>
                                </div>

								<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" placeholder="Last Name" id="lname" class="form-control" name="lname" required>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" placeholder="Email" id="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" data-mask="phone" name="contact" id="contact" class="form-control" placeholder="(999) 999-9999" />
                                        </div>
                                    </div>
                                </div>
								</div>
								
								<div class="col-md-6">
								
									<div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                            <input type="text" placeholder="Company TIN Code" id="company" class="form-control" name="company" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                            <input type="text" placeholder="Application" id="app" class="form-control" name="app" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" placeholder="Username" id="username" class="form-control" name="username" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" placeholder="Password" id="pass" class="form-control" name="pass" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" placeholder="Confirm Password" id="confirm_pass" class="form-control" name="confirm_pass" parsley-equalto="#pass" required>
                                        </div>
                                    </div>
                                </div>

								</div>
								</div>
							
            <center>
            <button class="btn btn-default btn-rad btn-lg" type="reset" style="width:250px;"><i class="fa fa-ban" style="padding-right:10px"></i>Cancel</button>
            <button class="btn btn-danger btn-rad btn-lg" type="button" onclick="add_user()" style="width:300px;"><i class="fa fa-mail-forward" style="padding-right:10px"></i>Submit</button>
            </center>
             <center><p class="spacer">By creating an account, you agree with the <a href="#">Terms</a> and <a href="#">Conditions</a>.</p></center>

							
					</div>
			  </form>
			  
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Fortis Technologies Corp</a></div>
	</div> 
	
</div>

<script type="text/javascript">
	function add_user(){
		 var fname = $('#fname').val();
		 var mname = $('#mname').val();
		 var lname = $('#lname').val();
		 var email = $('#email').val();
		 var contact = $('#contact').val();
		 var company = $('#company').val();
 		 var app = $('#app').val();
 		 var username = $('#username').val();
 		 var pass = $('#pass').val();
 		 var confirm_pass = $('#confirm_pass').val();
		 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		 
		if(fname == "" || lname == "" || email == "" || contact == "" || company == "" || app == "" || username == "" || pass == "" || confirm_pass == ""){
				swal({ title : "Ooops!", text : "Please complete all information!", type : "warning"});    
		}else{
				if(!emailReg.test(email)){
					swal({ title : "Ooops!", text : "Please enter valid email!", type : "warning"},
								function(){
									$('#email').focus();
								}
					);
				}else if(confirm_pass !== pass){
					swal({ title: "Ooops!", text: "The password must be the same!", type: "warning"},
								function(){
									$('#pass').focus();
								}
					);
				}else{
					
					$.ajax({
						 type:"POST",
						 url:"includes/tincode_validation_process.php",
						 data: "company="+company,
						 complete : function(r){
						 	if(r.responseText.trim() === "valid"){
						 			$('#loading').show();
							 		$('#SignUpForm').hide();
								$.ajax({
						            type:"POST",
						            url:"includes/add_user_process.php",
						            data: "fname="+fname+"&mname="+mname+"&lname="+lname+"&email="+email+"&contact="+contact+"&company="+company+"&app="+app+"&username="+username+"&pass="+pass,
						            complete : function(request){
						             $('#loading').hide();
									 //$('#SignUpForm').show();
						        if(request.responseText.trim() === "none"){
						                   swal({ title : "Ooops!", text : "Please input data!", type : "warning" });
								}else if(request.responseText.trim() === "exist"){
										   swal({ title : "Ooops!", text : "Username already exist!", type : "warning" },
										   		function(){
										   			var username = $('#username').val('');
										   		}
										   );
								}else if(request.responseText.trim() === "success"){
						            	   $('#message').show();
						            	   //swal({ title : "Saved!", text : "Successfully Submitted", type : "success" });
								}else{
										  $('#message2').show();
										  //swal({ title : "Ooops!", text : "email was not successfuly sent!", type : "error" });
								} // condition end
									}  // function add end                          
						        }) // add ajax	end
						 	}else if(r.responseText.trim() === "invalid"){
						 		swal({ title : "Ooops!", text : "Specified company not recognized!", type : "error" });
						 	} // validation end
						 } //  tincode function end
						 }); // tin code ajax end
				}
		}
		 
	}
</script>



  <script src="js/jquery.js"></script>
  <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
  <script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
  <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
  <script src="js/jquery.maskedinput/jquery.maskedinput.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="js/behaviour/general.js"></script>
  <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.masks();
      });
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/behaviour/voice-commands.js"></script>
  <script src="js/bootstrap/dist/js/bootstrap.min.js"></script></body>
</html>
