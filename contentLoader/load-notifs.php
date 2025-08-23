<?php 
  session_start();
  $user_id = $_SESSION['user_id'];
  require_once('../includes/connection.php');

  $query = "SELECT COUNT(id) FROM notifications WHERE isviewed = 0 AND notif_to = ?";
  $stmt = $db->prepare($query);
  $stmt->execute(array($user_id));
  $notifcount = $stmt->fetch(PDO::FETCH_NUM);

?>
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="bubble"><?php echo $notifcount[0]; ?></span></a>
        <ul class="dropdown-menu">
          <li>
            <div class="nano nscroller">
              <div class="content">
                <ul>
                <?php 
                      $query2 = "SELECT 
                                  id,
                                  activity,
                                  activity_id,
                                  notif_table,
                                  isviewed,
                                  notif_to,
                                  DATE_FORMAT(date_created,'%M %d, %Y %H:%s') 
                                  FROM notifications
                                  WHERE notif_to = ?
                                  AND isviewed = 0";
                      $stmt2 = $db->prepare($query2);
                      $stmt2->execute(array($user_id));
                      while ( $notifications = $stmt2->fetch(PDO::FETCH_NUM)) {
                ?>
                  <li><a href="#?<?php echo $notifications[0]; ?>"><i class="fa fa-cloud-upload info"></i><?php echo $notifications[1]; ?><span class="date"><?php echo $notifications[6]; ?></span></a></li>
                <?php 
                      }
                 ?>
                </ul>
              </div>
            </div>
            <ul class="foot"><li><a href="#">View all activity </a></li></ul>           
          </li>
        </ul>
