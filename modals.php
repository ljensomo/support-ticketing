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