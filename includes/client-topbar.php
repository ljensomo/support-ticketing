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
						d.userlevel_id,
                        a.profile_pic
					
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
	redirect_to('404-page.php');
	
}
            $select_company = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE id = ?";
            $stmt_comp = $db->prepare($select_company);
            $stmt_comp->execute(array($row[4]));
            $row_comp = $stmt_comp->fetch(PDO::FETCH_NUM);

?> 

<?php require_once('count-tickets.php'); ?>

<input type="hidden" id="logged_id" value="<?php echo $row[0]; ?>">

<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatars/<?php echo $row[12]; ?>" width="30px" />
                        <span><?php echo $row[1] . " " . $row[3]; ?></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="client-account.php">My Account</a></li>
                        <li><a href="client-all-notifications.php">Notifications</a></li>
                        <li class="divider"></li>
                        <li><a href="includes/logout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right not-nav" >
              <li class="button dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" id="notif-dropdown"><i class="fa fa-globe"></i><span class="bubble" id="count" style="display:none;"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="nano nscroller">
                      <div class="content">
                        <ul id="notifications">
                        
                        </ul>
                      </div>
                    </div>
                    <ul class="foot"><li><a href="#">View all activity </a></li></ul>           
                  </li>
                </ul>
              </li>
            </ul> 
            <ul class="nav navbar-nav navbar-left not-nav">
                    <h4>
                            <img src="images/pow5.png">

                        <strong>
                            ONLINE SUPPORT TICKETING SYSTEM
                        </strong>
                    </h4>
            </ul>                      
        </div>
    </div>
</div>