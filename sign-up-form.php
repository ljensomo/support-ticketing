<?php 
require 'includes/connection.php';

session_start();
?><!--

	if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";		
	}
}	
?>-->
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
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
	
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
			<div id="message" style="padding-top:20px; display:none;">
				<center>
				<h4><strong>Registration was successfully submitted.</strong></h4><br>
				<h5>Please check your email for verification of your account.</h5>
				</center>
			</div>
			<div id="message2" style="display:none;padding-top:20px;padding-bottom:20px">
				<center>
				<h4><strong>Information was not submitted.</strong></h4><br>
				<h5>There was an error encountered during the process, please try again.</h5>
				<a class="btn btn-md btn-danger" onclick="captcha_verify()">Try Again</a>
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

                                 <div class="form-group">
                                     <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                            <select class="form-control" name="company_name" id="company_name">
                                            <option value="">Select Company</option>
                                            <?php  
                                            	$query_com = "SELECT * FROM companies";
                                            	$res_com = $db->prepare($query_com);
                                            	$res_com->execute();
                                            	while($row_com=$res_com->fetch(PDO::FETCH_NUM)){
                                            ?>
                                            	<option value="<?php echo $row_com[0] ?>"><?php echo $row_com[1] ?></option>
                                            <?php } ?>
                                            </select>
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
			  <!-- captcha -->
			  <form action="" method="POST" name="captcha-form" id="captcha-form" class="form-horizontal" style="margin-left:25%;margin-top:5%;display:none">
			  
			  			 	<div class="container">
                                <h4 class="title"><strong>Validation Code:</strong></h4>
                                <img src="phpcaptcha/captcha.php?rand=<?php echo rand();?>" style="width:20%" id='captchaimg'><br>
                                <div class="form-group">
                                	<?php if(isset($msg)){?> 
                                	<div style="padding-left:1.5%"><label></label></div>
                                	<?php } ?>
                                	<label class="col-sm-7">Enter the code above here.</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="captcha_code" name="captcha_code" style="width:200%">
                                        </div>
                                    </div>
                                    <label class="col-sm-7">Can't read the image? click <a href="javascript: refreshCaptcha();">here</a> to refresh.</label>
                                </div>
                                <div class="form-group">
                                
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <button type="button" onclick="captcha_verify()"  class="btn btn-danger btn-block btn-md" id="Submit" name="Submit" class="form-control" style="width:470%">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
				<!--	<table>
				    <?php if(isset($msg)){?>
				    <tr>
				      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
				    </tr>
				    <?php } ?>
				    <tr>
				      <td align="right" valign="top"> Validation code:</td>
				      <td><img src="phpcaptcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
				        <label for='message'>Enter the code above here :</label>
				        <br>
				        <input id="captcha_code" name="captcha_code" type="text">
				        <br>
				        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
				    </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td><input name="Submit" type="submit"  value="Submit" class="button1"></td>
				    </tr>
				  </table> -->
			</form>

			  
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Fortis Technologies Corp</a></div>
	</div> 
	
</div>
<script type="text/javascript">
	function captcha_verify(){
	 var captcha_code = $('#captcha_code').val();
	 	 var fname = $('#fname').val();
		 var lname = $('#lname').val();
		 var email = $('#email').val();
		 var contact = $('#contact').val();
		 var company_name = $('#company_name').val();
		 var company = $('#company').val();
 		 var app = $('#app').val();
 		 var username = $('#username').val();
 		 var pass = $('#pass').val();
 		 
	 		$.ajax({
						 type:"POST",
						 url:"includes/captcha_verification.php",
						 data: "captcha_code="+captcha_code,
						 complete : function(r){
						 
						 			if(r.responseText.trim() === "not match"){
						 				swal({ title : "Ooops!", text : "The Validation code does not match!", type : "error" },
						 						function(){
						 							refreshCaptcha();
						 							$('#captcha_code').val('');
						 						}
						 				);
						 			}else if(r.responseText.trim() === "matched"){
						 				$('#captcha-form').hide();
						 				$('#loading').show();
						 					$.ajax({
										            type:"POST",
										            url:"includes/add_user_process.php",
										            data: "&fname="+fname+"&lname="+lname+"&email="+email+"&contact="+contact+"&company_name"+company_name+"&company="+company+"&app="+app+"&username="+username+"&pass="+pass,
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
						 			}
						 	}
			   });

	}
</script>


<script type="text/javascript">
	function add_user(){
		
		 var fname = $('#fname').val();
		 var lname = $('#lname').val();
		 var email = $('#email').val();
		 var contact = $('#contact').val();
		 var company = $('#company').val();
		 var company_name = $('#company_name').val();
 		 var app = $('#app').val();
 		 var username = $('#username').val();
 		 var pass = $('#pass').val();
 		 var confirm_pass = $('#confirm_pass').val();
		 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		 
		if(fname == "" || lname == "" || email == "" || contact == "" || company == "" || app == "" || username == "" || pass == "" || confirm_pass == "" || company_name == ""){
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
						 data: "company="+company+"&company_name="+company_name,
						 complete : function(r){
						 	if(r.responseText.trim() === "valid"){
						 			$('#captcha-form').show();
						 			//$('#loading').show();
							 		$('#SignUpForm').hide();
								/*$.ajax({
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
						        }) // add ajax	end */
						 	}else if(r.responseText.trim() === "invalid"){
						 		swal({ title : "Ooops!", text : "The TIN code you did not match in the specified company!", type : "error" });
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
