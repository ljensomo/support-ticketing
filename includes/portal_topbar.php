<?php
session_start();
$loggeduser = $_SESSION['admin'];

include 'functions.php';

if (!isset($_SESSION['admin'])) {
    redirect_to('login.html');
}

require_once 'connection.php';
?> 
<div id="head-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Fortis Ticketing System</span></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right user-nav">
            <li class="dropdown profile_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar2.jpg" />

                        <?php
                        $loggeduser = $_SESSION['admin'];
                        $sql = "SELECT * FROM user_info WHERE username = ?";
                        $res = $db->prepare($sql);
                        $res->execute(array($loggeduser));
                        $row = $res->fetch(PDO::FETCH_NUM);
                        ?>
                        <span><?php echo $row[1] . " " . $row[3]; ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="representatives.php">Representatives</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li class="divider"></li>
                        <li><a href="includes/logout.php"></i><span>Sign Out</span></a></li>
                    </ul>
                </li>
                
            </ul>			
        </div><!--/.nav-collapse animate-collapse -->
    </div>
</div>
</div>
