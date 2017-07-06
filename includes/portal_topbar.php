<?php
session_start();
$loggeduser = $_SESSION['admin'];

include 'functions.php';

if (!isset($_SESSION['admin'])) {
    redirect_to('login.html');
}

require_once 'connection.php';
?> 
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
            <a class="navbar-brand" href="#"><span>FORTIS</span></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="dropdown-submenu"><a href="#">Sub menu</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>              
            </ul>
            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar2.jpg" />

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
                        <span><?php echo $row[1] . " " . $row[3]; ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="representatives.php">Representatives</a></li>
                        <li><a href="#">Notifications</a></li>
			   <li class="divider"></li>
                        <li><a href="includes/logout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>           


        </div>
    </div>
</div>