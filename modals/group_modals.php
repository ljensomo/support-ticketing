<!-- add group -->
<div id="add-group" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3>
				<i class="fa fa-plus" style="padding-right: 10px"></i>Add Group</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
						<div class="form-group">
							<label class="col-sm-3 control-label">Group Name / Department Name:</label>
							<div class="col-sm-7">
								<input id="groupname" class="form-control" name="groupname" placeholder="Group Name" required="" type="text">
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 205px;">
							<button class="btn btn-danger btn-lg" id="add_group" style="width: 150px;" type="button">
							<i class="fa fa-plus" style="padding-right: 10px;">
							</i>Add</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="edit-group-details" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3>
				<i class="fa fa-plus" style="padding-right: 10px"></i>Group Details</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal" method="POST" novalidate="" style="border-radius: 0px;">
						<input type="hidden" id="group_id" />
						<div class="form-group">
							<div class="col-sm-3">
								<i class="fa fa-pencil" style="padding-right: 10px;">
								</i><strong>Group Name :</strong>
							</div>
							<div class="col-sm-7">
								<input class="form-control" type="text" id="edit_groupname" placeholder="Groupname" />
							</div>
						</div>
						<button class="btn btn-md btn-primary" style="margin-right:190px;" type="button" id="btn_save">
							<i class="fa fa-save" style="padding-right: 10px;"></i>
							Save
						</button>
						<hr style="border: 0.5px solid #272930;">

						<h5><strong>Add Project/s / Member/s in the group.</strong></h5>
						<br />

						<div class="form-group">
							<div class="col-sm-3">
								<button class="btn btn-default btn-md" id="add_project" type="button">
								<i class="fa fa-plus" style="padding-right: 10px;">
								</i>Add</button>							
							</div>
							<div class="col-sm-7">
								<select id="projects" class="select2">
									<option value="">Select Project</option>

									<?php 

									$query = "SELECT proj_id,proj_desc FROM projects";
									$stmt = $db->prepare($query);
									$stmt->execute();
									while ($row_projects = $stmt->fetch(PDO::FETCH_NUM)) {
									?>

									<option value="<?php echo $row_projects[0]; ?>"><?php echo $row_projects[1]; ?></option>

									<?php } ?>

								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3">
								<button class="btn btn-default btn-md" id="add_member" type="button">
								<i class="fa fa-plus" style="padding-right: 10px;">
								</i>Add</button>							
							</div>
							<div class="col-sm-7">
								<select id="users" class="select2">
									<option>Select Members</option>
									
									<?php 

									$query2 = "SELECT 	u.user_id,u.fname,u.mname,u.lname,r.user_role FROM users AS u  JOIN users_roles AS r ON u.user_id=r.user_id WHERE user_role IN (1,2,3)";
									$stmt2 = $db->prepare($query2);
									$stmt2->execute();
									while ($row_users = $stmt2->fetch(PDO::FETCH_NUM)) {
									?>

									<option value="<?php echo $row_users[0]; ?>"><?php echo $row_users[1] . ' ' . $row_users[2] . ' ' .$row_users[3]; ?></option>

									<?php } ?>

								</select>
							</div>
						</div>					
					</form>
				</div>
			</div>
		</div>
	</div>
</div>