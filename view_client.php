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
        <script type="text/javascript" src="script/jquery-3.2.1.js"></script>
	 <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
	 <script src="sweetalert-master/dist/sweetalert.min.js"></script>

    </head>
    <body>

        <!-- Fixed navbar -->
        <?php include 'includes/topbar.php'; ?>

        <div id="cl-wrapper" class="fixed-menu">
            <?php include 'includes/sidebar.php'; ?>

            <div class="container-fluid" id="pcont">
                <div class="page-head">
                    <h2>Clients</h2>
                    <ol class="breadcrumb">
                        <li><a href="users.php">Client</a></li>
                        <li class="active">View Client</li>
                    </ol>
                </div>	
                <div class="cl-mcont">

                    
    <div class="block-flat">
                        <div class="head">
                            <?php
                                            if (isset($_GET['cid'])) {
                                                $id = $_GET['cid'];
                                            }else{
                                                $sqlSel = "SELECT MAX(id) FROM companies ";
                                                $resSel = $db->prepare($sqlSel);
                                                $resSel->execute();
                                                $rowSel = $resSel->fetch(PDO::FETCH_NUM);
                                                $id = $rowSel[0];
                                            }

                                            $sqlName = "SELECT * FROM companies WHERE id=?";
                                            $resName = $db->prepare($sqlName);
                                            $resName->execute(array($id));
                                            $rowName = $resName->fetch(PDO::FETCH_NUM);

                                            ?>
                            

                            <h3 class="container-fluid"><?php echo $rowName[1]; ?> Projects</h3>
                            <hr/>
                        </div>
                        <div class="content">
                            <table class="no-border">
                                <thead class="no-border">
                                    <tr>
                                        <th style="width:4s0%;">Company ID</th>
                                        <th>Project Description</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="no-border-y">
                                
                                            <?php                                            

                                            $sqlUser = "SELECT * FROM company_proj WHERE company_id=?";
                                            $resUser = $db->prepare($sqlUser);
                                            $resUser->execute(array($id));
                                                while ($row = $resUser->fetch(PDO::FETCH_ASSOC)) {                                                
                                            ?>
                                
                                    <tr>
                                        <td><?php echo $row['company_id']; ?></td>
                                        
                                        <td><strong><?php echo $row['project_desc']; ?></strong></td>
                                        
                                        <td class="center">
                                        
                                             <a class="btn btn-info btn-sm" href="#.php?id=<?php echo $row['ID']; ?>"><i class="fa fa-pencil">
                                            </i></a>
                                            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#assign-modal"><i class="fa fa-trash-o"></i></a>
                                        
                                        </td>
                                    </tr>
                                      <?php
                                            }
                                            ?>
                                </tbody>
                            </table>
                            
                                                                                    
                                                     
                                                </div>
                                            </div>
                                            <div class="block-flat">
                                                    <h3>Input Details</h3>
                            <form method="POST" action="" class="form-horizontal group-border-dashed" style="border-radius: 0px;">
                                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>"/>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Project Description</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" id="name" type="text">
                                            </div>
                                        </div>

                                        
                                         <div class="spacer text-center">
                                        <a href="clients.php" class="btn btn-default btn-md">Back</a>
                                        <button class="btn btn-info btn-md" type="button" onclick="savedata()">Add Project</button>
                                    </div>
                                    </form>                    
                                            </div>
                                        </div>
                                    </div>
                                </div>                      
                            </div>


            </div>
        </div>

        <script type="text/javascript">
       function savedata(){
          var id = $('#id').val();
          var name = $('#name').val();
          $.ajax({

            type:"POST",
            url:"includes/add_project_process.php",
            data: "id="+id+"&name="+name,
            complete : function(request){
            
            
            if(request.responseText.trim() === "success"){
                  swal({ title : "Saved!", text : "Saved Successfully!", type : "success"},
                  function(){
                                   location.reload();
                                   });
                                
           }else{
           		  swal({ title : "Ooops!", text : "Please input data!", type : "warning"});
				}      
			}               
                                
          })
       }

     </script>

        <script src="js/jquery.js"></script>
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
