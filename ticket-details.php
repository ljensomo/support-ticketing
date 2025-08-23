<?php if(isset($_GET['tid'])){ ?>

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
        <link rel="stylesheet" href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" type="text/css" media="screen"/>
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

                  $query_validate = "SELECT 
                                        * 
                                      FROM tickets AS t
                                      JOIN ticket_progress AS tp
                                      ON t.ticket_id=tp.ticket_id
                                      WHERE t.ticket_id = ?
                                      AND tp.assignto_id = ?";
                  $stmt_validate = $db->prepare($query_validate);
                  $stmt_validate->execute(array($tid,$row[0]));
                  $count_validate = $stmt_validate->rowCount();

                  if($count_validate == 0){
                      openWindow($goto = "my-tickets.php");
                  }



                  	$slct_tckt = "SELECT
          					a.ticket_id,
          					d.proj_desc,
          					a.transaction_id,
          					a.reporter_id,
          					DATE_FORMAT(a.date_created,'%b. %d, 20%y %h:%i %p'),
          					b.before_status,
          					b.after_status,
          					b.assignto_id,
          					b.assign_from_id,
          					b.severity_id,
          					b.resolution_id,
          					b.date_resolved,
          					b.date_taken,
          					c.problem_subject,
          					c.problem_desc,
          					c.attachment,
          					c.issue_status,
          					e.status_desc,
          					f.company_id,
          					f.fname,
          					f.mname,
          					f.lname,
                    f.profile_pic
          					FROM tickets AS a
          					JOIN ticket_progress AS b 
          					ON a.ticket_id=b.ticket_id
          					JOIN ticket_details AS c
          					ON a.ticket_id=c.ticket_id
          					JOIN projects AS d 
          					ON a.project=d.proj_id
          					JOIN STATUS AS e
          					ON b.before_status=e.status_id 
          					JOIN users AS f
          					ON f.user_id=a.reporter_id
          					WHERE a.ticket_id=?";

          					$tckt_res = $db->prepare($slct_tckt);
          					$tckt_res->execute(array($tid));
          					$tckt_row = $tckt_res->fetch(PDO::FETCH_NUM);
            	?>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default" style="border-color:#272930;">
                    <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                      Attachment/s</div>
                    <div class="panel-body">
                      <div class="col-md-12">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="slide">
                            <!-- Carousel Indicators -->
                            <div class="carousel-inner">
                               <?php 

                                    $y = 0;

                                    $sql_slider = "SELECT id,ticket_id,attachment FROM ticket_details WHERE ticket_id = ?";
                                    $result = $db->prepare($sql_slider);
                                    $result->execute(array($tid));
                                    while($row_slider=$result->fetch(PDO::FETCH_NUM)){

                                      $y = $y + 1;

                                      if($y == 1){
                                ?>
                                <div class="item active">
                                    <img src="attachment/<?php echo $row_slider[2]; ?>">
                                </div>
                                <?php }else{ ?>
                                <div class="item">
                                    <img src="attachment/<?php echo $row_slider[2]; ?>">
                                </div> 
                                <?php }

                                } ?>                               
                            </div>
                            <!-- End Carousel Images -->
                            <?php 

                            $count = $result->rowCount();
                            if($count > 1){

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
                      <button class="btn btn-sm btn-success btn-flat btn-rad"><i class="fa fa-print"></i>Print to excel</button>
                    </div>
                    <div class="panel-body">
                      <div class="content">
                        <div class="col-md-6" style="padding-top:2%;padding-bottom:3%;">
                                <h5 style="margin-top:-4%;">
                                  <strong>Created by:</strong>
                                    &nbsp 
                                    <img src="images/avatars/<?php echo $tckt_row[22]; ?>" width="8%" height="8%" style="border-radius:20px;">
                                    <?php echo $tckt_row[19] ." ". $tckt_row[20] ." ". $tckt_row[21]; ?>
                                </h5><hr style="border: 0.5px solid #949598;"><br>
                                <h4 style="margin-top:-4%;">
                                  <strong>Project :</strong>
                                    <?php echo $tckt_row[1]; ?>
                                </h4><hr style="border: 0.5px solid #949598;"><br>
                                <h4 style="margin-top:-4%;">
                                    <strong>Subject :</strong>
                                    <?php echo $tckt_row[13]; ?>
                                </h4><br>
                                <h5 style="margin-top:-4%;">
                                  <strong>Descrption :</strong>
                                  <?php echo $tckt_row[14] ?>
                                </h5><hr style="border: 0.5px solid #949598;"><br>
                        </div>
                        <div class="col-md-6">
                          <div class="content">
                            <h4><strong>Watchers :</strong></h4>
                            <hr style="border: 0.5px solid #949598;">
                            <?php 

                              $query = "SELECT u.user_id,fname,mname,lname,profile_pic 
                                        FROM users AS u
                                        JOIN users_roles AS ur
                                        ON u.user_id=ur.user_id
                                        WHERE ur.user_role = 3";
                              $stmt = $db->prepare($query);
                              $stmt->execute();
                              $count = $stmt->rowCount();
                              if($count > 0 ){
                              while($watchers = $stmt->fetch(PDO::FETCH_NUM)){
                            ?>
                            <h5><img src="images/avatars/<?php echo $watchers[4]; ?>" style="height:30px;width:30px;"> <?php echo $watchers[1] . ' ' . $watchers[2] . ' ' . $watchers[3]; ?></h5>
                            <?php 
                                }
                              }else{
                                echo '<h5>No watchers.';
                              } 
                            ?>

                            <hr style="border: 0.5px solid #949598;">
                                <?php if ($tckt_row[10] != 0): ?>
                                    <div class="alert alert-danger">
                                      <i class="fa fa-info-circle sign"></i><strong>Info!</strong> This ticket is closed.
                                    </div>
                                <?php endif ?>
                                <button class="btn btn-danger btn-flat btn-rad" type="button" data-toggle="modal" data-target="#close-ticket-modal" <?php if($tckt_row[10] != 0){ echo 'disabled'; } ?>>Close Ticket</button>
                                <button class="btn btn-default btn-flat btn-rad" type="button" onclick="set_tckt()" <?php if($tckt_row[10] != 0){ echo 'disabled'; } ?>>Update Ticket</button>                            
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
<!--                            -->

                              <?php 
                                    $stts_loader = "SELECT * FROM status WHERE status_id = ?";
                                    $stts_res = $db->prepare($stts_loader);
                                    $stts_res->execute(array($tckt_row[5]));
                                    $stts_row = $stts_res->fetch(PDO::FETCH_NUM);
                                    
                                    $svrty_loader = "SELECT * FROM severity WHERE severity_id = ?";
                                    $svrty_res = $db->prepare($svrty_loader);
                                    $svrty_res->execute(array($tckt_row[9]));
                                    $svrty_row = $svrty_res->fetch(PDO::FETCH_NUM);
                                    
                                    $rsltion_loader = "SELECT * FROM resolution WHERE resolution_id = ?";
                                    $rsltion_res = $db->prepare($rsltion_loader);
                                    $rsltion_res->execute(array($tckt_row[10]));
                                    $rsltion_row = $rsltion_res->fetch(PDO::FETCH_NUM);
                              ?>

                              <div class="col-md-12" style="padding-top:6%;">
                                <h5 style="margin-top:-4%;">
                                    <strong>Date Created:</strong>
                                    &nbsp <?php echo $tckt_row[4]; ?>
                                </h5><hr style="border: 0.5px solid #949598;"><br>
                                <h5 style="margin-top:-4%;">
                                    <strong>Remaining Time:</strong>
                                    Not Set
                                </h5><br>
                                <h5 style="margin-top:-4%;">
                                    <strong>Status:</strong>
                                    &nbsp<label class="label label-default">
                                        <?php if($tckt_row[5]==""){
                                          echo "Not Set";
                                        }else{
                                          echo $stts_row[1];
                                        }
                                        ?>
                                    </label>
                                </h5><br>
                                <h5 style="margin-top:-4%;">
                                    <strong>Severity:</strong>
                                    &nbsp<label class="label label-warning">
                                        <?php if($tckt_row[9]=="" || $tckt_row[9] == 0){
                                          echo "Not Set";
                                        }else{
                                          echo $svrty_row[1];
                                        }
                                        ?>
                                    </label>
                                </h5><br>
                                <h5 style="margin-top:-4%;">
                                    <strong>Resolution:</strong>
                                    &nbsp <label class="label label-success">
                                        <?php if($tckt_row[10]=="" || $tckt_row[10] == 0){
                                          echo "Not Set";
                                        }else{
                                          echo $rsltion_row[1];
                                        }
                                        ?>
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
                      <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;" >
                        <i class="fa fa-comments" style="padding-right:5px;"></i><span id="comment_no"></span>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12">
                          <input type="hidden" id="t_1" value="<?php echo $tckt_row[5]; ?>">
                          <input type="hidden" id="t_2" value="<?php echo $tckt_row[9]; ?>">
                          <input type="hidden" id="t_3" value="<?php echo $tckt_row[10]; ?>">
                          <div class="chat-wi">
                            <div class="chat-in" style="margin-top:10px;margin-bottom:10px;">
                              <form action="" method="post" name="sd" id="comment_form">
                                  <input id="tckt_id" class="hidden" name="tckt_id" value="<?php echo $tid; ?>">
                                  <input id="user_id" class="hidden" name="user_id" value="<?php echo $row[0]; ?>">
                                  <input type="submit" value="SEND" class="btn btn-info pull-right" style="height: 47px;width: 66px;">
                                <div class="input">
                                  <input type="text" placeholder="Write a comment..." name="msg" id="msg" style="border: 1px solid #a7a8a9">
                                </div>                               
                              </form>
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
         
  <?php include_once 'modals/ticket-modals.php'; ?>

<div id="loading" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog colored-header danger">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
        </button>
        <h3>
        <i class="fa fa-plus-circle" style="padding-right: 10px"></i>Updating Ticket Status</h3>
      </div>
      <div class="modal-body">
        <div id="">
          <center><img src="images/loader.gif" style="width:50%;height:50%"/>
            <p>Updating ticket...</p>
          </center>
      </div>
      </div>
    </div>
  </div>
</div>


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

    $(document).ready(function(){


      function load_unseen_notifications(view = ''){

          var user_id = $('#logged_id').val();

          $.ajax({
                  url:"includes/fetch-notifications.php",
                  method:"POST",
                  data:{
                      user_id:user_id,
                      view:view
                  },
                  dataType:"json",
                  success:function(data){
                      $('#notifications').html(data.notifications);
                      if(data.count > 0){
                          $('#count').html(data.count);
                          $('#count').show();
                      }
                  }
          });

      }

      load_unseen_notifications();

      setInterval(function(){
          load_unseen_notifications();
      }, 5000);

      $('#notif-dropdown').on('click',function(){
          $('#count').hide();
          load_unseen_notifications('yes');
      });      

      var tid = $("#tckt_id").val();

      function load_comments(){
        $.ajax({
            url:"includes/fetch-comments.php",
            method:"POST",
            data:{tid:tid},
            dataType:"json",
            success:function(data){

                $("#comments").html(data.comments);
                if(data.no_of_comments > 0){
                    $("#comment_no").html(data.no_of_comments + ' Comment/s');
                }else{
                    $("#comment_no").html('No Comments');
                }

            }

        })
      }

      load_comments();

      setInterval(function(){
          load_comments();
      }, 2000);

      $('#close_ticket').on('click',function(){

          var ticket_id = $('#tckt_id').val();
          var status_id = $('#close_status').val();
          var resolution_id = $('#close_resolution').val();
          var support = $('#logged_id').val();
          $('#close-ticket-modal').modal('hide');
          $('#loading').modal('show');
          $.ajax({
              url:"includes/update-ticket.php",
              type:"POST",
              data:{
                tid:ticket_id,
                status_id:status_id,
                resolution_id:resolution_id,
                support:support
              },
              complete:function(data){
                  if(data.responseText.trim() === 'success'){
                      $('#loading').modal('hide');
                      swal({title:"Message!",text:"Ticket was closed!",type:"success"},
                          function(){
                            location.reload();
                          }
                        );
                  }
              }
          });

      });

      $('#comment_form').on('submit', function(event){
          event.preventDefault();

            var tckt_id = $('#tckt_id').val();
            var user_id = $('#user_id').val();
            var msg = $('#msg').val();
            var sender = 'support';
            if(msg==""){
              swal("Ooops!","Please add a comment!","info");
            }else{

              $.ajax({
                type:"POST",
                url:"includes/add_comment_process.php",
                data:{
                  tckt_id:tckt_id,
                  user_id:user_id,
                  msg:msg,
                  support:sender
                },
                success:function(data){
                  $('#msg').val('');
                  //$('#comments').append(data);
                      //$('#comments').load('client_ticket_details.php #comments');
                  //$('#comments').load(client_ticket_details.php + ' #comments');
                }
              }); // ajax end
            }

      });

    });

    function set_tckt(){
       var stts = $("#t_1").val();
       var svrty = $("#t_2").val();

       $("#t_stts").val(stts);

       if(svrty==""){
        $("#t_svrty").val(0);
       }else{
        $("#t_svrty").val(svrty);
       }
        $("#tckt_dtails").modal("show");
    }

    function updt_tckt_dtails(){

      var tid = $("#f_tid").val();
      var stts = $("#t_stts").val();
      var svrty = $("#t_svrty").val();
      var support = $('#logged_id').val();
      $("#tckt_dtails").modal("hide");
      $('#loading').modal('show');
        $.ajax({
              url:"includes/update-ticket.php",
              type:"post",
              data:{
                tid:tid,
                stts:stts,
                svrty:svrty,
                support:support
              },
              complete:function(data){
                 if(data.responseText.trim() === 'success'){
                    $('#loading').modal('hide');
                    swal("Message!","Ticket was updated!","success");
                 }else{
                    swal({title:'message',text:data.responseText.trim(),type:'info'},
                        function(){
                          location.reload();
                        }
                      );
                 }
              }
        });
    }

        // ADD COMMENT
    function add_cmmnt(){
      var tckt_id = $('#tckt_id').val();
      var user_id = $('#user_id').val();
      var msg = $('#msg').val();
      if(msg==""){
        swal("Ooops!","Please add a comment!","info");
      }else{
        $.ajax({
          type:"POST",
          url:"includes/add_comment_process.php",
          data:{
            tckt_id:tckt_id,
            user_id:user_id,
            msg:msg
          },
          success:function(data){
            $('#msg').val('');
            //$('#comments').append(data);
                //$('#comments').load('client_ticket_details.php #comments');
            //$('#comments').load(client_ticket_details.php + ' #comments');
          }
        }); // ajax end
      }
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
<?php }else{

    header('location: my-tickets.php');

} ?>