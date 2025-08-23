<!--STATUS MODAL-->
<div id="add-status-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-plus-circle"></i> Add Status
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<div class="form-group">
						<label class="col-sm-3 control-label">Name</label>
						<div class="col-sm-6">
							<input id="status_name" class="form-control" name="status_name" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="status_description" class="form-control" name="status_description" placeholder="Description" type="text">
						</div>
					</div>
					<div class="spacer text-center" style="padding-left:80px;">
						<button class="btn btn-default btn-md btn-flat btn-rad" type="reset">
						<i class="fa fa-ban"></i> Cancel
						</button>
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="add_status()" type="button">
						<i class="fa fa-plus"></i> Add
						</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--EDIT STATUS MODAL-->
<div id="edit_status" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
	<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-pencil"></i> Edit Status Details
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="edit_status_id" name="edit_status_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
						<div class="col-sm-6">
							<input id="edit_status_desc" class="form-control" name="edit_status_desc" onkeypress="return blockSpecialChar(event)" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="edit_status_description" class="form-control" name="edit_status_description" placeholder="Description" type="text">
						</div>
					</div>
					<div class="spacer text-center" style="padding-left:110px;">
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="edit_status()" type="button">
							<i class="fa fa-save"></i> Save Changes
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--VIEW STATUS MODAL-->
<div id="view_status" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-info-circle"></i> View Details
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="view_status_id" name="view_status_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
						<div class="col-sm-6">
							<input id="view_sttus" class="form-control" name="view_sttus" onkeypress="return blockSpecialChar(event)" placeholder="Status" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="view_desc" class="form-control" name="view_desc" placeholder="Description" readonly type="text">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
