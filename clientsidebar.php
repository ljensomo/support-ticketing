<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="menu-space nano nscroller" style="height: 311px;">
            <div class="content">
                <div class="side-user">
                    <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                    <div class="info">
                    <?php
                        $loggeduser = $_SESSION['admin'];
                        $sql = "SELECT 
						a.user_id,	
						a.fname,
						a.mname,
						a.lname,
						a.company_id,
						a.cnum,
						a.email,
						a.is_active,
						b.username,
						b.password,
						d.user_desc
						
						FROM users AS a INNER JOIN
						user_accounts AS b ON a.user_id=b.user_id
						JOIN users_roles AS c ON a.user_id=c.user_id
						JOIN roles AS d ON c.user_role=d.userlevel_id WHERE username = ?";

                        $res = $db->prepare($sql);
                        $res->execute(array($loggeduser));
                        $row = $res->fetch(PDO::FETCH_NUM);
                        ?>
                        <a href="#"><?php echo $row[1] . " " . $row[3]; ?></a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                </div>
                <ul class="cl-vnavigation">
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
                    <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>New</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="label label-danger pull-right">New</span>Add Ticket</a></li>
                        </ul>
                    </li>
                    <?php if ($row[10] == "Administrator") { ?>
                        <li><a href="users.php"><i class="fa fa-user"></i><span>Users</span></a>
                        <ul class="sub-menu">    
                            <li><a href="users.php">System Users</a></li>
                            <li><a href="clients.php">Clients</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                   
                    <li><a href="tickets.php"><i class="fa fa-ticket"></i><span>Tickets</span></a>
                       
                    <?php if ($row[10] == "Administrator") { ?>
                       <li><a href="#"><i class="fa fa-gear nav-icon"></i><span>Settings</span></a>
                        <ul class="sub-menu">
                            <li><a href="severity.php">Severity</a></li>
                       
                            <li><a href="resolution.php">Resolution</a></li>
                            <li><a href="status.php">Status</a></li>
                        </ul>
                        <li><a href="sla.php"><i class="fa fa-ticket"></i><span>SLA</span></a>
                        <li><a href="reports.php"><i class="fa fa-folder"></i><span>Reports</span></a>
                        <ul class="sub-menu">
                        <li><a href="reports.php">View Reports</a></li>
                            <li><a href="view_ratings.php">View Ratings of Employee</a></li>
                        </ul>
                    </li>
                    
                    <?php } ?>
                           
                    
                </ul>
            </div>
        </div>
        
    </div>
</div>