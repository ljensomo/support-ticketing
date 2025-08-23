<?php 
    //include('count-tickets.php'); 
    include('count-all-tickets.php');
?>
<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="menu-space nano nscroller" style="height: 311px;">
            <div class="text-right collapse-button" style="padding: 7px 9px;">
              <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
            </div>
            <div class="content">
                <div class="side-user">
                    <div class="avatar">
                    <img src="images/avatars/<?php echo $row[12]; ?>" alt="Avatar" width="70px" height="70px" style="border-radius:50px;" />
                    </div>
                    <div class="info">
                        <a href="#"><?php echo $row[1] . " " . $row[3]; ?></a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                </div>
                <ul class="cl-vnavigation">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                        <?php if($row[11]==2){ ?>
                    <li><a href="new_ticket.php"><i class="fa fa-envelope nav-icon"></i><span>Add Ticket</span></a>
<!--                         <ul class="sub-menu">
                            <li><a href="new_ticket.php"><span class="label label-danger pull-right">New</span>Add Ticket</a></li>
                        </ul> -->
                    </li> 
                        <?php }else if($row[11] == 1){ ?>
                        <li><a href="#"><i class="fa fa-file"></i><span>All Tickets</span></a>
                            <ul class="sub-menu">
                                <li><a href="all-open-tickets.php">
                                    <span class="label label-warning pull-right"><?php echo $allopentickets[0]; ?></span><i class="fa fa-inbox"></i>Open Tickets</a>
                                </li>
                                <li><a href="all-inprogress-tickets.php">
                                    <span class="label label-warning pull-right"><?php echo $allinprogresstickets[0]; ?></span><i class="fa fa-spinner"></i>In Progress Tickets</a>
                                </li>
                                <li><a href="all-closed-tickets.php">
                                    <span class="label label-warning pull-right"><?php echo $allclosedtickets[0]; ?></span><i class="fa fa-lock"></i>Closed Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                    <li><a href="tickets.php"><i class="fa fa-ticket"></i><span>Your Tickets</span></a>
                        <ul class="sub-menu">
                            <li><a href="open-tickets.php">
                            <span class="label label-primary pull-right">New</span>
                            <i class="fa fa-inbox"></i>Open Tickets</a></li>
                            
                            <li><a href="my-tickets.php">
                                <!--<?php if($inprogresstickets[0] > 0){ ?>
                                    <span class="label label-info pull-right"></span>
                                <?php } ?>-->
                                    <i class="fa fa-spinner"></i>In Progress Tickets
                                </a>
                            </li>                   
                            <li><a href="closed-tickets.php">
                                    <!--<?php if($closedtickets[0] > 0){ ?>
                                        <span class="label label-default pull-right"></span>
                                    <?php } ?>-->
                                    <i class="fa fa-lock"></i>Closed Tickets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if ($row[11] == 1) { ?>
                        <li><a href="users.php"><i class="fa fa-user"></i><span>Users</span></a>
                         <li><a href="clients.php"><i class="fa fa-building-o"></i><span>Companies</span></a>
                         </li>
                       <li><a href="#"><i class="fa fa-gear nav-icon"></i><span>Settings</span></a>
                            <ul class="sub-menu">
                                <li><a href="severity.php"><i class="fa fa-exclamation-triangle" style="padding-right:10px"></i>Severity</a></li>
                                <li><a href="resolution.php"><i class="fa fa-clock-o" style="padding-right:10px"></i>Resolution</a></li>
                                <li><a href="status.php"><i class="fa fa-info-circle" style="padding-right:10px"></i>Status</a></li>
                                <li><a href="ticket_issue_type.php"><i class="fa fa-info" style="padding-right:10px"></i>Issue Type</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-folder"></i><span>Projects</span></a>
                            <ul class="sub-menu">
                                <li><a href="fortis_projects.php"><i class="fa fa-list" style="padding-right:10px"></i>All Projects</a></li>
                                <li><a href="your-projects.php"><i class="fa fa-user" style="padding-right:10px"></i>Your Projects</a></li>
                            </ul> 
                        </li>
                    	
                    <?php }else if($row[11] == 2){ ?>
                        <li><a href="your-projects.php"><i class="fa fa-folder"></i><span>Assigned Projects</span></a></li>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
        
    </div>
</div>