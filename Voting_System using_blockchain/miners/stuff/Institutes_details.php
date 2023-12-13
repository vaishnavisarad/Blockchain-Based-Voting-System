<?php
include "Includes/session.php";
?>
<!DOCTYPE html>
<html class=" ">
<head>
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->


            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
                            <?php	
  
    include 'Application/DB_Functions.php';
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  college where ID='$id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$college_name=$row['college_name'];
			$college_reg_no=$row['college_reg_no'];
			$college_logo=$row['college_logo'];
			$college_email=$row['college_email'];
			$address=$row['address'];
			$city=$row['city'];
			$contact=$row['contact'];
			?> 
                       
<section class="wrapper main-wrapper" style="">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Institute Profile</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="dashboard.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="Institutes.php">Institute</a>
                                    </li>
                                    <li class="active">
                                        <strong>Institute Profile</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="uprofile-image">
                                              <img src="../images/institute/<?php echo $college_logo; ?>" style="width:100%;height:170px;">
                                        </div>
                                        <div class="uprofile-name">
                                            <h3>
   <a href="#"><?php echo $college_name; ?></a>
                                                <!-- Available statuses: online, idle, busy, away and offline -->
                                                <span class="uprofile-status online"></span>
                                            </h3>
                                            <p class="uprofile-title"><?php echo $college_reg_no; ?></p>
                                        </div>
                                        <div class="uprofile-info">
                                            <ul class="list-unstyled">
                                               
                                                <li><i class="fa fa-phone"></i> <?php echo $contact; ?></li>
                                                 <li><i class="fa fa-envelope"></i> <?php echo $college_email; ?></li>
                                                  <li><i class="fa fa-map-marker"></i> <?php echo $address; ?></li>
                                                   <li><i class="fa fa-map-marker"></i> <?php echo $city; ?></li>
                                                   
                                            </ul>
                                        </div>
                                        <div class="uprofile-buttons">
                                           
                                        </div>

                                        <div class=" uprofile-social">
                                           
                                        </div> 

                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">

                                        <div class="uprofile-content">

                                            <div class="">       
                            <?php	
  
   
  $obj= new Connections();
  $sql1 = $obj->db->prepare("select * from  courses where college_id='$id'");
		
		$sql1->execute();
		
			
		    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row1['course_name'];
			$course_image=$row1['course_image'];
			$course_conent=$row1['course_conent'];
			$course_duration=$row1['course_duration'];
			$course_fees=$row1['course_fees'];
			$dt=$row1['dt'];$ID=$row1['ID'];
			?> 
                                                                 
                                                     
       <a href="course_details.php?id=<?php echo $ID; ?>">
                                
                                 <div class="col-lg-3 col-md-4 col-xs-6 col-sm-4">

                                        <div class="tile-progress bg-info">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br><p style="text-align: center;">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?>  </b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                                                       
                                                       
                                          <?php } ?>          
                                                            
                                
                                                <div class="clearfix"></div>
                                               
                                                <div class="clearfix"></div>
                                               

                                                <div class="clearfix"></div>
                                                                                              <div class="clearfix"></div>
                                                <hr>
                                               
                                                <div class="clearfix"></div>
                                                <hr>
                                                <div class="clearfix"></div>
                                            </div>                

                                        </div>









                                    </div>
                                </div>
                            </div>
                        </section></div>


                </section>
                
                <?php } ?>
                                    
</div>


                </section>
            </section>
            <!-- END CONTENT -->
         


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 

        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

</html>


