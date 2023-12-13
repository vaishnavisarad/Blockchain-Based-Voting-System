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
  $sql = $obj->db->prepare("select * from  courses where ID='$id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row['course_name'];
			$course_image=$row['course_image'];
			$course_conent=$row['course_conent'];
			$course_duration=$row['course_duration'];
			$course_fees=$row['course_fees'];
			$dt=$row['dt'];
			?> 
                       
<section class="wrapper main-wrapper" style="">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Program Details</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="dashboard.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="Institutes.php">Program</a>
                                    </li>
                                    <li class="active">
                                        <strong>Program Details</strong>
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
                                        <div>
<img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:170px;">
                                        </div>
                                        <div class="uprofile-name">
                                            <h3>
   <?php echo $course_name; ?>
                                                <!-- Available statuses: online, idle, busy, away and offline -->
                                                <span class="uprofile-status online"></span>
                                            </h3>
                                            <p class="uprofile-title"><b>Duration: <?php echo $course_duration; ?></b></p>  <p class="uprofile-title"><b>Course ID: <?php echo $row['ID']; ?></b></p>
                                        </div>
                                        
                                   <?php	
  
   
  $obj= new Connections();
  $iddd=$row['college_id'];
  $sql1 = $obj->db->prepare("select * from college where ID='$iddd'");
		
		$sql1->execute();
		
			
		    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			$college_name=$row1['college_name'];
			$college_reg_no=$row1['college_reg_no'];
			$college_email=$row1['college_email'];
			
			$contact=$row1['contact'];
		
			?>      
                                        <div class="uprofile-info">
       <h5><b>Course Published by</b></h5>                                     <ul class="list-unstyled">
                                               
                                                <li><i class="fa fa-home"></i> <?php echo $college_name; ?></li>
                                                 <li><i class="fa fa-envelope"></i> <?php echo $college_reg_no; ?></li>
                                                  <li><i class="fa fa-envelope"></i> <?php echo $college_email; ?></li>
                                                   <li><i class="fa fa-phone"></i> <?php echo $contact; ?></li>
                                                   
                                            </ul>
                                        </div>                 
                                          <?php } ?>    
                                        <div class="uprofile-buttons">
                                           
                                        </div>

                                        <div class=" uprofile-social">
                                           
                                        </div> 

                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">

                                        <div class="uprofile-content">

                                            <div class="">       
                            
                                                                 
                                                     
                                
                              
                                
                                

                                        <div class="tile-progress bg-info">
                                            <div class="content">
           
                                           
                       <p align="justify">   <?php echo $course_conent; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?>  </b>            </p> 
       
 <form action="" method="post">      
 <input type="hidden" name="stud_id" value="<?php echo $_SESSION['sid']; ?>">  
 <input type="hidden" name="course_id" value="<?php echo $_GET['id']; ?>">  
     
       
                       
   <button type="submit" class="btn btn-primary">Apply for This Course</button>
   
   </form>                    
                                            </div>
                                        </div>

                                  
                              
                                
                                                       
                                            
                                                            
                                
                                                
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


<?php
include "Includes/connection.php";
if(isset($_POST['stud_id'])){
$stud_id=$_POST['stud_id'];
$course_id=$_POST['course_id'];
$sql1="select * from applied_courses where stud_id='$stud_id' AND course_id='$course_id'";
$query=mysql_query($sql1);
$count=mysql_num_rows($query);
if($count==0){
$sql="insert into applied_courses(`stud_id`,`course_id`) values('$stud_id','$course_id')";
$execute_query=mysql_query($sql);
if($execute_query){
echo "<script>alert('You Have Successfully Apply!!');window.location='course_details.php?id=$course_id';</script>";	
}else{
echo mysql_error();	
}
}else{
echo "<script>alert('You Have Already Apply!!');</script>";		
}


}
?>