<div id="add-severity-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-plus-circle" style="padding-right: 10px"></i> Add Severity 
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" style="border-radius: 0px; padding-left: 50px">
					<div class="form-group">
						<label class="col-sm-3 control-label">Name</label>
						<div class="col-sm-6">
							<input id="name" class="form-control" name="name" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="description" class="form-control" name="description" placeholder="Description" type="text">
						</div>
					</div>
					<hr>
					<div class="spacer text-center">
						<button class="btn btn-default btn-lg btn-flat btn-rad" style="width: 20%" type="reset">
						<i class="fa fa-ban" style="padding-right: 10px"></i>Cancel
						</button>
						<button class="btn btn-primary btn-lg btn-flat btn-rad" onclick="add_severity()" style="width: 20%" type="button">
						<i class="fa fa-plus" style="padding-right: 10px"></i>Add
						</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--EDIT SEVERTITY MODALS-->
<div id="edit_severity" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-pencil" style="padding-right: 10px"></i> Edit Severity 
				Details</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="edit_severity_id" name="edit_severity_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Severity ID</label>
						<div class="col-sm-6">
							<input id="edit_svrty" class="form-control" name="edit_svrty" onkeypress="return blockSpecialChar(event)" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Severity</label>
						<div class="col-sm-6">
							<input id="edit_svrty_desc" class="form-control" name="edit_svrty_desc" placeholder="Description" type="text">
						</div>
					</div>
					<div class="spacer text-center" style="padding-left:20px;">
						<button class="btn btn-default btn-md btn-flat btn-rad" type="reset">
						<i class="fa fa-ban"></i> Cancel
						</button>
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="edit_severity()" type="button">
						<i class="fa fa-save"></i> Save Changes
						</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<!--VIEW SEVERITY MOdAL-->
<div id="view_severity" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-info" style="padding-right: 10px"></i>View Details</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="view_severity_id" name="view_severity_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Severity</label>
						<div class="col-sm-6">
							<input id="view_svrty" class="form-control" name="view_svrty" onkeypress="return blockSpecialChar(event)" placeholder="Status" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="view_svrty_desc" class="form-control" name="view_svrty_desc" placeholder="Description" readonly type="text">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
