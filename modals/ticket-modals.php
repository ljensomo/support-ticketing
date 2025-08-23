<!-- SET TICKET DETAILS -->
<div id="tckt_dtails" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
				<i class="fa fa-pencil" style="padding-right: 10px;"></i>Update Ticket</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input type="hidden" id="f_tid" value="<?php echo $tid; ?>"?>
					<div class="form-group">
						<label class="col-sm-3 control-label"><strong>Status :</strong></label>
						<div class="col-sm-7">
							<select class="form-control" id="t_stts">
								<?php
									$tsql_stts = "SELECT 
														* 
													FROM STATUS 
													WHERE status_id IN (2,5,6,7,17)";
									$tstts_res = $db->prepare($tsql_stts);
									$tstts_res->execute();
									while($tstts_row=$tstts_res->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $tstts_row[0]; ?>"><?php echo $tstts_row[1]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label"><strong>Severity :</strong></label>
						<div class="col-sm-7">
							<select class="form-control" id="t_svrty">
								<option value=0>--Severity</option>
								<?php
									$tsql_svrty = "SELECT * FROM severity";
									$tsvrty_res = $db->prepare($tsql_svrty);
									$tsvrty_res->execute();
									while($tsvrty_row=$tsvrty_res->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $tsvrty_row[0]; ?>"><?php echo $tsvrty_row[1]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-primary btn-md btn-flat btn-rad" onclick="updt_tckt_dtails()" type="button" style="margin-right:110px;">
							<i class="fa fa-save"></i> Save Changes
						</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

	<!-- TRANSFER TICKET MODAL -->

	
<div id="transfer-ticket-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-mail-forward"></i> Transfer Ticket
				</h3>
			</div>
			<div class="modal-body">
				<p><strong>Transfer to:</strong></p>
				<hr>
				<form action="#" class="form-horizontal group-border" method="POST" style="border-radius: 0px; padding-left: 50px">
					<input type="hidden" id="ticket_id" />
					<input type="hidden" id="sender" value="<?php echo $row[0]; ?>" />
					<div class="form-group">
						<label class="col-sm-3 control-label"><strong>Select support :</strong></label>
						<div class="col-sm-7">
							<select class="select2" id="user">
								<option value="">SELECT SUPPORT</option>
								<?php
									$query = "SELECT u.user_id,fname,mname,lname 
												FROM users AS u
												JOIN users_roles AS ur
												ON u.user_id=ur.user_id
												WHERE u.user_id != ?
												AND ur.user_role IN (1,2)";
									$stmt = $db->prepare($query);
									$stmt->execute(array($row[0]));
									while($row_users=$stmt->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $row_users[0]; ?>"><?php echo $row_users[1] . ' ' . $row_users[3]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-primary btn-md" id="transfer-ticket" type="button" style="margin-right:130px;">
						<i class="fa fa-mail-forward" style="padding-right: 10px"></i>Request
						</button></div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<!-- CLOSE TICKET -->
<div id="close-ticket-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3 align="center">
					<i class="fa fa-lock" style="padding-right: 10px;"></i> Close Ticket
				</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<div class="form-group">
						<label class="col-sm-3 control-label"><strong>Status :</strong></label>
						<div class="col-sm-7">
							<select class="form-control" id="close_status">
								<?php
									$query_status = "SELECT 
														* 
													FROM STATUS 
													WHERE status_id IN(3,7)";
									$stmt_status = $db->prepare($query_status);
									$stmt_status->execute();
									while($close_status=$stmt_status->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $close_status[0]; ?>"><?php echo $close_status[1]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Resolution :</label>
						<div class="col-sm-6">
							<select class="form-control" id="close_resolution">
								<?php
									$tsql_rsltn = "SELECT * FROM resolution";
									$trsltn_res = $db->prepare($tsql_rsltn);
									$trsltn_res->execute();
									while($trsltn_row=$trsltn_res->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $trsltn_row[0]; ?>"><?php echo $trsltn_row[1]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div> 
					<div class="spacer text-center">
						<button class="btn btn-primary btn-md btn-flat btn-rad" type="button" style="margin-right:13px;" id="close_ticket">
						<i class="fa fa-save"></i> Save Changes
						</button></div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<div id="reassign-ticket-modal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header default">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3>
				<i class="fa fa-retweet" style="padding-right: 10px;"></i>Re-assign Ticket</h3>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px; padding-left: 50px">
					<input type="hidden" id="ticket" />
					<div class="form-group">
						<label class="col-sm-3 control-label"><strong>Select support :</strong></label>
						<div class="col-sm-7">
							<select class="form-control" id="support">
								<?php
									$query_support = "SELECT 
															u.user_id,
															u.fname,
															u.mname,
															u.lname
														FROM users AS u
														JOIN users_roles AS ur 
														ON u.user_id=ur.user_id
														WHERE ur.user_role IN (1,2)";
									$stmt_support = $db->prepare($query_support);
									$stmt_support->execute();
									while($support=$stmt_support->fetch(PDO::FETCH_NUM)){
								?>
								<option value="<?php echo $support[0]; ?>"><?php echo $support[1] . ' ' . $support[2] . ' ' .$support[3]; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="spacer text-center">
						<button class="btn btn-primary btn-md" type="button" style="margin-right:152px;" id="reassign_ticket">
						<i class="fa fa-save" style="padding-right: 10px"></i>Save
						</button></div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<!-- ASSIGN TICKET -->
<div id="assign-ticket" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3>
					<i class="fa fa-bookmark" style="padding-right: 10px"></i>
					Assign Ticket
				</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="#" class="form-horizontal group-border" method="POST" novalidate="" parsley-validate="" style="border-radius: 0px;">
						<input type="hidden" id="assignticket_id" />
						<div class="form-group">
							<label class="col-sm-3 control-label">Supports :</label>
							<div class="col-sm-7">
								<select class="select2" id="assign_ticket">
								<option value="">Select Support</option>

								<?php

									$query_support = "SELECT 
														u.user_id,
														u.fname,
														u.mname,
														u.lname,
														u.profile_pic
													FROM users AS u
													JOIN users_roles AS ur
													ON u.user_id=ur.user_id
													WHERE ur.user_role IN (1,2)";
									$stmt_support = $db->prepare($query_support);
									$stmt_support->execute();

									while($supports = $stmt_support->fetch(PDO::FETCH_NUM)){

								?>

								<option value="<?php echo $supports[0]; ?>">
									<?php echo $supports[1] . ' ' . $supports[3]; ?>
								</option>

								<?php

									}

								?>
								</select>
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 30px">
							<button class="btn btn-primary btn-md" style="width: 150px;margin-right:135px;" type="button" id="btn_assign">
								<i class="fa fa-save" style="padding-right: 10px;">
								</i>Save
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="add-new-attachment" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog colored-header danger">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #272930;border-bottom: 1px solid #272930 !important">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
				</button>
				<h3>
					<i class="fa fa-picture-o" style="padding-right: 10px"></i>
					New Attachment
				</h3>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<form action="includes/new-attachment.php" class="form-horizontal group-border" method="POST" enctype="multipart/form-data" style="border-radius: 0px;">
						<input type="hidden" name="attachment_tid" id="attachment_tid" value="<?php echo $tid; ?>" />
						<div class="form-group">
							<label class="col-sm-3 control-label">Attachment:</label>
							<div class="col-sm-7">
								<input type="file" name="file" id="file" class="form-control">
							</div>
						</div>
						<div class="spacer text-center" style="padding-left: 30px">
							<button class="btn btn-primary btn-md btn-flat btn-rad" style="width: 150px;margin-right:135px;" type="submit">
								<i class="fa fa-save" style="padding-right: 10px;">
								</i> Save Attachment
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


