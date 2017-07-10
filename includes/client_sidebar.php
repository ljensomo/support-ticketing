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
                    <li><a href="client_index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="#"><i class="fa fa-list"></i><span>New Ticket</span></a>
                    </li>
                    
                        <li><a href="users.php"><i class="fa fa-bug"></i><span>New Bug Report</span></a>
                    </li>
                    
                   
                    <li><a href="tickets.php"><i class="fa fa-list"></i><span>Tickets</span></a>
                        <ul class="sub-menu">
                        <li><a href="client_all_tickets.php"><i class="fa fa-list"></i>All</a></li>
                        <li><a href="client_new_tickets.php"><i class="fa fa-exclamation-circle"></i>New</a></li>
                        <li><a href="client_open_tickets.php"><i class="fa fa-mail-reply"></i>Open</a></li>
                        <li><a href="client_closed_tickets.php"><i class="fa fa-lock"></i>Closed</a></li>
                        <li><a href="client_pending_tickets.php"><i class="fa fa-mail-forward"></i>Pending</a></li>
                            
                        </ul>
                       </li>
                    
                       <li><a href="#"><i class="fa fa-bug"></i><span>Bugs</span></a>
                        <ul class="sub-menu">
                            <li><a href="client_all_bugs.php"><i class="fa fa-list"></i>All</a></li>
                            <li><a href="client_solved_bugs.php"><i class="fa fa-check"></i>Solved</a></li>
                           
                        </ul>
                        </li>

                        <li><a href="client_users.php"><i class="fa fa-users"></i><span>Users</span></a></li>
                        
                    
                        <li><a href="#"><i class="fa fa-gear nav-icon"></i><span>Account Settings</span></a></li>   
                    
                </ul>
            </div>
        </div>
        
    </div>
</div>