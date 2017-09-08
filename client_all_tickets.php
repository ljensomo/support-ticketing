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

    </head>
    <body>

        <!-- Fixed navbar -->
        <?php include 'includes/portal_topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/client_sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                	                <?php 
	                            		$select_company = "SELECT id,company_name,company_tin_code,email_address FROM companies WHERE id = ?";
	                            		$stmt_comp = $db->prepare($select_company);
	                            		$stmt_comp->execute(array($row[4]));
	                            		$row_comp = $stmt_comp->fetch(PDO::FETCH_NUM);
	                            	?>

                    <h2><?php echo $row_comp[1]; ?> | <small><i style="padding-right:5px" class="fa fa-ticket"></i>Tickets</small></h2>
                    
                    </div>  
                <div class="cl-mcont">
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-flat">
                                <div class="header">                            
                                    <h3>All Tickets</h3>

                                </div>
                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="datatable" >
                                            <thead>
                                                <tr>
                                                    <th class="hidden">Ticket #</th>
                                                    <th>Issue</th>
                                                    <th>Project</th>
                                                    <th>Transaction ID</th>
                                                    <th>Date Created</th>
                                                    <th>Assignee</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $ticket_loader = "SELECT
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
																	e.status_desc
																	
																	FROM tickets AS a
																	JOIN ticket_progress AS b 
																	ON a.ticket_id=b.ticket_id
																	JOIN ticket_details AS c
																	ON a.ticket_id=c.ticket_id
																	JOIN projects AS d 
																	ON a.project=d.proj_id
																	JOIN status AS e
																	ON b.before_status=e.status_id ORDER BY a.ticket_id DESC";
                                                        
                                                $res_tickets = $db->prepare( $ticket_loader);
                                                 $res_tickets->execute(array($row[0]));
                                                while ($row_tickets =  $res_tickets->fetch(PDO::FETCH_NUM)) {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                    	<td class="hidden"><?php echo $row_tickets[0]; ?></td>
                                                    	<td><strong><?php echo $row_tickets[13]; ?></strong><br><small><?php echo substr($row_tickets[14],0,50); ?>..</small></td>
                                                        <td><?php echo $row_tickets[1]; ?></td>
                                                        <td><?php echo $row_tickets[2]; ?></td>
                                                        <td><?php echo $row_tickets[4]; ?></td>
                                                        <?php 
                                                        	$sel_user = "SELECT * FROM users WHERE user_id=?";
                                                        	$stmt_user = $db->prepare($sel_user);
                                                        	$stmt_user->execute(array($row_tickets[7]));
                                                        	$row_user=$stmt_user->fetch(PDO::FETCH_NUM);
                                                        
                                                        if ($row_user[0]>0){
                                                        ?>
                                                        <td><?php echo $row_user[1] . " " . $row_user[3] ?></td>
                                                        <?php 
														}else{
                                                        ?>
                                                        <td>Waiting for support...</td>
                                                        <?php } ?>
                                                        <td><center>
                                                        
                                                        <?php if ($row_tickets[5] == 1) { ?>
                                                            <label class="label label-default"><?php echo $row_tickets[17]; ?></label>
                                                        <?php } else if ($row_tickets[5] == 5) { ?>
                                                            <label class="label label-info"><?php echo $row_tickets[17]; ?></label>
                                                        <?php } else if ($row_tickets[5] == 3) { ?>
                                                            <label class="label label-success"><?php echo $row_tickets[17]; ?></label>
                                                        <?php } else if ($row_tickets[5] == 2) { ?>
                                                            <label class="label label-danger"><?php echo $row_tickets[17]; ?></label>
                                                        <?php } ?>
                                                        
                                                        </center></td>
                                                        <td><center><a class="btn btn-sm btn-info">View Details</a></center></td>
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
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 align="center"><i class="fa fa-plus-circle" style="padding-right:10px"></i>Severity Details</h3>
                                                </div>
                                                <div class="modal-body">
                                           <form method="POST" action="#" class="form-horizontal" style="border-radius: 0px; padding-left: 50px" parsley-validate novalidate>
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Name</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="name" name="name" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Description</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Description" id="description" name="description" type="text">
                            
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Transaction ID</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="transaction_id" name="transaction_id" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Date Created</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="date_created" name="date_created" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Assignee</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="assignee" name="assignee" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Status</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" placeholder="Name" id="status" name="status" type="text" onkeypress="return blockSpecialChar(event)" >                               
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="spacer text-center">
                                                                <button type="reset" class="btn btn-default btn-lg" style="width:20%"><i class="fa fa-ban" style="padding-right:10px"></i> Cancel</button>
                                                                 <button type="button" onclick="add_severity()" class="btn btn-danger btn-lg" style="width:20%"><i class="fa fa-plus" style="padding-right:10px"></i>Add</button>
                                                            </div>
                            
                                        </form>
                                                </div>

                                                <div class="modal-footer">
                                               


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

      
        <script src="js/jquery.js"></script>

          <script>
        
        
        $('.table tbody tr').on('click','.btn',function(){
            var currow = $(this).closest('tr');
            var col1 = currow.find('td:eq(0)').text();
            var col2 = currow.find('td:eq(1)').text();
            var col3 = currow.find('td:eq(2)').text();
            var col4 = currow.find('td:eq(3)').text();
            var col5 = currow.find('td:eq(4)').text();
            var col6 = currow.find('td:eq(5)').text();
            var col7 = currow.find('td:eq(6)').text();
            var result = col1+'\n'+col2+'\n'+col3+'\n'+col4+'\n'+col5+'\n'+col6+'\n'+col7;
            //alert(result);
            $('#modal1').modal('show');
            $('#name').val(col2);
            $('#description').val(col3);
            $('#transaction_id').val(col4);
            $('#date_created').val(col5);
            $('#assignee').val(col6);
            $('#status').val(col7);
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
