<div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs." >
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="menu-space">
            <div class="content">
                <div class="side-user">
                    <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                    <div class="info">
                    <?php
                        $loggeduser = $_SESSION['admin'];
                        $sql = "SELECT * FROM users WHERE username = ?";
                        $res = $db->prepare($sql);
                        $res->execute(array($loggeduser));
                        $row = $res->fetch(PDO::FETCH_NUM);
                        ?>

                        <a href="#"><?php echo $row[3] . " " . $row[5]; ?></a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                    </div>
                </div>
                <ul class="cl-vnavigation">
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
                    <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Support</span></a>
                        <ul class="sub-menu">
                            <li><a href="createticket.php"><span class="label label-primary pull-right">New</span>Issue Ticket</a></li>
                        </ul>
                    </li>
                    <li><a href="users.php"><i class="fa fa-user"></i><span>Users</span></a>
                    </li>
                    <li><a href="admin_view_ticket.php"><i class="fa fa-list-alt"></i><span>View ticket</span></a></li>
                       <li><a href="#"><i class="fa fa-gear nav-icon"></i><span>Settings</span></a>
                        <ul class="sub-menu">
                            <li><a href="severity.php">Severity</a></li>
                            <li><a href="resolution.php">Resolution</a></li>
                            <li><a href="status.php">Status</a></li>
                        </ul>
                
                    <li><a href= "homebanner.php"><i class="fa fa-table"></i><span>About Us</span></a>
                    </li>              
                    <li><a href="#"><i class="fa fa-envelope nav-icon"></i><span>Email</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="label label-primary pull-right">New</span>Inbox</a></li>
                            <li><a href="#"><span class="label label-primary pull-right">New</span>Email Detail</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="text-right collapse-button" style="padding:7px 9px;">
            <input type="text" class="form-control search" placeholder="Search..." />
            <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
        </div>
    </div>
</div>