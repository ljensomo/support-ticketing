<!-- Add Client User -->
<div id="add-client-user" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus-circle" style="padding-right: 10px"></i>New 
				User | Company Name</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-group" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_fname" class="form-control" name="n_fname" placeholder="Firstname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_mname" class="form-control" name="n_mname" placeholder="MI" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_lname" class="form-control" name="n_lname" placeholder="Lastname" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-phone"></i></span>
									<input id="n_cnum" class="form-control" name="n_cnum" placeholder="Contact Number" type="number">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-google-plus"></i></span>
									<input id="n_email" class="form-control" name="n_email" placeholder="E-mail" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-user"></i></span>
									<input id="n_uname" class="form-control" name="n_uname" placeholder="Username" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_pass" class="form-control" name="n_pass" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-lock"></i></span>
									<input id="n_confrm_pass" class="form-control" name="n_confrm_pass" placeholder="Confirm Password" type="password">
								</div>
							</div>
							<div class="spacer pull-right">
								<button class="btn btn-md btn-default" type="reset">
								<i class="fa fa-ban"></i>Cancel</button>
								<button class="btn btn-md btn-danger" onclick="n_client_user()" type="button">
								<i class="fa fa-save"></i>Save</button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- VIEW CLIENT USER -->
<div id="view_users" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header info">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-search" style="padding-right: 10px"></i>View User 
				Information</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="view_users_id" name="view_users_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Full Name</label>
						<div class="col-sm-6">
							<input id="full_name" class="form-control" name="full_name" placeholder="Full Name" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Contact No.</label>
						<div class="col-sm-6">
							<input id="contact_no" class="form-control" name="contact_no" placeholder="Contact No." readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">E-mail</label>
						<div class="col-sm-6">
							<input id="e_mail" class="form-control" name="e_mail" placeholder="E-mail" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-6">
							<input id="user_name" class="form-control" name="user_name" placeholder="Username" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Role</label>
						<div class="col-sm-6">
							<input id="roles" class="form-control" name="roles" placeholder="Role" readonly type="text">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
