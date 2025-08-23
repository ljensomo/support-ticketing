<!--RESOLUTION MODAL-->
<div id="add-resolution-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-plus-circle" style="padding-right: 10px"></i> Add Resolution Details
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<div class="form-group">
						<label class="col-sm-3 control-label">Name</label>
						<div class="col-sm-6">
							<input id="resolution_name" class="form-control" name="resolution_name" onkeypress="return blockSpecialChar(event)" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="resolution_description" class="form-control" name="resolution_description" placeholder="Description" type="text">
						</div>
					</div>
					<hr>
					<div class="spacer text-center" style="padding-left:50px;">
						<button class="btn btn-default btn-lg btn-flat btn-rad" type="reset">
						<i class="fa fa-ban"></i> Cancel
						</button>
						<button class="btn btn-primary btn-lg btn-flat btn-rad" onclick="add_resolution()" type="button">
						<i class="fa fa-plus"></i> Add
						</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--EDIT RESOLUTION MODAL-->
<div id="edt_rsltn_mdl" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
		<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-pencil" style="padding-right: 10px"></i> Edit Resolution Details
				</h3>
			</div>
			<div class="modal-body">
				<form action="includes/edit_resolution_process.php" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="edit_resolution_id" name="id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Resolution ID</label>
						<div class="col-sm-6">
							<input id="edit_rsltn" class="form-control" name="name" placeholder="Name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Resolution</label>
						<div class="col-sm-6">
							<input id="edit_rsltn_desc" class="form-control" name="description" placeholder="Description" type="text">
						</div>
					</div>
					<div class="spacer text-center" style="padding-left:110px;">
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="edit_resolution()" type="button">
							<i class="fa fa-save"></i> Save Changes
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--VIEW RESOLUTION MODAL-->
<div id="view_resolution" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930; color: white;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-info-circle" style="padding-right: 10px"></i>View Details</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input id="view_resolution_id" name="view_resolution_id" type="hidden">
					<div class="form-group">
						<label class="col-sm-3 control-label">Resolution</label>
						<div class="col-sm-6">
							<input id="view_rsltn" class="form-control" name="view_rsltn" onkeypress="return blockSpecialChar(event)" placeholder="Status" readonly type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Description</label>
						<div class="col-sm-6">
							<input id="view_res_desc" class="form-control" name="view_res_desc" placeholder="Description" readonly type="text">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
