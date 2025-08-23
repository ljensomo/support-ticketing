<html>

<?php
	include 'connection.php';
	
	$cid = $_POST['cid'];
	$pid = $_POST['pid'];
		
	$slct_prjct	= "SELECT proj_id,proj_desc FROM projects WHERE proj_id = ?";
	$prjct_res = $db->prepare($slct_prjct);
	$prjct_res->execute(array($pid));
	$prjct_row=$prjct_res->fetch(PDO::FETCH_NUM);
?>
<h3><?php echo $prjct_row[1] ?></h3><hr>
<input type="hidden" id="pid" value="<?php echo $pid; ?>" id="prjct_id">
<table class="no-border">
	<thead class="no-border">
		<tr>
			<th class="hidden">ID</th>
			<th>Firstname</th>
			<th>MI</th>
			<th>Lastname</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody class="no-border-y">
	<?php
		$cnt = "SELECT
		COUNT(a.id)
		FROM company_proj AS a
		JOIN users AS b
		ON a.assignee_id=b.user_id 
		WHERE a.company_id=? AND a.project_id=?";
		$cnt_res = $db->prepare($cnt);	
		$cnt_res->execute(array($cid,$pid));
		$cnt_row = $cnt_res->fetch(PDO::FETCH_NUM);
		
		if($cnt_row[0]>0){
		$slct_assgnee = "SELECT
		a.id,
		a.company_id,
		a.project_id,
		a.assignee_id,
		b.fname,
		b.mname,
		b.lname
		FROM company_proj AS a
		JOIN users AS b
		ON a.assignee_id=b.user_id 
		WHERE a.company_id=? AND a.project_id=?";
		$assgnee_res = $db->prepare($slct_assgnee);
		$assgnee_res->execute(array($cid,$pid));
		while($assgnee_row = $assgnee_res->fetch(PDO::FETCH_NUM)){
	?>
		<tr>
			<td class="hidden"><?php echo $assgnee_row[3]; ?></td>
			<td><?php echo $assgnee_row[4]; ?></td>
			<td><?php echo $assgnee_row[5]; ?></td>
			<td><?php echo $assgnee_row[6]; ?></td>
			<td><a class="btn btn-sm btn-danger" onclick="sample(<?php echo $assgnee_row[0] ?>)"><i class="fa fa-times-circle"></i></a></td>
		</tr>
		<?php } 
			}else{
		?>
		<tr>
		<td colspan="4">No Assignee.</td>
		</tr>
		<?php } ?>
</table>

</html>
