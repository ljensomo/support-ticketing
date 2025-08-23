<!--USERS MODAL-->
<div id="new_f_user" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus-circle" style="padding-right: 10px"></i>New 
				User | Fortis Technologies Corp</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-group" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_f_fname" class="form-control" name="n_f_fname" placeholder="Firstname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_f_mname" class="form-control" name="n_f_mname" placeholder="MI" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_f_lname" class="form-control" name="n_f_lname" placeholder="Lastname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-phone"></i></span>
									<input id="n_f_cnum" class="form-control" name="n_f_cnum" placeholder="Contact Number" type="number">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-google-plus"></i></span>
									<input id="n_f_email" class="form-control" name="n_f_email" placeholder="E-mail" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_f_uname" class="form-control" name="n_f_uname" placeholder="Username" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_f_pass" class="form-control" name="n_f_pass" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_f_confrm_pass" class="form-control" name="n_f_confrm_pass" placeholder="Confirm Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<select class="form-control" id="n_f_role">
										<option value="">-- Role</option>
										<option value="1">Administrator</option>
										<option value="2">User</option>
										<option value="3">Watcher</option>
									</select>
								</div>
							</div>
							<div class="spacer pull-right">
								<button class="btn btn-md btn-default" type="reset">
								<i class="fa fa-ban"></i>Cancel</button>
								<button class="btn btn-md btn-primary" type="button" onclick="new_fuser()">
								<i class="fa fa-save"></i>Save</button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- VIEW FORTIS USER -->
<div id="view_fusers" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header info">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-search" style="padding-right: 10px"></i>View User 
				Information</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="view_users_id" name="view_fusers_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Full Name</label>
						<div class="col-sm-6">
							<input id="f_full_name" class="form-control" name="full_name" placeholder="Full Name" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Contact No.</label>
						<div class="col-sm-6">
							<input id="f_contact_no" class="form-control" name="contact_no" placeholder="Contact No." readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">E-mail</label>
						<div class="col-sm-6">
							<input id="f_e_mail" class="form-control" name="e_mail" placeholder="E-mail" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-6">
							<input id="f_user_name" class="form-control" name="user_name" placeholder="Username" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Role</label>
						<div class="col-sm-6">
							<input id="f_roles" class="form-control" name="roles" placeholder="Role" readonly type="text">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- EDIT FORTIS USER -->
<div id="edit_fusers" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-pencil" style="padding-right: 10px"></i>Edit User 
				Information</h3>
			</div>
			<div class="modal-body">
				<form action="includes/edit_user_process.php" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="edit_fuser_id" name="edit_fuser_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Firstname</label>
						<div class="col-sm-6">
							<input id="edit_f_fname" class="form-control" name="edit_fname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">M.I.</label>
						<div class="col-sm-6">
							<input id="edit_f_mname" class="form-control" name="edit_mname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Lastname</label>
						<div class="col-sm-6">
							<input id="edit_f_lname" class="form-control" name="edit_lname" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">contact</label>
						<div class="col-sm-6">
							<input id="edit_f_cntct" class="form-control" name="edit_cntct" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-6">
							<input id="edit_f_email" class="form-control" name="edit_email" type="text">
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="updte_fuser()" style="margin-right: 120px;" type="button">
						<i class="fa fa-save"></i> Save Changes
						</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
