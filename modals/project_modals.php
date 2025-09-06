<!-- ADD PROJECT -->
<div id="add-project" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus" style="padding-right: 10px"></i>Add Projects</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" id="add_project_form" style="border-radius: 0px;">
						<input type="hidden" name="company" value="<?php echo $cmpny_id; ?>">
						<div class="form-group">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<select id="s_prjct" class="select2" name="project">
									<option value="">Select Project</option>
									<?php
										$slct_prjct = "SELECT * FROM projects";
										$res_prjct = $db->prepare($slct_prjct);
										$res_prjct->execute();
										while($row_prjct = $res_prjct->fetch(PDO::FETCH_ASSOC)){
									?>
										<option value="<?=$row_prjct['id']?>"><?=$row_prjct['project_name']?>
										</option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group" style="display: none;">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<input id="n_project" class="form-control" name="n_project" placeholder="Project Description" required="" type="text">
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 30px">
							<button class="btn btn-default btn-md btn-flat btn-rad" style="width: 150px;" type="reset">
								<i class="fa fa-ban" style="padding-right: 10px;"></i>Cancel
							</button>
							<button class="btn btn-primary btn-md btn-flat btn-rad" style="width: 150px;" type="submit">
								<i class="fa fa-save" style="padding-right: 10px;"></i>Add
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- NEW PROJECT -->
<div id="new_project" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-plus-circle"></i> Add New Project
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal" method="POST" id="new_project_form" style="border-radius: 0px; padding-left: 50px">
					<div class="form-group">
						<label class="col-sm-3 control-label">Project Name </label>
						<div class="col-sm-6">
							<input class="form-control" name="project_name" placeholder="Enter Project Name" type="text" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Project Description </label>
						<div class="col-sm-6">
							<textarea name="description" class="form-control" placeholder="Enter Project Description" required></textarea>
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-default btn-lg btn-flat btn-rad" type="reset">
							<i class="fa fa-ban"></i> Cancel
						</button>
						<button class="btn btn-danger btn-lg btn-flat btn-rad" type="submit">
							<i class="fa fa-plus"></i> Add Project
						</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<!-- ADD PROJECT IN COMPANY -->
<div id="add_c_project" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus"></i> Add Projects</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" id="add_company_project_form" style="border-radius: 0px;">
						<input type="hidden" name="company" value="<?php echo $cmpny_id; ?>">
						<div class="form-group">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<select class="select2" name="project" id="sel_prjct" required>
									<option value="">Select Project</option>
									<?php
										$slct_prjct = "SELECT * FROM projects";
										$res_prjct = $db->prepare($slct_prjct);
										$res_prjct->execute();
										while($row_prjct = $res_prjct->fetch(PDO::FETCH_NUM)){
									?>
									<option value="<?php echo $row_prjct[0]; ?>"><?php echo $row_prjct[1]; ?>
									</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Date Implemented</label>
							<div class="col-sm-7">
								<input id="date_implement" name="date_implemented" type="date" class="form-control" >
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 30px">
							<button class="btn btn-primary btn-md btn-flat btn-rad" style="width: 100px;margin-right:180px;" type="submit">
								<i class="fa fa-save"></i> Add
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ADD SUPPORT IN THE PROJECT -->
<div id="add-support" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-plus-circle" style="padding-right: 10px"></i>
					Add Support
				</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" id="add_support_form" style="border-radius: 0px;">
						<input type="hidden" id="project_id" name="project_id" />
						<div class="form-group">
							<label class="col-sm-3 control-label">Supports :</label>
							<div class="col-sm-7">
								<select class="select2" id="project_support" name="support">
									<option value="">Select Support</option>
									<?php
										$query_support = "SELECT 
															u.id, CONCAT(fname,' ',lname) AS fullname
														FROM users u 
														JOIN user_roles AS ur ON u.id=ur.id
														WHERE role_id IN (1,2)";
										$stmt_support = $db->prepare($query_support);
										$stmt_support->execute();
										while($support = $stmt_support->fetch(PDO::FETCH_ASSOC)){
									?>
									<option value="<?=$support['id']?>"><?=$support['fullname']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 220px">
							<button class="btn btn-primary btn-md btn-flat btn-rad" type="submit">
								<i class="fa fa-plus"></i> Add Support
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- EDIT PROJECT -->
<div id="edit-project" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-pencil" style="padding-right: 10px"></i> Edit Project
				</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" id="edit_project_form" style="border-radius: 0px;">
						<input type="hidden" id="project_id2" name="project_id">
						<div class="form-group">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<input type="text" id="project_name2" name="project_name" class="form-control" placeholder="Project Name" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Description</label>
							<div class="col-sm-7">
								<textarea name="description" id="project_desc2" class="form-control" placeholder="Project Description"></textarea>
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 230px">
							<button type="submit" class="btn btn-md btn-primary btn-flat btn-rad">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
