
<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="menu-space nano nscroller" style="height: 311px;">
            <div class="content">
                <div class="side-user">
                    <div class="avatar"><img src="images/avatars/<?php echo $row[12]; ?>" alt="Avatar" style="border-radius:50px;height:60px;width:60px;" /></div>
                    <div class="info">
                        <a href="#"><?php echo $row[1] . " " . $row[3]; ?></a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                </div>
                <ul class="cl-vnavigation">
                    <li><a href="client-index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="client-create-ticket.php"><i class="fa fa-ticket"></i><span>New Ticket</span></a>
<!--                         <ul class="sub-menu">
                            <li><a href="client-create-ticket.php"><i class="fa fa-plus"></i>New Ticket</a></li>
                            <li><a href="client-create-ticket.php"><i class="fa fa-ticket"></i>Your Ticket/s</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#"><i class="fa fa-list"></i><span>Tickets</span></a>
                        <ul class="sub-menu">
                        <li><a href="client_all_tickets.php"><?php if($alltickets[0]>0){ ?>
                            <span class="label label-primary pull-right"><?php echo $alltickets[0]; ?></span>
                            <?php } ?><i class="fa fa-list"></i>All Tickets</a></li>

                        <li><a href="client_open_tickets.php"><?php if($allopentickets>0){ ?>
                            <span class="label label-warning pull-right"><?php echo $allopentickets[0]; ?></span>
                            <?php } ?><i class="fa fa-mail-reply"></i>Open Tickets</a></li>

                        <li><a href="client_pending_tickets.php"><?php if($allinprogresstickets[0]>0){ ?>
                            <span class="label label-info pull-right"><?php echo $allinprogresstickets[0]; ?></span>
                            <?php } ?><i class="fa fa-mail-forward"></i>Pending / In Progress</a></li> 
                            
                        <li><a href="client_closed_tickets.php"><?php if($allclosedtickets[0]>0){ ?>
                        <span class="label label-success pull-right"><?php echo $allclosedtickets[0]; ?>
                        </span><?php } ?><i class="fa fa-lock"></i>Closed</a></li>
                            
<!-- 						<li><a href="#">
                            <span class="label label-info pull-right"></span>
						       <i class="fa fa-warning"></i>Suspended Tickets</a>
                        </li>  --> 
                        </ul>
                       </li>
                        <?php if($row[11]==4){ ?>
						 <li><a href="projects.php"><i class="fa fa-folder"></i><span>Projects</span></a>
						 <li><a href="client_users.php"><i class="fa fa-users"></i><span>Users</span></a>
                    	<?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
</div>