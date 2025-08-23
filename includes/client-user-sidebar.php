<?php include 'count_client_all_tickets.php'; ?>
<div class="page-aside email">
  <div class="fixed nano nscroller">
    <div class="content">
      <div class="header">
        <button class="navbar-toggle" data-target=".mail-nav" data-toggle="collapse" type="button">
          <span class="fa fa-chevron-down"></span>
        </button>          
        <h2 class="page-title"><?php echo $row_comp[1]; ?></h2>
        <hr style="margin-top:12px;margin-bottom:15px;border-color:#272930;" />
        <img src="images/state_online.png" alt="Status" />
        <span><strong><?php echo $row[1] . ' ' . $row[2] . ' ' . $row[3]; ?></strong></span>
      </div>        
      <div class="mail-nav collapse">
        <ul class="nav nav-pills nav-stacked ">
          <li><a href="client_open_tickets.php"><span class="label label-primary pull-right">6</span><i class="fa fa-inbox"></i> Open</a></li>
          <li><a href="client_pending_tickets.php"><i class="fa fa-envelope"></i> Pending / In Progress</a></li>
          <li><a href="#"><i class="fa fa-suitcase"></i> Closed</a></li>
          <li><a href="#"><span class="label label-default pull-right">3</span><i class="fa fa-file-o"></i> Suspended Tickets</a></li>
         
        </ul>
        
        <p class="title">Labels</p>
        <ul class="nav nav-pills nav-stacked ">
          <li><a href="#"><span class="label label1 pull-right">0</span> Inbox</a></li>
          <li><a href="#"><span class="label label2 pull-right">8</span>Sent Mail</a></li>
          <li><a href="#"><span class="label label3 pull-right">4</span>Important</a></li>
        </ul>
        <div class="compose">
          <a class="btn btn-flat btn-primary">Create Ticket</a>
        </div>
      </div>
    </div>
  </div>
</div>