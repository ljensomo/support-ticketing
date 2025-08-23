<!--COMPANY MODAL-->
<div id="add-company" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus" style="padding-right: 10px"></i>Add Company</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
						<div class="form-group">
							<label class="col-sm-3 control-label">Company name</label>
							<div class="col-sm-7">
								<input id="company_name" class="form-control" name="company_name" placeholder="Company Name" required="" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Company TIN code</label>
							<div class="col-sm-7">
								<input id="company_tin_code" class="form-control" name="company_tin_code" placeholder="Number" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email address</label>
							<div class="col-sm-7">
								<input id="company_email" class="form-control" name="email" placeholder="Email" required="" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Priority Level</label>
							<div class="col-sm-7">
								<select class="form-control" id="priority">
									<option value=""></option>
									<option value=1>High</option>
									<option value=2>Medium</option>
									<option value=3>Low</option>
								</select>
							</div>
						</div>						
						<div class="spacer text-center" style="padding-left: 125px;">
							<button class="btn btn-default btn-lg btn-flat btn-rad" style="width: 100px;" type="reset">
							<i class="fa fa-ban" style="padding-right: 10px;">
							</i>Cancel</button>
							<button class="btn btn-primary btn-lg btn-flat btn-rad" type="button" style="width: 100px;" id="save_company" onclick="add_company()">
							<i class="fa fa-save" style="padding-right: 10px;">
							</i>Save</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- EDIT COMPANY -->
<div id="edit_company" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header primary">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus" style="padding-right: 10px"></i>Edit Company</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
						<input type="hidden" id="comp_id">
						<div class="form-group">
							<label class="col-sm-3 control-label">Company name</label>
							<div class="col-sm-7">
								<input id="e_cname" class="form-control" name="company_name" placeholder="Company Name" required="" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Company TIN code</label>
							<div class="col-sm-7">
								<input id="e_ccode" class="form-control" name="company_tin_code" placeholder="Number" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email address</label>
							<div class="col-sm-7">
								<input id="e_cemail" class="form-control" name="email" placeholder="Email" required="" type="text">
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 200px">
							<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="updt_company()" type="button">
							<i class="fa fa-save">
							</i> Save Changes</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--EDIT COMPANY USERS-->
<div id="edit_users" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-pencil" style="padding-right: 10px"></i>Edit User 
				Information</h3>
			</div>
			<div class="modal-body">
				<form action="includes/edit_user_process.php" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="edit_users_id" name="edit_users_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Firstname</label>
						<div class="col-sm-6">
							<input id="edit_fname" class="form-control" name="edit_fname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">M.I.</label>
						<div class="col-sm-6">
							<input id="edit_mname" class="form-control" name="edit_mname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Lastname</label>
						<div class="col-sm-6">
							<input id="edit_lname" class="form-control" name="edit_lname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">contact</label>
						<div class="col-sm-6">
							<input id="edit_cntct" class="form-control" name="edit_cntct" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-6">
							<input id="edit_email" class="form-control" name="edit_email" type="text">
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-primary btn-lg" onclick="save_edit_clnt_user()" style="width: 20%" type="button">
						<i class="fa fa-save" style="padding-right: 10px"></i>Update
						</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- NEW COMPANY USER -->
<div id="new_company_user" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus-circle" style="padding-right: 10px"></i>New 
				User | <?php echo $cname_row[1]; ?></h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-group" method="POST">
					<div class="row">
						<div class="col-md-6">
						<input type="hidden" value="<?php echo $cname_row[0]; ?>" id="n_c_cid">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_c_fname" class="form-control" name="n_c_fname" placeholder="Firstname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_c_mname" class="form-control" name="n_c_mname" placeholder="MI" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_c_lname" class="form-control" name="n_c_lname" placeholder="Lastname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-phone"></i></span>
									<input id="n_c_cnum" class="form-control" name="n_c_cnum" placeholder="Contact Number" type="number">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-google-plus"></i></span>
									<input id="n_c_email" class="form-control" name="n_c_email" placeholder="E-mail" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_c_uname" class="form-control" name="n_c_uname" placeholder="Username" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_c_pass" class="form-control" name="n_c_pass" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_c_confrm_pass" class="form-control" name="n_c_confrm_pass" placeholder="Confirm Password" type="password">
								</div>
							</div>
							<div class="spacer pull-right">
								<button class="btn btn-md btn-default btn-flat btn-rad" type="reset">
								<i class="fa fa-ban"></i> Cancel</button>
								<button class="btn btn-md btn-primary btn-flat btn-rad" type="button" onclick="new_c_user()">
								<i class="fa fa-save"></i> Save</button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
