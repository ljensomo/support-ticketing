<?php

require_once 'connection.php';
include 'functions.php';


session_start();
$loggeduser = $_SESSION['admin'];

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
						a.uname,
						a.pass,
						d.user_desc,
						d.userlevel_id
					
						FROM users AS a JOIN users_roles AS c 
						ON a.user_id=c.user_id
						JOIN roles AS d 
						ON c.user_role=d.userlevel_id WHERE uname =  ?";

                        $res = $db->prepare($sql);
                        $res->execute(array($loggeduser));
                        $row = $res->fetch(PDO::FETCH_NUM);
                     



if (!isset($_SESSION['admin'])) {
    redirect_to('login.html');
}else if($row[11]!=4 && $row[11]!=5){
	redirect_to('login.html');
	
}


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

                        <span><?php echo $row[1] . " " . $row[3]; ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="users_messages.php">Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="includes/logout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>           


        </div>
    </div>
</div>