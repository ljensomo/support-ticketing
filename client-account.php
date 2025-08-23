<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Create Ticket - Fortis Ticketing System</title>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        -->
<link href="css/fonts1.css" rel="stylesheet" type="text/css">
<link href="css/fonts2.css" rel="stylesheet" type="text/css">
<link href="css/fonts3.css" rel="stylesheet" type="text/css">
<!-- Bootstrap core CSS -->
<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
<link href="fonts/font-awesome-4/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link href="js/jquery.gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.switch/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.select2/select2.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.slider/css/slider.css" rel="stylesheet" type="text/css" />
<link href="js/intro.js/introjs.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" media="screen" rel="stylesheet" type="text/css" />
<link href="js/jquery.magnific-popup/dist/magnific-popup.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.niftymodals/css/component.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<link href="sweetalert-master/dist/sweetalert.css" rel="stylesheet" type="text/css">
<script src="sweetalert-master/dist/sweetalert.min.js"></script>
</head>

<body>

<!-- Fixed navbar -->
<?php include 'includes/client-topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php 
		if($row[11] == 4){
			include 'includes/client_sidebar.php'; 
		}else{
			 include 'includes/count_client_all_tickets.php'; ?>
			<div class="page-aside email" style="border-right:1px solid #515358;">
			  <div class="fixed nano nscroller">
			    <div class="content">
			      <div class="header">
			        <button class="navbar-toggle" data-target=".mail-nav" data-toggle="collapse" type="button">
			          <span class="fa fa-chevron-down"></span>
			        </button>          
			        <h2 class="page-title"><?php echo $row_comp[1]; ?></h2>
			        <hr style="margin-top:12px;margin-bottom:15px;border-color:#515358;" />
			        <img src="images/state_online.png" alt="Status" />
			        <span><strong><?php echo $row[1] . ' ' . $row[2] . ' ' . $row[3]; ?></strong></span>
			      </div>        
			      <div class="mail-nav collapse">
			        <ul class="nav nav-pills nav-stacked ">
			          <li><a href="client_open_tickets.php"><span class="label label-primary pull-right"><?php echo $allusertickets[0]; ?></span><i class="fa fa-inbox"></i> Open</a></li>
			          <li><a href="client_pending_tickets.php"><span class="label label-info pull-right"><?php echo $alluserinprogresstickets[0]; ?></span><i class="fa fa-spinner"></i> Pending / In Progress</a></li>
			          <li><a href="client_closed_tickets.php"><span class="label label-info pull-right"><?php echo $alluserclosedtickets[0]; ?></span><i class="fa fa-lock"></i> Closed</a></li>
			        </ul>
			        <p class="title">More</p>
			        <ul class="nav nav-pills nav-stacked ">
			          <li><a href="client-assigned-projects.php"><span class="label label1 pull-right"></span>Project/s Assigned</a></li>
			        </ul>
			        <div class="compose">
			          <a class="btn btn-flat btn-primary" href="client-create-ticket.php">Create Ticket</a>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
	<?php 
		}
	?>
	<div id="pcont" class="container-fluid">
		<div class="cl-mcont">
			<div class="row">
				<div class="col-md-6">
					<div class="panel" style="border-color:#272930;">
					    <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
					    	<i class="fa fa-pencil"></i> Your account's informations.
					    </div>
					    <div class="panel-body">												
							<div class="content">
								<div class="row">
						            <div class="col-md-4">
						              <div class="avatar">
						                <img src="images/avatars/<?php echo $row[12]; ?>" class="profile-avatar" style="width:150px;height:150px;">
						              </div>
						            </div>
						            <div class="col-md-8">
						              <div class="personal">
						                <h1 class="name"><?php echo $row[1] . ' ' .$row[2] . ' ' . $row[3]; ?></h1>
						                <p class="description">
						                <strong>
						                <?php if($row[11] == 1){ 

						                		echo 'Administrator';
						                	}else{

						                		echo 'Support';
						                	}

						                ?>
						                </strong>
						                </p><p>
						                <label class="label label-success label-flat"><i class="fa fa-circle"></i> Online</label>
						              </p></div>
						            </div>
						        </div>
						        <hr>
						        <div class="row">
						        	<div class="col-md-12">
						        		<h4><strong>Contact Information</strong></h4>
						        		<br>
						        		<form role="form" class="form-horizontal">
						        			<div class="form-group">
							                    <label class="col-sm-3 control-label" for="name">Contact No.</label>
							                    <div class="col-sm-9">
							                      <input type="number" placeholder="Your Contact No." id="num" class="form-control" value="<?php echo $row[5]; ?>" required>
							                    </div>						        				
						        			</div>
						        			<div class="form-group">
							                    <label class="col-sm-3 control-label" for="name">Email</label>
							                    <div class="col-sm-9">
							                      <input type="email" placeholder="Your Email" id="email" class="form-control" value="<?php echo $row[6]; ?>" required>
							                    </div>						        				
						        			</div>	
							                  <div class="form-group">
							                    <div class="col-sm-offset-3 col-sm-9">
							                      <button class="btn btn-primary" type="button" id="edit_contact">Update</button>
							                    </div>
							                  </div>						        								        			
						        		</form>
						        	</div>
						        </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default" style="border-color:#272930;">
						<div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
						<i class="fa fa-gear"></i> Account Settings
						</div>
						<div class="panel-body">
							<div id="settings">
							  <form class="form-horizontal" enctype="multipart/form-data" action="includes/client-edit-account-settings.php" method="POST">
							  		<input type="hidden" value="<?php echo $row[0]; ?>" name="userid" id="userid">
							  		<div class="form-group">
							  			<label class="col-sm-3 control-label">New Avatar</label>
							  			<div class="col-sm-9">
							  				<input type="file" id="fileUpload" name="fileUpload" class="form-control" accept="image/*">
							  			</div>
							  		</div>
							  		<div class="form-group">
							  			<div class="col-sm-offset-3 col-sm-9">
							  				<button class="btn btn-md btn-primary btn-flat btn-rad" type="submit">Save Avatar</button>
							  			</div>
							  		</div>
							  </form>
							  <hr />
				              <form role="form" class="form-horizontal">				              
				                  <div class="form-group">
				                    <label class="col-sm-3 control-label">First Name</label>
				                    <div class="col-sm-9">
				                      <input type="text" placeholder="Firstname" id="fname" class="form-control" value="<?php echo $row[1]; ?>" required>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label class="col-sm-3 control-label">MI</label>
				                    <div class="col-sm-9">
				                      <input type="text" placeholder="MI" class="form-control" id="mi" value="<?php echo $row[2]; ?>" required>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label class="col-sm-3 control-label">Last Name</label>
				                    <div class="col-sm-9">
				                      <input type="text" placeholder="Lastname" id="lname" class="form-control" value="<?php echo $row[3]; ?>" required>
				                    </div>
				                  </div>
				            	  <div class="form-group">
				                    <label class="col-sm-3 control-label">Username</label>
				                    <div class="col-sm-9">
				                      <input type="text" placeholder="Username" id="uname" class="form-control" value="<?php echo $row[8]; ?>" required>
				                    </div>
				                  </div>				                  
				                  <div class="form-group">
				                    <div class="col-sm-offset-3 col-sm-9">
				                      <button class="btn btn-primary" type="button" id="edit_info">Update</button>
				                   		<button class="btn btn-default btn-ms btn-flat btn-rad" type="button">Change Password</button>
				                    </div>
				                  </div>
				              </form>
				              <div id="crop-image" class="md-modal colored-header md-effect-1">
				                <div class="md-content">
				                  <div class="modal-header">
				                    <h3>Crop Image</h3>
				                    <button aria-hidden="true" data-dismiss="modal" class="close md-close" type="button">×</button>
				                  </div>
				                  <div class="modal-body">
				                    <div class="text-center crop-image">
				                    </div>
				                    <form action="crop.php" method="post" onsubmit="return checkCoords();">
				                      <input type="hidden" id="x" name="x">
				                      <input type="hidden" id="y" name="y">
				                      <input type="hidden" id="w" name="w">
				                      <input type="hidden" id="h" name="h">
				                    </form>
				                  </div>
				                  <div class="modal-footer">
				                    <button data-dismiss="modal" class="btn btn-default btn-flat md-close" type="button">Cancel</button>
				                    <button id="save-image" class="btn btn-primary btn-flat" type="button">Save Image</button>
				                  </div>
				                </div>
				              </div>
				              <div class="md-overlay"></div>
				            </div>						
						</div>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

	    function load_unseen_notifications(view = ''){

	        var user_id = $('#logged_id').val();

	        $.ajax({
	                url:"includes/fetch-notifications.php",
	                method:"POST",
	                data:{
	                    user_id:user_id,
	                    view:view
	                },
	                dataType:"json",
	                success:function(data){
	                    $('#notifications').html(data.notifications);
	                    if(data.count > 0){
	                        $('#count').html(data.count);
	                        $('#count').show();
	                    }
	                }
	        });

	    }

	    load_unseen_notifications();

	    setInterval(function(){
	        load_unseen_notifications();
	    }, 5000);

	    $('#notif-dropdown').on('click',function(){
	        $('#count').hide();
	        load_unseen_notifications('yes');
	    });

	});
</script>

<script type="text/javascript">

	$(document).ready(function(){

		$("#create-ticket").on("submit",function(e){

			e.preventDefault();
				
				var id = $('#id').val();
				var type = $('#type').val();
				var project = $('#project').val();
				var trans_no = $('#trans_no').val();
				var subject = $('#subject').val();
				var desc = $('#desc').val();
				var file = $('#attachment').val();

				if ( type === '' ) {
					swal('Message','Please select type.','info');
				}else if(project === ''){
					swal('Message','Please select a project.','info');	
				}else if(trans_no === ''){
					swal('Message','Please enter transaction number.','info');
				}else if(subject === ''){
					swal('Message','Please enter subject.','info');
				}else if(desc === ''){
					swal('Message','Please enter issue description.','info');
				}else if(file === ''){
					swal('Message','Please add an attachment.','info');
				}else{
					$.ajax({
						url:'includes/create_new_ticket_process.php',
						method:'post',
						data: new FormData(this),
						processData: false,
						contentType: false,
						success:function(data){
							swal({title:'Message', text:'Ticket successfully created!', type:'success'},
								function(){
									location.reload();
								}
							);
						}
					});
				};

		});

	});

</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#edit_contact').on('click',function(){
			var userid = $('#logged_id').val();
			var number = $('#num').val();
			var email = $('#email').val();
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var contact = 'update_contact';

			if( $.trim(number) === ''){
				swal('Message','Please input your contact number.','info');
			}else if( $.trim(email) === ''){
				swal('Message','Please input your email.','info');
			}else if( !emailReg.test($.trim(email)) ){
				swal('Ooops!','Please enter a valid email.','warning');
			}else{
				$.ajax({
					url:'includes/edit-account-settings.php',
					method:'post',
					data:{
						userid:userid,
						number:number,
						email:email,
						contact
					},
					success:function(data){
						location.reload();
					}
				});
			}
		});
		$('#edit_info').on('click',function(){
			var userid = $('#logged_id').val();
			var fname = $('#fname').val();
			var mi = $('#mi').val();
			var lname = $('#lname').val();
			var uname = $('#uname').val();
			var info = 'update_info';

			if( $.trim(fname) === ''){
				swal('Message!','Please enter your firstname.','info');
			}else if( $.trim(lname) === ''){
				swal('Message!','Please enter your lastname.','info');
			}else if( $.trim(uname) === ''){
				swal('Message!','Please enter your username.','info');
			}else{
				$.ajax({
					url:'includes/edit-account-settings.php',
					method:'post',
					data:{
						userid:userid,
						fname:fname,
						mi:mi,
						lname:lname,
						uname:uname,
						info:info
					},
					success:function(data){
						location.reload();
					}
				});
			}
		});
	});

</script>

<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
<script src="js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
<script src="js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="js/behaviour/general.js" type="text/javascript"></script>
<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script src="js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="js/jquery.niftymodals/js/jquery.modalEffects.js" type="text/javascript"></script>
<script type="text/javascript">
                $(document).ready(function () {
                    //initialize the javascript
                    App.init();
                    $('.md-trigger').modalEffects();
                });
            </script>
<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/behaviour/voice-commands.js"></script>
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
