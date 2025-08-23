<?php  

	require_once("connection.php");

	 function time_ago($timestamp)  
	 {  
	      $time_ago = strtotime($timestamp);  
	      $current_time = time();  
	      $time_difference = $current_time - $time_ago;  
	      $seconds = $time_difference;  
	      $minutes      = round($seconds / 60 );           // value 60 is seconds  
	      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
	      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
	      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
	      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
	      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
	      if($seconds <= 60)  
	      {  
	     return "Just Now";  
	   }  
	      else if($minutes <=60)  
	      {  
	     if($minutes==1)  
	           {  
	       return "one minute ago";  
	     }  
	     else  
	           {  
	       return "$minutes minutes ago";  
	     }  
	   }  
	      else if($hours <=24)  
	      {  
	     if($hours==1)  
	           {  
	       return "an hour ago";  
	     }  
	           else  
	           {  
	       return "$hours hrs ago";  
	     }  
	   }  
	      else if($days <= 7)  
	      {  
	     if($days==1)  
	           {  
	       return "yesterday";  
	     }  
	           else  
	           {  
	       return "$days days ago";  
	     }  
	   }  
	      else if($weeks <= 4.3) //4.3 == 52/12  
	      {  
	     if($weeks==1)  
	           {  
	       return "a week ago";  
	     }  
	           else  
	           {  
	       return "$weeks weeks ago";  
	     }  
	   }  
	       else if($months <=12)  
	      {  
	     if($months==1)  
	           {  
	       return "a month ago";  
	     }  
	           else  
	           {  
	       return "$months months ago";  
	     }  
	   }  
	      else  
	      {  
	     if($years==1)  
	           {  
	       return "one year ago";  
	     }  
	           else  
	           {  
	       return "$years years ago";  
	     }  
	   }  
	 } 

	if (isset($_POST["user_id"])) {
		
		$user_id = $_POST["user_id"];

		if($_POST['view'] != ''){
			$update_query = "UPDATE notifications SET isviewed = ? WHERE notif_to = ? AND isviewed = 0";
			$stmt1 = $db->prepare($update_query);
			$stmt1->execute(array(1,$user_id));
		}

		$query = "SELECT 
                      id,
                      activity,
                      activity_id,
                      notif_table,
                      isviewed,
                      notif_to,
                      date_created
                  FROM notifications
                  WHERE notif_to = ?
                  ORDER BY id DESC";
		$stmt = $db->prepare($query);
		$stmt->execute(array($user_id));
		$count = $stmt->rowCount();
		$output = '';

		if($count > 0){

			while($row = $stmt->fetch(PDO::FETCH_NUM)){

				$output .= '

							<li><a href="' . $row[3] .'">
                                <i class="fa fa-cloud-upload info"></i>
                                  ' . $row[1] .'
                                <span class="date">' . time_ago($row[6]) . '</span>
                              </a>
                            </li>

				';

			}

		}else{

			$output .= '

						<li><a href="#">
                            <i class="fa fa-info info"></i>
                              No notifications.
                          </a>
                        </li>

			';

		}
		$query2 = "SELECT id FROM notifications WHERE isviewed = ? AND notif_to = ?";
		$stmt2 = $db->prepare($query2);
		$stmt2->execute(array(0,$user_id));
		$count2 = $stmt2->rowCount();

		$data = array(

					'notifications'		=>	$output,
					'count'				=>	$count2

			);

		echo json_encode($data);

	}
	
?>
