<?php require_once('../includes/connection.php'); ?>

<div id="comments" class="list-group tickets">
						<?php 
						$tid = $_GET['tid'];
							$cmmnt_loader = "SELECT a.id,a.date_added,a.ticket_id,a.userid,a.comment_desc,b.fname,b.mname,b.lname,b.profile_pic
							FROM comments AS a
							JOIN users AS b
							ON a.userid=b.user_id
							WHERE a.ticket_id = ?
							ORDER BY date_added asc";
							$cmmnt_res = $db->prepare($cmmnt_loader);
							$cmmnt_res->execute(array($tid));
							while($cmmnt_row = $cmmnt_res->fetch(PDO::FETCH_NUM)){
						?>
						<li id="comment" class="list-group-item">
						<span class="fa fa-comment pull-right"></span>
						<?php if($cmmnt_row[8]==""){ ?>
						<img alt="avatar" class="avatar" src="images/default_avatar2.png" width="50px">
						<?php }else{ ?>
						<img alt="avatar" class="avatar" src="images/avatars/<?php echo $cmmnt_row[8]; ?>" width="50px">
						<?php } ?>
						<h4 class="name"><?php echo $cmmnt_row[5] . " " . $cmmnt_row[6] . " " . $cmmnt_row[7] ?>
						</h4>
						<p><?php echo $cmmnt_row[4] ?></p>
						<span class="date"><?php
						 echo $cmmnt_row[1];
						 ?></span></li>
						<?php } ?>
						<!--
						<li class="list-group-item" href="#">
						<span class="fa fa-comment pull-right"></span>
						<img class="avatar" src="images/avatar4_50.jpg" />
						<h4 class="name">Jhon Doe</h4>
						<p>My vMaps plugin doesn't work</p>
						<span class="date">15 Feb</span> </li>
						<li class="list-group-item" href="#">
						<span class="fa fa-comment pull-right"></span>
						<img class="avatar" src="images/avatar1_50.jpg" />
						<h4 class="name">Victor Jara</h4>
						<p>My vMaps plugin doesn't work</p>
						<span class="date">15 Feb</span> </li>
						--></div>
