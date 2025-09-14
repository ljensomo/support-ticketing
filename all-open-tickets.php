<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
       <link rel="shortcut icon" href="images/fb-art1.png">

        <title>All Open Tickets - Fortis Ticketing System</title>
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
          <script src="html5shiv.js"></script>
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
        <link href="sweetalert-master/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="sweetalert-master/dist/sweetalert.min.js"></script>

    </head>
    <body>

        <!-- Fixed navbar -->
        <?php include 'includes/topbar.php'; ?>

        <div class="fixed-menu" id="cl-wrapper">
		<?php include 'includes/sidebar.php'; ?>
		
	        <div class="container-fluid" id="pcont">
                <div class="cl-mcont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" style="border-color:#272930;">
                                <div class="panel-heading" style="border-color:#272930; color: white;background-color: #272930;">
                                    <i class="fa fa-ticket fa-2x" style="padding-right:10px"></i>
                                    All open tickets of Fortis Technologies Corp.
                                </div>
                                <div class="panel-body">
                                    <div class="content">
                                        <div class="table-responsive">
                                            <div id="resultas"></div>
                                            <table class="table table-bordered hover" id="datatable" >
                                                <thead>
                                                    <tr style="background-color:#5f5d5d;color:white;">
                                                        <th class="hidden"><strong>Ticket #</strong></th>
                                                        <th><strong>Company</strong></th>
                                                        <th><strong>Priority Level</strong></th>
                                                        <th><strong>Project</strong></th>
                                                        <th><strong>Issue</strong></th>
                                                        <th><strong>Date Created</strong></th>
                                                        <th><strong>Reporter</strong></th>
                                                        <th><strong>Status</strong></th>
                                                        <th><strong>Action</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $ticket_loader = "SELECT 
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
                                                                            r.`description` AS resolution,
                                                                            c.priority_level_id
                                                                        FROM tickets AS t
                                                                        JOIN projects AS p ON t.project_id=p.id
                                                                        JOIN company_projects AS cp ON p.id=cp.project_id
                                                                        JOIN companies AS c ON cp.company_id=c.id
                                                                        JOIN users AS u ON t.`created_by`=u.id
                                                                        JOIN status AS s ON t.`status`=s.`status_id`
                                                                        LEFT JOIN severities AS se ON t.`severity_id`=se.`severity_id`
                                                                        LEFT JOIN resolutions AS r ON t.`resolution`=r.`resolution_id`";
                                                        $res_tickets = $db->prepare( $ticket_loader);
                                                        $res_tickets->execute(array());
                                                        while ($ticket =  $res_tickets->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>

                                                        <tr class="odd gradeX">
                                                            <td class="hidden"><?php echo $ticket['id']; ?></td>
                                                            <td><strong><?=$ticket['company_name']?></strong></td>
                                                                <?php if( $ticket['priority_level_id'] == 1){
                                                                    echo '<td style="background-color:red;color:white;"><strong>High</strong></td>';
                                                                }else if ( $ticket['priority_level_id'] == 2){
                                                                    echo '<td style="background-color:orange;color:white;"><strong>Medium</strong></td>';
                                                                }else if ( $ticket['priority_level_id'] == 3){
                                                                    echo '<td style="background-color:gray;color:white;"><strong>Low</strong></td>';
                                                                } ?>
                                                            <td><?=$ticket['project_name']?></td>
                                                            <td><strong><?=$ticket['subject']?></strong><br><small><?=substr($ticket['description'],3,30); ?>...</small></td>
                                                            <td><?=$ticket['date_created']?></td>
                                                            <td><?=$ticket['fullname']?></td>
                                                            <td>
                                                                <label class="label label-default"><?=$ticket['status_desc']?></label>
                                                            </td>
                                                            <td>
                                                                <a href="view-ticket.php?tid=<?php echo $ticket['id']; ?>" class="btn btn-sm btn-primary">View Ticket</a>
                                                                <button class="btn btn-sm btn-default" type="button" onclick="show_modalassign(<?=$ticket['id']?>)">Assign Ticket</button>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>                            
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include_once('modals/ticket-modals.php'); ?>

		<script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script type="text/javascript">

            function show_modalassign(id){

                var ticket_id = id;
                $('#assignticket_id').val(ticket_id);
                $('#assign-ticket').modal('show');

            }

            $('#btn_assign').on('click',function(){

                var ticket_id = $('#assignticket_id').val();
                var support_id = $('#assign_ticket').val();
                var logged_user = $('#logged_id').val();
                var assign = 'yes';

                if ( support_id === '' ) {
                    swal('Ooops!', 'Please select a support to be assign.', 'info');
                } else {
                    $('#assign-ticket').modal('hide');
                    $('#loading').modal('show');
                    $.ajax({
                        url:'includes/reassign-ticket.php',
                        type:'post',
                        data:{
                            ticket_id:ticket_id,
                            support:support_id,
                            logged_user:logged_user,
                            assign:assign
                        },
                        complete:function(data){
                            $('#loading').modal('hide');
                            if(data.responseText.trim() === 'success'){
                                swal({title:'Message',text:'Ticket successfully assigned.',type:'success'},
                                        function(){
                                            location.reload();
                                        }
                                    );
                            }
                        }
                    });

                }

            });

        </script>

        <div id="loading" class="modal fade" role="dialog" tabindex="-1">
          <div class="modal-dialog colored-header danger">
            <div class="modal-content">
              <div class="modal-header" style="border-bottom: 1px solid #272930 !important;background-color: #272930;">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;
                </button>
                <h3>
                <i class="fa fa-spinner" style="padding-right: 10px"></i>Assigning Ticket</h3>
              </div>
              <div class="modal-body">
                <div id="">
                  <center><img src="images/loader.gif" style="width:50%;height:50%"/>
                    <p>Assigning ticket...</p>
                  </center>
              </div>
              </div>
            </div>
          </div>
        </div>

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


        <script type="text/javascript" src="js/table.js"></script>
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
