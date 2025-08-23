<!-- ASSIGN REPORTER -->
<div id="assgn_user" class="modal fade" role="dialog">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-info" style="padding-right: 10px"></i>Project Description
				</h3>
			</div>
			<div class="modal-body">
				<div id="assign_modal" class="content">
					<hr></div>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-3 control-label">Add</label>
						<table>
							<div class="col-sm-5">
							<select id="s_user" class="select2" name="s_user">
							<option value="">Select User</option>
							<?php 
							$slct_user = "SELECT user_id,fname,mname,lname,company_id FROM users WHERE company_id=? AND user_id != ?";
							$user_res = $db->prepare($slct_user);
							$user_res->execute(array($row[4],$row[0]));
							while($user_row = $user_res->fetch(PDO::FETCH_NUM)){
						?>
							<option value="<?php echo $user_row[0] ?>"><?php echo $user_row[1] . " " . $user_row[2] . " " . $user_row[3] ?>
							</option>
							<?php } ?></select></div>
							<div class="col-sm-2">
							<button id="assign" class="btn btn-primary btn-md" onclick="assgn(<?php echo $row[4] ?>)" style="width: 150px;" type="button">
							<i class="fa fa-user" style="padding-right: 10px;">
							</i>Assign</button></div>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- VIEW PROJECT DETAILS -->
<div id="view_prjct_dtails" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-plus" style="padding-right: 10px"></i>Add Projects</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
						<div class="form-group">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<select id="s_prjct" class="select2" name="s_prjct">
								<option value="">Select Project</option>
								<?php
								$slct_prjct = "SELECT * FROM projects";
								$res_prjct = $db->prepare($slct_prjct);
								$res_prjct->execute();
								while($row_prjct = $res_prjct->fetch(PDO::FETCH_NUM)){
							?>
								<option value="<?php echo $row_prjct[0]; ?>"><?php echo $row_prjct[1]; ?>
								</option>
								<?php
							}
							?></select> </div>
						</div>
						<div class="form-group" style="display: none;">
							<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-7">
								<input id="n_project" class="form-control" name="n_project" placeholder="Project Description" required="" type="text">
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 30px">
							<button class="btn btn-default btn-lg" style="width: 150px;" type="reset">
							<i class="fa fa-ban" style="padding-right: 10px;">
							</i>Cancel</button>
							<button class="btn btn-danger btn-lg" onclick="add_project(<?php echo $cmpny_id; ?>)" style="width: 150px;" type="button">
							<i class="fa fa-save" style="padding-right: 10px;">
							</i>Add</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
