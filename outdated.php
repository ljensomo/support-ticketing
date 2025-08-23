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
                <!-- <div class="page-head">
                    <h2><i class="fa fa-ticket" style="padding-right:10px"></i>Ticket Details</h2>
                    <ol class="breadcrumb">
                      	<li class="active"><i class="fa fa-info" style="padding-right:5px"></i>Ticket Informations</li>
                    </ol>
                </div> -->
                


            <div class="cl-mcont">
              <?php 
                  	$tid = $_GET['tid'];

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
                <div class="col-md-8">
                  <div class="panel panel-default" style="border-color:#272930;">
                    <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;">
                      <a class="btn btn-sm btn-default" href="my-tickets.php" style="border-radius:6px;"><i class="fa fa-arrow-left"></i>Back</a>
                      <strong><i class="fa fa-ticket" style="padding-right:5px;padding-left:10px;"></i>TICKET</strong>
                      <span class="pull-right" style="margin-left:20%;"><strong>Watcher:</strong> &nbsp&nbsp watcher 2</span>
                      <span class="pull-right"><strong>Watcher:</strong> &nbsp&nbsp watcher 1</span>
                    </div>
                    <div class="panel-body">
                      <div class="content">
                        <div class="col-md-6" style="padding-top:2%;padding-bottom:3%;">
                                <h5 style="margin-top:-4%;">
                                  <strong>Created by:</strong>
                                    &nbsp 
                                    <?php if($tckt_row[22]==''){ ?>
                                    <img src="images/default_avatar.png" width="5%" height="5%">
                                    <?php }else{ ?>
                                    <img src="images/<?php echo $tckt_row[22]; ?>" width="5%" height="5%">
                                    <?php } ?>
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
                                <a class="btn btn-danger btn-flat" type="button">Close Ticket</a>
                                <a class="btn btn-default btn-flat" type="button" onclick="set_tckt()">Update Ticket</a>
                        </div>
                        <div class="col-md-6">
                          <a class="image-zoom" href="attachment/<?php echo $tckt_row[15]; ?>">
                            <center>
                              <img src="attachment/<?php echo $tckt_row[15]; ?>" class="img-thumbnail" style="height:400px;width:1100px;" />
                            </center>
                          </a>
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
                <div class="col-md-6">
                    <div class="panel panel-danger" style="border-color:#272930;">
                      <div class="panel-heading" style="border-color:#272930; color: white;background-color:#272930;" id="comment_no">
                        5 Comments
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12">
                          <input type="hidden" id="t_1" value="<?php echo $tckt_row[5]; ?>">
                          <input type="hidden" id="t_2" value="<?php echo $tckt_row[9]; ?>">
                          <input type="hidden" id="t_3" value="<?php echo $tckt_row[10]; ?>">
                            <?php if($tckt_row[5]!=1 && $tckt_row[5]!=3 && $tckt_row[5]!=7){ ?>
                          <div class="chat-wi">
                            <div class="chat-in">
                              <form action="" method="post" name="sd">
                                  <input type="button" value="SEND" onclick="add_cmmnt()" class="btn btn-info pull-right" style="height: 47px;width: 66px;">
                                <div class="input">
                                  <input id="tckt_id" class="hidden" name="tckt_id" value="<?php echo $tid; ?>">
                                  <input id="user_id" class="hidden" name="user_id" value="<?php echo $row[0]; ?>">
                                  <input type="text" placeholder="Write a comment..." name="msg" id="msg" style="border: 1px solid #a7a8a9">
                                </div>
                              </form>
                            </div>
                          </div>
                          <?php } ?>
                            <div class="content" id="content" style="overflow:scroll;height:250px;width:100%;">
                                <!-- Comment Section -->
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
  <script src="js/functions.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
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


    $(document).ready( function (){
      
      $('#content').load('contentLoader/load_comments.php?tid=<?php echo $tid; ?>&val=<?php echo $tckt_row[15]; ?>');
      refreshComments();
      
      $('#comment_no').load('contentLoader/load_comments_no.php?tid=<?php echo $tid; ?>');
      refreshCommentsNo();

    });

    function refreshComments(){

      setInterval( function(){
        $('#content').fadeIn('slow').load('contentLoader/load_comments.php?tid=<?php echo $tid; ?>&val=<?php echo $tckt_row[15]; ?>');
        refreshComments();

      }, 2000);
    }

    function refreshCommentsNo(){

      setTimeout( function(){
        $('#comment_no').fadeIn('slow').load('contentLoader/load_comments_no.php?tid=<?php echo $tid; ?>');
        refreshCommentsNo();

      }, 2000);
    }

    function set_tckt(){
       var stts = $("#t_1").val();
       var svrty = $("#t_2").val();
       var rsltn = $("#t_3").val();
       $("#t_stts").val(stts);
       if(svrty==""){
        $("#t_svrty").val(0);
       }else{
        $("#t_svrty").val(svrty);
       }
       if(rsltn==""){
       $("#t_rsltn").val(0);
       }else{
        $("#t_rsltn").val(rsltn);
       }
        $("#tckt_dtails").modal("show");
    }

    function updt_tckt_dtails(){

      var id = $("#f_tid").val();
      var stts = $("#t_stts").val();
      var svrty = $("#t_svrty").val();
      var rsltn = $("#t_rsltn").val();
        $.ajax({
          type:"post",
          url:"includes/set_ticket_process.php",
          data:{
            id:id,
            stts:stts,
            svrty:svrty,
            rsltn:rsltn
          },
          success:function(data){
            //alert(data);
            location.reload();
          }
        });
    }

  </script>

        <script type="text/javascript">
    $(document).ready(function(){
      //initialize the javascript
      //App.init();
      
      //Initialize Mansory
      var $container = $('.gallery-cont');
      // initialize
      $container.masonry({
        columnWidth: 0,
        itemSelector: '.item'
      });
      
      //Resizes gallery items on sidebar collapse
      $("#sidebar-collapse").click(function(){
          $container.masonry();      
      });
      
      //MagnificPopup for images zoom
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function 

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
          // openerElement is the element on which popup was initialized, in this case its <a> tag
          // you don't need to add "opener" option if this code matches your needs, it's defailt one.
          var parent = $(openerElement).parents("div.img");
          return parent;
        }
        }

      });
    });
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
