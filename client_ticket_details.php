<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="images/fb-art1.png" rel="shortcut icon">
<title>Fortis Ticketing System</title>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        -->
<link href="css/fonts1.css" rel="stylesheet" type="text/css">
<link href="css/fonts2.css" rel="stylesheet" type="text/css">
<link href="css/fonts3.css" rel="stylesheet" type="text/css">
<!-- Bootstrap core CSS -->
<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
<link href="fonts/font-awesome-4/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link href="js/jquery.gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.switch/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.select2/select2.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.slider/css/slider.css" rel="stylesheet" type="text/css" />
<link href="js/intro.js/introjs.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.vectormaps/jquery-jvectormap-1.2.2.css" media="screen" rel="stylesheet" type="text/css" />
<link href="js/jquery.magnific-popup/dist/magnific-popup.css" rel="stylesheet" type="text/css" />
<link href="js/jquery.niftymodals/css/component.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap.summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<link href="sweetalert-master/dist/sweetalert.css" rel="stylesheet" type="text/css">
<script src="sweetalert-master/dist/sweetalert.min.js"></script>
</head>

<body>

<!-- Fixed navbar --><?php include 'includes/portal_topbar.php'; ?>
<div id="cl-wrapper" class="fixed-menu">
	<?php include 'includes/client_sidebar.php'; ?>
	<div id="pcont" class="container-fluid">
		<div class="page-head">
			<h2><i class="fa fa-ticket" style="padding-right: 10px"></i>Ticket Details</h2>
			<ol class="breadcrumb">
				<li class="active">Ticket Informations</li>
			</ol>
		</div>
		<div class="cl-mcont">
		
		<?php
			$tckt_id = $_GET['tid'];
			if($row[11]==4){
			$sql_vldt = "SELECT 
						COUNT(a.ticket_id)
						FROM tickets AS a
						JOIN users AS b
						ON a.reporter_id=b.user_id
						WHERE a.ticket_id=? AND b.company_id=?";
			$res_vldt = $db->prepare($sql_vldt);
			$res_vldt->execute(array($tckt_id,$row[4]));
			$row_vldt = $res_vldt->fetch(PDO::FETCH_NUM);
			}else{
			$sql_vldt = "SELECT 
						COUNT(a.ticket_id)
						FROM tickets AS a
						JOIN users AS b
						ON a.reporter_id=b.user_id
						WHERE a.ticket_id=? AND b.company_id=? AND a.reporter_id=?";
			$res_vldt = $db->prepare($sql_vldt);
			$res_vldt->execute(array($tckt_id,$row[4],$row[0]));
			$row_vldt = $res_vldt->fetch(PDO::FETCH_NUM);
			}

			if($row_vldt[0]>0){
		?>
			<div class="block-flat">
				<div class="content">
					<?php 
					
						
						$tckt_dtails = "SELECT
						a.ticket_id,
						d.proj_desc,
						a.transaction_id,
						a.reporter_id,
						a.date_created,
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
						f.company_id
						
						FROM tickets AS a
						JOIN ticket_progress AS b 
						ON a.ticket_id=b.ticket_id
						JOIN ticket_details AS c
						ON a.ticket_id=c.ticket_id
						JOIN projects AS d 
						ON a.project=d.proj_id
						JOIN status AS e
						ON b.before_status=e.status_id 
						JOIN users AS f
						ON f.user_id=a.reporter_id
						WHERE b.ticket_id=?";
						$tckt_res = $db->prepare($tckt_dtails);
						$tckt_res->execute(array($tckt_id));
						$tckt_row = $tckt_res->fetch(PDO::FETCH_NUM);
					?>
					<p class="pull-right"><strong>Date Created : <?php echo $tckt_row[4]; ?>
					</strong></p>
					<br>
					<p><strong><i class="fa fa-folder"></i>&nbsp <?php echo $tckt_row[1]; ?>
					| <i class="fa fa-user"></i>&nbsp<small>Assignee: </small>
					<?php 
						$sql_assgnee = "SELECT user_id,fname,mname,lname FROM users WHERE user_id = ?";
						$assgnee_res = $db->prepare($sql_assgnee);
						$assgnee_res->execute(array($tckt_row[7]));
						$assgnee_row=$assgnee_res->fetch(PDO::FETCH_NUM);
						if($tckt_row[7]=="" || $tckt_row[7]==0){
								echo "Waiting for support...";
						}else{
							echo $assgnee_row[1]." ".$assgnee_row[2]." ".$assgnee_row[3];
						}
					?>
					</strong><br />
					<i class="fa fa-list"></i>&nbsp <?php
					 echo $tckt_row[13]; 
					 ?><br><?php
					 echo $tckt_row[14];
					 ?></p>
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
					<p><strong>Status :
					   <label class="label label-warning"><?php echo $stts_row[1]; ?></label>
					   | Severity : <?php if($tckt_row[9]!=""){ ?>
					   <label class="label label-warning"><?php echo $svrty_row[1]; ?></label>
					   <?php }else{ ?>
					   <label class="label label-default"><?php echo "None"; ?></label>
					   <?php } ?> 
					   | Resolution : 
					   <?php if($tckt_row[10]!=""){ ?>
					   <label class="label label-success"><?php echo $rsltion_row[1]; ?></label>
					   <?php }else{ ?>
					   <label class="label label-success"><?php echo "None"; ?></label>
					   <?php 
					   }
					   ?> </strong>
					<?php if($tckt_row[5]!=1){ ?>
					<!--<a class="btn btn-danger btn-flat pull-right">
					<i class="fa fa-lock"></i>Close Ticket</a>-->
					<?php } ?></p>
					<a class="image-zoom" href="attachment/<?php echo $tckt_row[15]; ?>">
					<center>
					<img class="img-thumbnail" src="attachment/<?php echo $tckt_row[15]; ?>" style="height: 400px; width: 1100px;" />
					</center></a></div>
				<br>
				<?php
					if($tckt_row[5]!=1){
				?>
				<div class="chat-wi">
					<div class="chat-in">
						<form action="" method="POST" name="sd">
							<input class="btn btn-info pull-right" onclick="add_cmmnt()" type="button" value="SEND" />
							<div class="input">
								<input id="tckt_id" class="hidden" name="tckt_id" value="<?php echo $tckt_id; ?>" />
								<input id="user_id" class="hidden" name="user_id" value="<?php echo $row[0]; ?>" />
								<input id="msg" name="msg" placeholder="Write a comment..." required="" type="text" />
							</div>
							<div class="chat-tools">
								<ul class="nav nav-pills">
									<li class="active">
									<i class="fa fa-location-arrow"></i></li>
									<li><i class="fa fa-camera"></i></li>
								</ul>
							</div>
						</form>
					</div>
				</div>
				<div class="header">
					<h3>Comments</h3>
				</div>
				<div class="content" id="content">

					
					<div class="text-center">
						<!--<a href="#">Load more comments...</a> --></div>
				</div>
				<?php
				}
				?>
			</div>
			<!-- invalid design -->
			<?php 
			}else{
			?>
			<div class="block-flat">
				<div class="header">
					<h3>Oooops!</h3>
					<hr>
				</div>
				<div class="alert alert-danger">
					<i class="fa fa-warning sign"></i><strong>Invalid!</strong> 
					Invalid access of ticket!</div>
				<a class="btn btn-md btn-info" href="client_index.php"><i class="fa fa-home"></i>Go to home</a>
				<a class="btn btn-md btn-default" href="client_all_tickets.php"><i class="fa fa-ticket"></i>Go to tickets</a>
			</div>
			<?php } 
			
			?>
		</div>
	</div>
</div>
<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>
<script src="js/behaviour/general.js" type="text/javascript"></script>
<script src="js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="js/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="js/masonry.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready( function (){
     $('#content').load('load_comments.php?tid=<?php echo $tckt_id; ?>');
      refresh();
    });

    function refresh(){

      setTimeout( function(){
        $('#content').fadeIn('slow').load('load_client_comments.php?tid=<?php echo $tckt_id; ?>');
        refresh();

      }, 2000);
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
<script type="text/javascript">
    $(document).ready(function(){
    
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function 
          opener: function(openerElement) {
            var parent = $(openerElement);
            return parent;
          }
        }
      });
      
      //Nifty Modals Init
      $('.md-trigger').modalEffects();
      
      //Summernote Editor
      $('#summernote').summernote({ 
        height: 100,
        toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]});
    });
  </script>
<script src="js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
<script src="js/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="js/jquery.easypiechart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/behaviour/general.js" type="text/javascript"></script>
<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="js/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="js/jquery.datatables/jquery.datatables.min.js" type="text/javascript"></script>
<script src="js/jquery.datatables/bootstrap-adapter/js/datatables.js" type="text/javascript"></script>
<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/behaviour/voice-commands.js"></script>
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/jquery.flot/jquery.flot.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="js/jquery.flot/jquery.flot.labels.js" type="text/javascript"></script>

</body>

</html>
