<?php
   session_start();

   if(!isset($_SESSION['user'])){
      header("Location: login.html");
   }

   include 'functions.php';
   require_once 'connection.php';
?>

<input type="hidden" id="logged_id" value="<?php echo $_SESSION['user']['id']; ?>">
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
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php if ($_SESSION['user']['avatar'] == "") { ?>
                     <img alt="Avatar" src="images/default_avatar.png" width="30px" />
                  <?php } else { ?>
                     <img alt="Avatar" src="images/avatars/<?php echo $_SESSION['user']['avatar']; ?>" width="30px" />
                  <?php } ?>
                  <span><?php echo $_SESSION['user']['full_name']; ?></span> <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="my-account.php">My Account</a></li>
                  <li><a href="all-notifications.php">Notifications</a></li>
                  <li class="divider"></li>
                  <li><a href="includes/logout.php">Sign Out</a></li>
               </ul>
            </li>
         </ul>
         <ul class="nav navbar-nav navbar-right not-nav">
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
                     <ul class="foot">
                        <li><a href="#">View all activity </a></li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
         <ul class="nav navbar-nav navbar-left not-nav">
            <h4><a href="index.php"><img src="images/pow5.png"></a><strong><a href="index.php" style="color: white;"> &nbsp ONLINE SUPPORT TICKETING SYSTEM</strong></a></h4>
         </ul>
      </div>
   </div>
</div>