<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="images/fb-art1.png">

   <title>Fortis Ticketing System</title>
   <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        -->
   <link rel="stylesheet" type="text/css" href="css/fonts1.css">
   <link rel="stylesheet" type="text/css" href="css/fonts2.css">
   <link rel="stylesheet" type="text/css" href="css/fonts3.css">

   <!-- Bootstrap core CSS -->
   <link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
   <link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
   <link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />

   <link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
   <link rel="stylesheet" type="text/css" href="js/jquery.easypiechart/jquery.easy-pie-chart.css" />
   <link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
   <link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
   <link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
   <link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
   <link rel="stylesheet" type="text/css" href="js/intro.js/introjs.css" />
   <link rel="stylesheet" href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" type="text/css" media="screen" />
   <link rel="stylesheet" type="text/css" href="js/jquery.magnific-popup/dist/magnific-popup.css" />
   <link rel="stylesheet" type="text/css" href="js/jquery.niftymodals/css/component.css" />
   <link rel="stylesheet" type="text/css" href="js/bootstrap.summernote/dist/summernote.css" />

   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
   <script src="sweetalert-master/dist/sweetalert.min.js"></script>

</head>

<body>

   <!-- Fixed navbar -->
   <?php include 'includes/topbar.php'; ?>

   <div id="cl-wrapper" class="fixed-menu">

      <?php include 'includes/sidebar.php'; ?>

      <div class="container-fluid" id="pcont">
         <div class="cl-mcont">
            <?php
               $tid = $_GET['tid'];
               $slct_tckt = "SELECT 
                              t.`id`,
                              c.`company_name`,
                              p.`project_name`,
                              t.subject,
                              t.description,
                              t.`date_created`,
                              CONCAT(u.fname,' ',u.lname) AS fullname,
                              s.`status_desc`,
                              u.avatar,
                              t.status,
                              se.`description` AS severity,
                              r.`description` AS resolution
                           FROM tickets AS t
                           JOIN projects AS p ON t.project_id=p.id
                           JOIN company_projects AS cp ON p.id=cp.project_id
                           JOIN companies AS c ON cp.company_id=c.id
                           JOIN users AS u ON t.`created_by`=u.id
                           JOIN status AS s ON t.`status`=s.`status_id`
                           LEFT JOIN severities AS se ON t.`severity_id`=se.`severity_id`
                           LEFT JOIN resolutions AS r ON t.`resolution`=r.`resolution_id`
                           WHERE t.id = ?";
               $tckt_res = $db->prepare($slct_tckt);
               $tckt_res->execute(array($tid));
               $ticket = $tckt_res->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default" style="border-color:#272930;">
                     <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                        Attachment/s</div>
                     <div class="panel-body">
                        <div class="col-md-12">
                           <!-- Carousel Slideshow -->
                           <div id="carousel-example" class="carousel slide">
                              <!-- Carousel Indicators -->
                              <div class="carousel-inner">
                                 <?php
                                    $y = 0;
                                    $sql_slider = "SELECT id,ticket_id,attachment FROM ticket_details WHERE ticket_id = ?";
                                    $result = $db->prepare($sql_slider);
                                    $result->execute(array($tid));
                                    while ($attachment = $result->fetch(PDO::FETCH_ASSOC)) {
                                       $y = $y + 1;
                                       if ($y == 1) {
                                 ?>
                                       <div class="item active">
                                          <img src="attachment/<?php echo $attachment['attachment']; ?>">
                                       </div>
                                 <?php } else { ?>
                                       <div class="item">
                                          <img src="attachment/<?php echo $attachment['attachment']; ?>">
                                       </div>
                                 <?php } ?>
                                 <?php
                                    }
                                 ?>
                              </div>
                              <!-- End Carousel Images -->
                              <?php
                                 $count = $result->rowCount();
                                 if ($count > 1) {
                              ?>
                                 <!-- Carousel Controls -->
                                 <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                 </a>
                                 <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                 </a>
                                 <!-- End Carousel Controls -->
                              <?php } ?>
                           </div>
                           <!-- End Carousel Slideshow -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div class="panel panel-default" style="border-color:#272930;">
                     <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                        <strong><i class="fa fa-ticket" style="padding-right:5px;padding-left:10px;"></i>Ticket</strong>
                     </div>
                     <div class="panel-body">
                        <div class="content">
                           <div class="col-md-6" style="padding-top:2%;padding-bottom:3%;">
                              <h5 style="margin-top:-4%;">
                                 <strong>Created by:</strong>
                                 &nbsp
                                 <img src="images/avatars/<?=$ticket['avatar']?>" width="8%" height="8%" style="border-radius:20px;">
                                 <?=$ticket['fullname']?>
                              </h5>
                              <hr style="border: 0.5px solid #949598;"><br>
                              <h4 style="margin-top:-4%;">
                                 <strong>Project :</strong>
                                 <?=$ticket['project_name']?>
                              </h4>
                              <hr style="border: 0.5px solid #949598;"><br>
                              <h4 style="margin-top:-4%;">
                                 <strong>Subject :</strong>
                                 <?=$ticket['subject']?>
                              </h4><br>
                              <h5 style="margin-top:-4%;">
                                 <strong>Descrption :</strong>
                                 <?=$ticket['description']?>
                              </h5>
                              <hr style="border: 0.5px solid #949598;"><br>
                           </div>
                           <div class="col-md-6">
                              <div class="content">
                                 <h4><strong>Watchers :</strong></h4>
                                 <hr style="border: 0.5px solid #949598;">
                                 <?php

                                 $query = "SELECT 
                                             u.id,
                                             CONCAT(u.fname,' ',u.lname) AS fullname,
                                             avatar
                                          FROM users AS u
                                          JOIN user_roles AS ur ON u.id=ur.user_id
                                          WHERE ur.role_id = 3";
                                 $stmt = $db->prepare($query);
                                 $stmt->execute();
                                 $count = $stmt->rowCount();
                                 if ($count > 0) {
                                    while ($watcher = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                 ?>
                                       <h5><img src="images/avatars/<?=$watcher['avatar']?>" style="height:30px;width:30px;"> <?=$watcher['fullname']?></h5>
                                 <?php
                                    }
                                 } else {
                                    echo '<h5>No watchers.';
                                 }

                                 ?>
                                 <hr style="border: 0.5px solid #949598;">
                                 <?php if ($ticket['status'] != 3 || $ticket['status'] != 7 || $ticket['status'] != 8): ?>
                                    <div class="alert alert-danger">
                                       <i class="fa fa-info-circle sign"></i><strong>Info!</strong> This ticket is closed.
                                    </div>
                                 <?php endif ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="panel panel-danger" style="border-color:#272930;">
                     <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                        Ticket Informations
                     </div>
                     <div class="panel-body">
                        <div class="content">
                           <div class="col-md-12" style="padding-top:6%;">
                              <h5 style="margin-top:-4%;">
                                 <strong>Date Created:</strong>
                                 &nbsp <?php echo $ticket['date_created']; ?>
                              </h5>
                              <hr style="border: 0.5px solid #949598;"><br>
                              <h5 style="margin-top:-4%;">
                                 <strong>Remaining Time:</strong>
                                 Not Set
                              </h5><br>
                              <h5 style="margin-top:-4%;">
                                 <strong>Status:</strong>
                                 &nbsp<label class="label label-default">
                                    <?=($ticket['status'] == "") ? "Not Set" : $ticket['status_desc']?>
                                 </label>
                              </h5><br>
                              <h5 style="margin-top:-4%;">
                                 <strong>Severity:</strong>
                                 &nbsp<label class="label label-warning">
                                    <?=($ticket['severity'] == "") ? "Not Set" : $ticket['severity']?>
                                 </label>
                              </h5><br>
                              <h5 style="margin-top:-4%;">
                                 <strong>Resolution:</strong>
                                 &nbsp <label class="label label-success">
                                    <?=($ticket['resolution'] == "") ? "Not Set" : $ticket['resolution']?>
                                 </label>
                              </h5><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-danger" style="border-color:#272930;">
                     <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;" id="comment_no">
                     </div>
                     <div class="panel-body">
                        <div class="col-md-12">
                           <input type="hidden" id="t_1" value="<?=$ticket["status"]?>">
                           <input type="hidden" id="t_2" value="<?=$ticket["severity"]?>">
                           <input type="hidden" id="t_3" value="<?=$ticket["resolution"]?>">
                           <div class="chat-wi">
                              <div class="chat-in" style="margin-top:10px;margin-bottom:10px;">
                                 <input id="tckt_id" class="hidden" name="tckt_id" value="<?=$tid?>">
                                 <input id="user_id" class="hidden" name="user_id" value="<?=$_SESSION['user']['id']?>">
                              </div>
                           </div>
                           <div class="content" id="content">
                              <div id="comments" class="list-group tickets">

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="js/functions.js"></script>

   <script src="js/jquery.js"></script>
   <script type="text/javascript" src="js/behaviour/general.js"></script>
   <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
   <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
   <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
   <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
   <script type="text/javascript" src="js/masonry.js"></script>
   <script type="text/javascript" src="js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>
   <script type="text/javascript" src="js/table.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {


         function load_unseen_notifications(view = '') {

            var user_id = $('#logged_id').val();

            $.ajax({
               url: "includes/fetch-notifications.php",
               method: "POST",
               data: {
                  user_id: user_id,
                  view: view
               },
               dataType: "json",
               success: function(data) {
                  $('#notifications').html(data.notifications);
                  if (data.count > 0) {
                     $('#count').html(data.count);
                     $('#count').show();
                  }
               }
            });

         }

         load_unseen_notifications();

         setInterval(function() {
            load_unseen_notifications();
         }, 5000);

         $('#notif-dropdown').on('click', function() {
            $('#count').hide();
            load_unseen_notifications('yes');
         });

         var tid = $("#tckt_id").val();

         function load_comments() {
            $.ajax({
               url: "includes/fetch-comments.php",
               method: "POST",
               data: {
                  tid: tid
               },
               dataType: "json",
               success: function(data) {

                  $("#comments").html(data.comments);
                  if (data.no_of_comments > 0) {
                     $("#comment_no").html(data.no_of_comments + ' Comment/s');
                  } else {
                     $("#comment_no").html('No Comments');
                  }

               }

            })
         }

         load_comments();

         setInterval(function() {
            load_comments();
         }, 2000);

         $('#close_ticket').on('click', function() {

            var ticket_id = $('#tckt_id').val();
            var status_id = $('#close_status').val();
            var resolution_id = $('#close_resolution').val();

            $.ajax({
               url: "includes/update-ticket.php",
               type: "POST",
               data: {
                  tid: ticket_id,
                  status_id: status_id,
                  resolution_id: resolution_id
               },
               success: function() {
                  location.reload();
               }
            });

         });

      });

      function set_tckt() {
         var stts = $("#t_1").val();
         var svrty = $("#t_2").val();

         $("#t_stts").val(stts);

         if (svrty == "") {
            $("#t_svrty").val(0);
         } else {
            $("#t_svrty").val(svrty);
         }
         $("#tckt_dtails").modal("show");
      }

      function updt_tckt_dtails() {

         var tid = $("#f_tid").val();
         var stts = $("#t_stts").val();
         var svrty = $("#t_svrty").val();

         $.ajax({
            url: "includes/update-ticket.php",
            type: "post",
            data: {
               tid: tid,
               stts: stts,
               svrty: svrty
            },
            success: function() {
               loaction.reload();
            }
         });
      }
   </script>


   <script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
   <script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
   <script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
   <script type="text/javascript" src="js/behaviour/general.js"></script>
   <script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
   <script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
   <script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
   <script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
   <script type="text/javascript" src="js/jquery.datatables/jquery.datatables.min.js"></script>
   <script type="text/javascript" src="js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>



   <!-- Bootstrap core JavaScript
  ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="js/behaviour/voice-commands.js"></script>
   <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
   <script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
   <script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
   <script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
</body>

</html>