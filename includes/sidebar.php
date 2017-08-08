<?php include'count_unassigned_tickets.php'; ?>
<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="menu-space nano nscroller" style="height: 311px;">
            <div class="content">
                <div class="side-user">
                    <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                    <div class="info">
                        <a href="#"><?php echo $row[1] . " " . $row[3]; ?></a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                </div>
                <ul class="cl-vnavigation">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Support</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="label label-danger pull-right">New</span>Add Ticket</a></li>
                        </ul>
                    </li>
                    <?php if ($row[10] == "Administrator") { ?>
                        <li><a href="users.php"><i class="fa fa-user"></i><span>Users</span></a>
                         <li><a href="clients.php"><i class="fa fa-building-o"></i><span>Companies</span></a>
                         </li>
                    <?php } ?>
                   
                    <li><a href="tickets.php"><i class="fa fa-ticket"></i><span>Tickets</span></a>
                    	<ul class="sub-menu">
                    		
                    		
                    		
                    		<li><a href="tickets.php"><span class="label label-primary pull-right">6</span><i class="fa fa-inbox"></i>Open Tickets</a></li>
                    		<li><a href=""><i class="fa fa-envelope"></i>Closed Tickets</a></li>
							<li><a href=""><i class="fa fa-suitcase"></i>Assigned Tickets</a></li>
							<li><a href=""><span class="label label-default pull-right">3</span><i class="fa fa-file-o"></i>Pending Tickets</a></li>					
                    	</ul>
                    </li>
                       
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