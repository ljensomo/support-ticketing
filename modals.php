 									<!--SEVERITY MODAL-->




 			<div class="modal fade" id="add-severity-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                	<h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Severity Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
							                               	 <div class="form-group">
							                                    <label class="col-sm-3 control-label">Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Name" id="name" name="name" type="text" onkeypress="return blockSpecialChar(event)" >                               
						
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Description</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Description" id="description" name="description" type="text">
							
							                                    </div>
							                                </div>
							                                
							                                <div class="spacer text-center">
							                                    <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
							                                     <button type="button" onclick="add_severity()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
							                                </div>
							
                            			</form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!--RESOLUTION MODAL-->

<div class="modal fade" id="add-resolution-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                	<h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Resolution Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
							                               	 <div class="form-group">
							                                    <label class="col-sm-3 control-label">Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Name" id="resolution_name" name="resolution_name" type="text" onkeypress="return blockSpecialChar(event)" >                               
							
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Description</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Description" id="resolution_description" name="resolution_description" type="text">
							
							                                    </div>
							                                </div>
							                                
							                                <div class="spacer text-center">
							                                    <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
							                                     <button type="button" onclick="add_resolution()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
							                                </div>
							
                            			</form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                 	<!--STATUS MODAL-->



<div class="modal fade" id="add-status-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                	<h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Status Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
							                               	 <div class="form-group">
							                                    <label class="col-sm-3 control-label">Name</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Name" id="status_name" name="status_name" type="text" >                               
							
							                                    </div>
							                                </div>
							                                <div class="form-group">
							                                    <label class="col-sm-3 control-label">Description</label>
							                                    <div class="col-sm-6">
							                                        <input class="form-control" placeholder="Description" id="status_description" name="status_description" type="text">
							
							                                    </div>
							                                </div>
							                                
							                                <div class="spacer text-center">
							                                    <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
							                                     <button type="button" onclick="add_status()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
							                                </div>
							
                            			</form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!--USERS MODAL-->


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



                                    <!--COMPANY MODAL-->


<div class="modal fade" id="add-company" tabindex="-1" role="dialog">
                                        <div class="modal-dialog colored-header danger">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-plus" style="padding-right:10px"></i>Add Company</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        
                               <form method="POST" action="#" class="form-horizontal group-border" style="border-radius: 0px;" parsley-validate novalidate>
                                 
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
                                        <input class="form-control" placeholder="Email" name="email" id="company_email" type="text" required>                               

                                    </div>
                                </div>

                                <div class="spacer text-center" style="padding-left:30px">
                                    <button type="reset" class="btn btn-default btn-lg" style="width:150px;"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</button>
                                    <button type="button" onclick="add_client()" class="btn btn-danger btn-lg" style="width:150px;"><i class="fa fa-save" style="padding-right:10px;"></i>Save</button>
                                </div>

                            </form>   
                                                    </div>
                                                </div>

                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    



				<!--EDIT STATUS MODAL-->

<div class="modal fade" id="edit_status" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center">asd<i class="fa fa-plus-circle" style="padding-right:10px"></i>Status Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="edit_status_id" name="edit_status_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Status</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="edit_status_desc" name="edit_status_desc" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Description</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="edit_status_description" name="edit_status_description" type="text">
                            
                                                                </div>
                                                            </div>

                                                            
                                                            
                                                            <div class="spacer text-center">
                                                                 <button type="button" onclick="edit_status()" class="btn btn-danger btn-lg"><i class="fa fa-save" style="padding-right:10px"></i>Update</button>
                                                            </div>
                                        			</form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>



<!--EDIT RESOLUTION MODAL-->

 <div class="modal fade" id="edt_rsltn_mdl" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Resolution Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="includes/edit_resolution_process.php" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="edit_resolution_id" name="id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Resolution ID</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="edit_rsltn" name="name" type="text">                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Resolution</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="edit_rsltn_desc" name="description" type="text">
                            
                                                                </div>
                                                            </div>

                                                            
                                                            
                                                            <div class="spacer text-center">
                                                                <button type="button" onclick="edit_resolution()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-save" style="padding-right:10px"></i>Update</button>
                                                            </div>
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!--EDIT SEVERTITY MODALS-->

<div class="modal fade" id="edit_severity" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Severity Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="edit_severity_id" name="edit_severity_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Severity ID</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="edit_svrty" name="edit_svrty" type="text" onkeypress="return blockSpecialChar(event)">                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Severity</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="edit_svrty_desc" name="edit_svrty_desc" type="text">
                            
                                                                </div>
                                                            </div>

                                                            
                                                            
                                                            <div class="spacer text-center">
                                                                <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
                                                                 <button type="button" onclick="edit_severity()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
                                                            </div>
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <!--VIEW STATUS MODAL-->


<div class="modal fade" id="view_status" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-info" style="padding-right:10px"></i>View Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="view_status_id" name="view_status_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Status</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Status" id="view_sttus" name="view_sttus" type="text" onkeypress="return blockSpecialChar(event)" readonly>                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Description</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="view_desc" name="view_desc" type="text" readonly>
                            
                                                                </div>
                                                            </div>                                                    
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    




                                    <!--VIEW RESOLUTION MODAL-->



<div class="modal fade" id="view_resolution" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-info" style="padding-right:10px"></i>View Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="view_resolution_id" name="view_resolution_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Resolution</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Status" id="view_rsltn" name="view_rsltn" type="text" onkeypress="return blockSpecialChar(event)" readonly>                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Description</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="view_res_desc" name="view_res_desc" type="text" readonly>
                            
                                                                </div>
                                                            </div>                                                    
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    


<!--VIEW SEVERITY MOdAL-->

 <div class="modal fade" id="view_severity" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-info" style="padding-right:10px"></i>View Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="view_severity_id" name="view_severity_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Severity</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Status" id="view_svrty" name="view_svrty" type="text" onkeypress="return blockSpecialChar(event)" readonly>                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Description</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="view_svrty_desc" name="view_svrty_desc" type="text" readonly>
                            
                                                                </div>
                                                            </div>                                                    
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    
                                    
				<!-- Add Client User -->
				<div class="modal fade" id="add-client-user" tabindex="-1" role="dialog">
                                        <div class="modal-dialog colored-header danger">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                	<h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>New User | Company Name</h3>
                                                </div>
                                                <div class="modal-body">
                                                	<form class="form-group" action="#" method="POST">
                                                		<div class="row">
                                                			<div class="col-md-6">
	                                                			<div class="form-group">
		                                           					<div class="input-group">
																		<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" placeholder="Firstname" name="n_fname" id="n_fname">
																	</div>	
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">
		                                           						<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" placeholder="MI" name="n_mname" id="n_mname">
		                                           					</div>
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">	
		                                           						<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" placeholder="Lastname" name="n_lname" id="n_lname">
		                                           					</div>	
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">
		                                           						<span class="input-group-addon"><i class="fa fa-phone"></i></span><input class="form-control" type="number" placeholder="Contact Number" name="n_cnum" id="n_cnum">
		                                           					</div>	
		                                           				</div>
	                                           				</div>
	                                           				<div class="col-md-6">
		                                           				<div class="form-group">
		                                           					<div class="input-group">
		                                           						<span class="input-group-addon"><i class="fa fa-google-plus"></i></span><input class="form-control" type="email" placeholder="E-mail" name="n_email" id="n_email">
		                                           					</div>
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">
		                                           						<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" placeholder="Username" name="n_uname" id="n_uname">
		                                           					</div>
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">	
		                                           						<span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" placeholder="Password" name="n_pass" id="n_pass">
		                                           					</div>
		                                           				</div>
		                                           				<div class="form-group">
		                                           					<div class="input-group">	
		                                           						<span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" placeholder="Confirm Password" name="n_confrm_pass" id="n_confrm_pass">
		                                           					</div>
		                                           				</div>
		                                           				<div class="spacer pull-right">
			                                           				<button class="btn btn-md btn-default" type="reset"><i class="fa fa-ban"></i>Cancel</button>	
																	<button class="btn btn-md btn-danger" type="button" onclick="n_client_user()"><i class="fa fa-save"></i>Save</button>
		                                           				</div>
	                                           				</div>
	                                           			</div>
	                                           		</form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- VIEW CLIENT USER -->
                                    
                                    <div class="modal fade" id="view_users" tabindex="-1" role="dialog">
                                        <div class="modal-dialog colored-header info">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-info" style="padding-right:10px"></i>View User Information</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="view_users_id" name="view_users_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Full Name</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Full Name" id="full_name" name="full_name" type="text" readonly>                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Contact No.</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Contact No." id="contact_no" name="contact_no" type="text" readonly>
                            
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">E-mail</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="E-mail" id="e_mail" name="e_mail" type="text" readonly>
                            
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Username</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Username" id="user_name" name="user_name" type="text" readonly>
                            
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Role</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Role" id="roles" name="roles" type="text" readonly>
                            
                                                                </div>
                                                            </div>                                                             
                            
                                        </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <!--EDIT COMPANY USERS-->

                                    <div class="modal fade" id="edit_users" tabindex="-1" role="dialog">
                                        <div class="modal-dialog colored-header default">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-save" style="padding-right:10px"></i>Edit User Information</h3>
                                                </div>
                                                <div class="modal-body">
                                           			<form method="POST" action="includes/edit_user_process.php" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <input type="hidden" id="edit_users_id" name="edit_users_id">
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Firstname</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="edit_fname" name="edit_fname" type="text">                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">M.I.</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="edit_mname" name="edit_mname" type="text">
                            
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Lastname</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="edit_lname" name="edit_lname" type="text">
                            
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">contact</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="edit_cntct" name="edit_cntct" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Email</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="edit_email" name="edit_email" type="text">
                                                                </div>
                                                            </div>
                                                             
                                                             <div class="spacer text-center">
                                                                 <button type="button" class="btn btn-primary btn-lg" style="width:20%" onclick="save_edit_clnt_user()"><i class="fa fa-save" style="padding-right:10px"></i>Update</button>
                                                            </div>                                                                                       
                                        			</form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
