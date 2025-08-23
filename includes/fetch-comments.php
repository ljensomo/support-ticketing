<?php  

	require_once("connection.php");

	if(isset($_POST["tid"])){

		$ticket_id = $_POST["tid"];

		$query = "SELECT 
					a.id,
					DATE_FORMAT(a.date_added,'%b. %d, 20%y %h:%i %p'),
					a.ticket_id,
					a.userid,
					a.comment_desc,
					b.fname,
					b.mname,
					b.lname,
					b.profile_pic,
					ur.user_role
	              FROM comments AS a
	              JOIN users AS b
	              ON a.userid=b.user_id
	              JOIN users_roles AS ur
	              ON b.user_id=ur.user_id
	              WHERE a.ticket_id = ?
	              ORDER BY a.id DESC";
	    $stmt = $db->prepare($query);
	    $stmt->execute(array($ticket_id));
	    $count = $stmt->rowCount();
	    $output = '';

	    if($count > 0){

	    	while($row = $stmt->fetch(PDO::FETCH_NUM)){

	    		$output .= '
                              <li class="list-group-item" href="#">
                                <span class="fa fa-comment pull-right"></span>
                                <img class="avatar" src="images/avatars/' . $row[8] . '"/ style="height:50px;width:50px;">
                                <h4 class="name">' . $row[5] . ' ' . $row[6] . ' ' . $row[7] . '</h4>
                                <p>' . $row[4] . '</p>
                                <span class="date">' . $row[1] . '</span>
                              </li>
	    		';

	    	}

	    }else{

	    	$output .= '
	    					<li class="list-group-item" href="#">
                                <h2 class="text-center"><i class="fa fa-comment"></i> No Comments. </h2>
                              </li>
	    	';

	    }
	    $query1 = "SELECT id FROM comments WHERE ticket_id = ?";
	    $stmt1 = $db->prepare($query1);
	    $stmt1->execute(array($ticket_id));
	    $count1 = $stmt1->rowCount();
	    $data = array(
	    			'comments'			=>	$output,
	    			'no_of_comments'	=>	$count1
	    	);

	    echo json_encode($data);

	}

?>